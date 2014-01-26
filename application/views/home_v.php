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
				<input type="range" id="edad" name="edad" min="1" max="99" step="1">
				<output for="edad"></output>
				
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
				<input type="range" id="edad" name="edad" min="1" max="99" step="1">
				<output for="edad"></output>
				
				<h2>Género</h2>
				<div class="generos">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_mujer.png" class="boton active femenino" alt="Femenino">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_hombre.png" class="boton active masculino" alt="Masculino">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_ambosgeneros.png" class="boton active ambos" alt="Ambos Géneros">
				</div>
			</div>
			
			<div id="container-peso">
				<div id="doughnutChart" class="chart">
					<img src="<?php echo base_url().FOLDER_IMG; ?>bascula.png" class="" alt="Peso" module="peso">
				</div>
			</div>
			
			<div class="resultado">
				<img src="<?php echo base_url().FOLDER_IMG; ?>peso_normal.png" class="" alt="Normal">
				<h3 class="font-normal">Peso Normal</h3>
				<p>&nbsp;</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
			</div>
			
		</div>
		
		<!-- Enfermedades -->
		<div id="enfermedades">Enfermedades</div>
		
		<!-- Datos Curiosos -->
		<div id="funfacts">
			<div class="fun-container left top">
				<span class="font-fun-fact">Afecciones con <strong>mayor</strong> estancia dentro de un centro de salud.</span>
				<br><br>
				<img class="left" src="<?php echo base_url().FOLDER_IMG; ?>fun-facts-dias-en-cama.png" alt="Promedio días en cama por enfermedad">
			</div>
			<div class="fun-container right">
				<span class="font-fun-fact">Tlalpan es la delegación con <strong>mayor</strong> número de incidencias</span>
				<br><br>
				<img class="right" src="<?php echo base_url().FOLDER_IMG; ?>fun-facts-delegacion-incidencias.png" alt="Delegación con mayor numero de incidencias">	
			</div>
			<div class="fun-container left">
				<span class="font-fun-fact">En promedio mueren</span>
				<br>
				<img class="left" src="<?php echo base_url().FOLDER_IMG; ?>fun-facts-promedio-muertes.png" alt="Promedio de muertes en DF">	
				<br>
				<span class="font-fun-fact">personas al día en los <br> centros de salud del DF.</span>
			</div>
			<div class="fun-container right">
				<span class="font-fun-fact">Obtén toda esta información en tiempo <strong>real</strong></span>
				<br><br>
				<p>
					Si quieres tener acceso a información más <strong>detallada</strong> sobre <br>
					los datos presentados en esta plataforma puedes acceder a:
					<br><br>
					<a href="<?php echo base_url(); ?>api/" target="_blank"><?php echo base_url(); ?>api/</a>
					<br><br>
					Ahí podrás consultar toda la información de esta plataforma en tiempo real y con diferentes opciones de filtrado.
				</p>
			</div>
		</div>
	</div>
</div>
