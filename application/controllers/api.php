<?php if (! defined('BASEPATH')) exit('No direct script access');

class Api extends MY_Controller {

	//php 5 constructor
	function __construct() {
		parent::__construct();
		$this->load->model("dimensiones_model");
	}

	function index() {
		$response = array();
		$response['get-requests'] = array(
			'api/delegacionimc/' 			=> 'Indice de masa corporal por delegación',
			'api/delegacionimc/parametros'	=> 'Valor de los parámetros de búsqueda via get'
		);
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	
	}
	
	/****************************************************
	 *													*
	 *					   Methods	 					*
	 *													*
	 ***************************************************/
	
	function delegacionimc($request = NULL){
		$response = array();
		switch($request){
			case 'parametros':
					$response['get-requests'] = array();
					$queryGenero	= $this->dimensiones_model->getDimension('genero');
					if($queryGenero->num_rows()){
						$response['get-requests']['genero'] = array();
						$response['get-requests']['genero']['nombre'] = "Genero";
						$response['get-requests']['genero']['parametros'] = array();
						foreach($queryGenero->result() as $rowGenero){
							$response['get-requests']['genero']['parametros'][] = array(
								$rowGenero->idGenero 	=> $rowGenero->genero,
							);
						}
					}
				break;
			default:
					$response['genero'] 	= (isset($_GET['genero']))?$_GET['genero']:"";
					$this->load->model("peso_model");
					$queryDelImc	= $this->peso_model->getDelegacionImc($response['genero']);
					if($queryDelImc->num_rows()){
						$response['rows'] = array();
						foreach($queryDelImc->result() as $rowDelImc){
							$response['rows'][] = array(
								"idDelegacion"			=> $rowDelImc->idDelegacion,
								"incidenciaBajoPeso"	=> $rowDelImc->incidenciaBajoPeso,
								"incidenciaNormal"		=> $rowDelImc->incidenciaNormal,
								"incidenciaSobrepeso"	=> $rowDelImc->incidenciaSobrepeso,
								"incidenciaObesidad"	=> $rowDelImc->incidenciaObesidad,
								"incidenciaMorbida"		=> $rowDelImc->incidenciaMorbida
							);
						}
					}
					
				break;
		}
		// Imprimo resultado
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	}
	
	function pesoimc($request = NULL){
		$response = array();
		switch($request){
			case 'parametros':
					$response['get-requests'] = array();
					$queryEdad		= $this->dimensiones_model->getDimension('edad');
					if($queryEdad->num_rows()){
						$response['get-requests']['edad'] = array();
						$response['get-requests']['edad']['nombre'] = "Edad";
						$response['get-requests']['edad']['parametros'] = array();
						foreach($queryEdad->result() as $rowEdad){
							$response['get-requests']['edad']['parametros'][] = array(
								$rowEdad->idEdad 	=> $rowEdad->edad,
							);
						}
					}
					$queryGenero	= $this->dimensiones_model->getDimension('genero');
					if($queryGenero->num_rows()){
						$response['get-requests']['genero'] = array();
						$response['get-requests']['genero']['nombre'] = "Genero";
						$response['get-requests']['genero']['parametros'] = array();
						foreach($queryGenero->result() as $rowGenero){
							$response['get-requests']['genero']['parametros'][] = array(
								$rowGenero->idGenero 	=> $rowGenero->genero,
							);
						}
					}
					$queryDelegacion= $this->dimensiones_model->getDimension('delegacion');
					if($queryDelegacion->num_rows()){
						$response['get-requests']['delegacion'] = array();
						$response['get-requests']['delegacion']['nombre'] = "Delegacion";
						$response['get-requests']['delegacion']['parametros'] = array();
						foreach($queryDelegacion->result() as $rowDel){
							$response['get-requests']['delegacion']['parametros'][] = array(
								$rowDel->idDelegacion 	=> $rowDel->delegacion,
							);
						}
					}
					
				break;
			default:
					$response['edad'] 		= (isset($_GET['edad']))?$_GET['edad']:"";
					$response['genero'] 	= (isset($_GET['genero']))?$_GET['genero']:"";
					$response['delegacion'] = (isset($_GET['delegacion']))?$_GET['delegacion']:"";
					$this->load->model("peso_model");
					$queryPeso	= $this->peso_model->getDelegacionImc($response['edad'], $response['genero'], $response['delegacion']);
					if($queryEdad->num_rows()){
						$response['get-requests']['edad'] = array();
						$response['get-requests']['edad']['nombre'] = "Edad";
						$response['get-requests']['edad']['parametros'] = array();
						foreach($queryEdad->result() as $rowEdad){
							$response['get-requests']['edad']['parametros'][] = array(
								$rowEdad->idEdad 	=> $rowEdad->edad,
							);
						}
					}
					
				break;
		}
		// Imprimo resultado
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	} 
	
}
/* End of file home.php */ 
/* Location: /application/controllers/home.php */