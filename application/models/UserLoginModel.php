<?php 
 
class UserLoginModel extends CI_Model{	
	private $_table = 'user_login';

	public function cek_login($where){		
		return $this->db->get_where($this->_table,$where);
	}	

	//function untuk cek apakah username sudah pernah diinput sebelumnya
	public function isUsernameExist($username){
		$ret = false;
		$data = $this->db->get_where($this->_table,array('username'=>$username))->num_rows();
		if($data>0)
			$ret = true;
		else
			$ret = false;
			
		return $ret;
	}

	function getAllData(){
		$query = $this->db->query("SELECT a.id as ID, username,nama_prodi,nama_dosen assign_to
								   FROM ta_user_login a
								   LEFT JOIN ta_prodi b ON a.kode_prodi=b.kode_prodi
								   LEFT JOIN ta_dosen c ON a.assign_to=c.kode_dosen
								   WHERE a.kode_prodi <> 'UAI'");
		$result = array();
		$i=0;
		foreach ($query->result() as $row){
            $result[$i]['username'] = $row->username;
            $result[$i]['nama_prodi'] = $row->nama_prodi;
            $result[$i]['assign_to'] = $row->assign_to;
            $result[$i]['id'] = $row->ID;
            $i++;
		}
		
		return $result;
	}

	//function untuk tampilkan data edit
	public function getDataById($id){
		$query = $this->db->query("SELECT * FROM ta_user_login WHERE id=".$id);
		$result = array();
		$i=0;
		foreach ($query->result() as $row){
            $result[$i]['id'] = $row->id;
            $result[$i]['username'] = $row->username;
            $result[$i]['kode_prodi'] = $row->kode_prodi;
            $result[$i]['akses'] = $row->akses;
            $result[$i]['assign_to'] = $row->assign_to;
            $i++;
		}
		
		return $result;
	}

	//function untuk insert data ke database
	public function create_user_admin($post){
		$arr = array(
			'username'=>$post['username'],
			'password'=>md5($post['password']),
			'kode_prodi'=>$post['prodi'],
			'akses'=>1,
			'assign_to'=>$post['assign']
		);
		$data = $this->db->insert($this->_table, $arr);
	}

	//function untuk get all data user
}
?>