<?php 
 
class ProdiModel extends CI_Model{	
	private $_table = 'prodi';

	function getAllProdi(){
		$query = $this->db->query('SELECT kode_prodi,nama_prodi FROM ta_prodi ORDER BY nama_prodi');
		$result = array();
		$i=0;
        foreach ($query->result() as $row){
			$result[$i]['kode_prodi'] = $row->kode_prodi;
			$result[$i]['nama_prodi'] = $row->nama_prodi;
			$i++;
		}
		
		return $result;
	}
}
?>