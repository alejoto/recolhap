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

	<div id="drug_already_exist" >
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
					<option value="Macitentan">Macitentan</option>
					<option value="Selexipag">Selexipag</option>
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
					<a id="btn_add_drug" class="btn ">
						<i class="icon-ok"></i> 
						Agregar 
					</a>
					<a id='hide_drug_hap' class="btn ">
						<i class="icon-remove"></i> 
						Cancelar 
					</a>
				</div>
			</div>
		</div>
	</div>

	{{-- surgical approach --}}
	{{--$eval_surgery->first()->surgical--}}
	<div class="row">
		<div class="span8"><hr>
			<h4>Manejo quir&uacute;rgico</h4>
			<div class="text-info">Ingresar datos si hubo intervención quirúrgica para  cardiopatía causante o manejo de la enfermedad</div>
		</div>
	</div>
	@if($transplant==1)
		<div class="row">
			<div class="span5">
				Intervención quirúrgica: transplante {{$eval_surgery->first()->surgical->surgical_type}}
				<br>
				fecha: {{$eval_surgery->first()->surgical->surgical_date}}
			</div>
		</div>
	@else
	<div class="row">
		<div class="span3">
			<select name="surgical_type" id="transplant" class="surgical">
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
	</div>
	@endif

	@if($tart==1)
		<div class="row">
			<div class="span5">
				Trombarterectomia: si
				<br>
				Fecha: {{$eval_surgery->first()->surgical->surgical_tendt_date}}
			</div>
		</div>
	@else 
		<div class="row" id="id1">
			<div class="span3" id="id2">
				<input type="checkbox" id="tendt" class="treatment" >
				Trombendarterectom&iacute;a?
			</div>
			<div class="span3" id="tendt_hide">
				<input type="text" id="year_tendt" class="span1 surgical date1" name="surgical_tendt_date" placeholder="a&ntilde;o" maxlength="4"/>
				<input type="text" id="month_tendt" class="span1 surgical" placeholder="mes" maxlength="2"/>
				<input type="text" id="day_tendt" class="span1 surgical" placeholder="d&iacute;a" maxlength="2"/>
			</div>
		</div>
	@endif

	@if($atro==1)
	<div class="row">
		<div class="span5">
			Atrioseptostom&iacute;a? si
			<br>
			Fecha  {{$eval_surgery->first()->surgical->surgical_atr_date}}
		</div>
	</div>
	@else 
	<div class="row">
		<div class="span3">
			<input type="checkbox" id="atr_sept" class="treatment"/>
			Atrioseptostom&iacute;a? 
		</div>
		<div class="span3" id="atr_sept_hide" style="text-align:left">
			<input type="text" id="year_atr" class="span1 surgical date1" name="surgical_atr_date" placeholder="a&ntilde;o" maxlength="4"/>
			<input type="text" id="month_atr" class="span1 surgical" placeholder="mes" maxlength="2"/>
			<input type="text" id="day_atr" class="span1 surgical" placeholder="d&iacute;a" maxlength="2"/>
		</div>
	</div>
	@endif
	<div class="row">
		<div class="span8">
			
			<a class="btn class3" id="treatment_save">Guardar</a>
			<div class="alert alert-success">
				<button type="button" class="close">&times;</button>
				<strong></strong>
			</div>
			<hr/>
			<br><br>
		</div>
	</div>
</div>
@stop

@section('scripts')
{{HTML::script('assets/js/treatment.js');}}
@stop