<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_carabayar extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_carabayar_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'm_carabayar/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'm_carabayar/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'm_carabayar/index.html';
            $config['first_url'] = base_url() . 'm_carabayar/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_carabayar_model->total_rows($q);
        $m_carabayar = $this->M_carabayar_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'm_carabayar_data' => $m_carabayar,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('m_carabayar/m_carabayar_list', $data);
    }

    public function read($id) 
    {
        $row = $this->M_carabayar_model->get_by_id($id);
        if ($row) {
            $data = array(
		'KODE' => $row->KODE,
		'NAMA' => $row->NAMA,
		'ORDERS' => $row->ORDERS,
		'JMKS' => $row->JMKS,
	    );
            $this->load->view('m_carabayar/m_carabayar_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_carabayar'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('m_carabayar/create_action'),
	    'KODE' => set_value('KODE'),
	    'NAMA' => set_value('NAMA'),
	    'ORDERS' => set_value('ORDERS'),
	    'JMKS' => set_value('JMKS'),
	);
        $this->load->view('m_carabayar/m_carabayar_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'NAMA' => $this->input->post('NAMA',TRUE),
		'ORDERS' => $this->input->post('ORDERS',TRUE),
		'JMKS' => $this->input->post('JMKS',TRUE),
	    );

            $this->M_carabayar_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('m_carabayar'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_carabayar_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('m_carabayar/update_action'),
		'KODE' => set_value('KODE', $row->KODE),
		'NAMA' => set_value('NAMA', $row->NAMA),
		'ORDERS' => set_value('ORDERS', $row->ORDERS),
		'JMKS' => set_value('JMKS', $row->JMKS),
	    );
            $this->load->view('m_carabayar/m_carabayar_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_carabayar'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('KODE', TRUE));
        } else {
            $data = array(
		'NAMA' => $this->input->post('NAMA',TRUE),
		'ORDERS' => $this->input->post('ORDERS',TRUE),
		'JMKS' => $this->input->post('JMKS',TRUE),
	    );

            $this->M_carabayar_model->update($this->input->post('KODE', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('m_carabayar'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_carabayar_model->get_by_id($id);

        if ($row) {
            $this->M_carabayar_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('m_carabayar'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_carabayar'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('NAMA', 'nama', 'trim|required');
	$this->form_validation->set_rules('ORDERS', 'orders', 'trim|required');
	$this->form_validation->set_rules('JMKS', 'jmks', 'trim|required');

	$this->form_validation->set_rules('KODE', 'KODE', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file M_carabayar.php */
/* Location: ./application/controllers/M_carabayar.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-06-27 08:50:42 */
/* http://harviacode.com */