<div id="basal" >
	<div CLASS="well well-small" style="text-align:center">
		<h4>DATOS BASALES</h4>
	</div>
	<div class="row">
		<div class="span5 text-info">Aviso: los campos azules (*) SON OBLIGATORIOS</div>
		<br>
		<br>
	</div>

	<input type="hidden" value='{{$patient_id}}' id='patient_id'>

	<div class="row" name="right_cathet">
		<div class="span2" style="text-align:right" data-toggle='tooltip' title='Campo obligatorio'>
			Fecha examen:
			<spam class="text-info" >(*)</spam>
		</div>

		<div class="span3" style="text-align:left">

			<input type="text" id="year" name="rt_cat_date" placeholder="a&ntilde;o" class="span1 bas date1" maxlength="4">

			<input type="text" id="month" placeholder="mes" class="span1 bas" maxlength="2">

			<input type="text" id="day" placeholder="d&iacute;a" class="span1 bas date3" maxlength="2">

			<div style="display:none"><input type="text" id="wholedate"></div>

		</div>
	</div>
	<div class="row">
		<div class="span2" style="text-align:right">Peso (Kg)</div>
		<div class="span1"><input type="text" id="wgt" placeholder="Kgs" class="span1" maxlength="3"></div>
		<div class=" span1" style="text-align:right">Talla (M.)</div>
		<div class="span1"><input type="text" id="hgt" placeholder="Mts" class="span1"></div>
		<div class="span3" id="bsa"></div>
	</div>

	<div class="row">
		<div class="span2" style="text-align:right">Res. vasc. pulmonar</div>
		<div class="span2">
			<input type="text" id="res_vasc_pulm" placeholder="res. vsc. pulmonar" class="span2 bas" name="res_vasc_pulm"/>
		</div>

		<div class="span2">
			<select id="res_vasc_pulm_unit" class="span2 bas" name="res_vasc_pulm_unit">
				<option>dinas</option>
				<option>woods</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="span2" style="text-align:right">Res. vasc. sist&eacute;mica</div>
		<div class="span2">
			<input type="text" id="res_vasc_syst" placeholder="res. vsc. sist&eacute;mica" class="span2 bas" name="res_vasc_syst">
		</div>
		<div class="span2">
			<select id="res_vasc_syst_unit" class="span2 bas" name="res_vasc_syst_unit">
				<option>dinas</option>
				<option>woods</option>
			</select>
		</div>
	</div>

	<div class="row">
		<div class="span2" style="text-align:right" data-toggle='tooltip' title='Campo obligatorio!'>
			P.A. <b>pulmonar</b>
			<spam class="text-info">(*)</spam>
		</div>
		<div class="span1">
			<input type="text" id="pap_sys" placeholder="sist&oacute;l." 
			class="span1 bas" name="pap_sys" maxlength="3">
		</div>

		<div class="span1">
			<input type="text" id="pap_dias" placeholder="diast&oacute;l." 
			class="span1 bas" name="pap_dias" maxlength="3">
		</div>
		<div class="span2">
			<b><span id="pam_pulm"></span></b>
		</div>
	</div>

	<div class="row">
		<div class="span2" style="text-align:right" >
			P.A. <b>sist&eacute;mica</b>
			<spam class="text-info">(*)</spam>
		</div>
		<div class="span1">
			<input type="text" id="pas_sys" placeholder="sist&oacute;l." class="span1 bas" name="pas_sys" maxlength="3">
		</div>
		<div class="span1">
			<input type="text" id="pas_dias" placeholder="diast&oacute;l." class="span1 bas" name="pas_dias" maxlength="3">
		</div>
		<div class="span2">
			<b><span id="pam_stm"></span></b>
		</div>
	</div>

	<div class="row">
		<div class="span2" style="text-align:right" data-toggle='tooltip' title='Campo obligatorio!'>
			Pres aur&iacute;c. der
			<spam class="text-info">(*)</spam>
		</div>
		<div class="span2">
			<div class="input-append">
				<input type="text" id="rt_atr_press" placeholder="PAD" class="span2 bas" 
				name="rt_atr_press"><span class="add-on">mm/Hg</span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="span2" style="text-align:right" data-toggle='tooltip' title='Campo obligatorio!'>
			Pres. cu&ntilde;a pulmr
			<spam class="text-info">(*)</spam>
		</div>
		<div class="span2">
			<div class="input-append">
				<input type="text" id="pulm_wedg_press" placeholder="PCP" class="span2 bas" name="pulm_wedg_press"><span class="add-on">mm/Hg</span>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="span2" style="text-align:right">Gradiente transpulmonar</div>
		<div class="span2">

			<div class="input-append">
				<input type="text" id="pulm_gradient" placeholder="GTP" class="span2 bas" name="pulm_gradient" disabled>
				<span class="add-on">mm/Hg</span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span2" style="text-align:right" data-toggle='tooltip' title='Campo obligatorio!'>
			Gasto cardiaco
			<spam class="text-info">(*)</spam>
		</div>
		<div class="span2">
			<div class="input-append">
				<input type="text" id="cardiac_outp" placeholder="CO-lt/min" class="span2 bas" name="cardiac_outp">
				<span class="add-on">Lt/min</span>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="offset1 span4 text-error" id="required_cardiac_output_for_reactivity_test"></div>
	</div>
<div class="row">
	<div class="span2" style="text-align:right">&Iacute;ndice cardiaco</div>
	<div class="span2">
		<div class="input-append">
			<input type="text" id="cardiac_index" placeholder="L/min/Mt2" class="span2 bas" name="cardiac_index" disabled>
			<span class="add-on">Lt/min/Mt2</span>
		</div>
	</div>
</div>

<div class="row">

	<div class="span2" style="text-align:right">Oximetr&iacute;a %</div>

	<div class="span1">

		<input type="text" id="rt_atr_oxim" placeholder="au der." class="span1 bas" name="rt_atr_oxim" maxlength="2">

	</div>

	<div class="span1">

		<input type="text" id="rt_ventr_oxim" placeholder="vt. der." class="span1 bas" name="rt_ventr_oxim" maxlength="2">

	</div>

	<div class="span1">

		<input type="text" id="pulm_artery" placeholder="art pulm." class="span1 bas" name="pulm_artery" maxlength="2">

	</div>

</div>

<div class="row">

	<div class="span2" style="text-align:right">Frecuencia cardiaca</div>

	<div class="span2">

		<div class="input-append">

			<input type="text" id="heart_rate" placeholder="pulso" class="span2 bas" name="heart_rate" maxlength="3">

			<span class="add-on">lat/min</span>

		</div>

	</div>

</div>

<div class="row" id="ask_for_react_test" style="display:none">

	<div class="span2" style="text-align:right">Se hizo test vasorreactividad?</div>

	<div class="span2">
		<select id="vreac_test_done" class="span2">
			<option value=""></option>
			<option value="no">no</option>
			<option value="si">si</option>
		</select>
	</div>

</div>
<div class="row">
	<div class="span6">
            <!--
            * button name:          save_rt_cath
            * Triggers:             $("#save_rt_cath").click() -> to_database()
            * Brieff description:   Save Basal text
            * js associated file:   ajax_forms.js
            * php AJAX:             /patient/ajax_save.php
        -->
        <button class="btn span6" id="save_rt_cath">Guardar</button>
    </div>
</div>
<br>
<br>
</div>

