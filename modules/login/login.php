<form action="" method="post">
    <div id="modal_login" class="modal hide fade sign_up" 
    tabindex="-1" role="dialog" aria-labelledby="myModalLabel" 
    aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h2 id="myModalLabel">Acceder</h2>
        </div>
        <!-- Modal body -->
        <div class="modal-body">
            <blockquote>
                <p>Ingrese su email y password:</p>
            </blockquote>
            <div class="input-prepend">
                <span class="add-on">@</span>
                <input class="input-large" id="usr" 
                name="usr" type="text" placeholder="Email">
                <br/><br/>
                <span class="add-on"><i class="icon-user"></i></span>
                <input class="input-large" id="pwd" name="pwd" 
                type="password" placeholder="Contrase&ntilde;a">
                <br/>
            </div>
            <br/>
            <div class="control-group error" id="msg"></div>
            <div  id="loading" style="display:none">
                <img src="assets/images/ajax-loader.gif"/>
            </div>
            <div class="row">
                <a class="offset2 span6" id="forgot_pwd"
                style="text-align:left;font-size:12px;color:#006600;display:none" 
                href="#"> Olvid&oacute; su contrase&ntilde;a? NO HAY DE QUE PREOCUPARSE, HAGA CLICK AQU&Iacute;</a>
            </div>
        </div>
        <div class="modal-footer">
            <!--
            * button name:          login
            * Triggers:             hap_login_method()
            * Brieff description:   Validates correct email and check if is a coincident email and password combination for one user. Return false or redirect to modules/myaccount/myaccount.php?page=patients
            * js associated file:   login.js\
            * php AJAX:             modules/login/ajax_login.php\
            -->
            <a class="btn btn-primary" id="login" >Entrar</a>
            <!-- 
            button executes function in assets/js/login.js
            -->
            <a class="btn btn-info" data-dismiss="modal" aria-hidden="true" >Cerrar</a>
        </div>
    </div>
</form>
<script src="assets/js/login.js"></script>