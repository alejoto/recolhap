<div id="art_gasses">
  <div class="row">
    <div class="well well-small span8">
      <h4>GASES ARTERIALES</h4>
    </div>
  </div>
  <div class="row" name="arterialgasses">
    <div class="span1" style="text-align:right">Fecha</div>
    <div class="span3" style="text-align:left" name="bld_gass_date">
      <input type="text" id="y_art_gas" class="span1 art_gas date1" name="bld_gass_date" placeholder="a&ntilde;o" maxlength="4"
      />
      <input type="text" id="m_art_gas" class="span1 art_gas" placeholder="mes" maxlength="2"/>
      <input type="text" id="d_art_gas" class="span1 art_gas date3" placeholder="d&iacute;a" maxlength="2"/>
    </div>
    <div class="span1" style="text-align:right">FIO2</div>
    <div class="span1" style="text-align:left">
      <input type="text" id="bld_gass_fio2" class="span1 art_gas" name="bld_gass_fio2" placeholder="%"  maxlength="2"/>
    </div>
  </div>
  <div class="row" style="text-align:left">
    <div class="span1">pH</div>
    <div class="span1">paCO2</div>
    <div class="span1">paO2</div>
    <div class="span1">HCO3</div>
  </div>
  <div class="row" style="text-align:left">
    <div class="span1">
      <input type="text" id="bld_gass_ph" class="span1 art_gas" name="bld_gass_ph" placeholder="pH" />
    </div>
    <div class="span1">
      <input type="text" id="bld_gass_paco2" class="span1 art_gas" name="bld_gass_paco2" 
      placeholder="mmHg"  maxlength="2"/>
    </div>
    <div class="span1">
      <input type="text" id="bld_gass_pao2" class="span1 art_gas" name="bld_gass_pao2" placeholder="mmHg"
       maxlength="3"/>
    </div>
    <div class="span2">
      <input type="text" id="bld_gass_hco3" class="span1 art_gas" name="bld_gass_hco3" placeholder="mmol/L"
       maxlength="2"/>
    </div>
  </div>
  <div class="row" style="text-align:left">
    <div class="offset5 span3"> 
        
        <!--
        * button name:          bld_gass_save
        * Triggers:             $('#bld_gass_save').click() -> to_database() 
        * Brieff description:   Save info of hap_arterialgasses 
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
        
        <a class="btn span1" id="bld_gass_save">Guardar</a>
    	<div class="alert alert-success span3">
 				<button type="button" class="close">&times;</button>
  			<strong></strong>
			</div>
    </div>
  </div>
</div>
