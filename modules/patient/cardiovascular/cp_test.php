<div id="cp_test"  style="text-align:left">
  <div class="row">
    <div class="span8 well well-small" style="text-align:center">
      <h4>PRUEBA DE ESFUERZO CARDIOPULMONAR</h4>
    </div>
  </div>
  <div class="row" name="cp_stress_test">
    <div class="span2" style="text-align:right">Fecha</div>
    <div class="span3">
      <input type="text" id="y_cpst" name="cp_stress_date" class="span1 cpt date1" placeholder="a&ntilde;o" maxlength="4"/>
      <input type="text" id="m_cpst" class="span1 cpt" placeholder="mes" maxlength="2"/>
      <input type="text" id="d_cpst" class="span1 cpt date3" placeholder="d&iacute;a" maxlength="2"/>
    </div>
    <div class="span1" style="text-align:right">VO2 max</div>
    <div class="span1">
      <input type="text" class="span1 cpt" id="vo2max_peak" placeholder="mL/K/m" name="vo2max_peak">
    </div>
  </div>
  <div class="row">
    <div class="span2" style="text-align:right">
      PA en VO2max
    </div>
    <div class="span1">
      <input type="text" class="span1 cpt join2" id="pa_sist" placeholder="sist" name="art_press_vo2" maxlength="3">
    </div>
    <div class="span1">
      <input type="text" class="span1 cpt join2" id="pa_dias" placeholder="diast" maxlength="3">
    </div>
    <div class="span2" style="text-align:right">
      Pulso en VO2max
    </div>
    <div class="span1">
      <input type="text" class="span1 cpt" id="pulse_vo2" placeholder="lat/min" name="pulse_vo2" maxlength="3">
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <br>
    </div>
  </div>
  <div class="row">
    <div class="span8" style="text-align:center">
      
        <!--
        * button name:          vo2_save
        * Triggers:             $('#vo2_save').click() -> to_database() 
        * Brieff description:   Save info of hap_cp_stress_test
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->

        
        <a class="btn" id="vo2_save">Guardar</a>
      <div class="alert alert-success">
 			 	<button type="button" class="close">&times;</button>
  			<strong></strong>
			</div>
    </div>
  </div>
</div>
