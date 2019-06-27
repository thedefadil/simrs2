<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profil extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'profil/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'profil/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'profil/index.html';
            $config['first_url'] = base_url() . 'profil/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Profil_model->total_rows($q);
        $profil = $this->Profil_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'profil_data' => $profil,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('profil/profil_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Profil_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id' => $row->id,
		'rstitle' => $row->rstitle,
		'singrstitl' => $row->singrstitl,
		'singhead1' => $row->singhead1,
		'singsurat' => $row->singsurat,
		'header1' => $row->header1,
		'header2' => $row->header2,
		'header3' => $row->header3,
		'header4' => $row->header4,
		'kdrs' => $row->kdrs,
		'kelasrs' => $row->kelasrs,
		'namars' => $row->namars,
		'kdtarifnacbg' => $row->kdtarifnacbg,
		'version' => $row->version,
	    );
            $this->load->view('profil/profil_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('profil'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('profil/create_action'),
	    'id' => set_value('id'),
	    'rstitle' => set_value('rstitle'),
	    'singrstitl' => set_value('singrstitl'),
	    'singhead1' => set_value('singhead1'),
	    'singsurat' => set_value('singsurat'),
	    'header1' => set_value('header1'),
	    'header2' => set_value('header2'),
	    'header3' => set_value('header3'),
	    'header4' => set_value('header4'),
	    'kdrs' => set_value('kdrs'),
	    'kelasrs' => set_value('kelasrs'),
	    'namars' => set_value('namars'),
	    'kdtarifnacbg' => set_value('kdtarifnacbg'),
	    'version' => set_value('version'),
	);
        $this->load->view('profil/profil_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'rstitle' => $this->input->post('rstitle',TRUE),
		'singrstitl' => $this->input->post('singrstitl',TRUE),
		'singhead1' => $this->input->post('singhead1',TRUE),
		'singsurat' => $this->input->post('singsurat',TRUE),
		'header1' => $this->input->post('header1',TRUE),
		'header2' => $this->input->post('header2',TRUE),
		'header3' => $this->input->post('header3',TRUE),
		'header4' => $this->input->post('header4',TRUE),
		'kdrs' => $this->input->post('kdrs',TRUE),
		'kelasrs' => $this->input->post('kelasrs',TRUE),
		'namars' => $this->input->post('namars',TRUE),
		'kdtarifnacbg' => $this->input->post('kdtarifnacbg',TRUE),
		'version' => $this->input->post('version',TRUE),
	    );

            $this->Profil_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('profil'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Profil_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('profil/update_action'),
		'id' => set_value('id', $row->id),
		'rstitle' => set_value('rstitle', $row->rstitle),
		'singrstitl' => set_value('singrstitl', $row->singrstitl),
		'singhead1' => set_value('singhead1', $row->singhead1),
		'singsurat' => set_value('singsurat', $row->singsurat),
		'header1' => set_value('header1', $row->header1),
		'header2' => set_value('header2', $row->header2),
		'header3' => set_value('header3', $row->header3),
		'header4' => set_value('header4', $row->header4),
		'kdrs' => set_value('kdrs', $row->kdrs),
		'kelasrs' => set_value('kelasrs', $row->kelasrs),
		'namars' => set_value('namars', $row->namars),
		'kdtarifnacbg' => set_value('kdtarifnacbg', $row->kdtarifnacbg),
		'version' => set_value('version', $row->version),
	    );
            $this->load->view('profil/profil_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('profil'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id', TRUE));
        } else {
            $data = array(
		'rstitle' => $this->input->post('rstitle',TRUE),
		'singrstitl' => $this->input->post('singrstitl',TRUE),
		'singhead1' => $this->input->post('singhead1',TRUE),
		'singsurat' => $this->input->post('singsurat',TRUE),
		'header1' => $this->input->post('header1',TRUE),
		'header2' => $this->input->post('header2',TRUE),
		'header3' => $this->input->post('header3',TRUE),
		'header4' => $this->input->post('header4',TRUE),
		'kdrs' => $this->input->post('kdrs',TRUE),
		'kelasrs' => $this->input->post('kelasrs',TRUE),
		'namars' => $this->input->post('namars',TRUE),
		'kdtarifnacbg' => $this->input->post('kdtarifnacbg',TRUE),
		'version' => $this->input->post('version',TRUE),
	    );

            $this->Profil_model->update($this->input->post('id', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('profil'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Profil_model->get_by_id($id);

        if ($row) {
            $this->Profil_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('profil'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('profil'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('rstitle', 'rstitle', 'trim|required');
	$this->form_validation->set_rules('singrstitl', 'singrstitl', 'trim|required');
	$this->form_validation->set_rules('singhead1', 'singhead1', 'trim|required');
	$this->form_validation->set_rules('singsurat', 'singsurat', 'trim|required');
	$this->form_validation->set_rules('header1', 'header1', 'trim|required');
	$this->form_validation->set_rules('header2', 'header2', 'trim|required');
	$this->form_validation->set_rules('header3', 'header3', 'trim|required');
	$this->form_validation->set_rules('header4', 'header4', 'trim|required');
	$this->form_validation->set_rules('kdrs', 'kdrs', 'trim|required');
	$this->form_validation->set_rules('kelasrs', 'kelasrs', 'trim|required');
	$this->form_validation->set_rules('namars', 'namars', 'trim|required');
	$this->form_validation->set_rules('kdtarifnacbg', 'kdtarifnacbg', 'trim|required');
	$this->form_validation->set_rules('version', 'version', 'trim|required');

	$this->form_validation->set_rules('id', 'id', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

}

/* End of file Profil.php */
/* Location: ./application/controllers/Profil.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2019-06-27 05:13:12 */
/* http://harviacode.com */