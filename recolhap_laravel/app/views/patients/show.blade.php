@extends('layouts.main')
@section('content')

<div class="container recolhap_left">
	<a href="{{URL::to('patients/all')}}" class='text-info'>Volver a listado de pacientes</a>
	<h1>Paciente {{$p->name}} {{$p->surn}}</h1>
	<h3 class="muted">Documento {{$p->patient_id}}</h3>
	<table class="table">
		<tr>
			<th>Tipo evaluacion (hacer click en tipo evaluación para ver detalle)</th>
		</tr>
		<tr>
			<td>
				<a href="{{URL::to('cath/show/'.$p->patient_id)}}">Cateterismo derecho </a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="">Parámetros clinicos </a>
			</td>
		</tr>
	</table>
	
</div>

@stop