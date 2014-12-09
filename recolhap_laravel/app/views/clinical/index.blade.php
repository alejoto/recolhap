@extends('layouts.clinical')

@section('back')
<a href="{{URL::to('activehospital/patient/'.$patient_id)}}" class="text-info">
	Regresar a lista de evaluaciones paciente
</a>
@stop

@section('leftcontent')
@stop

@section('maincontent')
<h3 id="left_title">Perfil de la enfermedad</h3>
<div class="row">
	<div class="span2">incio enfermedad:</div>
	<div class="span2">
		<b>{{$f_month}} / {{$f_year}}</b>
	</div>
</div>
<div class="row">
	<div class="span2">Raza afroamericana?</div>
	<div class="span2">
		<b>{{$afro}}</b>
	</div>
</div>
<div class="row">
	<div class="span2">Clasificación HAP</div>
	<div class="span4">
		<b>{{$dxtype}}</b>
	</div>
</div>
<hr>
<h3 id="left_title">Evaluaciones Clínicas</h3>

<a href="{{URL::to('patient/'.$patient_id.'/clinic/create')}}" class='text-info'>
	Ingresar nuevo registro "evaluación clínica" 
</a>

	
<table class="table table-hover">
	<tr>
		<th>Fecha</th>
		<th>Síntomas</th>
		<th>Clase funcional</th>
		<th>Hallazgos clínicos</th>
	</tr>
	@if($followup->count()>0)
		@foreach($followup->get() as $ff)
		<?php $f=$ff->followqup; ?>
			<tr>
				<td>
					{{$f->eval_date}}
				</td>
				<td>
					@if($f->dyspnea=='si')
					- disnea 
					@endif

					@if($f->cough=='si')
					- tos 
					@endif

					@if($f->chestpain=='si')
					- dolor torácico 
					@endif

					@if($f->loweredema=='si')
					- edema (retención líquidos) 
					@endif

					@if($f->hemoptysis=='si')
					- hemoptisis
					@endif

					@if($f->syncope=='si')
					- síncope
					@endif
				</td>
				<td>
					{{$f->nyha_funct_class}}
				</td>
				<td>
					Pulso {{$f->pulse}}, 
					PA {{$f->pres_art_exfco}},
					Respiraciones / minuto {{$f->breathing}},

					@if($f->sat_ox!=null)
					satO2 {{$f->sat_ox}},
					@endif

					@if($f->weight!=null)
					peso {{$f->weight}},
					@endif

					@if($f->height!=null)
					talla {{$f->height}},
					@endif
					<br>
					<b class="text-info">otros hallazgos presentes: </b>

					@if($f->cyanosis=='si')
					- cianosis
					@endif

					@if($f->hepatomegaly=='si')
					- hepatomegalia
					@endif

					@if($f->ef_edema=='si')
					- edema
					@endif

					@if($f->ing_yu=='si')
					- ingurgitación yugular 45° (o mayor)
					@endif

					@if($f->finger_clubbing=='si')
					- hipocratismo digital
					@endif
				</td>
			</tr>
		@endforeach

	@endif
</table>

@stop

