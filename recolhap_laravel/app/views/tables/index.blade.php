@extends('layouts.main')
@section('content')
<div class="container recolhap_left ">
	<h1>Recolhap</h1>
	<h3 class="muted">Consolidado general del registro RECOLHAP</h3>
	1. Mi actividad
	<table class="table table-hover">
		<tr>
			<th>
				CRITERIO
			</th>
			<th>
				Detalle
			</th>
		</tr>
		<tr>
			<td>
				Mi institución
			</td>
			<td>
				{{$clinic->hospital_name}}
			</td>
		</tr>
		<tr>
			<td>
				Médicos activos en mi institución
			</td>
			<td>
				{{$clinic->investigator->count()}}
			</td>
		</tr>
		<tr>
			<td>
				Pacientes ingresados en mi institución
			</td>
			<td>
				{{count($count_eval_clin)}}
			</td>
		</tr>
		<tr>
			<td>
				pacientes que he ingresado
			</td>
			<td>
				{{count($singlepatients)}} 
			</td>
		</tr>
	</table>
	<br>
	<br>
	2. Pacientes que he ingresado
	<table class="table table-hover ">
		<tr>
			<th>
				Nombres
			</th>
			<th>
				Genero
			</th>
		</tr>
		@foreach($mypatients->get() as $m)
			<tr>
				<td>
					{{$m->name}} {{$m->surn}}
				</td>
				<td>
					{{$m->gender}}
				</td>
			</tr>
		@endforeach
	</table>
	2. Pacientes por institución
	<table class="table table-hover ">
		<tr>
			<th>nombres</th>
		</tr>
		<tr>
			<td>fulano de tal</td>
		</tr>
		<tr>
			<td>Mengano y sutano</td>
		</tr>
	</table>
</div>
@stop

@section('scripts')
{{HTML::script('assets/js/summarytables.js');}}
@stop