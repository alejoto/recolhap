$(function(){
    //

    $("#button_modal").click(function(){ $("#msg").html("");}); //activate modal window





    /*validateEmail: uses reg exp and returns true or false when matching syntax with valid email*/

    function validateEmail(sEmail) {

        var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;

        if (filter.test(sEmail)) {return true;}

        else {return false;}

    }



    /*checking valid email with blur function*/

    $('#usr').blur(function(){

      if (!validateEmail($('#usr').val()))

      {

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



    /*
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
            $.post("modules/login/ajax_login.php",{ usr:$('#usr').val(), pwd:$('#pwd').val() }, function(data) {
                if(data==1) {
                    document.location='modules/myaccount/myaccount.php?page=patients';
                }else
                {
                    $("#msg").html("<label class='control-label' "
                        +"for='inputError'>Verifique usuario y contrase&ntilde;a. "
                        +"<br/>o reg&iacute;strese.</label>");
                }
                $("#loading").hide();
            });
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
      $.post("modules/login/rememberpwd.php",{usr:$('#usr').val()}, function(data2){
        $("#msg").html(data2);
      });
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

    })



    function hap_registration() {



      var pwd_reg=$('#pwd1').val();

      if ($('#mail').val()==""|| $('#pwd1').val()==""|| $('#pwd2').val()=="") {

        $("#msg_register").html("<div class='alert alert-error'>No puede dejar campos vac&iacute;os.</div>");

        if ($('#mail').val()=="") $('#mail').focus();

        else if ($('#pwd1').val()=="") $('#pwd1').focus();

        else if ($('#pwd2').val()=="") $('#pwd2').focus();

      } 

      

      else if ($('#pwd1').val()!=$('#pwd2').val()) {

        $("#msg_register").html("<div class='alert alert-error'>Ambas claves deben coincidir.</div>");

      }

      else if (pwd_reg.length <5) {

        $("#msg_register").html("<div class='alert alert-error'>Clave debe contener mas de 5 caracteres.</div>");

        $('#pwd1').focus();

      }



        else

    {

      $("#loading_reg").show();

      $("#msg_register").html("");

      

      $.post("modules/register/ajax_register.php",{ mail:$('#mail').val(), pwd1:$('#pwd1').val(), pwd2:$('#pwd2').val() }, function(data) {

    	  /*The data variable has some garbage, that's why y just compare the 3 first character*/

    	  if(data.substring(0,3) == "yes") {

    		  $("#msg_register").html("<div class='alert alert-success'>Muy bien!"

            +" Ahora ingrese a su email para activar su cuenta."

            +" VERIFIQUE SU CARPETA SPAM si no encuentra el mensaje de activacion </div>");

    	  }

    	  else if (data=='mmm') {

    		  $("#msg_register").html("<div class='alert alert-error'>Usuario ya inici&oacute; proceso de registro.  Verifique bandeja de entrada de su email para terminar de activar cuenta.</div>");

    	  } 

    	  else

    	  {

    		  $("#msg_register").html("<div class='alert alert-error'>Usuario ya existe.  Use el bot&oacute;n Entrar.  All&iacute; podr&aacute; recuperar su contrase&ntilde;a</div>");

    	  }

    	  $("#loading_reg").hide();

      	});

      }

    }



    //Trigger user registration

    /*

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