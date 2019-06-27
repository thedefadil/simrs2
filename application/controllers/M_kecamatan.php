<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_kecamatan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_kecamatan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'm_kecamatan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'm_kecamatan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'm_kecamatan/index.html';
            $config['first_url'] = base_url() . 'm_kecamatan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_kecamatan_model->total_rows($q);
        $m_kecamatan = $this->M_kecamatan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'm_kecamatan_data' => $m_kecamatan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('m_kecamatan/m_kecamatan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->M_kecamatan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idkecamatan' => $row->idkecamatan,
		'idkota' => $row->idkota,
		'namakecamatan' => $row->namakecamatan,
	    );
            $this->load->view('m_kecamatan/m_kecamatan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_kecamatan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('m_kecamatan/create_action'),
	    'idkecamatan' => set_value('idkecamatan'),
	    'idkota' => set_value('idkota'),
	    'namakecamatan' => set_value('namakecamatan'),
	);
        $this->load->view('m_kecamatan/m_kecamatan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idkota' => $this->input->post('idkota',TRUE),
		'namakecamatan' => $this->input->post('namakecamatan',TRUE),
	    );

            $this->M_kecamatan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('m_kecamatan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_kecamatan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('m_kecamatan/update_action'),
		'idkecamatan' => set_value('idkecamatan', $row->idkecamatan),
		'idkota' => set_value('idkota', $row->idkota),
		'namakecamatan' => set_value('namakecamatan', $row->namakecamatan),
	    );
            $this->load->view('m_kecamatan/m_kecamatan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_kecamatan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idkecamatan', TRUE));
        } else {
            $data = array(
		'idkota' => $this->input->post('idkota',TRUE),
		'namakecamatan' => $this->input->post('namakecamatan',TRUE),
	    );

            $this->M_kecamatan_model->update($this->input->post('idkecamatan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('m_kecamatan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_kecamatan_model->get_by_id($id);

        if ($row) {
            $this->M_kecamatan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('m_kecamatan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_kecamatan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idkota', 'idkota', 'trim|required');
	$this->form_validation->set_rules('namakecamatan', 'namakecamatan', 'trim|required');

	$this->form_validation->set_rules('idkecamatan', 'idkecamatan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file M_kecamatan.php */
/* Location: ./application/controllers/M_kecamatan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-06-27 08:53:49 */
/* http://harviacode.com */