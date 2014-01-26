<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mortalidad_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	/* Getters & Setters */
	
	function getMortalidad($edad="",$imc=""){
		if(empty($edad) && empty($imc)){
			return $this->db->select("mortalidad.idAfeccion, afeccion.descripcion")
						->select("'' AS idImc", FALSE)
						->select("'' AS idEdad", FALSE)
						->select_sum("insidencias")
						->from('mortalidad')
						->join('afeccion', 'mortalidad.idAfeccion = afeccion.idAfeccion','inner')
						->group_by("idAfeccion")
						->order_by("insidencias", "DESC")
						->limit(10)
						->get();
		}else if(!empty($edad) && empty($imc)){
			return NULL;
		}else if(empty($edad) && !empty($imc)){
			return NULL;
		}else if(!empty($edad) && !empty($imc)){
			return NULL;
		}
		return NULL;
	}
	
}