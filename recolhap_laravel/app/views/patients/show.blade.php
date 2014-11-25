@extends('layouts.main')
@section('content')

<div class="container recolhap_left">
	<h1>Paciente {{$p->name}} {{$p->surn}}</h1>
	<h3 class="muted">documento {{$p->patient_id}}</h3>
	dia nacimiento {{$p->birthd}}
	
</div>

@stop