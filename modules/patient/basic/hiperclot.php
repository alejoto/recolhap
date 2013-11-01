<?php 
include '../patient/basic/hyperclot_preload.php';

?>

<div id="hiperclot" style="text-align:left">
  
  <div class="row">
    <div CLASS="well well-small span8">
      <center><h4>ESTADOS DE HIPERCOAGULABILIDAD</h4></center>
    </div>
  </div>
    
  <div class="row">
    <div class="span3" style="text-align:right">S&iacute;ndrome Antifosfol&iacute;pido</div>
    <div class="span1"> <?php  if ($row['antiphs_syndr']=="true") { ?> <b>positivo</b> <?php } else {?> <input type="checkbox" id="antiphs_syndr" class="hiperclot"/> <?php } ?> </div>
    

    <div class="span3" style="text-align:right">Mutaci&oacute;n gen prot. 20210</div>
    <!-- <div class="span1">
      <input type="checkbox" id="protr20210_mutation" class="hiperclot" />
    </div> -->
    <div class="span1"> <?php  if ($row['protr20210_mutation']=="true") { ?> <b>positivo</b> <?php } else {?> <input type="checkbox" id="protr20210_mutation" class="hiperclot"/> <?php } ?> </div>

  </div>
  
  <div class="row">
    <div class="span3" style="text-align:right">Resistencia a la Prote&iacute;na C act</div>
    <!-- <div class="span1">
      <input type="checkbox" id="c_protein_resist" class="hiperclot" />
    </div> -->
    <div class="span1"> <?php  if ($row['c_protein_resist']=="true") { ?> <b>positivo</b> <?php } else {?> <input type="checkbox" id="c_protein_resist" class="hiperclot"/> <?php } ?> </div>



    <div class="span3" style="text-align:right">D&eacute;ficit antitrombina III</div>
    <!-- <div class="span1">
      <input type="checkbox" id="antitrbiii_deficiency" class="hiperclot" />
    </div> -->
    <div class="span1"> <?php  if ($row['antitrbiii_deficiency']=="true") { ?> <b>positivo</b> <?php } else {?> <input type="checkbox" id="antitrbiii_deficiency" class="hiperclot"/> <?php } ?> </div>

  </div>
  
  <div class="row">
    <div class="span3" style="text-align:right">D&eacute;ficit Prote&iacute;na S</div>
    <!-- <div class="span1">
      <input type="checkbox" id="prot_s_deficiency" class="hiperclot" />
    </div> -->
    <div class="span1"> <?php  if ($row['prot_s_deficiency']=="true") { ?> <b>positivo</b> <?php } else {?> <input type="checkbox" id="prot_s_deficiency" class="hiperclot"/> <?php } ?> </div>



    <div class="span3" style="text-align:right">D&eacute;ficit Prot C</div>
    <!-- <div class="span1">
      <input type="checkbox" id="prot_c_deficiency" class="hiperclot" />
    </div> -->
    <div class="span1"> <?php  if ($row['prot_c_deficiency']=="true") { ?> <b>positivo</b> <?php } else {?> <input type="checkbox" id="prot_c_deficiency" class="hiperclot"/> <?php } ?> </div>


  </div>
  
  <div class="row">
    <div class="span3" style="text-align:right">Trombofilia no espec&iacute;fica</div>
    <!-- <div class="span1">
      <input type="checkbox" id="unspecific_tromboph" class="hiperclot" />
    </div> -->
    <div class="span1"> <?php  if ($row['unspecific_tromboph']=="true") { ?> <b>positivo</b> <?php } else {?> <input type="checkbox" id="unspecific_tromboph" class="hiperclot"/> <?php } ?> </div>

    <div class="span3" style="text-align:right">Hiperhomocisteinemia</div>
    <!-- <div class="span1">
      <input type="checkbox" id="hyperhomocist" class="hiperclot" />
    </div> -->
    <div class="span1"> <?php  if ($row['hyperhomocist']=="true") { ?> <b>positivo</b> <?php } else {?> <input type="checkbox" id="hyperhomocist" class="hiperclot"/> <?php } ?> </div>


  </div>
  
  <div class="row">
    <div class="span3" style="text-align:right">Enfermedad neopl&aacute;sica</div>
    <!-- <div class="span1">
      <input type="checkbox" id="neoplasia" class="hiperclot" />
    </div> -->
    <div class="span1"> <?php  if ($row['neoplasia']=="true") { ?> <b>positivo</b> <?php } else {?> <input type="checkbox" id="neoplasia" class="hiperclot"/> <?php } ?> </div>


    <div class="span3" style="text-align:right">Esplenectomizado</div>
    <!-- <div class="span1">
      <input type="checkbox" id="esplenectomy" class="hiperclot" />
    </div> -->
    <div class="span1"> <?php  if ($row['esplenectomy']=="true") { ?> <b>positivo</b> <?php } else {?> <input type="checkbox" id="esplenectomy" class="hiperclot"/> <?php } ?> </div>


  </div>
  <br/>
  <div class="row">
    <div class="span2" style="text-align:right">Otros trastornos</div>
    <div class="span6">
      <input type="text" id="other_hyperclott_disord" class="span6 hiperclot" placeholder="Solo trastornos asociados a hipercoagulabilidad"/>
      <br/>
      <?php echo $row['other_hyperclott_disord'];

      ?>
    </div>
  </div>
    
  <div class="row">
    <div class="span8"><br><br>
        <!--
        * button name:          hiperclot_save
        * Triggers:             $("#hiperclot_save").click()
        * Brieff description:   Save (or update if exists) Hipercoagulabilidad test taken from this form
        * js associated file:   Sript at end of this file
        * php AJAX:             /patient/basic/hyperclot_save.php
        -->
    <a id="hiperclot_save" class="btn">Guardar</a><br><br></div>
  </div>
  <div id="hyperclot_result"></div>
</div>
<script type="text/javascript">
  $("#hiperclot_save").click(function(){
    var antiphs_syndr=$('#antiphs_syndr').is(":checked");
var protr20210_mutation=$('#protr20210_mutation').is(":checked");
var c_protein_resist=$('#c_protein_resist').is(":checked");
var antitrbiii_deficiency=$('#antitrbiii_deficiency').is(":checked");
var prot_s_deficiency=$('#prot_s_deficiency').is(":checked");
var prot_c_deficiency=$('#prot_c_deficiency').is(":checked");
var unspecific_tromboph=$('#unspecific_tromboph').is(":checked");
var hyperhomocist=$('#hyperhomocist').is(":checked");
var neoplasia=$('#neoplasia').is(":checked");
var esplenectomy=$('#esplenectomy').is(":checked");
var other_hyperclott_disord=$('#other_hyperclott_disord').val();

    

    $.post('../patient/basic/hyperclot_save.php',
      {antiphs_syndr:antiphs_syndr
      ,protr20210_mutation:protr20210_mutation
      ,c_protein_resist:c_protein_resist
      ,antitrbiii_deficiency:antitrbiii_deficiency
      ,prot_s_deficiency:prot_s_deficiency
      ,prot_c_deficiency:prot_c_deficiency
      ,unspecific_tromboph:unspecific_tromboph
      ,hyperhomocist:hyperhomocist
      ,neoplasia:neoplasia
      ,esplenectomy:esplenectomy
      ,other_hyperclott_disord:other_hyperclott_disord
},function(data){ $('#hyperclot_result').html(data); });
  })
</script>


