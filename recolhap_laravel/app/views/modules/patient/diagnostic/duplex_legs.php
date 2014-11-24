<div id="duplex_legs" style="text-align:left">
     <div class="row">
         <div class="span8 well well-small" style="text-align:center">
         		<h4>ECOGRAF&Iacute;A DUPLEX MIEMBROS INFERIORES</h4>
         </div>
     </div>
     <div class="row" name="duplex_legs">
         <div class="span1">Fecha</div>
         <div class="span3">
             <input type="text" id="y_ecoleg" class="span1 du_legs date1" name="legsdoppler_date" placeholder="a&ntilde;o" maxlength="4"/>
             <input type="text" id="m_ecoleg" class="span1 du_legs" placeholder="mes" maxlength="2"/>
             <input type="text" id="d_ecoleg" class="span1 du_legs date3" placeholder="d&iacute;a" maxlength="2"/>
         </div>
     </div>
     <div class="row">
         <div class="span8"><hr></div>
     </div>
     <div class="row">
         <div class="span8"><b>Compromiso trombosis venosa profunda</b></div>
     </div>
     <div class="row">
         <div class="span3">Extremidad derecha</div>
         <div class="span3">Extremidad izquierda</div>
     </div>
     <div class="row">
         <div class="span3">
             <select id="legsdoppler_result_right" class="span2 du_legs" name="legsdoppler_result_right">
                 <option value=""></option>
                 <option value="negativo">Negativo</option>
                 <option value="proximal">Proximal</option>
                 <option value="distal">Distal</option>
                 <option value="ambos">Ambos</option>
             </select>
         </div>
         <div class="span3">
             <select id="legsdoppler_result_left" class="span2 du_legs" name="legsdoppler_result_left">
                 <option value=""></option>
                 <option value="negativo">Negativo</option>
                 <option value="proximal">Proximal</option>
                 <option value="distal">Distal</option>
                 <option value="ambos">Ambos</option>
             </select>
         </div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
     <div class="row">
         <div class="span8" style="text-align:center">
         		
             <!--
        * button name:          legsdoppler_save
        * Triggers:             $('#legsdoppler_save').click() -> to_database() 
        * Brieff description:   Save info of hap_duplex_legs
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
             
             <a class="btn" id="legsdoppler_save">Guardar</a>
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
