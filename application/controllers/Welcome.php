<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	function __construct(){
    parent::__construct();
    $this->load->model('Profil_model');
    
    //validasi jika user belum login
    //if($this->session->userdata('masuk') != TRUE){
    //        $url=base_url('login');
    //        redirect($url);
     //   }
  }
  
	public function index()
	{
		$row = $this->Profil_model->get_by_id(1);
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
		$this->load->view('index', $data);
	}
}
