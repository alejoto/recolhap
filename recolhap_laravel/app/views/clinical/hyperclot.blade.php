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
<div id="hiperclot">
	<div class="row">
		<div class="well well-small span8">
			<center>
				<h4>ESTADOS DE HIPERCOAGULABILIDAD</h4>
			</center>
		</div>
	</div>
	<?php  
	$hyperclot='antiphs_syndr|Síndrome antifosfolípido,protr20210_mutation|Mutación gen prot 20210,'.
		'c_protein_resist|Resistencia a la proteina C act,antitrbiii_deficiency|Deficiencia antitrombina III,prot_s_deficiency|Deficiencia proteína S,'.
		'prot_c_deficiency|Deficiencia proteína C,unspecific_tromboph|Trombofilia no específica,hyperhomocist|Hiperhomocisteinemia,'.
		'neoplasia|Enfermedad neoplásica,esplenectomy|Esplenectomizado';
	$hyperclot=explode(',', $hyperclot);
	
	?>
	@foreach($hyperclot as $h)
	<?php 
	$h=explode('|',$h); 
	$chk='';
	if ($eval_hyperclott->count()>0) {
		if ($eval_hyperclott->first()->hyperclotting->$h[0]=='true') {
			$chk='checked';
		}
	}
	?>
		<div class="row">
			<div class="span2"></div>
			<div class="span3">
				<input type="checkbox" id="{{$h[0]}}" class="hiperclot" {{$chk}}>
				{{$h[1]}}</div>
		</div>
	@endforeach

	
	<br/>
	<div class="row">
		<div class="span2" style="text-align:right">
			Otros trastornos
		</div>
		<div class="span6">
			<?php 
			$val='';

			if ($eval_hyperclott->count()>0) {
				$val=$eval_hyperclott->first()->hyperclotting->other_hyperclott_disord;
				$val='value="'.$val.'"';
			}
			?>
			<input type="text" id="other_hyperclott_disord" class="span6 hiperclot" placeholder="Solo trastornos asociados a hipercoagulabilidad" {{$val}}>
			<br/>
			<?php 
			//echo $row['other_hyperclott_disord'];
			?>
		</div>
	</div>
	<div class="row">
		<div class="span8"><br><br>
	    <a id="hiperclot_save" class="btn">Guardar</a><br><br></div>
	</div>
</div>


@stop

@section('scripts')
{{HTML::script('assets/js/hyperclott.js');}}
@stop