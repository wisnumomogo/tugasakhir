<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserLogin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model(array('UserLoginModel','ProdiModel'));
		$this->load->helper('template_helper');
	}
 
	//default function untuk menampilkan form add user login
	public function index(){
		$data = array('prodi'=> $this->ProdiModel->getAllProdi());
		$this->load->view('initialsettings/createuserlogin',$data);
	}

	//function untuk menampilkan form edit user login
	function viewEditUserLogin(){
		$this->load->view('initialsettings/edituserlogin');
	}
	
	//function untuk proses hasil inputan form create user login
	function createUserLogin(){
		$post = $this->input->post(NULL,TRUE);
		$cek = $this->UserLoginModel->isUsernameExist($post['username']);
		echo $cek;
		// if($cek){
		// 	echo "<script>"
		// 		+"alert('Username already exists');"
		// 		+"</script>";
		// 	// return;
		// }else{
		// 	create_user($post);
		// 	redirect(site_url('initialsettings/userlogin'));
		// }
			
	}
}
?>