<!DOCTYPE html>
<html>
	<head>
		<title>RECOLHAP</title>
		<link href="../../assets/stylesheets/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="../../assets/stylesheets/neumo.css" rel="stylesheet" media="screen">
		<link rel="icon"   type="image/png"  href="../../assets/images/favicon.ico">
		<link rel="stylesheet" href="../../assets/fonts/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Play:400,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oxygen:400,700,300' rel='stylesheet' type='text/css'>
		{{HTML::style('assets/css/recolhap.css')}} 
		@yield('header')
	</head>
	<body>
		<div class="recolhap_header1">
			<div class="row-fluid">
				<div class="span3">
					<p class="recolhap_play">
						RECOLHAP
						<img class='recolhap_head_img' src="../../assets/images/logo-gray.png">
					</p>
				</div>
				<div class="span5">
					<div class="btn-group">
						<a href="{{URL::to('patients')}}" class="btn btn-inverse" id="change_patient_btn">
							Cambiar paciente
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
					<a href="{{URL::to('userdata')}}" data-toggle="tooltip" title="Editar perfil" data-placement="bottom">doctor </a>
				</div>
			</div>
		</div>
		@yield('content')
		<div id="footer">
			<div class="row-fluid">
				<div class="span6">
					<p class="recolhap_footer1">
						<img class='recolhap_head_img'  src="../../assets/images/logo-gray.png"> 
						Recolhap &copy; 
						- Registro colombiano de hipertensi&oacute;n arterial pulmonar.
					</p>
				</div>
				<div class="span6">
					<div class="recolhap_footer">
						HMD &copy; - Medell&iacute;n, Colombia. 2014
						<img src="../../assets/images/hmdlogo.png" class='recolhap_bottom' >
					</div>
				</div>
			</div>
		</div>
	</body>
</html>