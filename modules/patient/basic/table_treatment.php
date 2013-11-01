<?php
$usr=$_SESSION['hap_patient_id'];
include '../DB/connect.php';
$sql    = "SELECT * FROM hap_drug_treatment 
LEFT JOIN main_eval 
ON hap_drug_treatment.eval_id=main_eval.eval_id  
WHERE main_eval.patient_id='".$usr."'";
$result = mysqli_query($con,$sql);
?>

<table id='treatment_tb' class="table table-hover span10">
  <tr class="span10">
    <th class="span2">F&aacute;rmaco</th>
    <th class="span2">Fecha inicio</th>
    <th class="span3">Motivo suspensi&oacute;n</th>
    <th class="span3">Fecha suspensi&oacute;n</th>
  </tr>
  
  <?php 
  while($row = mysqli_fetch_array($result)) {?>
  
    <tr class="span10">
    <td class="span2"><?php echo $row['drug'] ;?></td>
    <td class="span2"><?php echo $row['drug_ini'] ;?></td>
    <td class="span3" <?php echo 'id="td_suspend_cause_'.$row['drug_treatment_id'].'"';?>  >

      <?php 
      if ($row['suspend_cause']==null||$row['suspend_cause']=='') {?>
      <select name="" <?php echo 'id="suspend_cause_'.$row['drug_treatment_id'].'"';?> class="suspension " >
        <option value="">...</option>
        <option value="evento adverso">Evento adverso</option>
        <option value="falla terapeutica">Falla terap&eacute;utica (no mejor&iacute;a)</option>
        <option value="desersion">Desersi&oacute;n al tratamiento</option>
        <option value="negacion asegurador">Negaci&oacute;n por asegurador</option>
        <option value="mejora con otro tratamiento">Mejor&oacute; con otro tratamiento</option>
        <option value="fallece">Fallecido</option>
        <option value="otras">Otras causas</option>
      </select>
      <div <?php echo 'id="drg_'.$row['drug_treatment_id'].'"';   ?>  style="display:none" class="btn-group" >
        <button class="btn" <?php echo 'id="update_'.$row['drug_treatment_id'].'"';?>><i class="icon-ok"></i> Actualizar</button>
        <button class="btn" <?php echo 'id="cancel_'.$row['drug_treatment_id'].'"';?>><i class="icon-remove"></i> Borrar</button>
      </div>
      <?php } 
      else {
        echo $row['suspend_cause'];
      }?>
      

    </td>
    <td class="span3" <?php echo 'id="td_drug_end_'.$row['drug_treatment_id'].'"';?>>
      <?php 
      if ($row['drug_end']==null||$row['drug_end']=='') {?>
      <div <?php echo 'id="date_'.$row['drug_treatment_id'].'"'; ?> class=" susp_date" style="display:none">
        <input type="text" <?php echo 'id="year_end_'.$row['drug_treatment_id'].'"'; ?> 
         class="span1 supension year_end_d date1 " maxlength="4" placeholder="a&ntilde;o"/>
        <input type="text" <?php echo 'id="month_end_'.$row['drug_treatment_id'].'"'; ?> 
         class="span1 supension month_end_d " maxlength="2" placeholder="mes"/>
        <input type="text"  <?php echo 'id="day_end_'.$row['drug_treatment_id'].'"'; ?>
          class="span1 supension day_end_d"  maxlength="2" placeholder="d&iacute;a"/>
          <input type="text" <?php echo 'id="drug_end_'.$row['drug_treatment_id'].'"'; ?> style="display:none">
      </div>
      <?php } 
      else {
        echo $row['drug_end'];
      }?>
    </td>
  </tr>
  <?php } ?>
  <tr class="span10">
    <td class="span2">
      <a rel="tooltip" title="agregar medicamento" id="ad_drug" >
        <i class="icon-plus-sign"></i>
         A&ntilde;adir f&aacute;rmaco</a>
    </td>
    <td class="span2"></td>
    <td class="span3"></td>
    <td class="span3"></td>
  </tr>
</table>
<div id="temporaryid"></div>