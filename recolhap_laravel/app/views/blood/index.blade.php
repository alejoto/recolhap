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
			@if($d->thyro_t_4_total!=null)
			| T4 total: {{$d->thyro_t_4_total}}
			@endif
			@if($d->thyro_t_4_free!=null)
			| T4 total: {{$d->thyro_t_4_free}}
			@endif
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
			Fecha: {{$d->pep_natr_date}} |
			péptido: {{$d->pep_natr_value}}
			@if($d->pro_pept_nat_value!=null)
			| propéptido: {{$d->pro_pept_nat_value}}
			@endif
			
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
	@endif

	@if($eval_arterialgasses->count()>0)
	<h4>Gases arteriales</h4>
	<ul>
		@foreach($eval_arterialgasses->get() as $v)
			<?php  
			$d=$v->arterialgasses;
			;?>
			<li>
				Fecha {{$d->bld_gass_date}} 
				| FIO2 {{$d->bld_gass_fio2}}%
				| pH {{$d->bld_gass_ph}}
				| paCO2 {{$d->bld_gass_paco2}}
				| paO2 {{$d->bld_gass_pao2}}
				| HCO3 {{$d->bld_gass_hco3}}
			</li>
		@endforeach
	</ul>
	<br>
	@endif


	@if($eval_hepatic->count()>0)
	<h4>Función hepática</h4>
	<ul>
		@foreach($eval_hepatic->get() as $v)
			<?php  
			$d=$v->hepatic;
			;?>
			<li>
				Fecha {{$d->hep_date}} 
				| AST {{$d->hep_ast}}
				| ALT {{$d->hep_alt}}
				| FAL {{$d->hep_fal}}
				@if($d->hep_ggt!=null)
				GGT {{$d->hep_ggt}}
				@endif
				@if($d->hep_albumin!=null)
				Albúmina {{$d->hep_albumin}}
				@endif
				@if($d->bili_tot!=null)
				Bilirrubina total {{$d->bili_tot}}
				@endif
				@if($d->bili_dir!=null)
				Bilirrubina directa {{$d->bili_dir}}
				@endif
			</li>
		@endforeach
	</ul>
	<br>
	@endif

	@if($eval_coag->count()>0)
	<h4>Pruebas de coagulación</h4>
	<ul>
		@foreach($eval_coag->get() as $v)
			<?php  
			$d=$v->coag;
			;?>
			<li>
				Fecha {{$d->coag_date}} 
				| TPT {{$d->hep_tpt}}
				| TP {{$d->hep_tp}}
				| INR {{$d->hep_inr}}
			</li>
		@endforeach
	</ul>
	<br>
	@endif


	@if($eval_renal->count()>0)
	<h4>Función renal</h4>
	<ul>
		@foreach($eval_renal->get() as $v)
			<?php  
			$d=$v->renal;
			;?>
			<li>
				Fecha {{$d->renal_date}} 
				| Creatinina {{$d->creat}}
				@if($d->bun!=null)
				| BUN {{$d->bun}}
				@endif
			</li>
		@endforeach
	</ul>
	<br>
	@endif


	@if($eval_reuma->count()>0)
	<h4>Factor reumatoideo</h4>
	<ul>
		@foreach($eval_reuma->get() as $v)
			<?php  
			$d=$v->reuma;
			;?>
			<li>
				Fecha {{$d->reuma_date}} 
				| Factor reumatoideo 
				@if($d->reuma_fr=='pos')
				positivo
				@else 
				negativo
				@endif
			</li>
		@endforeach
	</ul>
	<br>
	@endif


	@if($eval_reumaqana->count()>0)
	<h4>Anticuerpos antinucleares ANA</h4>
	<ul>
		@foreach($eval_reumaqana->get() as $v)
			<?php  
			$d=$v->reumaqana;
			;?>
			<li>
				Fecha {{$d->ana_date}} 
				| ANA (Anticuerpos antinucleares)
				@if($d->ana_result=='pos')
				positivo
				@else 
				negativo
				@endif
			</li>
		@endforeach
	</ul>
	<br>
	@endif


	@if($eval_reumaqanca->count()>0)
	<h4>Anticuerpos citoplasmáticos antineutrófilos</h4>
	<ul>
		@foreach($eval_reumaqanca->get() as $v)
			<?php  
			$d=$v->reumaqanca;
			;?>
			<li>
				Fecha {{$d->anca_date}} 
				| ANCA citoplasmático 
				@if($d->anca_c_anca=='pos')
				positivo
				@else 
				negativo
				@endif
				| ANCA perinuclear
				@if($d->anca_p_anca=='pos')
				positivo
				@else 
				negativo
				@endif
			</li>
		@endforeach
	</ul>
	<br>
	@endif

	@if($eval_reumaqantilip->count()>0)
	<h4>Anticuerpos antifosfolípidos</h4>
	<ul>
		@foreach($eval_reumaqantilip->get() as $v)
			<?php  
			$d=$v->reumaqantilip;
			;?>
			<li>
				Fecha {{$d->antilip_date}} 
				| Anticardiolipina Ig G 
				@if($d->antilip_acl_g=='pos')
				positivo
				@else 
				negativo
				@endif
				| Anticardiolipina Ig M 
				@if($d->antilip_acl_m=='pos')
				positivo
				@else 
				negativo
				@endif
				| Anticoagulante Lúpico 
				@if($d->antilip_a_coag_lup=='pos')
				positivo
				@else 
				negativo
				@endif
				| Antiglicoprotenía beta 2 
				@if($d->antilip_anti_b2gp=='pos')
				positivo
				@else 
				negativo
				@endif
			</li>
		@endforeach
	</ul>
	<br>
	@endif


	@if($eval_reumaqcitrul->count()>0)
	<h4>Anticuerpos anticitrulina</h4>
	<ul>
		@foreach($eval_reumaqcitrul->get() as $v)
			<?php  
			$d=$v->reumaqcitrul;
			;?>
			<li>
				Fecha {{$d->citrul_date}} 
				| resultado
				@if($d->citrul_a_citrul=='pos')
				positivo
				@else 
				negativo
				@endif
			</li>
		@endforeach
	</ul>
	<br>
	@endif

	@if($eval_reumaqenas->count()>0)
	<h4>Anticuerpos antinucleares antiENAs</h4>
	<ul>
		@foreach($eval_reumaqenas->get() as $v)
			<?php  
			$d=$v->reumaqenas;
			;?>
			<li>
				Fecha {{$d->enas_date}} 
				| Anti Ro/SS-A Anti 
				@if($d->enas_anti_ro=='pos')
				positivo
				@else 
				negativo
				@endif
				| Anti La/SS-B 
				@if($d->enas_anti_la=='pos')
				positivo
				@else 
				negativo
				@endif
				| Anti Smit
				@if($d->enas_anti_smith=='pos')
				positivo
				@else 
				negativo
				@endif
				| Anti RNP 
				@if($d->enas_anti_rnp=='pos')
				positivo
				@else 
				negativo
				@endif
				| Anti U1 RNP (snRNP70)
				@if($d->enas_antiRNP70=='pos')
				positivo
				@else 
				negativo
				@endif
				
				| Anti U3 RNP (anti fibrilarina)
				@if($d->enas_anti_u3=='pos')
				positivo
				@else 
				negativo
				@endif
				 
				| Anti Jo1
				@if($d->enas_antijo=='pos')
				positivo
				@else 
				negativo
				@endif
				| Anti Scl
				@if($d->enas_anti_scl=='pos')
				positivo
				@else 
				negativo
				@endif
			</li>
		@endforeach
	</ul>
	<br>
	@endif


	@if($eval_reumaqspana->count()>0)
	<h4>Anticuerpos antinucleares por tipos</h4>
	<ul>
		@foreach($eval_reumaqspana->get() as $v)
			<?php  
			$d=$v->reumaqspana;
			;?>
			<li>
				Fecha {{$d->spana_date}} 
				| Anticentrómero 
				@if($d->spana_ctmere=='pos')
				positivo
				@else 
				negativo
				@endif
				| Anti RNA polimerasa 
				@if($d->spana_anti_rna=='pos')
				positivo
				@else 
				negativo
				@endif
				| Anti dsDNA
				@if($d->spana_anti_dna=='pos')
				positivo
				@else 
				negativo
				@endif
			</li>
		@endforeach
	</ul>
	@endif
	<br>
	<br>
	<br>
	<br>
	<br>
@stop

@section('scripts')
@stop