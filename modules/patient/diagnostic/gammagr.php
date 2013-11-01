<div id="gammagr" style="text-align:left">
     <div class="row">
         <div class="span8 well well-small" style="text-align:center">
         		<h4>GAMAGRAF&Iacute;A PULMONAR</h4>
         </div>
     </div>
     <div class="row" name="gammagr">
         <div class="span1">Fecha</div>
         <div class="span3">
             <input type="text" id="y_gamma" class="span1 gam date1" name="gamma_date" placeholder="a&ntilde;o" maxlength="4"/>
             <input type="text" id="m_gamma" class="span1 gam" placeholder="mes" maxlength="2"/>
             <input type="text" id="d_gamma" class="span1 gam date3" placeholder="d&iacute;a" maxlength="2"/>
         </div>
     </div>
     <div class="row">
         <div class="span3">
             <select id="gamma_tep" class="span2 gam" name="gamma_tep">
                 <option value="">REPORTE...</option>
                 <option value="normal">Normal</option>
                 <option value="low_risk">Riesgo bajo</option>
                 <option value="intermediate_risk">Riesgo intermedio</option>
                 <option value="high_risk">Riesgo alto</option>
             </select>
         </div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
     <div class="row">
         <div class="span8" style="text-align:center">
         		
             <!--
        * button name:          gamma_save
        * Triggers:             $('#gamma_save').click() -> to_database() 
        * Brieff description:   Save info of hap_gammagr
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
             
             <a class="btn" id="gamma_save">Guardar</a>
         		<div class="alert alert-success">
 			 				<button type="button" class="close">&times;</button>
  						<strong></strong>
						</div>
         </div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
 </div>
