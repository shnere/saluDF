<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Datoscuriosos_model extends CI_Model {
	function __construct() {
		parent::__construct();
	}
	
	/* Getters & Setters */
	
	function getMuertesPromedio(){
			return $this->db->select("sum(insidencias)/730 AS mPromedio", FALSE)
						->from('mortalidad')
						->get();
	}
	
	function getDelegacionesIncidencias(){
			return $this->db->query("SELECT
		delegacion.idDelegacion,
		delegacion.delegacion,
		count(delegacion.idDelegacion) as incidenciasTotales
	FROM egresos_hospitalarios
		INNER JOIN clues_df	ON
		clues_df.Clave = clues
		INNER JOIN delegacion ON
		delegacion.delegacion = clues_df.TipoLocalidad
	GROUP BY delegacion.delegacion
	ORDER BY incidenciasTotales DESC");
	}
	
	function getAfeccionesDias($limit=10){
			return $this->db->query("SELECT
	afeccion.idAfeccion,
	afeccion.descripcion,
	clave_afec_principal,
	avg(dias_esta) as promedioDiasEnfermedad,
	count(dias_esta) as numeroDeIncidencias
FROM egresos_hospitalarios 
	INNER JOIN `afeccion`
		ON `afeccion`.`clave` = `clave_afec_principal`
GROUP BY afeccion.idAfeccion
ORDER BY promedioDiasEnfermedad DESC LIMIT $limit;");
	}
	
	function getTrantornoBipolar(){
			return $this->db->query("SELECT sexo, count(*) as contador from egresos_hospitalarios where clave_afec_principal = 'F312' ORDER BY contador DESC LIMIT 1");
	}
	
}