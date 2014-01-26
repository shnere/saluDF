<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Afecciones_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	/* Getters & Setters */
	
	function getAfecciones($edad="",$genero=""){
		if(empty($edad) && empty($genero)){
			return $this->db->select("afecciones.idAfeccion, afeccion.descripcion")
						->select("'' AS idEdad", FALSE)
						->select("'' AS idGenero", FALSE)
						->select_sum("insidencias")
						->from('afecciones')
						->join('afeccion', 'afecciones.idAfeccion = afeccion.idAfeccion','inner')
						->group_by("afecciones.idAfeccion")
						->order_by("insidencias", "DESC")
						->limit(10)
						->get();
		}else if(!empty($edad) && empty($genero)){
			return $this->db->select("afecciones.idAfeccion, afeccion.descripcion")
						->select("idEdad", FALSE)
						->select("'' AS idGenero", FALSE)
						->select_sum("insidencias")
						->from('afecciones')
						->where('idEdad',$edad)
						->join('afeccion', 'afecciones.idAfeccion = afeccion.idAfeccion','inner')
						->group_by("afecciones.idAfeccion, idEdad")
						->order_by("insidencias", "DESC")
						->limit(10)
						->get();
		}else if(empty($edad) && !empty($genero)){
			return $this->db->select("afecciones.idAfeccion, afeccion.descripcion")
						->select("'' AS idEdad", FALSE)
						->select("idGenero", FALSE)
						->select_sum("insidencias")
						->from('afecciones')
						->where('idGenero',$genero)
						->join('afeccion', 'afecciones.idAfeccion = afeccion.idAfeccion','inner')
						->group_by("afecciones.idAfeccion, idGenero")
						->order_by("insidencias", "DESC")
						->limit(10)
						->get();
		}else if(!empty($edad) && !empty($genero)){
			return $this->db->select("afecciones.idAfeccion, afeccion.descripcion")
						->select("idEdad")
						->select("idGenero")
						->select_sum("insidencias")
						->from('afecciones')
						->where('idEdad',$edad)
						->where('idGenero',$genero)
						->join('afeccion', 'afecciones.idAfeccion = afeccion.idAfeccion','inner')
						->group_by("afecciones.idAfeccion, idGenero, idEdad")
						->order_by("insidencias", "DESC")
						->limit(10)
						->get();
		}
		return NULL;
	}
	
}