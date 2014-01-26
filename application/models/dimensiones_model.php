<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dimensiones_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	/* Getters & Setters */
	
	function getDimension($dimension){
		return $this->db->get($dimension);
		
	}
	
}