@extends('layouts.main')
@section('content')
<div class="container recolhap_left">

<!--main content here-->

<div class="row">
    <!-- left column-->
    <div class="span3" style="margin-top: 0px;">
        <div class="row">
            <div class="span3" style="margin-top: 0px;">
            	<b>Men&uacute; de navegaci&oacute;n r&aacute;pida</b>
            	@include('layouts.left_menu')
            </div>
        </div>

        <div class="row">
            <div class="span3">
                <h3 id="left_title">Im&aacute;genes diagn&oacute;sticas</h3>
                <h4>Cateterismo derecho</h4>
                <a class="btn span2" id="showbas">Datos basales</a>
                <a class="btn span2" id="showrt" >Test vasorreactividad</a>
            </div>
        </div>
    </div>
    <!-- end of left column-->
    <!-- end of left column-->



    <!-- main content-->
    <div class="span9" style="margin-top: 40px;">
        <div class="row">
            <div class="span12">
                <a href="{{URL::to('cath/show/'.$patient_id)}}" class="text-info">
                    <i class="icon-share-alt "></i>
                    VOLVER A LISTA CATETERISMO DERECHO</a>
            </div>
        </div>
        <hr>
        <div class="row">
        	@include('layouts.patientinfo')
        </div>
        <br/>
        <div class="row" style="margin-left: 40px">
			@include('rightcath.basal')
			@include('rightcath.reactive')
			@include('rightcath.savesuccess')
        </div>
    </div>
    <!--end of main content-->
    <!--end of main content-->
</div>


</div>
@stop

@section('scripts')
{{HTML::script('assets/js/ajax_forms.js');}}
{{HTML::script('assets/js/right_catheter.js');}}
@stop