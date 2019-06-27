<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_dokter extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_dokter_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'm_dokter/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'm_dokter/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'm_dokter/index.html';
            $config['first_url'] = base_url() . 'm_dokter/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->M_dokter_model->total_rows($q);
        $m_dokter = $this->M_dokter_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'm_dokter_data' => $m_dokter,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('m_dokter/m_dokter_list', $data);
    }

    public function read($id) 
    {
        $row = $this->M_dokter_model->get_by_id($id);
        if ($row) {
            $data = array(
		'KDDOKTER' => $row->KDDOKTER,
		'KDPOLY' => $row->KDPOLY,
		'NAMADOKTER' => $row->NAMADOKTER,
		'KDPROFESI' => $row->KDPROFESI,
		'NAMAPROFESI' => $row->NAMAPROFESI,
		'st_aktif' => $row->st_aktif,
	    );
            $this->load->view('m_dokter/m_dokter_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_dokter'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('m_dokter/create_action'),
	    'KDDOKTER' => set_value('KDDOKTER'),
	    'KDPOLY' => set_value('KDPOLY'),
	    'NAMADOKTER' => set_value('NAMADOKTER'),
	    'KDPROFESI' => set_value('KDPROFESI'),
	    'NAMAPROFESI' => set_value('NAMAPROFESI'),
	    'st_aktif' => set_value('st_aktif'),
	);
        $this->load->view('m_dokter/m_dokter_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'KDPOLY' => $this->input->post('KDPOLY',TRUE),
		'NAMADOKTER' => $this->input->post('NAMADOKTER',TRUE),
		'KDPROFESI' => $this->input->post('KDPROFESI',TRUE),
		'NAMAPROFESI' => $this->input->post('NAMAPROFESI',TRUE),
		'st_aktif' => $this->input->post('st_aktif',TRUE),
	    );

            $this->M_dokter_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('m_dokter'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->M_dokter_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('m_dokter/update_action'),
		'KDDOKTER' => set_value('KDDOKTER', $row->KDDOKTER),
		'KDPOLY' => set_value('KDPOLY', $row->KDPOLY),
		'NAMADOKTER' => set_value('NAMADOKTER', $row->NAMADOKTER),
		'KDPROFESI' => set_value('KDPROFESI', $row->KDPROFESI),
		'NAMAPROFESI' => set_value('NAMAPROFESI', $row->NAMAPROFESI),
		'st_aktif' => set_value('st_aktif', $row->st_aktif),
	    );
            $this->load->view('m_dokter/m_dokter_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_dokter'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('KDDOKTER', TRUE));
        } else {
            $data = array(
		'KDPOLY' => $this->input->post('KDPOLY',TRUE),
		'NAMADOKTER' => $this->input->post('NAMADOKTER',TRUE),
		'KDPROFESI' => $this->input->post('KDPROFESI',TRUE),
		'NAMAPROFESI' => $this->input->post('NAMAPROFESI',TRUE),
		'st_aktif' => $this->input->post('st_aktif',TRUE),
	    );

            $this->M_dokter_model->update($this->input->post('KDDOKTER', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('m_dokter'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->M_dokter_model->get_by_id($id);

        if ($row) {
            $this->M_dokter_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('m_dokter'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('m_dokter'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('KDPOLY', 'kdpoly', 'trim|required');
	$this->form_validation->set_rules('NAMADOKTER', 'namadokter', 'trim|required');
	$this->form_validation->set_rules('KDPROFESI', 'kdprofesi', 'trim|required');
	$this->form_validation->set_rules('NAMAPROFESI', 'namaprofesi', 'trim|required');
	$this->form_validation->set_rules('st_aktif', 'st aktif', 'trim|required');

	$this->form_validation->set_rules('KDDOKTER', 'KDDOKTER', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file M_dokter.php */
/* Location: ./application/controllers/M_dokter.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-06-27 08:46:29 */
/* http://harviacode.com */