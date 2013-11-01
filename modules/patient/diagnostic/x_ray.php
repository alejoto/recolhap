<div id="x_ray" style="text-align:left">
     <div class="row">
         <div class="span8 well well-small" style="text-align:center">
         		<h4>RAYOS X</h4>
         </div>
     </div>
     <div class="row" name="x_ray">
         <div class="span1">Fecha</div>
         <div class="span3">
             <input type="text" id="y_xray" class="span1 xray date1" name="xray_date" placeholder="a&ntilde;o" maxlength="4"/>
             <input type="text" id="m_xray" class="span1 xray" placeholder="mes" maxlength="2"/>
             <input type="text" id="d_xray" class="span1 xray date3" placeholder="d&iacute;a" maxlength="2"/>
         </div>
         <div class="span2">
             <div class="input-append">
                 <input type="text" id="cardiothrx_index" class="span2 xray" name="cardiothrx_index" placeholder="&Iacute;nd. cardiotor&aacute;cico"/>
                 <span class="add-on">I.CT</span>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="span2">Infiltrados</div>
         <div class="span2">&Aacute;reas hipoperfusi&oacute;n</div>
         <div class="span3">Cardiomegalia derecha</div>
     </div>
     <div class="row">
         <div class="span2">
             <select id="alveolar_infiltrates" class="span2 xray" name="alveolar_infiltrates">
                 <option value=""></option>
                 <option value="none">Ninguno</option>
                 <option value="focal">Focal</option>
                 <option value="lobar">Lobar</option>
                 <option value="multifocal">Multifocal</option>
                 <option value="multilobar">Multilobar</option>
                 <option value="difuso">Difuso</option>
             </select>
         </div>
         <div class="span2">
             <select id="hypoperfusion_areas" class="span2 xray" name="hypoperfusion_areas">
                 <option value=""></option>
                 <option value="none">Ninguno</option>
                 <option value="focal">Focal</option>
                 <option value="lobar">Lobar</option>
                 <option value="multifocal">Multifocal</option>
                 <option value="multilobar">Multilobar</option>
                 <option value="difuso">Difuso</option>
             </select>
         </div>
         <div class="span2">
             <select id="right_heart_cardiomegs" class="span2 xray" name="right_heart_cardiomeg">
                 <option value=""></option>
                 <option value="presente">Presente</option>
                 <option value="ausente">Ausente</option>
             </select>
         </div>
     </div>
     <div class="row">
         <div class="span8"><hr></div>
     </div>
     <div class="row">
         <div class="span8"><b>Marcar hallazgos presentes</b></div>
     </div>
     <div class="row">
         <div class="span2">
             <input type="checkbox" id="pleur_effuss" class="xray" name="pleur_effuss">Derrame pleural
         </div>
         <div class="span2">
             <input type="checkbox" id="b_kerkey_lines" class="xray" name="b_kerkey_lines">L&iacute;nes B de kerley
         </div>
         <div class="span3">
             <input type="checkbox" id="pulm_cone_evertion" class="xray" name="pulm_cone_evertion">Eversi&oacute;n cono pulmonar
         </div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
     <div class="row">
         <div class="span8" style="text-align:center">
         	
             <!--
        * button name:          xray_save
        * Triggers:             $('#xray_save').click() -> to_database() 
        * Brieff description:   Save info of hap_x_ray
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->

             
             <a class="btn" id="xray_save">Guardar</a>
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
