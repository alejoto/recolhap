$(function(){
    //

	$("#button_modal").click(function(){ 
		$("#msg").html("");
	}); //activate modal window

    /*validateEmail: uses reg exp and returns true or false when matching syntax with valid email*/
    function validateEmail(sEmail) {
		var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
		if (filter.test(sEmail)) {
			return true;
		}
		else {
			return false;
		}
	}



    /*checking valid email with blur function*/

    $('#usr').blur(function(){

		if (!validateEmail($('#usr').val())) {
			$('#usr').focus();
			$("#msg").html("Ingrese email v&aacute;lido");
			$("#forgot_pwd").hide();
		}
		else
		{
			$("#msg").html("");
			$("#forgot_pwd").show();
		}
	});



    /**
	*
	*
	* ------------------------------------------------------------------------------
	* Function name:          hap_login_method ()
	* Description:            Excecutes filters before ajax user validation
	*                         If validation is right, executes ajax user
	*                         validation.
	* Depend on:              jquery
	* Dependant:              modules/login/ajax_login.php (iniciates 
	*                         $_SESSION['username'] php variable)
	*/
	function hap_login_method (){
		$("#msg").text("");

			//Error message when both fields are empty
			if ($('#usr').val()==""&&$('#pwd').val()=="") {
				$("#msg").html("<label class='control-label' "
					+"for='inputError'>No puede dejar campos "
					+"vac&iacute;os.</label>");
				$('#usr').focus();
			}

			//Error message when user field is empty
			else if ($('#usr').val()=="") {
				$("#msg").html("<label class='control-label' for='inputError'>ingrese su email.</label>");
				$('#usr').focus();
			}

			//Error message when password field is empty
	      else if ($('#pwd').val()=="") {
	  		$("#msg").html("<label class='control-label' for='inputError'>Debe ingresar su contrase&ntilde;a.</label>");
	  		$('#pwd').focus();
	  	}

	    //if no empty, run ajax
	    else {
			$("#loading").show();
			var base=$('#base').html();
			$.post(
				base+'/login',
					//"modules/login/ajax_login.php",
					{ usr:$('#usr').val(), pwd:$('#pwd').val() },
					function(d) {
						if(d==1) {
							window.location.href=base+'/search';
						} else if (d==2) {
							window.location.href=base+'/accesslist';
						} else { 
							$("#msg").html("<label class='control-label' "
								+"for='inputError'>Verifique usuario y "
								+"contrase&ntilde;a. "
								+"<br/>o reg&iacute;strese.</label>");
						}
						$("#loading").html('');
					}
					)
			;
		}
	}


    /*
	*
	*
	* ------------------------------------------------------------------------------
	* Function name:          No name
	* Description:            Trigghers "hap_login_method()" with enter key or 
	*                         #login button (modules/login/login.php)
	*                         If validation is right, executes ajax user
	*                         validation.
	* Depend on:              hap_login_method(), #login button on 
	*                         modules/login/login.php
	* Dependant:              
	*/
    $("#login").click(function(){hap_login_method();});
    $("#pwd").keyup(function(event){if(event.keyCode == 13){hap_login_method();} });

    /*Triggering ajax for sending password to email*/
    $('#forgot_pwd').click(function(){
    	var email=$('#usr').val().trim();
    	var base=$('#base').html();
    	$.post(base+'/newpwd',{email:email},function(d){
    		if (d==1) {
    			$('#msg').html('SE HA ENVIADO UN EMAIL CON LAS INSTRUCCIONES '
    				+'PARA RESTABLECER CONTRASE&NTILDE;A.  REVISE LA BANDEJA '
    				+'DE ENTRADA Y LA CARPETA SPAM (CORREO NO DESEADO)')
    			;
    			$('#forgot_pwd').hide('fast');
    		} else if (d==2) {
    			$('#msg').html('Cuenta correo inexistente. '
    				+'Cierre este cuadro y abra "registrarse por primera vez" '
    				+'o verifique el correo ingresado')
    			;
    			$('#forgot_pwd').hide('fast');
    		}
    	});
		/*$.post("modules/login/rememberpwd.php",{usr:$('#usr').val()}, function(data2){
			$("#msg").html(data2);
		});*/
	});


    /*-----end of login--------------------------------------------------------------*/
    /*-------------------------------------------------------------------------------*/
    /*-------------------------------------------------------------------------------*/
    /*-------------------------------------------------------------------------------*/
    /*-------------------------------------------------------------------------------*/



    /*-------------------------------------------------------------------------------*/

    /*------register 'new user' section----------------------------------------------*/



    /*checking valid email when blurring*/

    $('#mail').blur(function(){
		if (!validateEmail($('#mail').val()))
		{
			$('#mail').focus();
			$("#msg_register").html("<div class='alert alert-error'>Ingrese email v&aacute;lido</div>");
		}
		else
		{
			$("#msg_register").html("");
		}
	});



	function hap_registration() {
		var pwd_reg=$('#pwd1').val();

		//iteration on each field checking empty values
		var i=0;
		$('.required_').each(function(){
			//checking empty fields
			if ( $(this).val()=='' ) {
				$("#msg_register").html(
                    //message when finding at least one required 
                    //emtpy field
                    "<div class='alert alert-error'>No puede dejar "
                    +"campos vac&iacute;os.</div>");

				if (i==0) {
                    //i as 0 identifies the first field. So it will
                    //focus the first empty field, besides existing
                    //many more emtpy fields
                    $(this).focus();
                    i=i+1;
            	}

        	}
    	});

        //after emtpy field checking, if i remains as zero, it means
        //all required fields were filled
        if (i==0) {

			//password must match with confirmation field
            if ($('#pwd1').val()!=$('#pwd2').val()) {

				$("#msg_register").html(
                    //Message when password not matching with 
                    //confirmation field
                    "<div class='alert alert-error'>Ambas claves deben coincidir.</div>");

        	}

            //minimun password length are five characters
            else if (pwd_reg.length <5) {
				$("#msg_register").html(
					"<div class='alert alert-error'>Clave debe contener mas de 5 caracteres.</div>"
					)
				;
				$('#pwd1').focus();
        	}

            else {
				//Action will be triggered below as
				//password matched with confirmation request
				//and length were greater than 5 characters

				//"wait while loading" icon displayed
				$("#loading_reg").show();

				//removing all error messages
				$("#msg_register").html("");

				//base url for ajax request
				var base=$('#base').html();

				$.post(
					base+'/login/register',
					{
						clinic_recolhap:$('#clinic_recolhap').val(),
						ivt_name:$('#ivt_name').val(),
						ivt_surname:$('#ivt_surname').val(),
						ivt_doc:$('#ivt_doc').val(),
						ivt_specialty:$('#ivt_specialty').val(),
						ivt_mobile:$('#ivt_mobile').val(),
						mail:$('#mail').val(),
						pwd1:$('#pwd1').val()
					}, 
					function(d) {
						if (d==1) {
							$("#msg_register").html(
								"<div class='alert alert-error'>"
								+'Usuario ya existe.  Cierre esta ventana  '
								+'y use el link "Entrar" en la parte superior derecha. '
								+"SI OLVID&Oacute; LA CONTRASEÑA ALL&Iacute; PODR&Aacute; RECUPERARLA"
								+"</div>"
								)
							;
						} else if (d==2) {
							window.location.href=base+'/search';
						}

						$("#loading_reg").hide();

					}
					)
				;
        	}
    	}

	}



	//Trigger user registration

	/**
	*
	*
	* ------------------------------------------------------------------------------
	* Function name:          No name
	* Description:            Trigghers "hap_registration()" with enter key or 
	*                         #register_button button (modules/login/login.php)
	* Depend on:              hap_registration(), #register_button 
	*                         modules/login/login.php
	* Dependant:              
	*/

	$("#register_button").click(function(){hap_registration()});

	$("#pwd2").keyup(function(event){if(event.keyCode == 13){hap_registration();} });
});