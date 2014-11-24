<div id="elecg"  style="text-align:left">
  <div class="row">
    <div class="span8 well well-small" style="text-align:center">
			<h4>ELECTROCARDIOGRAMA</h4>
		</div>
  </div>
  <div class="row" name="electrok">
    <div class="span2">Fecha realizaci&oacute;n</div>
    <div class="span3">
      <input type="text" id="y_ecg" name="ecg_date" class="span1 ecg date1" placeholder="a&ntilde;o" maxlength="4"/>
      <input type="text" id="m_ecg" class="span1 ecg" placeholder="mes" maxlength="2"/>
      <input type="text" id="d_ecg" class="span1 ecg date3" placeholder="d&iacute;a" maxlength="2"/>
    </div>
  </div>
  <div class="row">
    <div class="span2">
      <select id="axis" name="axis" class="span2 ecg" >
        <option value="">Eje...</option>
        <option value="normal">Eje normal</option>
        <option value="right">Eje derecho</option>
        <option value="left">Eje izq.</option>
        <option value="nobody">Tierra de nadie</option>
      </select>
    </div>
    <div class="span3">
      <select class="span3 ecg" id="rythm" name="rythm">
        <option value="">Ritmo...</option>
        <option value="sinusal">Sinusal</option>
        <option value="supravent">R&iacute;tmico supravent</option>
        <option value="ventr_or_BBB">R&iacute;tmico ventr o bloqueo rama</option>
        <option value="atr_fibrl">Fibrilaci&oacute;n auricular</option>
        <option value="other_rythm">Otra arritmia no mencionada</option>
      </select>
    </div>
    <div class="span2">
      <input type="text" placeholder="frec."class="span1 ecg" id="frq" name="frq" maxlength="3">/min
    </div>
  </div>
  <div class="row">
    <div class="span8"><hr></div>
  </div>
  <div class="row">
    <div class="span8">PATRONES ANORMALES TRAZO EL&Eacute;CTRICO (de inter&eacute;s para hipertensi&oacute;n pulmonar)</div>
  </div>
  <div class="row">
    <div class="span4">
      <select class="span4 ecg" id="pattern" name="pattern">
        <option></option>
        <option value="Ninguno">Ninguno</option>
        <option value="SIQIIITIII">SI-QIII-TIII</option>
        <option value="BRDHH">Bloqueo de rama derecha haz de his</option>
        <option value="both">Ambos (SIQIIITIII y BRDHH)</option>
      </select>
    </div>
  </div>
  <div class="row">
    <div class="span8" style="text-align:center">
	
        <!--
        * button name:          save_ecg
        * Triggers:             $('#save_ecg').click() -> to_database() 
        * Brieff description:   Save info of hap_electrok
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
        
        <a class="btn" id="save_ecg" name="ecg_save" >Guardar</a>
			<div class="alert alert-success">
 			 	<button type="button" class="close">&times;</button>
  			<strong></strong>
			</div>
    </div>
  </div>
</div>
