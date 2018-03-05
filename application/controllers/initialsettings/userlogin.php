<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserLogin extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model(array('UserLoginModel','ProdiModel','DosenModel'));
		$this->load->helper('template_helper');
	}
 
	//default function untuk menampilkan form add user login
	public function index(){
		$data = array('userlogin'=> $this->UserLoginModel->getAllData());
		$this->load->view('initialsettings/listuserlogin',$data);
	}

	function viewAddUserLogin(){
		$data = array('prodi'=> $this->ProdiModel->getAllProdi());
		$this->load->view('initialsettings/createuserlogin',$data);
	}

	//function untuk menampilkan form edit user login
	function viewEditUserLogin($id){
		$data = array(
				'prodi'=> $this->ProdiModel->getAllProdi(),
				'dataEdit'=> $this->UserLoginModel->getDataById($id)
			);
		$this->load->view('initialsettings/edituserlogin',$data);
	}
	
	//function untuk proses hasil inputan form create user login
	function createUserLogin(){
		$post=$this->input->post(NULL,TRUE);
		$username = $this->input->post("username");
		// $password = $this->input->post("password");
		// $prodi = $this->input->post("prodi");
		// $assign = $this->input->post("assign");
		$cek = $this->UserLoginModel->isUsernameExist($username);
		// echo $cek;
		if($cek > 0){
			// echo "masuk sini 1";
			alert('Username already exist');
			echo "<script>window.history.back();</script>";
		}else{
			// echo "masuk sini 2";
			$this->UserLoginModel->create_user_admin($post);
			// redirect(site_url('initialsettings/userlogin'));
			$this->output
            ->set_content_type("application/json")
            ->set_output(json_encode(array('status'=>'success', 'redirect'=>site_url('initialsettings/userlogin') )));
		}
			
	}


	function selectAssign(){
		$post = $this->input->post(NULL,TRUE);
		$prodi = $post['prodi'];

		$arr = $this->DosenModel->getAllDosenByProdi($prodi);
		echo json_encode($arr);
	}
}
?>