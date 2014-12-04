@extends('layouts.main')
@section('content')

<div class="container" id='parent_patient_forms'>
	<div class="row-fluid">
		<form action="" class="form-horizontal span5 patient_form" onsubmit="return false">
			<div class="patient_form2">
				<center>
					<h2 class="patient_title2">RECOLHAP</h2>
					<br>
					<img src="../../assets/images/logo.png" class='patient_img1'>
					<br>
					<p class="patient_paragraph">
						<br>
						Registro Multic&eacute;ntrico Colombiano
				        <br>
				        de Hipertensi&oacute;n Arterial Pulmonar
					</p>
				</center>
				<br>
			</div>
			<blockquote>
				<p>Selecciona tipo y n&uacute;mero de documento:</p>
			</blockquote>
			<br>
			<div class="patient_select">
				<div class="control-group pnt_ctrl">
					<div class="controls pnt_ctrl2">
						<div id="idtypectr" class="input-prepend">
							<span class="add-on"><i class="icon-list-alt"></i></span>
							<select name="docid" id="docid">
								<option value="" >Tipo documento</option>
								<option value="cc">C&eacute;dula</option>
								<option value="rc">Registro Civil</option>
								<option value="ti">Tarjeta de Identidad</option>
								<option value="ce">C&eacute;dula Extranjera</option>
								<option value="pas">Pasaporte</option>
							</select>
						</div>
					</div>
				</div>
				<div class="control-group pnt_ctrl">
					<label class="control-label" for="idnumber"></label>
					<div class="controls pnt_ctrl2">
						<div id="idnumberctr" class="input-prepend input-append">
							<span class="add-on"><i class="icon-user"></i></span>
							<input type="text" id="idnumber" placeholder="N&uacute;mero identidad"/>
							<button class="btn" type="button"> <i class="icon-search"></i></button>
						</div>
					</div>
				</div>
				<a href="{{URL::to('patients/all')}}" class='text-info'>Ver lista de pacientes ( {{Auth::user()->investigator->hospital->hospital_name}})</a>
			</div>
		</form>
		<div class="span6 offset1 ptn_right1">
			<div id="enterpatient">
				<div class="page-header ptn_new"></div>
				<div class="alert alert-info fade in pt_enter">
					<button type="button" class="close" data-dismiss="alert">&times;</button>
					Ingrese PACIENTE NUEVO o verifique documento.
					<h5>
						Luego de registrar paciente es obligatorio ingresar los resultados del CATETERISMO 
						CARDIACO DERECHO para ingresar cualquier dato cl&iacute;nico
					</h5>
				</div>
				<form action="{{URL::to('patients/store')}}" class="pt_enter_form" method='POST'>
					<input type="text" id="docidnum" name="docidnum">
					<input type="text" id="name" name="name" placeholder="Nombre completo">(*)<br>
					<input type="text" id="surname" name="surname" placeholder="Apellidos">(*)<br>
					<select id="gender" name="gender">
						<option value="">G&eacute;nero</option>
						<option value="male">Hombre</option>
						<option value="female">Mujer</option>
					</select>(*)<br>
					<div class="row">
						<div class="span12 pt_bthday">
							Fecha nacimiento (aaaa/mm/dd)
						</div>
					</div>
					<div class="row">
						<div class="span12 btd_detail">
							<input type="text" id="year" name="year" placeholder="A&ntilde;o" class="span3"  maxlength="4">
							<input type="text" id="month" name="month" placeholder="Mes" class="span3" maxlength="2">
							<input type="text" id="day" name="day" placeholder="D&iacute;a" class="span3" maxlength="2">
							(*)
						</div>
					</div>
					<input type="text" id="citybth" name="citybth" placeholder="Ciudad nacimiento">(*)<br>  
					<input type="text" id="statebth" name="statebth" placeholder="Departamento">(*)<br>
					<input type="text" id="countrybth" name="countrybth" placeholder="Pa&iacute;s de origen">(*)
					<br>
					DEBE LLENAR TODOS LOS CAMPOS O DE LO CONTRARIO EL BOT&Oacute;N DE GUARDAR NO APARECER&Aacute;
					<br>
					<div class="btn-group" id="group_save_patient">
						<button type="submit" class="btn btn-info pnt_ctrl2" id="save_patient">
							Guardar datos de paciente
							<i class="icon-circle-arrow-down"></i>
						</button>
						<br><br>
						<br><br>
					</div>
				</form>
			</div>
			<div id="patientexist" class="pt_exists">
				<br>
				<br>
				<br>
				<br>
				<div class="row alert alert-success">
					<br>
					<div class="span3">
						<img src="{{URL::to('assets/images/male.png')}}" alt="" id="male">
						<img src="{{URL::to('assets/images/female.png')}}" alt="" id="female">
					</div>
					<div class="span8">
						<div class="row">
							<div class="offset1 span10">
								<h4>
									<spam id="the_sick_name"></spam>
									<spam id="the_sick_surn"></spam>
								</h4>
							</div>
						</div>
						<div class="row">
							<div class="offset1 span1">
								documento <spam id="the_sick_patient_id"></spam>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="offset1 span11">
							<hr>
						</div>
					</div>
					<div class="row">
						<div class="offset1 span6">
							Fecha nto <spam id="the_sick_birthd"></spam>
						</div>
					</div>
					<div class="row">
						<div class="offset1 span5">
							Nacionalidad
							<br>
							<spam id="the_sick_countrybth"></spam>
						</div>
						<div class="offset1 span5">
							Ciudad origen
							<br>
							<spam id="the_sick_citybth"></spam>
						</div>
					</div>
				</div>
				<a href="" id='start_patient_register' class='btn btn-link'>Ir al registro</a>
			</div>
		</div>
	</div>
</div>
@stop 

@section('scripts')

{{HTML::script('assets/js/medic.js');}}
{{HTML::script('assets/js/patients.js');}}

@stop