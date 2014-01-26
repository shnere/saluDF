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
			'api/delegacionimc/' 			=> 'Incidencias de IMC por delegación contra genero',
			'api/delegacionimc/parametros'	=> 'Valor de los parámetros de búsqueda via get',
			'api/pesoimc/'					=> 'Incidencias acorde al de IMC contra edad y genero',
			'api/pesoimc/parametros'		=> 'Valor de los parámetros de búsqueda via get'
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
					$response['extras'] = array();
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
						$response['extras']['delegacion'] = array();
						$response['extras']['delegacion']['nombre'] = "Delegacion";
						$response['extras']['delegacion']['parametros'] = array();
						foreach($queryDelegacion->result() as $rowDel){
							$response['extras']['delegacion']['parametros'][] = array(
								$rowDel->idDelegacion 	=> $rowDel->delegacion,
							);
						}
					}
				break;
			default:
					$idGenero = (isset($_GET['genero']))?$_GET['genero']:"";
					$this->load->model("peso_model");
					$response['status'] 	= "OK";
					$queryDelImc	= $this->peso_model->getDelegacionImc($idGenero);
					if($queryDelImc->num_rows()){
						$response['genero'] 	= $idGenero;
						$response['rows'] = array();
						foreach($queryDelImc->result() as $rowDelImc){
							$response['rows'][] = array(
								"idDelegacion"			=> $rowDelImc->idDelegacion,
								"idGenero"				=> $rowDelImc->idGenero,
								"incidenciaBajoPeso"	=> $rowDelImc->incidenciaBajoPeso,
								"incidenciaNormal"		=> $rowDelImc->incidenciaNormal,
								"incidenciaSobrepeso"	=> $rowDelImc->incidenciaSobrepeso,
								"incidenciaObesidad"	=> $rowDelImc->incidenciaObesidad,
								"incidenciaMorbida"		=> $rowDelImc->incidenciaMorbida
							);
						}
					}else{
						$response['status'] 	= "ERROR";
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
				break;
			default:
					$idEdad		= (isset($_GET['edad']))?$_GET['edad']:"";
					$idGenero	= (isset($_GET['genero']))?$_GET['genero']:"";
					$response['status'] 	= "OK";
					$this->load->model("peso_model");
					$queryPeso	= $this->peso_model->getPesoimc($idEdad, $idGenero);
					if($queryPeso->num_rows()){
						$response['edad'] 		= $idEdad;
						$response['genero'] 	= $idGenero;
						$response['rows'] = array();
						foreach($queryPeso->result() as $rowPesoImc){
							$response['rows'][] = array(
								"idEdad"				=> $rowPesoImc->idEdad,
								"idGenero"				=> $rowPesoImc->idGenero,
								"incidenciaBajoPeso"	=> $rowPesoImc->incidenciaBajoPeso,
								"incidenciaNormal"		=> $rowPesoImc->incidenciaNormal,
								"incidenciaSobrepeso"	=> $rowPesoImc->incidenciaSobrepeso,
								"incidenciaObesidad"	=> $rowPesoImc->incidenciaObesidad,
								"incidenciaMorbida"		=> $rowPesoImc->incidenciaMorbida
							);
						}
					}else{
						$response['status'] 	= "ERROR";
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