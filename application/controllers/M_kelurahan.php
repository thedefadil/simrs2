<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_kelurahan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_kelurahan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'm_kelurahan/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'm_kelurahan/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'm_kelurahan/index.html';
            $config['first_url'] = base_url() . 'm_kelurahan/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_kelurahan_model->total_rows($q);
        $m_kelurahan = $this->M_kelurahan_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'm_kelurahan_data' => $m_kelurahan,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('m_kelurahan/m_kelurahan_list', $data);
    }

    public function read($id) 
    {
        $row = $this->M_kelurahan_model->get_by_id($id);
        if ($row) {
            $data = array(
		'idkelurahan' => $row->idkelurahan,
		'idkecamatan' => $row->idkecamatan,
		'namakelurahan' => $row->namakelurahan,
	    );
            $this->load->view('m_kelurahan/m_kelurahan_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_kelurahan'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('m_kelurahan/create_action'),
	    'idkelurahan' => set_value('idkelurahan'),
	    'idkecamatan' => set_value('idkecamatan'),
	    'namakelurahan' => set_value('namakelurahan'),
	);
        $this->load->view('m_kelurahan/m_kelurahan_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'idkecamatan' => $this->input->post('idkecamatan',TRUE),
		'namakelurahan' => $this->input->post('namakelurahan',TRUE),
	    );

            $this->M_kelurahan_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('m_kelurahan'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_kelurahan_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('m_kelurahan/update_action'),
		'idkelurahan' => set_value('idkelurahan', $row->idkelurahan),
		'idkecamatan' => set_value('idkecamatan', $row->idkecamatan),
		'namakelurahan' => set_value('namakelurahan', $row->namakelurahan),
	    );
            $this->load->view('m_kelurahan/m_kelurahan_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_kelurahan'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('idkelurahan', TRUE));
        } else {
            $data = array(
		'idkecamatan' => $this->input->post('idkecamatan',TRUE),
		'namakelurahan' => $this->input->post('namakelurahan',TRUE),
	    );

            $this->M_kelurahan_model->update($this->input->post('idkelurahan', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('m_kelurahan'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_kelurahan_model->get_by_id($id);

        if ($row) {
            $this->M_kelurahan_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('m_kelurahan'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_kelurahan'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('idkecamatan', 'idkecamatan', 'trim|required');
	$this->form_validation->set_rules('namakelurahan', 'namakelurahan', 'trim|required');

	$this->form_validation->set_rules('idkelurahan', 'idkelurahan', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file M_kelurahan.php */
/* Location: ./application/controllers/M_kelurahan.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-06-27 08:53:56 */
/* http://harviacode.com */