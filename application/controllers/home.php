<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->model('home_model');
	}
 	
	public function index() {
	
		$data_head['title'] = "Ropen";
		
 		$this->load->view('layouts/header', $data_head);
		$this->load->view('pages/index');
		$this->load->view('layouts/footer'); 
		
 	}
	
}