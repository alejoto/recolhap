<div id="ex_fc">
	<div class="row">
		<div CLASS="well well-small span8">
			<h4>EXAMEN F&Iacute;SICO</h4>
		</div>
	</div>


	<div class="row">
		<div class="span1" style="text-align:right">Pulso</div>
		<div class="span1">
			<input type="text" placeholder="lat/min" id="pulse" class="span1 ex_fc" maxlength="3"/>
		</div>
		<div class="span1" style="text-align:right">Resp</div>
		<div class="span1">
			<input type="text" placeholder="resp/min" id="breathing" class="span1 ex_fc" maxlength="2"/>
		</div>
		<div class="span2" style="text-align:right">Saturaci&oacute;n O2</div>
		<div class="span1">
			<input type="text" placeholder="%" id="sat_ox" class="span1 ex_fc" maxlength="2"/>
		</div>
	</div>

	<div class="row">
		<div class="span1">Pr.Arterial</div>
		<div class="span1">
			<input type="text" placeholder="sistol." id="psist" class="span1 ex_fc" maxlength="3">
		</div>
		<div class="span1">
			<input type="text" placeholder="diastol."id="pdiast" class="span1 ex_fc" maxlength="3">
		</div>
		<b>
			<div class="span2" id="ef_pam"></div>
		</b>
	</div>

	<div class="row">
		<div class="span1" style="text-align:right">Peso</div>
		<div class="span1">
			<input type="text" placeholder="Kgs" class="span1 ex_fc" id="weight" maxlength="3"/>
		</div>
		<div class="span1" style="text-align:right">Talla</div>
		<div class="span1">
			<input type="text" placeholder="Mts" class="span1 ex_fc" id="height"/>
		</div>
		<div class="span2" style="text-align:right">S.C. Mt2</div>
		<div class="span2" id="bsa"></div>
	</div>

	<div class="row">
		<div class="span8"><hr></div>
	</div>

	<div class="row">
		<div class="span2" style="text-align:right">Ingurg. yugular 45&ordm;</div>
		<div class="span1">
			<input type="checkbox" id="ing_yu" class="ex_fc">
		</div>
		<div class="span2" style="text-align:right">Hepatomegalia</div>
		<div class="span1">
			<input type="checkbox" id="hepatomegaly" class="ex_fc">
		</div>
	</div>



	<div class="row">

		<div class="span2" style="text-align:right">Cianosis</div>
		<div class="span1">
			<input type="checkbox" id="cyanosis" class="ex_fc">
		</div>
		<div class="span2" style="text-align:right">Hipocratismo digital</div>
		<div class="span1">
			<input type="checkbox" id="finger_clubbing" class="ex_fc">
		</div>

	</div>



	<div class="row">
		<div class="span2" style="text-align:right">Edema</div>
		<div class="span1">
			<input type="checkbox" id="ef_edema" class="ex_fc">
		</div>
	</div>



	<div class="row">

		<div class="span8"><br><br>

        <!--

	        * button name:          ef_save

	        * Triggers:             $('#ef_save').click()

	        * Brieff description:   Save first_eval and hap_follow_up with data from 'Anamesis' and 'Examen fisico' forms

	        * js associated file:   clinic_eval.js

	        * php AJAX:             /patient/save_anam.php

	    -->

		    <a class="btn" id="ef_save">
		    	Guardar
		    </a><br><br>
		</div>

	    <!-- 
	    ========================================================================
	    button linked to
	    ========================================================================
		 -->

		<div id='anam_result'></div>
	</div>

</div>

