<?php 
 
class UserLoginModel extends CI_Model{	
	private $_table = 'user_login';

	function cek_login($where){		
		return $this->db->get_where($this->_table,$where);
	}	

	//function untuk cek apakah username sudah pernah diinput sebelumnya
	function isUsernameExist($username){
		$ret = false;
		$data = $this->db->get_where($this->_table,array('username'=>$username))->num_rows();
		if($data>0)
			$ret = true;
		else
			$ret = false;
			
		return $ret;
	}

	function create_user($post){
		$arr = array(
			'username'=>$post['username'],
			'password'=>md5($post['password']),
			'kode_prodi'=>$post['prodi']
		);
		$data = $this->db->insert($this->_table, $arr);
	}
}
?>