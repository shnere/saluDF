<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Peso_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	/* Getters & Setters */
	
	function getDelegacionImc($genero=""){
		if(empty($genero)){
			return $this->db->select("idDelegacion")
						->select("'' AS idGenero", FALSE)
						->select_sum("incidenciaBajoPeso")
						->select_sum("incidenciaNormal")
						->select_sum("incidenciaSobrepeso")
						->select_sum("incidenciaObesidad")
						->select_sum("incidenciaMorbida")
						->from('peso')
						->group_by("idDelegacion")
						->order_by("idDelegacion", "ASC")
						->get();
		}else{
			return $this->db->select("idDelegacion, idGenero")
						->select_sum("incidenciaBajoPeso")
						->select_sum("incidenciaNormal")
						->select_sum("incidenciaSobrepeso")
						->select_sum("incidenciaObesidad")
						->select_sum("incidenciaMorbida")
						->from('peso')
						->where('idGenero',$genero)
						->group_by("idDelegacion, idGenero")
						->order_by("idDelegacion", "ASC")
						->get();
		}
	}
	
	function getPesoimc($edad="",$genero=""){
		if(empty($edad) && empty($genero)){
			return $this->db->select("'' AS idEdad", FALSE)
						->select("'' AS idGenero", FALSE)
						->select_sum("incidenciaBajoPeso")
						->select_sum("incidenciaNormal")
						->select_sum("incidenciaSobrepeso")
						->select_sum("incidenciaObesidad")
						->select_sum("incidenciaMorbida")
						->from('peso')
						->get();
		}else if(!empty($edad) && empty($genero)){
			return $this->db->select("idEdad")
						->select("'' AS idGenero", FALSE)
						->select_sum("incidenciaBajoPeso")
						->select_sum("incidenciaNormal")
						->select_sum("incidenciaSobrepeso")
						->select_sum("incidenciaObesidad")
						->select_sum("incidenciaMorbida")
						->from('peso')
						->where('idEdad',$edad)
						->group_by("idEdad")
						->order_by("idEdad", "ASC")
						->get();
		}else if(empty($edad) && !empty($genero)){
			return $this->db->select("'' AS idEdad", FALSE)
						->select("idGenero")
						->select_sum("incidenciaBajoPeso")
						->select_sum("incidenciaNormal")
						->select_sum("incidenciaSobrepeso")
						->select_sum("incidenciaObesidad")
						->select_sum("incidenciaMorbida")
						->from('peso')
						->where('idGenero',$genero)
						->group_by("idGenero")
						->order_by("idGenero", "ASC")
						->get();
		}else if(!empty($edad) && !empty($genero)){
			return $this->db->select("idEdad")
						->select("idGenero")
						->select_sum("incidenciaBajoPeso")
						->select_sum("incidenciaNormal")
						->select_sum("incidenciaSobrepeso")
						->select_sum("incidenciaObesidad")
						->select_sum("incidenciaMorbida")
						->from('peso')
						->where('idEdad',$edad)
						->where('idGenero',$genero)
						->group_by("idEdad, idGenero")
						->order_by("idEdad, idGenero", "ASC")
						->get();
		}
		return NULL;
	}
	
}