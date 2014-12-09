@extends('layouts.clinical')

@section('back')
<a href="{{URL::to('patient/'.$patient_id.'/clinic')}}" class="text-info">
	Regresar a lista de evaluaciones paciente
</a>
@stop

@section('leftcontent')
<h3 id="left_title">
	Evaluaci&oacute;n<br>cl&iacute;nica
</h3>
<a class="btn span2" id="sel_anam">Anamnesis&EF</a>
<a class="btn span2" id="sel_hiperclot">Hipercoagulabilidad</a>
<a class="btn span2" id="sel_treatment">Tratamiento</a>
<a class="btn span2" id="sel_outcome">Fallecido?</a>
@stop

@section('maincontent')

@include('clinical.includes.anamnesis')
@include('clinical.includes.ex_fc')
@include('clinical.includes.hiperclot')
@include('clinical.includes.treatment')
@include('clinical.includes.outcome')

<br>

@stop

@section('scripts')
{{HTML::script('assets/js/clinic_eval.js');}}
@stop
