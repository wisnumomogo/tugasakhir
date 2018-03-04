<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();	
		$this->load->helper('template_helper');
	}

	public function index(){
		$this->load->view('home/index');
	}
}
