<?php 
include '../DB/connect.php';
$ptn=$_SESSION['hap_patient_id'];

$sql    = "SELECT * FROM hap_first_eval LEFT JOIN main_eval 
	ON hap_first_eval.eval_id=main_eval.eval_id 
	WHERE  main_eval.patient_id='$ptn'  ";
	$result = mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	if ($row[0] !="" || $row[0] !=null) {
		
		$whole_date=$row['dxdate'];
		$ini_year=substr($whole_date,0,4);
		$ini_month=substr($whole_date,5,2);
		if ($ini_month==01) { $ini_month="enero";}
		if ($ini_month==02) { $ini_month="febrero";}
		if ($ini_month==03) { $ini_month="marzo";}
		if ($ini_month==04) { $ini_month="abril";}
		if ($ini_month==05) { $ini_month="mayo";}
		if ($ini_month==06) { $ini_month="junio";}
		if ($ini_month==07) { $ini_month="julio";}
		if ($ini_month==08) { $ini_month="agosto";}
		if ($ini_month==09) { $ini_month="septiembre";}
		if ($ini_month==10) { $ini_month="octubre";}
		if ($ini_month==11) { $ini_month="noviembre";}
		if ($ini_month==12) { $ini_month="diciembre";}

		if ($row['afroamerican']=='si') { $afroamerican='Paciente de raza afroamericana.'; }
		else {$afroamerican='';}
		?>
	<div class="row"  >
		<div class="span4" style="text-align:left">
			Inicio de s&iacute;ntomas en 
			<b>
				<?php echo $ini_month.' de '.$ini_year; ?>
			</b>.
		</div>
		<div class="span4" style="text-align:left">
			<b><?php echo $afroamerican; ?></b>
		</div>
	</div>


	
	<?php } 
	else {?>
	<div class="row" id='first_eval_form' style='text-align:left'>
		<div class="span2" style="text-align:right">Fecha inicio s&iacute;ntomas antes del diagnostico</div>

		<div class="span2" style="text-align: left;">
		  <input type="text" id="year" placeholder="a&ntilde;o" class="span1 " maxlength="4"/>
		  <input type="text" id="month" placeholder="mes" class="span1 " maxlength="2"/>
		</div>

		<div class="span2" style="text-align:left">Raza afroamericana?</div>

		<div class="span2">
		  <select id='afroamerican' class="span2">
		    <option value=""></option>
		    <option value="si">S&iacute;</option>
		    <option value="no">No</option>
		  </select>
		</div>
	</div>
	<?php } ?> 