@extends('layouts.clinical')

@section('back')
<a href="{{URL::to('patient/'.$patient_id.'/clinic')}}" class="text-info">
	Regresar a lista de evaluaciones paciente
</a>
@stop

@section('leftcontent')
@include('clinical.includes.left')
@stop


@section('maincontent')
<br>
<br>
<div id="treatment">

	<div class="row">
		<div CLASS="well well-small span8">
			<h4>TRATAMIENTO</h4>
		</div>
	</div>

	@include('clinical.includes.table_treatment')

	<div class="row">
		<div class="span3" id='table_drug_result'></div>
	</div>

	<div id="drug_already_exist" style='display:none ;text-align:left'>
		<div class="span4">Medicamento ya existe. Confirmar ingreso</div>
		<div class="btn-group" >
			<a class='btn ' id='reconfirm_drugsave' href="#">
				<i class="icon-ok"></i> 
				Ingresar
			</a>

			<a class='btn ' href="#" id='cancel_duplicated_drug'>
				<i class="icon-remove"></i> 
				Cancelar
			</a>
		</div>
		<br>
	</div>

	<div id="inputdrug">

		<div class="row">

			<div class="span3">

				<select id="drug" class="treatment span3" >

					<option value="">...Escoger medicamento</option>

					<option value="Epoprostenol">Epoprostenol</option>

					<option value="Treprostinil">Treprostinil</option>

					<option value="Tadalafil">Tadalafil</option>

					<option value="Sildenafil">Sildenafil</option>

					<option value="Iloprost">Iloprost</option>

					<option value="Bosentan">Bosentan</option>

					<option value="Ambrisentan">Ambrisentan</option>

					<option value="Riociguat">Riociguat</option>

					<option value="Furosemida">Furosemida</option>

					<option value="Digoxina">Digoxina</option>

					<option value="Warfarina">Warfarina</option>

					<option value="Diltiazem">Diltiazem</option>

					<option value="Nifedipina">Nifedipina</option>

					<option value="Amlodipino">Amlodipino</option>

					<option value="Hbpm">Heparinas BPM</option>

				</select>

			</div>

			<div class="span1" style="text-align:right">Inicio</div>

			<div class="span1">

				<input type="text" id="year_ini_d" class="span1" placeholder="a&ntilde;o" maxlength="4"/>

			</div>

			<div class="span1">

				<input type="text" id="month_ini_d" class="span1" placeholder="mes" maxlength="2"/>

			</div>

			<div class="span1">

				<input type="text" id="day_ini_d" class="span1" placeholder="d&iacute;a" maxlength="2"/>

			</div>

		</div>

		<div class="row">

			<div class="span1">

				<div class="btn-group" id="save_cancel_drug">

			<!--

			* button name:          btn_add_drug

			* Triggers:             enter_drug_toDB()

			* Brieff description:   Check if exists and enter new droug to table hap_drug_treatment

			* js associated file:   clinic_eval.js

			* php AJAX:             patient/ajax_new_drug.php

		-->

		<a id="btn_add_drug" class="btn "><i class="icon-ok"></i> Agregar </a>

		<a id='hide_drug_hap' class="btn "><i class="icon-remove"></i> Cancelar </a>

	</div>



</div>

<div class="offset1 span1">



</div>

</div>

</div>



  <!-- <div id="hap_suspend" style="display:none">

	<div class="row">

	  <div class="span3">

		<select id="suspend_cause" class="treatment" >

		  <option value="">...Motivo suspensi&oacute;n tto</option>

		  <option value="">No ha habido suspensi&oacute;n</option>

		  <option value="Evento adverso">Evento adverso</option>

		  <option value="No adherencia al tto">Desersi&oacute;n al tto</option>

		  <option value="Negacion EPS">Negaci&oacute;n por asegurador</option>

		  <option value="Negacion EPS">Mejor&oacute; con otro tto</option>

		  <option value="Negacion EPS">Paciente fallecido</option>

		  <option value="Otras">Otras causas</option>

		</select>

	  </div>

	  <div class="span1" style="text-align:right">Suspensi&oacute;n</div>

	  <div class="span3">

		<input type="text" id="year_end_d" class="span1" placeholder="a&ntilde;o" maxlength="4"/>

		<input type="text" id="month_end_d" class="span1" placeholder="mes" maxlength="2"/>

		<input type="text" id="day_end_d" class="span1" placeholder="d&iacute;a" maxlength="2"/>

	  </div>

	</div>

</div> -->







<!-- BEGIN OF MANEJO QUIRURGICO-->

