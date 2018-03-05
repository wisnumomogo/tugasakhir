<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PengajuanSkripsi extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model(array('UserLoginModel','ProdiModel','DosenModel'));
		$this->load->helper('template_helper');
	}
 
	//default function untuk menampilkan form add user login
	public function index(){
		$data = array('prodi'=> $this->DosenModel->getAllDosen());
		$this->load->view('pengajuan/formPengajuan',$data);
	}

	
}
?>