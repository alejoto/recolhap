<div id="modal_register" class="modal hide fade recolhap_left" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-header ">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		<h2 id="myModalLabel">Registrarse por primera vez</h2>
	</div>
	<div class="modal-body registerheight">
		<a href="" id="already_subscribed" >
			<small class="text-info">Verifique si ya está registrado</small>
		</a>
		<a href="" id="hide_already_subscribedlist" class="text-info">
			<small>(Ocultar)</small>
		</a>
		<div id="alreadysubscribed_list">
			<ul>
				@foreach(User::all() as $u)
					@if(isset($u->investigator->ivt_name))
						<li>{{$u->investigator->ivt_name}} {{$u->investigator->ivt_surname}}</li>
					@endif
					
				@endforeach
			</ul>
			
		</div>
		<br>
		ciudad 
		<a href="" id="change_city" class="text-info" >
			<spam class="text-info" id="selected_city"></spam>
			(cambiar)
		</a>
		<br>
		<select name="" id="city_recolhap" class="input-xlarge required_">
			<option value=""></option>
			@foreach(City::all() as $c)
				<option value="{{$c->id}}">{{$c->name}}</option>
			@endforeach
			<option value="newcity">...agregar (no esta en el listado)</option>
		</select>
		<div id="newcity_form">
			<input type="text" id='newcityname' class="input-xlarge" placeholder='agregar ciudad'>
			<br>
			<a href="" id="add_new_city">Agregar </a> |
			<a href="" id="newcity_form_cancel">cancelar</a>
		</div>
		<div id="cascade1_register">
			Instituci&oacute;n 
			<a href="" id="change_clinic" class="text-info" >
				<spam class="text-info" id="selected_clinic"></spam>
				(cambiar)
			</a>
			(a la cual est&aacute; principalmente vinculado)
			<br>
			<select name="" id="clinic_recolhap" class="input-xlarge required_"></select>
			<div id="newclinic_form">
				<input type="text" class="input-xlarge" id="newclinicname" placeholder='Agregar nombre instituci&oacute;n'>
				<br>
				<a href="" id="add_new_clinic">Agregar </a> |
				<a href="" id="newclinic_form_cancel">cancelar</a>
			</div>
			<div id="cascade2_register">
				<!-- Nombres
				<br> -->
				<br><br>
				<input type="text" class="input-xlarge required_" id="ivt_name" placeholder='NOMBRES'>
				<br><br>
				<!-- Apellidos
				<br> -->
				<input type="text" class="input-xlarge required_" id="ivt_surname" placeholder='APELLIDOS'>
				<br><br>
				<!-- Cédula
				<br> -->
				<input type="text" class="input-xlarge required_" id="ivt_doc" placeholder='NUMERO CEDULA'>
				<br><br>
				<!-- Especialidad
				<br> -->
				<select name="" id="ivt_specialty" class="input-xlarge required_">
					<option value="">ESPECIALIDAD</option>
					<option value="NEUMOLOGO">neumologo</option>
					<option value="INTERNISTA">medicina interna</option>
					<option value="MD_GENERAL">médico general digitador</option>
					<option value="OTRO_MD">otra especialidad medicina</option>
					<option value="DIGITADOR_NO_MD">digitador no médico</option>
				</select>
				<br><br>
				<!-- Celular
				<br> -->
				<input type="text" id="ivt_mobile" class="input-xlarge required_" placeholder='CELULAR'>
				<br>
				<br>
				<input type="text" id="mail" class="input-xlarge required_" placeholder='EMAIL'>
				<br>
				<br>
				<input class="input-large required_" id="pwd1" name="pwd1" type="password" placeholder="CONTRASE&Ntilde;A">
				<br>
				<br>
				<input class="input-large required_" id="pwd2" name="pwd2" type="password" placeholder="CONFIRMAR CONTRASE&Ntilde;A">
				<br>
				<div  id="loading_reg" style="display:none">
					<img src="assets/images/ajax-loader.gif"/>
				</div>
				
			</div>
		</div>

	</div>
	<div class="modal-footer">
		<div class="control-group error" id="msg_register"></div>
      <!--
      * button name:          register_button
      * Triggers:             hap_registration()
      * Brieff description:   Saving new user data. Validates correct email, password length and check if is an existing email
      * js associated file:   login.js
      * php AJAX:             modules/register/ajax_register.php
  -->
  		<a class="btn btn-primary" id="register_button" >Registrarse</a>
  		<a class="btn btn-info" data-dismiss="modal" aria-hidden="true" >Cerrar</a>
  	</div>
</div>

