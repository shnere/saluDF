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
			'api/pesoimc/parametros'		=> 'Valor de los parámetros de búsqueda via get',
			'api/mortalidad/'				=> 'Incidencias de mortalidad de enfermedades contra edad y IMC',
			'api/mortalidad/parametros'		=> 'Valor de los parámetros de búsqueda via get',
			'api/datoscuriosos/'				=> 'Descripción de URLs',
			'api/datoscuriosos/muertespromedio'	=> 'Muertes diarias promedio en Hospitales públicos',
			'api/datoscuriosos/delegacionincidencia'	=> 'DelegacionesConMasIncidencias',
			'api/datoscuriosos/afeccionesdias'	=> 'Promedio de días de un paciente por enfermedad',
			'api/datoscuriosos/trantornobipolar'=> 'Porcentaje por Genero que se presentan por Trastorno afectivo bipolar',
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
	
	function datoscuriosos($request = NULL){
		$response = array();
		$this->load->model("datoscuriosos_model");
		switch($request){
			case 'muertespromedio':
					$queryMuertesPromedio	= $this->datoscuriosos_model->getMuertesPromedio();
					if($queryMuertesPromedio->num_rows()){
						foreach($queryMuertesPromedio->result() as $rowMPromedio){
							$response['muertes-promedio'] = $rowMPromedio->mPromedio;
						}
					}else{
						$response['muertes-promedio'] = "0";
					}
				break;
			case 'delegacionincidencia':
					$response['delegaciones'] = array();
					$queryDelegaciones	= $this->datoscuriosos_model->getDelegacionesIncidencias();
					if($queryDelegaciones->num_rows()){
						foreach($queryDelegaciones->result() as $rowDelInc){
							$response['delegaciones'][] = array(
								$rowDelInc->delegacion => $rowDelInc->incidenciasTotales
							);
						}
					}
				break;
			case 'afeccionesdias':
					$response['afecciones'] = array();
					$query	= $this->datoscuriosos_model->getAfeccionesDias();
					if($query->num_rows()){
						foreach($query->result() as $row){
							$response['afecciones'][] = array(
									"idAfeccion" => $row->idAfeccion,
									"descripcion" => $row->descripcion,
									"promedioDiasEnfermedad" => $row->promedioDiasEnfermedad,
									"numeroDeIncidencias" => $row->numeroDeIncidencias
							);
						}
					}
				break;
			case 'trantornobipolar':
					$query	= $this->datoscuriosos_model->getTrantornoBipolar();
					if($query->num_rows()){
						foreach($query->result() as $row){
							$response['generoBipolar'] = $row->sexo;
						}
					}else{
						$response['generoBipolar'] = "Sin Datos";
					}
				break;
			default:
				$response['get-requests'] = array(
					'api/datoscuriosos/'				=> 'Descripción de URLs',
					'api/datoscuriosos/muertespromedio'	=> 'Muertes diarias promedio en Hospitales públicos',
					'api/datoscuriosos/delegacionincidencia'	=> 'DelegacionesConMasIncidencias',
					'api/datoscuriosos/afeccionesdias'	=> 'Promedio de días de un paciente por enfermedad',
					'api/datoscuriosos/trantornobipolar'=> 'Porcentaje por Genero que se presentan por Trastorno afectivo bipolar');
				break;
		}
		// Imprimo resultado
		$this->output
			->set_content_type('application/json')
			->set_output(json_encode($response));
	} 
	
	function mortalidad($request = NULL){
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
					$queryImc	= $this->dimensiones_model->getDimension('imc');
					if($queryImc->num_rows()){
						$response['get-requests']['imc'] = array();
						$response['get-requests']['imc']['nombre'] = "IMC";
						$response['get-requests']['imc']['parametros'] = array();
						foreach($queryImc->result() as $rowImc){
							$response['get-requests']['imc']['parametros'][] = array(
								$rowImc->idImc 	=> $rowImc->rango,
							);
						}
					}
				break;
			default:
					$idEdad		= (isset($_GET['edad']))?$_GET['edad']:"";
					$idImc		= (isset($_GET['imc']))?$_GET['imc']:"";
					$response['status'] 	= "OK";
					$this->load->model("mortalidad_model");
					$query	= $this->mortalidad_model->getMortalidad($idEdad, $idImc);
					if($query->num_rows()){
						$response['edad'] 	= $idEdad;
						$response['imc'] 	= $idImc;
						$response['rows'] = array();
						foreach($query->result() as $row){
							$response['rows'][$row->idAfeccion] = array(
								"idEdad"				=> $row->idEdad,
								"idImc"					=> $row->idImc,
								"descripcion"			=> $row->descripcion,
								"incidencias"			=> $row->insidencias
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