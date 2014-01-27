<?php if (! defined('BASEPATH')) exit('No direct script access');

class Home extends MY_Controller {

	//php 5 constructor
	function __construct() {
		parent::__construct();

	}

	function index() {
		// Configuration Information 
		
		//$this->output->enable_profiler(PROFILER);
		$data['SYS_metaTitle'] 			= 'saludCDMX';
		$data['SYS_metaKeyWords'] 		= '';
		$data['SYS_metaDescription'] 	= 'saludCDMX';
		$data['SYS_mainContent'] 		= 'home_v';
		$this->load->view('/includes/template', $data);
	
	}
	
	/****************************************************
	 *													*
	 *					   Methods	 					*
	 *													*
	 ***************************************************/
	
	
}
/* End of file home.php */ 
/* Location: /application/controllers/home.php */