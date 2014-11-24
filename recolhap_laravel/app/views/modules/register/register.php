<form action="" method="post">
  <div id="modal_register" class="modal hide fade sign_up" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      <h2 id="myModalLabel">Registrarse</h2>
    </div>
  
    <div class="modal-body">
      <blockquote>
        <p>Para registrarse ingrese su correo electr&oacute;nico y una contrase&ntilde;a segura:</p>
      </blockquote>
    
      <div class="input-prepend">        
        <span class="add-on"><i class="icon-envelope "></i></span>
        <select class="input-large" id="mail" name="mail" >
          <option value="">Ingreso controlado: escoja email</option>
          <option value="fpernett@cable.net.co">Dr. Frank Pernett</option>
          <option value="claudiovillaquiran@gmail.com">Dr. Claudio Villaquiran</option>
          <option value="crdc2001@gmail.com">DR. CARMELO DUE&Ntilde;AS | crdc2001@gmail.com</option>
          <option value="carmachado@hotmail.com">Dr. Carlos Machado</option>
          <option value="dario.londono@gmail.com">Dr. Dario Londoño (correo gmail)</option>
          <option value="maocespedes@gmail.com">Dr. Mauricio Cespedes</option>
          <option value="lfernandez@fvl.org">Dra. Liliana Fernandez</option>
          <option value="jquinteromd@gmail.com">Dr. Jorge Quintero</option>
          <option value="rcontrerasl@cable.net.co">Dr. Ruben Contreras</option>
          <option value="dmcelis@une.net.co">Dr. Diego Celis</option>

          <!-- <option value="aggt@une.net.co">DR. JORGE ORTEGA | aggt@une.net.co</option>
          <option value="yolima138@gmail.com">DRA. YOLIMA ALZATE | yolima138@gmail.com</option>
          <option value="ctorres@neumologica.org">DR.  CARLOS TORRES | ctorres@neumologica.org</option>
          <option value="jaimebarreto2004@yahoo.com">DR. JAIME BARRETO | jaimebarreto2004@yahoo.com</option> -->
        </select>
        <br><br>

        <span class="add-on"><i class="icon-user"></i></span>
        <input class="input-large" id="pwd1" name="pwd1" type="password" placeholder="Contrase&ntilde;a"><br><br>

        <span class="add-on"><i class="icon-check "></i></span>
        <input class="input-large" id="pwd2" name="pwd2" type="password" placeholder="Confirmar contrase&ntilde;a"><br>

      </div><br>
      <div  id="loading_reg" style="display:none">
        <img src="assets/images/ajax-loader.gif"/>
      </div>
    
      <div class="control-group error" id="msg_register"></div>
    
    </div>

    <div class="modal-footer">
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
</form>

<script src="assets/js/login.js"></script>