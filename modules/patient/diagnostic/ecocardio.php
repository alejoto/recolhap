<div id="ecocardio" style="text-align:left">
     <div class="row">
         <div class="span8 well well-small" style="text-align:center">
         			<h4>ECOCARDIOGRAF&Iacute;A</h4>
         </div>
     </div>
     <div class="row" name="ecocardio">
         <div class="span1">Fecha</div>
         <div class="span3">
             <input type="text" id="y_ecoc" class="span1 eco date1" name="doppl_date" placeholder="a&ntilde;o" maxlength="4"/>
             <input type="text" id="m_ecoc" class="span1 eco" placeholder="mes" maxlength="2"/>
             <input type="text" id="d_ecoc" class="span1 eco date3" placeholder="d&iacute;a" maxlength="2"/>
         </div>
         <div class="span2" style="text-align:right">V&iacute;a transductor</div>
         <div class="span2">
             <select id="doppl_type" class="span2 eco" name="doppl_type">
                 <option value="">...</option>
                 <option value="tt">Transtor&aacute;cico</option>
                 <option value="te">Transesof&aacute;gico</option>
             </select>
         </div>
     </div>
     <div class="row">
         <div class="span3" style="text-align:right">Presi&oacute;n sist&oacute;lica arteria pulmonar</div>
         <div class="span1">
             <div class="input-append">
                 <input type="text" id="doppl_syst_press" class="span1 eco" name="doppl_syst_press" placeholder="mmHg" maxlength="3"/>
                 <span class="add-on">mmHg</span>
             </div>
         </div>
         <div class="span2" style="text-align:right">Frc. eyec. VI</div>
         <div class="span2">
             <div class="input-append">
                 <input type="text" id="eject_fract" class="span1 eco" name="eject_fract" placeholder="FEVI"  maxlength="2"/>
                 <span class="add-on">%</span>
             </div>
         </div>
     </div>
     <div class="row">
         <div class="span3" style="text-align:right">Tricuspid a. p. syst. excursion</div>
         <!-- -->
         <div class="span2">
             <div class="input-append">
                 <input type="text" id="tapse" class="span1 eco" name="tapse" placeholder="TAPSE"/>
                 <span class="add-on">cm</span>
             </div>
         </div>
         <div class="span4"></div>
     </div>
     <div class="row">
         <div class="span8"><hr></div>
     </div>
     <div class="row">
         <div class="span8"><b>Marcar hallazgos presentes</b></div>
     </div>
     <div class="row">
         <div class="span3">
             <input type="checkbox" id="doppl_right_dilat" class="eco" name="doppl_right_dilat">Dilataci&oacute;n VD
         </div>
         <div class="span3">
             <input type="checkbox" id="doppl_right_dysf" class="eco" name="doppl_right_dysf">Disfunci&oacute;n VD
         </div>
     </div>
     <div class="row">
         <div class="span3">
             <input type="checkbox" id="doppl_pleur_effuss" class="eco" name="doppl_pleur_effuss">Derrame peric&aacute;rdico
         </div>
         <div class="span3">
             <input type="checkbox" id="left_heart_dysf" class="eco" name="left_heart_dysf">Disfunci&oacute;n VI
         </div>
     </div>
     <div class="row">
         <div class="span3">
             <input type="checkbox" id="doppl_septum_dev" class="eco" name="doppl_septum_dev">Septum desviado
         </div>
     </div>
     <div class="row">
         <div class="span8">
             <br>
         </div>
     </div>
     <div class="row">
         <div class="span3">
             <select id="doppl_cong_defects" class="span3 eco" name="doppl_cong_defects">
                 <option value="">DEFECTOS CARDIACOS...</option>
                 <option value="no">No evidencia</option>
                 <option value="cia">CIA</option>
                 <option value="civ">CIV</option>
                 <option value="paradox_septum">Movimiento parad&iacute;jido septum</option>
                 <option value="paradox_septum">Foramen oval permeable</option>
                 <option value="other">Otros</option>
             </select>
         </div>
         <div class="span3" id="other_defects2">
             <input type="text" id="doppl_cong_defects_otros" class="span3 eco" name="doppl_cong_defects_otros" placeholder="Otros defectos cardiacos"/>
         </div>
     </div>
     <div class="row">
         <div class="span8"><br></div>
     </div>
     <div class="row" style="text-align:center">
         <div class="span8">
         		
             <!--
        * button name:          ecoc_save
        * Triggers:             $('#ecoc_save').click() -> to_database() 
        * Brieff description:   Save info of hap_ecocardio
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
             
             <a class="btn" id="ecoc_save">Guardar</a>
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
