<div id="container">
	<main>
		<img src="<?php echo base_url().FOLDER_IMG; ?>corazondf.png" alt="" />
	</main>
	<div id="header-wrap">
		<a href="#" title="saluDF"></a>
	</div>
	<div id="iconos">
		<div class="icono"> <a href="javascript:void(0)" title="Delegaciones"> <img src="<?php echo base_url().FOLDER_IMG; ?>logo_delegaciones.png" alt="Delegaciones" class="boton active" module="delegaciones"> </a> </div>
		<div class="icono"> <a href="javascript:void(0)" title="Mortalidad"> <img src="<?php echo base_url().FOLDER_IMG; ?>logo_mortalidad.png" class="boton" alt="Mortalidad" module="mortalidad"> </a> </div>
		<div class="icono"> <a href="javascript:void(0)" title="Peso"> <img src="<?php echo base_url().FOLDER_IMG; ?>logo_peso.png" class="boton" alt="Peso" module="peso"> </a> </div>
		<div class="icono"> <a href="javascript:void(0)" title="Enfermedades"> <img src="<?php echo base_url().FOLDER_IMG; ?>logo_enfermedades.png" class="boton" alt="Enfermedades" module="enfermedades"> </a> </div>
		<div class="icono"> <a href="javascript:void(0)" title="Datos Curiosos"> <img src="<?php echo base_url().FOLDER_IMG; ?>logo_funfacts.png" class="boton" alt="Fun Facts" module="funfacts"> </a> </div>
	</div>
	<div class="clearfix"></div>
	<div id="content">
		<div id="delegaciones">
			<div class="filtros">
				<h2>Edad</h2>
				<input type="range" id="edad_delegaciones" name="edad_delegaciones" min="1" max="99" step="1">
				<output for="edad_delegaciones"></output>
				
				<h2>Género</h2>
				<div class="generos">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_mujer.png" class="boton active femenino" alt="Femenino">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_hombre.png" class="boton active masculino" alt="Masculino">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_ambosgeneros.png" class="boton active ambos" alt="Ambos Géneros">
				</div>
			</div>
			
			<div id="container-mapa">
				<img class="delegacion-mapa" src="<?php echo base_url().FOLDER_IMG; ?>mapa_delegaciones.png">
				<div class="puntito gustavo-madero"></div>
				<div class="puntito azcapotzalco"></div>
				<div class="puntito miguel-hidalgo"></div>
				<div class="puntito cuauhtemoc"></div>
				<div class="puntito venustiano-carranza"></div>
				<div class="puntito alvaro-obregon"></div>
				<div class="puntito benito-juarez"></div>
				<div class="puntito iztacalco"></div>
				<div class="puntito cuajimalpa"></div>
				<div class="puntito iztapalapa"></div>
				<div class="puntito magdalena"></div>
				<div class="puntito coyacan"></div>
				<div class="puntito tlahuac"></div>
				<div class="puntito xochimilco"></div>
				<div class="puntito milpa-alta"></div>
				<div class="puntito tlalpan"></div>

			</div>
			
			<div class="resultado">
				<h2>Tlahuac</h2>
				<h3 class="font-obesidad-morbida">Obesidad Morbida</h3>
				<p>&nbsp;</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
		</div>

		<!-- Mortalidad -->
		<div id="mortalidad">Mort</div>

		<!-- Peso -->
		<div id="peso">
			<div class="filtros">
				<h2>Edad</h2>
				<input type="range" id="edad_peso" name="edad_peso" min="1" max="99" step="1">
				<output for="edad_peso"></output>
				
				<h2>Género</h2>
				<div class="generos">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_mujer.png" class="boton femenino" data-query="2" alt="Femenino">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_hombre.png" class="boton masculino" data-query="3" alt="Masculino">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_ambosgeneros.png" class="boton active ambos" data-query="0" alt="Ambos Géneros">
				</div>
				
				<button id="filtro_peso" class="filtro aqua">Filtrar</button>
			</div>
			
			<div id="container-peso">
				<div id="doughnutChart" class="chart">
					<img src="<?php echo base_url().FOLDER_IMG; ?>bascula.png" class="" alt="Peso" module="peso">
				</div>
			</div>
			
			<div class="resultado">
				<div class="bajo-peso hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>peso_bajopeso.png" class="" alt="Normal">
					<h3 class="font-bajo-peso">Bajo Peso</h3>
					<p>&nbsp;</p>
					<h4>IMC menor a 18.5</h4>
					<p>-Peso debajo de un valor saludable</p>
					<p>-Posible desnutrición por mala alimentación</p>
					<p>-Es recomendable un diagnóstico médico para tratar la condición</p>
				</div>
				<div class="normal hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>peso_normal.png" class="" alt="Normal">
					<h3 class="font-normal">Peso Normal</h3>
					<p>&nbsp;</p>
					<h4>IMC entre 18.5 y 25</h4>
					<p>-Dieta balanceada que incluye todos los grupos alimenticios</p>
					<p>-Actividad física regular</p>
					<p>-Revisiones médicas habituales recomendadas</p>
				</div>
				<div class="sobrepeso hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>peso_sobrepeso.png" class="" alt="Normal">
					<h3 class="font-sobrepeso">Sobrepeso</h3>
					<p>&nbsp;</p>
					<h4>IMC entre 25 y 30</h4>
					<p>-Mala y excesiva alimentación, unida a falta de ejercicio</p>
					<p>-Considerado una epidemia a nivel mundial</p>
					<p>-Se recomienda practicar deporte y llevar una dieta saludable</p>
				</div>
				<div class="obesidad hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>peso_obesidad.png" class="" alt="Normal">
					<h3 class="font-obesidad">Obesidad</h3>
					<p>&nbsp;</p>
					<h4>IMC entre 30 y 40</h4>
					<p>-Perímetro abdominal mayor a 102cm en hombres y a 88cm en mujeres</p>
					<p>-Predispone a enfermedades cardiacas, diabetes y cáncer</p>
					<p>- Asistir con profesionales y establecer soluciones realistas para pérdida de peso</p>
				</div>
				<div class="obesidad-morbida hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>peso_obesidad_morbida.png" class="" alt="Normal">
					<h3 class="font-obesidad-morbida">Obesidad Mórbida</h3>
					<p>&nbsp;</p>
					<h4>IMC mayor a 40</h4>
					<p>-Consumo exagerado y excesivo de productos de alta densidad calórica</p>
					<p>-Disminución de tiempo devida, problemas de exclusión social y minusvalía</p>
					<p>-Recomendable recurril al doctor. Recibir apoyo familiar.</p>
				</div>
				
			</div>
			
		</div>
		
		<!-- Enfermedades -->
		<div id="enfermedades">Enfermedades</div>
		<!-- Datos Curiosos -->
		<div id="funfacts">Datos Curiosos</div>
	</div>
</div>
