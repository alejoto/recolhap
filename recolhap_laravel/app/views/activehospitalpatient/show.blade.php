@extends('layouts.clinical')
@section('back')
	<a href="{{URL::to('activehospital/patient')}}" class='text-info'>
		Volver a listado de pacientes
	</a>
@stop

@section('leftcontent')
@stop

@section('maincontent')

	<h3>Evaluaciones</h3>
	<table class="table">
		<tr>
			<th>Tipo evaluacion</th>
		</tr>
		<tr>
			<td>
				<a class='text-info' href="{{URL::to('patient/'.$p->patient_id.'/cath')}}">Cateterismo derecho </a>
			</td>
		</tr>
		<tr>
			<td>
				<a class='text-info' href="{{URL::to('patient/'.$p->patient_id.'/clinic')}}">Evaluación clínica </a>
			</td>
		</tr>
		<tr>
			<td>
				<a class='text-info' href="{{URL::to('patient/'.$p->patient_id.'/blood')}}">Pruebas en sangre </a>
			</td>
		</tr>
		<tr>
			<td>
				<a class='text-info' href="{{URL::to('patient/'.$p->patient_id.'/imaging')}}">Imágenes diagnósticas </a>
			</td>
		</tr>
		<tr>
			<td>
				<a class='text-info' href="{{URL::to('patient/'.$p->patient_id.'/performance')}}">Desempeño cardiovascular </a>
			</td>
		</tr>
	</table>
@stop

@section('scripts')
	<script type="text/javascript">
	$(function(){
		//$('#clin_images').hide();
	});
		
	</script>
@stop