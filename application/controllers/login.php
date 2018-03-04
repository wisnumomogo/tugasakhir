<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('UserLoginModel');
	}
 
	public function index(){
		$this->load->view('signin/login');
	}

	//function untuk validasi login
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->UserLoginModel->cek_login($where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status_login'=>1
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(site_url("dashboard"));
 
		}else{
			echo "Username dan password salah !";
		}
	}
 
	//function untuk logout dan menghapus session, kemudian diarahkan ke form login
	function logout(){
		$this->session->sess_destroy();
		redirect(site_url('login'));
	}
}
?>