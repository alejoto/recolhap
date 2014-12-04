@extends('layouts.main')
@section('content')
<div class="container recolhap_left">
	<a href="{{URL::to('patients/patient/'.$patient_id)}}" class="text-info">Regresar a lista de evaluaciones paciente</a>
	<h2>Cateterismo derecho</h2>
	<h3 class="muted">
		Paciente: {{$patient_id}} {{Patient::find($patient_id)->name}} {{Patient::find($patient_id)->surn}}
	</h3>
	<h1>
		test

	</h1>
	<a href="{{URL::to('/cath/patient/'.$patient_id)}}" class='text-info'>Ingresar nuevo registro "cateterismo derecho" </a>
	<table class="table table-hover">
		<tr>
			<th>Fecha</th>
			<th>Presión art. pulm.</th>
			<th>Presión cuña pulm.</th>
			<th>Test reactividad</th>
			<th class='muted'>Otros parámetros </th>
		</tr>
		@foreach(Evaluation::has('rightcath')->where('patient_id','=',$patient_id)->get() as $e)
			<?php  
			$pam=($e->rightcath->pap_sys-$e->rightcath->pap_dias)/3 
			+ 
			$e->rightcath->pap_dias;
			//
			$pam=round($pam*10)/10;
			;
			?>
			<tr>
				<td>{{$e->rightcath->rt_cat_date}}</td>
				<td>
					{{$e->rightcath->pap_sys}}
					/
					{{$e->rightcath->pap_dias}}
					(PAM  {{ $pam }} )
				</td>
				<td>
					{{$e->rightcath->pulm_wedg_press}}
					<spam class="muted">(gradiente {{$pam-$e->rightcath->pulm_wedg_press }})</spam>
				</td>
				<td>
					@if($e->rightcath->vasoreactivetest==null)
					No se hizo
					@elseif ($e->rightcath->vasoreactivetest->reactivity=='si') 
					Reactivo <spam class="muted">({{$e->rightcath->vasoreactivetest->test_drug}})</spam>
					@else 
					No reactivo <spam class="muted">({{$e->rightcath->vasoreactivetest->test_drug}})</spam>
					@endif
					
				</td>
				<td class='muted'>
					@if($e->rightcath->res_vasc_pulm!='')
						Resistencias vasculares: pulmonar 
						{{$e->rightcath->res_vasc_pulm}} 
						{{$e->rightcath->res_vasc_pulm_unit}}, 
						sistémica
						{{$e->rightcath->res_vasc_syst}} 
						{{$e->rightcath->res_vasc_syst_unit}};
					@endif

					@if($e->rightcath->pas_sys!='')
						P.A. sistémica: 
						{{$e->rightcath->pas_sys}}/
						{{$e->rightcath->pas_dias}};
					@endif

					@if($e->rightcath->rt_atr_press!='')
						presión aurícula derecha:
						{{$e->rightcath->rt_atr_press}}
					@endif

					@if($e->rightcath->cardiac_outp!='')
						Gasto cardiaco
						{{$e->rightcath->cardiac_outp}}
					@endif

					@if($e->rightcath->rt_atr_oxim)
						Oximetrías: 
						aurícula derecha 
						{{$e->rightcath->rt_atr_oxim}}, 
						ventrículo derecho 
						{{$e->rightcath->rt_ventr_oxim}},
						arteria pulmonar 
						{{$e->rightcath->pulm_artery}}
					@endif

					@if($e->rightcath->heart_rate)
						Frecuencia cardiaca
						{{$e->rightcath->heart_rate}}
					@endif
				</td>
			</tr>
		@endforeach

	</table>
</div>

@stop