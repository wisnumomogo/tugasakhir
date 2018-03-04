<?php 
 
class DosenModel extends CI_Model{	
	private $_table = 'dosen';

	function getAllDosenByProdi($prodi){
		$query = $this->db->query('SELECT kode_dosen,nama_dosen FROM ta_dosen ORDER BY kode_dosen');
		$result = array();
		$i=0;
        foreach ($query->result() as $row){
            $result[$i]['kode_dosen'] = $row->kode_dosen;
            $result[$i]['nama_dosen'] = $row->nama_dosen;
            $i++;
		}
		
		return $result;
	}
}
?>