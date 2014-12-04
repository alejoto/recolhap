@extends('layouts.main')
@section('content')

<div class="container recolhap_left">
	<a href="{{URL::to('patients/all')}}" class='text-info'>Volver a listado de pacientes</a>
	<h1>Paciente {{$p->name}} {{$p->surn}}</h1>
	<h3 class="muted">Documento {{$p->patient_id}}</h3>
	<table class="table">
		<tr>
			<th>Tipo evaluacion (hacer click en tipo evaluación para ver detalle)</th>
			<th>Numero de eventos</th>
			<th>último evento (fecha realización)</th>
		</tr>
		<tr>
			<td>
				<a href="{{URL::to('cath/patient/'.$p->patient_id)}}">Cateterismo derecho </a>
			</td>
			<td>
				3
			</td>
			<td>
				2005/5/8
			</td>
		</tr>
		<tr>
			<td>
				<a href="">Examen clinico (dentro de RECOLHAP)</a>
			</td>
			<td>
				5
			</td>
			<td>
				2011/8/30
			</td>
		</tr>
	</table>
	
</div>

@stop