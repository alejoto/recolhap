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
				</div>
			</div>
			<div class="container recolhap_left">
				<h1>Restablecer contrase&ntilde;a</h1>
				@if($still>0)
					<div id="enter_new_pwd_form">
						Ingrese el correo asociado a su cuenta de usuario RECOLHAP y la contrase&ntilde;a dos veces.
						El correo debe coincidir con la cuenta desde donde se hizo la solicitud para poder 
						restablecer la contrase&ntilde;a.
						<br>
						<br>
						<div id="mssg" class="text-error"></div>
						<input type="email" name="email" id='email' placeholder='email'>
						<br>
						<input type="password" name='pwd1' id='pwd1' placeholder='nueva contrase&ntilde;a'>
						<br>
						<input type="password" name='pwd2' id='pwd2' placeholder='confirmar contrase&ntilde;a'>
						<input type="hidden" name='token' id='token' value='{{$token}}'>
						<br>
						<button id='submit' class='btn'>Restablecer contrase&ntilde;a</button>
						<br>
					</div>
					<div id="show_success">
						<h1 id="success" class="text-success"></h1>
						<a href="{{URL::to('/')}}" class='text-info'>Ir a la p&aacute;gina de ingreso de RECOLHAP</a>
					</div>
				@else
					No es posible restablecer contrase&ntilde;a, probablemente el mecanismo de
					restablecimiento ya caduc&oacute;.  Regrese a la p&aacute;gina de RECOLHAP y solicite nuevamente restablecer contrase&ntilde;a.
					<br>
					<a href="{{URL::to('/')}}" class='text-info'>Ir a la p&aacute;gina de ingreso de RECOLHAP</a>
				@endif
				<br>
				<br>
			</div>
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
{{HTML::script('assets/js/hmdv1.js');}}

<script type="text/javascript">
	$(function(){
		$('#show_success').hide();
		$('#submit').click(function(e){
			e.preventDefault();
			$('#mssg').html('');
			var email=$('#email').val();
			var pwd1=$('#pwd1').val();
			var pwd2=$('#pwd2').val();
			var token=$('#token').val();
			if (email.trim()=='') {
				$('#email').focus();
				$('#mssg').html('No puede dejar campos vac&iacute;os');
			} else if ( !validateEmail(email) ) {
				$('#email').focus();
				$('#mssg').html('Ingrese direcci&oacute;n de correo v&aacute;lida');
			} else if  (pwd1.trim()=='') {
				$('#pwd1').focus();
				$('#mssg').html('No puede dejar campos vac&iacute;os');
			} /*else if ( $('#pwd1').val().length <= 4) {
				('#pwd1').focus();
				$('#mssg').html('Contrase&ntilde;a m&iacute;nimo 5 caracteres');
			}*/	
			
			else if (pwd2.trim()=='') {
				$('#pwd2').focus();
				$('#mssg').html('No puede dejar campos vac&iacute;os');
			} else if(pwd1!=pwd2) {
				$('#pwd1').val('');
				$('#pwd2').val('');
				$('#mssg').html('Ambas contrase&ntilde;as deben coincidir');
			} else {
				var base=$('#base').html();
				$.post(
					base+'/pwdreset',
					{email:email,pwd1:pwd1,token:token},
					function(d){
						if (d==1) {
							$('#show_success').show('fast');
							$('#success').html('Contrase&ntilde;a fue cambiada satisfactoriamente')
							;
							$('#enter_new_pwd_form').hide('fast');
						} else if (d==2) {
							$('#show_success').show('fast');
							$('#success').html('');
							$('#mssg').html('No fue posible restablecer contrase&ntilde;a!'
								+'<br>Debe solicitar nuevamente restablecer '
								+'clave en la p&aacute;gina de ingreso.');
						}
					}
					)
				;
			}
		});
	});
</script>


