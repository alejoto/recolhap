@extends('layouts.main')
@section('content')
<div class="container recolhap_left">
	<div class="row">
		<div class="offset2 span8">
			<h1>
				Administrador de accesos
			</h1>
			<h3 class="muted">Institución: {{$u->investigator->hospital->hospital_name}}</h3>
			@if($rol<=3)
				@include("accesslist.inactive")
			@endif

			@include("accesslist.regularinactive")
			<hr>
			@if($u->rol==1||$u->rol==2)
				@include('accesslist.general_admin')
			@endif
			
			@include("accesslist.regular")
		</div>

	</div>
	<hr>
	
</div>
<br>
@stop

@section('scripts')

{{HTML::script('assets/js/acl.js');}}

@stop