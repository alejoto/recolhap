@extends('layouts.main')
@section('content')
<div class="container recolhap_left">
	<h1>
		Administrador de accesos
	</h1>
	<h2>Usuarios activos</h2>
	@if($u->rol==1||$u->rol==2)
		@include('accesslist.general_admin')
	@endif
	
	@include("accesslist.regular")
	<hr>
	@if($rol<=3)
	@include("accesslist.inactive")
	@endif
	@include("accesslist.regularinactive")
	
{{$u->investigator->hospital->hospital_name}}
	edit permissions
</div>
<br>
@stop

@section('scripts')

{{HTML::script('assets/js/acl.js');}}

@stop