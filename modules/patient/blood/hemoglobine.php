<div id="hb_and_others" style="padding-left: 40px;text-align:left">
  <div class="row">
    <div class="well well-small span8" style="text-align:center">
      
        <h4>HEMOGLOBINA - TIROIDES - D&Iacute;MERO D - TROPONINA - P&Eacute;PTIDO NATRIUR&Eacute;TICO - VIH</h4>
  
    </div>
  </div>
  <div class="row" >
    <div class="span8">
      <b>Hemoglobina (mg/dL)</b>
    </div>
  </div>
  <div class="row" name="hb">
    <div class="span1">Fecha</div>
    <div class="span3" name="hb_date">
      <input type="text" id="y_hb" class="span1 hemo date1" name="hb_date" placeholder="a&ntilde;o" maxlength="4" maxlength="4"/>
      <input type="text" id="m_hb" class="span1 hemo" placeholder="mes" maxlength="2"  />
      <input type="text" id="d_hb" class="span1 hemo date3" placeholder="d&iacute;a" maxlength="2" />
    </div>
    <div class="span1">
      <input type="text" id="hb_value" class="span1 hemo" name="hb_value" placeholder="mg/dL"  maxlength="2"/>
    </div>
    <div class="span4"> 
        <!--
        * button name:          hb_save
        * Triggers:             $('#hb_save').click() -> to_database() 
        * Brieff description:   Save info of hemo 
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
        
	    <a class="btn span1" id="hb_save">Guardar</a>
	    <div class="alert alert-success span4">
	 		<button type="button" class="close">&times;</button>
	  	<strong></strong>
		</div>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="span8"> <b>Funci&oacute;n tiroidea</b>
    </div>
  </div>
  <div class="row" name="hemo_thyro">
    <div class="span1">Fecha</div>
    <div class="span3" name="thyro_date">
      <input type="text" id="y_thyr" class="span1 thyro date1" name="thyro_date" placeholder="a&ntilde;o" maxlength="4"/>
      <input type="text" id="m_thyr" class="span1 thyro" placeholder="mes" maxlength="2"/>
      <input type="text" id="d_thyr" class="span1 thyro date3" placeholder="d&iacute;a" maxlength="2"/>
    </div>
  </div>
  <div class="row">
    <div class="span1" style="text-align:right">TSH</div>
    <div class="span1">
      <input type="text" id="tsh" class="span1 thyro" name="thyro_tsh" placeholder="mIU/mL" />
    </div>
    <div class="span1" style="text-align:right">T4 total</div>
    <div class="span2">
      <input type="text" id="t_4_total" class="span1 thyro" name="thyro_t_4_total" placeholder="mcg/dL" />
    </div>
  </div>
  <div class="row">
    <div class="offset2 span1" style="text-align:right">T4 libre
    </div>
    <div class="span2">
      <input type="text" id="t_4_free" class="span1 thyro" name="thyro_t_4_free" placeholder="ng/dL" />
    </div>
    <div class="span4"> 
        
        <!--
        * button name:          thyroid_save
        * Triggers:             $('#hb_save').click() -> to_database() 
        * Brieff description:   Save info of hap_hemo_thyro 
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
        <a class="btn span1" id="thyroid_save">Guardar</a>
   		<div class="alert alert-success span4">
 			 	<button type="button" class="close">&times;</button>
  			<strong></strong>
			</div>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="span8"> <b>D&iacute;mero D (mcg/mL)</b>
    </div>
  </div>
  <div class="row" name="hemo_dim">
    <div class="span1">Fecha</div>
    <div class="span3" name="dim_date">
      <input type="text" id="y_dimer" class="span1 dim date1" name="dim_date" placeholder="a&ntilde;o" maxlength="4"/>
      <input type="text" id="m_dimer" class="span1 dim" placeholder="mes" maxlength="2"/>
      <input type="text" id="d_dimer" class="span1 dim date3" placeholder="d&iacute;a" maxlength="2"/>
    </div>
    <div class="span1">
      <input type="text" id="d_dimer_value" class="span1 dim" name="dim_d_dimer_value" placeholder="ng/mL"/>
    </div>
    <div class="span4"> 
        
        <!--
        * button name:          d_dimer_save
        * Triggers:             $('#d_dimer_save').click() -> to_database() 
        * Brieff description:   Save info of hap_hemo_dim 
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
        <a class="btn span1" id="d_dimer_save">Guardar</a>
	    <div class="alert alert-success span4">
	 			 	<button type="button" class="close">&times;</button>
	  			<strong></strong>
				</div>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="span8"> <b>Troponina I</b>

    </div>
  </div>
  <div class="row" name="hemo_tropo">
    <div class="span1">Fecha</div>
    <div class="span3" name="tropo_date">
      <input type="text" id="y_trop" class="span1 tropo date1" name="tropo_date" placeholder="a&ntilde;o" maxlength="4"
      />
      <input type="text" id="m_trop" class="span1 tropo" placeholder="mes" maxlength="2" />
      <input type="text" id="d_trop" class="span1 tropo date3" placeholder="d&iacute;a" maxlength="2" />
    </div>
    <div class="span1">
      <input type="text" id="trop_result" class="span1 tropo" name="tropo_trop_result" placeholder="ng/ml"
      />
    </div>
    <div class="span4"> 
        <!--
        * button name:          trop_save
        * Triggers:             $('#trop_save').click() -> to_database() 
        * Brieff description:   Save info of hap_hemo_tropo 
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
        
        <a class="btn span1" id="trop_save">Guardar</a>
    	<div class="alert alert-success span4">
 			 	<button type="button" class="close">&times;</button>
  			<strong></strong>
			</div>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="span8"> <b>P&eacute;ptido natriur&eacute;tico cerebral B-PN (mg/dL)</b>

    </div>
  </div>
  <div class="row" name="hemo_pept">
    <div class="span1">Fecha</div>
    <div class="span3" name="pept_date">
      <input type="text" id="y_bpn" class="span1 pept date1" name="pept_date" placeholder="a&ntilde;o" maxlength="4" />
      <input type="text" id="m_bpn" class="span1 pept" placeholder="mes" maxlength="2" />
      <input type="text" id="d_bpn" class="span1 pept date3" placeholder="d&iacute;a" maxlength="2" />
    </div>
  </div>
  <div class="row">
    <div class="span1">BNP</div>
    <div class="span2">
      <input type="text" id="pep_natr_value" class="span1 pept" name="pept_pep_natr_value" placeholder="pg/mL"
      />
    </div>
    <div class="span1">Pro-BNP</div>
    <div class="span1">
      <input type="text" id="pro_pep_natr_value" class="span1 pept" name="pept_pro_pep_natr_value" placeholder="pg/mL"
      />
    </div>
    <div class="span4"> 
        
        <!--
        * button name:          bpn_save
        * Triggers:             $('#bpn_save').click() -> to_database() 
        * Brieff description:   Save info of hap_hemo_pept 
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
        <a class="btn span1" id="bpn_save">Guardar</a>
			<div class="alert alert-success span4">
 			 	<button type="button" class="close">&times;</button>
  			<strong></strong>
			</div>
    </div>
  </div>
  <div class="row">
    <div class="span8">
      <hr/>
    </div>
  </div>
  <div class="row">
    <div class="span8"> 
      <b>Infecci&oacute;n VIH </b>
    </div>
  </div>
  <?php
  $usr=$_SESSION['hap_patient_id'];
  $sql    = "SELECT * FROM hap_vih 
  LEFT JOIN main_eval 
  ON hap_vih.eval_id=main_eval.eval_id  
  WHERE hap_vih.hiv_result='positivo' AND main_eval.patient_id='".$usr."' ";
  $result = mysqli_query($con,$sql);
  $row = mysqli_fetch_array($result);
  if ($row['hiv_result']!="") {
    ?>
    <div class="row">
      <div class="span7">
        VIH positivo seg&uacute;n prueba realizada en la fecha
        <?php echo $row['hiv_date'] ?>
      </div>
    </div>

    <?php
    
  } else {
    ?>
    <div class="row" name="vih">
    <div class="span1">Fecha</div>
    <div class="span3" name="hiv_date">
      <input type="text" id="y_vih" class="span1 vih date1" name="hiv_date" placeholder="a&ntilde;o" maxlength="4" />
      <input type="text" id="m_vih" class="span1 vih" placeholder="mes" maxlength="2" />
      <input type="text" id="d_vih" class="span1 vih date3" placeholder="d&iacute;a" maxlength="2" />
    </div>
  </div>
  <div class="row">
    <div class="offset1 span2">
      <select id="hiv_result" class="span2 vih" name="hiv_result">
        <option value="">Resultado</option>
        <option value="positivo">Positivo</option>
        <option value="negativo">Negativo</option>
      </select>
    </div>
    <div class="span4"> 
        
        <!--
        * button name:          hiv_save
        * Triggers:             $('#hiv_save').click() -> to_database() 
        * Brieff description:   Save info of hap_vih 
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
        
        <a class="btn span1" id="hiv_save">Guardar</a>
      <div class="alert alert-success span4">
        <button type="button" class="close">&times;</button>
        <strong></strong>
      </div>
    </div>
  </div>
    <?php
  }
  ?>
  <div class="row">
    <div class="span8">
      <br/>
    </div>
  </div>
</div>
