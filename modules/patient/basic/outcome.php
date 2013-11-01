<div id="outcome" style="text-align:left" >
  <div class="row">
    <div CLASS="well well-small span8" style="text-align: center">
      <h4>DATOS ASOCIADOS A MUERTE</h4>
    </div>
  </div>
  
  <div class="row">
    <div class="span8">Diligenciar en caso de paciente fallecido</div>
  </div>
  
  <div class="row">
    <div class="span2" style="text-align:right">Fecha del deceso</div>
    <div class="span3">
      <input type="text" id="year_death" class="span1 outcome date1" name="dead_date" placeholder="a&ntilde;o" maxlength="4"/>
      <input type="text" id="month_death" class="span1 outcome" placeholder="mes" maxlength="2"/>
      <input type="text" id="day_death" class="span1 outcome" placeholder="d&iacute;a" maxlength="2"/>
    </div>
  </div>
    
  <div class="row">
    <div class="span2" style="text-align:right">Muerte por HAP?</div>
    <div class="span5">
      <select id="dead_cause" class="span5 outcome" name="dead_cause">
        <option value=""></option>
        <option value="si_dom">Muerte s&uacute;bita en domicilio</option>
        <option value="si_hosp">Muerte en hospital por complicaci&oacute;n HAP</option>
        <option value="no">Muerte no asociada a HAP (ej. c&aacute;ncer, accidente de tr&aacute;nsito)</option>
      </select>
    </div>
  </div>
  
  <div class="row">
    <div class="span8" style="text-align:center">
    		<br><br>
                <!--
                * button name:          outcome_save
                * Triggers:             $("#outcome_save").click() ->to_database()
                * Brieff description:   Save info of outcome
                * js associated file:   ajax_forms.js
                * php AJAX:             patient/ajax_save.php
                -->
    		<a class="btn" id="outcome_save" >Guardar</a>
    		<div class="alert alert-success">
 			 	<button type="button" class="close">&times;</button>
  			<strong></strong>
				</div>
    		<br><br>
    </div>
  </div>
</div>
