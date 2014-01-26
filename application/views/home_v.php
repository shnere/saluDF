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
			<div class="logofull">
				<img src="<?php echo base_url().FOLDER_IMG; ?>logo_delegaciones_full.png" alt="Delegaciones">
			</div>
			<div class="filtros">
				<h2>Género</h2>
				<div class="generos">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_mujer.png" class="boton femenino" data-query="2" alt="Femenino">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_hombre.png" class="boton masculino" data-query="3" alt="Masculino">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_ambosgeneros.png" class="boton active ambos" data-query="0" alt="Ambos Géneros">
				</div>
				
				<button id="filtro_delegaciones" class="filtro aqua">Filtrar</button>
				<br>
				<img style="margin-top:200px;" src="<?php echo base_url().FOLDER_IMG; ?>mapa_informacion.png" alt="Delegaciones">
			</div>
			
			<div id="container-mapa">
				<img class="delegacion-mapa" src="<?php echo base_url().FOLDER_IMG; ?>mapa_delegaciones.png">
				<div class="puntito gustavo-madero" alt="7"></div>
				<div class="puntito azcapotzalco" alt="2"></div>
				<div class="puntito miguel-hidalgo" alt="11"></div>
				<div class="puntito cuauhtemoc" alt="6"></div>
				<div class="puntito venustiano-carranza" alt="15"></div>
				<div class="puntito alvaro-obregon" alt="1"></div>
				<div class="puntito benito-juarez" alt="3"></div>
				<div class="puntito iztacalco" alt="8"></div>
				<div class="puntito cuajimalpa" alt="5"></div>
				<div class="puntito iztapalapa" alt="9"></div>
				<div class="puntito magdalena" alt="10"></div>
				<div class="puntito coyacan" alt="4"></div>
				<div class="puntito tlahuac" alt="13"></div>
				<div class="puntito xochimilco" alt="17"></div>
				<div class="puntito milpa-alta" alt="16"></div>
				<div class="puntito tlalpan" alt="14"></div>
			</div>
			
			<div class="resultado">
			</div>
		</div>

		<!-- Mortalidad -->
		<div id="mortalidad">
			<div class="logofull">
				<img src="<?php echo base_url().FOLDER_IMG; ?>logo_mortalidad_full.png" alt="Delegaciones">
			</div>
			
			<div class="filtros">
				&nbsp;
			</div>
			
			<div id="container-mortalidad">
				<div id="doughnutChartMortalidad" class="chart">
					<img src="<?php echo base_url().FOLDER_IMG; ?>defunciones.png" class="" alt="Defunciones" module="defunciones">
				</div>
			</div>
			
			<div class="resultado">
				<div class="septicemia hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>mortalidad_septicemia.png" class="" alt="">
					<h3 style="color:#BE1622;">Septicemia</h3>
					<h4>¿Qué es?</h4>
					<p>-Una inflamación potencialmente mortal generada por una infección severa, ya sea por causa de un virus, hongo o bacteria</p>
					<h4>Síntomas</h4>
					<p>-Fiebre alta, manchas rojas en la piel, presión baja, hiperventilación, alteración del estado mental.</p>
					<h4>Tratamiento</h4>
					<p>-Fluidos intravenosos, antibióticos. Puede ser necesario dar apoyo a los pulmones por medio de ventilación mecánica y dialisis.</p>
				</div>
				<div class="nefritis hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>mortalidad_nefritis.png" class="" alt="">
					<h3 style="color:#F18700;">Nefritis tubulointersticial </h3>
					<h4>¿Qué es?</h4>
					<p>-Una inflamación de los riñones derivada de infección ó como reacción a diversos medicamentos.</p>
					<h4>Síntomas</h4>
					<p>-Los síntomas son fiebre, erupciónes e inflamación de los riñones.</p>
					<h4>Tratamiento</h4>
					<p>-Se recomienda retirar el medicamento causante de la inflamación y dar terapia nutricional para una correcta asimilación de fluidos en el paciente.</p>
				</div>
				<div class="acidosis hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>mortalidad_acidosis.png" class="" alt="">
					<h3 style="color:#FFDE00;">Nefritis tubulointersticial </h3>
					<h4>¿Qué es?</h4>
					<p>-Una baja en el pH del plasma sanguíneo.</p>
					<h4>Síntomas</h4>
					<p>-Dolor de pecho, palpitaciones, alteración del apetito, perdida de peso, debilidad muscular, entre otros.</p>
					<h4>Tratamiento</h4>
					<p>-Para tratar esta enfermedad, es necesario identificar la enfermedad desencadenante de la misma.</p>
				</div>
				<div class="isquemica hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>mortalidad_EnfermedadIsquemica.png" class="" alt="">
					<h3 style="color:#96C123;">Enfermedad isquémica</h3>
					<h4>¿Qué es?</h4>
					<p>-Un desequilibrio entre el suministro de oxígeno y la demanda cardiaca. Es causada por una escacez en el flujo de sangre al corazón.</p>
					<h4>Síntomas</h4>
					<p>-Generalmente se presenta en pacientes que ya han sobrevivido con anterioridad a diversos infartos.</p>
					<h4>Tratamiento</h4>
					<p>-La mitad de los pacientes que padecen esta enfermedad deben de recibir un transplante cardiaco.</p>
				</div>
				<div class="cerebrovascular hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>mortalidad_cerebrovascular.png" class="" alt="">
					<h3 style="color:#951E81;">Enfermedad cerebrovascular</h3>
					<h4>¿Qué es?</h4>
					<p>-Es una disminución en el flujo de sangre al cerebro con futuras afectaciones a la función del cerebro.</p>
					<h4>Síntomas</h4>
					<p>-Puede ser causada por un golpe ó ser crónica y presentarse con cambios en la audición, perdida de memoria, alteración en el nivel de conciencia y funciones motoras.</p>
					<h4>Tratamiento</h4>
					<p>-El tratamiento debe darse en las primeras 6 horas en que se presentan los síntomas y ser individualizado de acuerdo a cada paciente.</p>
				</div>
				<div class="neumonia hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>mortalidad_neumonia.png" class="" alt="">
					<h3 style="color:#1D71B8;">Neumonía</h3>
					<h4>¿Qué es?</h4>
					<p>-Es una inflamación en los espacios alveolares del pulmón que provoca enrojecimiento, hinchazón y dolor en los pulmones.</p>
					<h4>Síntomas</h4>
					<p>-Gripa o catarro común, fiebre prolongada por más de tres días, hundimiento en las costillas y dolor en el pecho.</p>
					<h4>Tratamiento</h4>
					<p>-Si se detecta a tiempo, el tratamiento con antibióticos orales, reposo, consumo de líquidos y cuidados en el hogar son suficientes para combatir la enfermedad.</p>
				</div>
				<div class="choque-hipovolemico hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>mortalidad_choqueHipovolemico.png" class="" alt="">
					<h3 style="color:#E71D73;">Choque hipovolémico</h3>
					<h4>¿Qué es?</h4>
					<p>-Se da cuando el flujo de la sangre baja tanto, que no es suficiente para que las células desarrollen sus funciones provocando que muchos órganos dejen de funcionar. Es generalmente inducida por una hemorragia.</p>
					<h4>Síntomas</h4>
					<p>-Ansiedad, presión arterial baja, pulso débil, sed, hipotermia.</p>
					<h4>Tratamiento</h4>
					<p>-Se debe administrar sangre y restituir la posible pérdida de fluidos de manera intravenosa.</p>
				</div>
				<div class="insuficiencia-renal hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>mortalidad_insuficienciaRenal.png" class="" alt="">
					<h3 style="color:#00A19A;">Insuficiencia renal terminal</h3>
					<h4>¿Qué es?</h4>
					<p>-Ocurre cuando los riñones no son capaces de filtrar las toxinas y otras sustancias de desecho de la sangre correctamente, por lo que, como su nombre lo indica; se pierde la función renal. </p>
					<h4>Síntomas</h4>
					<p>- Se puede presentar frecuentemente como consecuencia de la diabetes, hipertensión, obstrucción de las vías urinarias, enfermedades inflamatorias de los riñones y uso de medicamentos tóxicos para el riñón.</p>
					<h4>Tratamiento</h4>
					<p>-Diálisis de por vida, hemodiálisis o trasplante de riñón.</p>
				</div>
				<div class="peritonitis hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>mortalidad_peritonitis.png" class="" alt="">
					<h3 style="color:#662483;">Peritonitis</h3>
					<h4>¿Qué es?</h4>
					<p>-Es una inflamación del peritoneo, la membrana que recubre la cavidad abdominal y las vísceras. Comúnmente resulta del rompimiento de un órgano hueco, como el apéndice.</p>
					<h4>Síntomas</h4>
					<p>- Se presenta dolor abdominal, náuseas, vómitos, fiebre, hipotensión, taquicardias y deshidratación. Puede provocar fallo orgánico múltiple o multisistémico, que lleva a la muerte en la mayoría de los casos.</p>
					<h4>Tratamiento</h4>
					<p>-Diálisis peritoneal, es un proceso riesgoso.</p>
				</div>
				<div class="sepsis-bacteriana hidden">
					<img src="<?php echo base_url().FOLDER_IMG; ?>mortalidad_sepsisBacteriana.png" class="" alt="">
					<h3 style="color:#3AAA35;">Sepsis bacteriana del recién nacido</h3>
					<h4>¿Qué es?</h4>
					<p>-Infección bacteriana en un neonato, de menos de 90 días de nacido. Representa del 30% al 50% de las muertes de recién nacidos en el mundo.</p>
					<h4>Síntomas</h4>
					<p>--Se categoriza en temprana o de inicio tardío. Se refiere a la presencia de una infección bacteriana grave, como la meningitis, neumonía, pielonefritis, o gastroenteritis.</p>
					<h4>Tratamiento</h4>
					<p>-Se realizan análisis de orina y estudios de líquido cefalorraquídeo para determinar el tratamiento del bebé.</p>
				</div>
			</div>
		</div>

		<!-- Peso -->
		<div id="peso">
			<div class="logofull">
				<img src="<?php echo base_url().FOLDER_IMG; ?>logo_peso_full.png" alt="Delegaciones">
			</div>
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
					<p>-Recomendable recurrir al doctor. Recibir apoyo familiar.</p>
				</div>
				
			</div>
			
		</div>
		
		<!-- Enfermedades -->
		<div id="enfermedades">
			<div class="logofull">
				<img src="<?php echo base_url().FOLDER_IMG; ?>logo_enfermedades_full.png" alt="Delegaciones">
			</div>
			<div class="filtros">
				<h2>Edad</h2>
				<input type="range" id="edad_enfermedades" name="edad_enfermedades" min="1" max="99" step="1">
				<output for="edad"></output>
				
				<h2>Género</h2>
				<div class="generos">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_mujer.png" class="boton femenino"  data-query="2" alt="Femenino">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_hombre.png" class="boton masculino"  data-query="3" alt="Masculino">
					<img src="<?php echo base_url().FOLDER_IMG; ?>boton_ambosgeneros.png" class="boton active ambos"  data-query="0" alt="Ambos Géneros">
				</div>
				
				<button id="filtro_enfermedades" class="filtro aqua">Filtrar</button>
			</div>
			<div id="container-enfermedades">
				<div id="iconosEnfermedades">
					<img src="<?php echo base_url().FOLDER_IMG; ?>enfermedades.png">
				</div>
				<div id="graphEnfermedades"></div>
			</div>
		</div>
		
		<!-- Datos Curiosos -->
		<div id="funfacts">
			<div class="logofull">
				<img src="<?php echo base_url().FOLDER_IMG; ?>logo_funfacts_full.png" alt="Delegaciones">
			</div>
			<div class="fun-container left">
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
