<?php

	function get_template($view,$data=''){
		$_this =& get_instance();
		if(empty($data)){
			$x['title']='Dashboard';
			return $_this->load->view($view,$x);
		}else{
			$x['title']=$data;
			return $_this->load->view($view,$x);
		}
	}
	
	function is_active_page_print($page,$class){
		$_this =& get_instance();
		if($page == $_this->uri->segment(1)){
			return $class;
		}
	}

?>