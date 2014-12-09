@extends('layouts.main')
@section('content')

<div class="container recolhap_left">
	@yield('back')
	<br>
	<br>
	<div class="row">
		<div class="span3">
			<b>Men&uacute; de navegaci&oacute;n r&aacute;pida</b>
			<div class="row">
				@include('layouts.left_menu')
			</div>
		</div>
		<div class="span9">
			<br>
			<div class="row">
				@include('layouts.patientinfo')
			</div>
		</div>
	</div>
	<div class="row">
		<div class="span3">
			@yield('leftcontent')
		</div>
		<div class="span9">
			@yield('maincontent')
		</div>
	</div>
</div>
{{--HTML::script('assets/js/ajax_forms.js');--}}
@stop

