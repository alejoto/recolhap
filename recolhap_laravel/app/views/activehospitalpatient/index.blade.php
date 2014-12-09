@extends('layouts.main')
@section('content')
<div class="container recolhap_left">
	<a href="{{URL::to('search')}}" class='text-info'>volver a buscador paciente</a>
	<h1>Lista pacientes para institución {{$clinic->hospital_name}}</h1>
	<br>
	<br>
	<table class="table table-hover">
		<tr>
			<th>Paciente</th>
			<th>Fecha de ingreso</th>
		</tr>
		@foreach($patients->get() as $p)
			<?php  
			$check=0;
			foreach ($p->evaluation as $e) {
				if (in_array($e->investigator->user_id, $i_c)) {
					$check=1;
				}
			}
			?>
			@if($check==1)
				<tr>
					<td>
						<spam class="muted"> {{$p->patient_id}}</spam>
						<a href="{{URL::to('activehospital/patient/'.$p->patient_id)}}" class="text-info">{{$p->name}} {{$p->surn}}</a>
						
					</td>
					<td>
						{{$p->timestamp}}
					</td>
				</tr>
			@endif
		@endforeach
	</table>

</div>
@stop

@section('scripts')

{{HTML::script('assets/js/patientsall.js');}}

@stop