<!DOCTYPE html>
<html>
	<head>
		<title>RECOLHAP</title>
		{{HTML::style('assets/stylesheets/bootstrap.min.css')}}  
		{{HTML::style('assets/css/sticky-footer-navbar.css')}} 
		{{HTML::style('assets/stylesheets/neumo.css')}} 
		{{HTML::style('assets/fonts/css/font-awesome.min.css')}} 
		<!-- asset('img/photo.jpg'); -->
		<link rel="icon"   type="image/png"  href="{{asset('assets/images/favicon.ico')}}">
		<!-- <link rel="icon"   type="image/png"  href="../../assets/images/favicon.ico"> -->
		<!-- <link rel="stylesheet" href="../../assets/fonts/css/font-awesome.min.css"> -->
		<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
		
		{{HTML::style('assets/css/recolhap.css')}} 
		@yield('header')
	</head>
	<body>
		<div id="wrap">
			<div class='hide'  id='base'>{{URL::to('/')}}</div>
			<div class="recolhap_header1">
				<div class="row-fluid">
					<div class="span3">
						<p class="recolhap_play">
							RECOLHAP
							<img class='recolhap_head_img' src="
							{{asset('assets/images/logo-gray.png')}}">
						</p>
					</div>
					<div class="span5">
						<div class="btn-group">
							@if(Auth::user()->rol==1||Auth::user()->rol==2)
							<a href="{{URL::to('accesslist')}}" class="btn btn-inverse" id="admin_users_btn">
								Administrar usuarios
								<i class="icon-wrench icon-white"></i>
							</a>
							@endif 
							<a href="{{URL::to('search')}}" class="btn btn-inverse" id="change_patient_btn">
								Escoger paciente
								<i class="icon-user icon-white"></i>
							</a>
							<a href="{{URL::to('tables')}}" class="btn btn-inverse" id="tables_btn">
								Tablas
								<i class="icon-user icon-table"></i>
							</a>
							<a href="{{URL::to('stats')}}" class="btn btn-inverse" id="statistics_btn">
								Estad&iacute;sticas 
								<i class="icon-user icon-signal"></i>
							</a>
							<a href="{{URL::to('compromises')}}" class="btn btn-inverse">
								Compromiso
								<i class="icon-print"></i>
							</a>
							<a href="{{URL::to('help')}}" class="btn btn-inverse">
								Ayuda
								<i class="icon-question-sign"></i>
							</a>
							<a href="{{URL::to('login/logout')}}" class="btn btn-inverse">
								Salir
								<i class="icon-share-alt icon-white"></i>
							</a>
						</div>
					</div>
					<div class="span3 doctor_name">
						<a href="{{URL::to('userdata')}}" data-toggle="tooltip" title="Editar perfil" data-placement="bottom">HOLA DR.
							{{Auth::user()->investigator->ivt_name}} 
							({{Auth::user()->investigator->ivt_specialty}})
						 </a>
					</div>
				</div>
			</div>
			<!-- 
			| header is before
			|
			|
			main content
			|
			|
			|
			 -->
			@yield('content')

			<!-- 
			|
			|
			|
			main content
			|
			|
			| footer is below
			 -->
			 <div id="push"></div>
		</div>
		<div id="footer">
			<div class="row-fluid">
				<div class="span6">
					<p class="recolhap_footer1">
						<img class='recolhap_head_img'  src="{{asset('assets/images/logo-gray.png')}}"> 
						Recolhap &copy; 
						- Registro colombiano de hipertensi&oacute;n arterial pulmonar.
					</p>
				</div>
				<div class="span6">
					<div class="recolhap_footer">
						HMD &copy; - Medell&iacute;n, Colombia. 2014
						<img src="{{asset('assets/images/hmdlogo.png')}}" class='recolhap_bottom' >
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
{{HTML::script('assets/js/jquery.min.js');}}
{{HTML::script('assets/js/bootstrap.min.js');}}
{{HTML::script('assets/js/medic.js');}}
@yield('scripts')