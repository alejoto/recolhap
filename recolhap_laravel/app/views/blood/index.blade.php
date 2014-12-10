@extends('layouts.clinical')

@section('back')
<a href="{{URL::to('activehospital/patient/'.$patient_id)}}" class="text-info">
	Regresar a lista de evaluaciones paciente
</a>
@stop

@section('leftcontent')
@stop

@section('maincontent')
	<h3 id="left_title">Pruebas en sangre</h3>
	<a class='text-info' href="{{URL::to('patient/'.$patient_id.'/blood/create')}}">Agregar registro sobre prueba de sangre</a>
	
	@if($eval_hb->count()>0)
	<h4>Hemoglobina</h4>
	<ul>
		@foreach($eval_hb->get() as $v)
			<?php  
			$d=$v->hb;
			;?>
			<li>Fecha: {{$d->hb_date}} | Hemoglobina: {{$d->hb_value}}</li>
		@endforeach
		</ul>
		<br>
	@endif
	@if($eval_hemoqdim->count()>0)
	<h4>Dímero D</h4>
	<ul>
		@foreach($eval_hemoqdim->get() as $v)
			<?php  
			$d=$v->hemoqdim;
			;?>
			<li>
			Fecha: {{$d->dim_date}} | valor {{$d->dim_d_dimer_value}}
			</li>
		@endforeach
	</ul>
	<br>
	@endif
	@if($eval_hemoqthyro->count()>0)
	<h4>Pruebas tiroideas</h4>
	<ul>
		@foreach($eval_hemoqthyro->get() as $v)
			<?php  
			$d=$v->hemoqthyro;
			;?>
			<li>
			Fecha: {{$d->thyro_date}} | TSH: {{$d->thyro_tsh}}
			| T4 total: {{$d->thyro_t_4_total}}
			| T4 libre: {{$d->thyro_t_4_free}}
			</li>
		@endforeach
	</ul>
	<br>
	@endif
	@if($eval_hemoqtropo->count()>0)
	<h4>Troponina I</h4>
	<ul>
		@foreach($eval_hemoqtropo->get() as $v)
			<?php  
			$d=$v->hemoqtropo;
			;?>
			<li>
			Fecha: {{$d->tropo_date}} |
			valor: {{$d->tropo_trop_result}}
			</li>
		@endforeach
	</ul>
	<br>
	@endif
	@if($eval_pepqnatr->count()>0)
	<h4>Péptido atrial natriurético</h4>
	<ul>
		@foreach($eval_pepqnatr->get() as $v)
			<?php  
			$d=$v->pepqnatr;
			;?>
			<li>
			Fecha: {{$d->pep_natr_date}}
			|
			péptido: {{$d->pep_natr_value}}
			|
			propéptido: {{$d->pro_pept_nat_value}}
			</li>
		@endforeach
	</ul>
	<br>
	@endif
	@if($eval_vih->count()>0)
	<h4>Prueba VIH</h4>
	<ul>
		@foreach($eval_vih->get() as $v)
			<?php  
			$d=$v->vih;
			;?>
			<li>
			Fecha: {{$d->hiv_date}}
			|
			resultado: {{$d->hiv_result}}
			</li>
		@endforeach
	</ul>
	<br>
	<br>
	<br>
	<br>
	<br>
	@endif
	{{--  --}}
@stop

@section('scripts')
@stop