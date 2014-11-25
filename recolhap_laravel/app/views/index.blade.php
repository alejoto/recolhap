@extends('layouts.recolhap')
@section('header')
{{--nothing to add? leave it empty--}}
@stop

@section('content')

<div class="container recolhap-container" style="height: auto;">
	<br><br>
	<div class="row-fluid">

		<div class="span8 recolhap-header1" >
			<h2 class='recolhap-header2' >
				RECOLHAP 
				<img class='recolhap-img-intro'  src="assets/images/logo-gray.png">
			</h2>
		</div>
		<div class="span4">
			@if(Auth::check())
				{{Auth::user()->email}}
				 ha ingresado.
				<a href="{{URL::to('patients')}}" class='btn oxygen'>principal</a>
				<a href="{{URL::to('/login/logout')}}" class='btn btn-danger oxygen '>Salir</a>

			@else 
				<a href="#modal_login" id="button_modal" role="button"  data-toggle="modal">
					<b class='oxygen' >Entrar </b>
				</a>
				
				&nbsp; | &nbsp;

				<a href="#modal_register" role="button" class="" data-toggle="modal" >
					<b class='oxygen'>Registrarse</b>
				</a>&nbsp; | &nbsp;

				<a href="{{URL::to('help')}}" class=""  > 
					<b class='oxygen'>Ayuda</b>
				</a>
				@include('modules.login.login')
				@include('modules.register.register')
			@endif
		</div>
	</div>
</div>  


<!--// START Images Carousel-->
<div class="row-fluid" style="margin-top: 20px;">
	<div class="span12" style="margin: 0px auto;">
		<div id="banner">
			@include('modules/includes/carousel')
		</div>
	</div>
</div>
<!--// END Images Jquery-->


<div class="container recolhap-container2" >
	<div class="row-fluid recolhap-row1" >
		<div class="span4 alert recolhap-span1" >
			<img style="opacity: 0.7"src="assets/images/tiemporeal.png">
			<p class='recolhap-paragraph-intro' >
				Resultados en tiempo real 
			</p>
			<br>
			<div class='recolhap-paragraph-text'>
				An&aacute;lisis en tiempo real de los datos ingresados al Registro Colombiano Multic&eacute;ntrico de Hipertensi&oacute;n Arterial Pulmonar 
			</div>
			<br><br>
		</div>

		<div class="span4 alert recolhap-span1" >
			<img style="opacity: 0.7" src="assets/images/contribucion.png">
			<p class='recolhap-paragraph-intro'>
				Registro Multic&eacute;ntrico 
			</p>
			<br>
			<div class='recolhap-paragraph-text'>
				Es el m&aacute;s grande registro de Hipertensi&oacute;n Arterial Pulmonar de Colombia. Comprometidos a recopilar la mayor informaci&oacute;n posible 
				para identificar conductas terap&eacute;uticas innovadoras.
			</div>
			<br><br>
		</div>
		<div class="span4 alert recolhap-span1" >
			<img style="opacity: 0.7" src="assets/images/acceso.png">
			<p class='recolhap-paragraph-intro'>
				Acceso desde cualquier lugar 
			</p>
			<br>
			<div  class='recolhap-paragraph-text'> 
				Segura, &aacute;gil y confiable plataforma que puede ser usada desde cualquier lugar del mundo con una conexi&oacute;n de internet.</div>
			<br><br>
		</div>
	</div>
	<!--Footer-->
	<hr>
	<div   id="footer_index" class="row-fluid" style="margin-top: 0px; padding-left: 25px;">
		<div class="span4" style="color: #4A4C4C; font-family: 'Oxygen', sans-serif;">
			<a href="http://www.healmydisease.com/04Spanish/02HMDdescription.php" target="_blank">
				Acerca de HMD
			</a>
		</div>
		<div class="span4" style="color: #4A4C4C; font-family: 'Oxygen', sans-serif;">
			<a href="#myModal" data-toggle="modal" data-target="#myModal"> 
				Pol&iacute;tica de privacidad
			</a>
		</div>
		<div class="span4" style="color: #4A4C4C; font-family: 'Oxygen', sans-serif;">
			<a href="mailto:projectmanager@healmydisease.com" >
				Conctacto
			</a>
		</div>
		<br>
		@include('modules/includes/privacy')

		<br>
		<div class="row-fluid" style="margin-top: 0px;">
			<div class="span6" style="margin-top: 0px;"></div>
			<div class="span6" style="margin-top: 0px;">
				<a href="http://www.healmydisease.com" target="_blank" style="font-family: 'Oxygen', sans-serif; color: #4A4C4C;">
					<br>
					Heal My Disease &copy; 2013 - Medell&iacute;n - Colombia 
					<img src="assets/images/hmdlogo.png" style="weight: 56px; height: 29px; opacity: 0.7; margin-top: 0px auto;">
				</a>
				<br>
			</div>    
		</div>
	</div>
</div>
@stop

@section('scripts')
{{HTML::script('assets/js/hmdv1.js');}}
{{HTML::script('assets/js/login.js');}}
@stop