<?php
/*
$sql    = "SELECT * FROM hap_surgical 

LEFT JOIN main_eval 

ON hap_surgical.eval_id=main_eval.eval_id  

WHERE hap_surgical.surgical_type<>'' AND main_eval.patient_id='".$usr."' ";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

?>

  <div class="row">

	<div class="span8"><hr><h4>Manejo quir&uacute;rgico</h4></div>

  </div>

  <?php 

	if ($row['surgical_id']!="") {

	  ?>

	  <div class="row">

		<div class="span5" style="text-align:left">

		  <?php echo "Transplantado de ".$row['surgical_type']."en la fecha ".$row['surgical_date'] ; ?>

		</div>

	  </div>

		

	  <?php

	} else {

	  ?>

	  <div class="row">

	<div class="span8" style="text-align:left">

	  Dejar sin responder si no aplica.

	</div>

  </div>

  <div class="row" style="text-align:left">

	<div class="span3">

	  <select id="transplant" class="surgical" name="surgical_type">

		<option value="">Tipo de transplante</option>

		<option value="">En lista de espera</option>

		<option value="pulmon">Transplantado: pulm&oacute;n</option>

		<option value="corazon pulmon">Transplantado: coraz&oacute;n-pulm&oacute;n</option>

	  </select>

	</div>

	<div class="span3">

	  <input type="text" id="year_transp" class="span1 surgical date1" name="surgical_date" placeholder="a&ntilde;o" maxlength="4"/>

	  <input type="text" id="month_transp" class="span1 surgical" placeholder="mes" maxlength="2"/>

	  <input type="text" id="day_transp" class="span1 surgical" placeholder="d&iacute;a" maxlength="2"/>

	</div>

	<div class="span1"></div>

  </div>



	  <?php

	}

	 ?>



  

<?php

$sql    = "SELECT * FROM hap_surgical 

LEFT JOIN main_eval 

ON hap_surgical.eval_id=main_eval.eval_id  

WHERE hap_surgical.surgical_tendt_date<>'' AND hap_surgical.surgical_tendt_date<>'0000-00-00' AND main_eval.patient_id='".$usr."' ";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

if ($row['surgical_tendt_date']!='') {

  ?>

  <div class="row">

	<div class="span5" style="text-align:left">

	  Trombarterectomia realizada el 

	  <?php echo $row['surgical_tendt_date']; ?>

	</div>

  </div>



  <?php

  

} else {?>

  <div class="row" id="id1">

	<div class="span3" id="id2" style="text-align:right">Trombendarterectom&iacute;a? 

	  <input type="checkbox" id="tendt" class="treatment" >

	</div>

	<div class="span3" id="tendt_hide" style="text-align:left">

	  <input type="text" id="year_tendt" class="span1 surgical date1" name="surgical_tendt_date" placeholder="a&ntilde;o" maxlength="4"/>

	  <input type="text" id="month_tendt" class="span1 surgical" placeholder="mes" maxlength="2"/>

	  <input type="text" id="day_tendt" class="span1 surgical" placeholder="d&iacute;a" maxlength="2"/>

	</div>

  </div>

  <?php

}

?>



  

<?php 

$sql    = "SELECT * FROM hap_surgical 

LEFT JOIN main_eval 

ON hap_surgical.eval_id=main_eval.eval_id  

WHERE hap_surgical.surgical_atr_date<>'' AND hap_surgical.surgical_atr_date<>'0000-00-00' AND main_eval.patient_id='".$usr."' ";

$result = mysqli_query($con,$sql);

$row = mysqli_fetch_array($result);

if ($row['surgical_atr_date']!="") {

  ?>

  <div class="row">

	<div class="span5" style="text-align:left">

	  Atrioseptostom&iacute;a realizada el 

	  <?php echo $row['surgical_atr_date']; ?>

	</div>

  </div>

  <?php

} else { ?>

<div class="row">

	<div class="span3" style="text-align:right">Atrioseptostom&iacute;a? 

	  <input type="checkbox" id="atr_sept" class="treatment"/>

	</div>

	<div class="span3" id="atr_sept_hide" style="text-align:left">

	  <input type="text" id="year_atr" class="span1 surgical date1" name="surgical_atr_date" placeholder="a&ntilde;o" maxlength="4"/>

	  <input type="text" id="month_atr" class="span1 surgical" placeholder="mes" maxlength="2"/>

	  <input type="text" id="day_atr" class="span1 surgical" placeholder="d&iacute;a" maxlength="2"/>

	</div>

	<div class="span1"></div>

  </div>

<?php



}
/**/
?>





<div class="row">

	<div class="span8">

		<hr/>

	  <!--

		* button name:          treatment_save

		* Triggers:             $("#treatment_save").click() ->to_database()

		* Brieff description:   Save info in hap_surgical

		* js associated file:   ajax_forms.js

		* php AJAX:             patient/ajax_save.php

	-->

	<a class="btn class3" id="treatment_save">Guardar</a>

	<div class="alert alert-success">

		<button type="button" class="close">&times;</button>

		<strong></strong>

	</div>

	<br><br>

</div>

</div>

</div>








@stop

@section('scripts')
{{HTML::script('assets/js/treatment.js');}}
@stop