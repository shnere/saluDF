<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peso_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	/* Getters & Setters */
	
	function getDelegacionImc($genero=""){
		if(empty($genero)){
			return $this->db->select("idDelegacion")
						->select_sum("incidenciaBajoPeso")
						->select_sum("incidenciaNormal")
						->select_sum("incidenciaSobrepeso")
						->select_sum("incidenciaObesidad")
						->select_sum("incidenciaMorbida")
						->from('peso')
						->group_by("idDelegacion")
						->order_by("idDelegacion", "ASC")
						->get();
				echo $this->db->last_query();
		}else{
			return NULL;
		}
	}
	
}