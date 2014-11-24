<div class="container">
	<div class="row">
		<div class="span12" style="text-align:right;color:gray;font-size:12px">
			<?php 
			echo '<br/>Sesi&oacute;n iniciada para usuario <b>'.$_SESSION['username'].'</b>' ; 
			?>
		</div>
	</div>

<?php 
include '../DB/connect.php';

//set variables as empty
$ivt_name='';
$ivt_surname='';
$ivt_doc='';
$ivt_specialty='';
$ivt_mobile='';
$ivt_city='';

//search for doctor info
$user_id=$_SESSION['username'];
$result = mysqli_query($con,"SELECT * FROM main_investigator WHERE user_id='$user_id'"  );  
$row    = mysqli_fetch_array($result);

//data to be displayed after saving or updating
if (isset($_GET['saved'])&&$_GET['saved']=='yes') {
	?>
	<div class="row">
		<div class="span12">
			<h1>Datos exitosamente guardados</h1>
		</div>
	</div>
	<div class="row">
   <div class="span4" style="text-align:right">
    Nombres
   </div>
   <div class="span8" style="text-align:left">
    <?php echo $row['ivt_name']; ?>
   </div>
</div>
<div class="row">
   <div class="span4" style="text-align:right">
    Apellidos
   </div>
   <div class="span8" style="text-align:left">
    <?php echo $row['ivt_surname']; ?>
   </div>
</div>
<div class="row">
   <div class="span4" style="text-align:right">
    Cédula
   </div>
   <div class="span8" style="text-align:left">
    <?php echo $row['ivt_doc']; ?>
   </div>
</div>
<div class="row">
   <div class="span4" style="text-align:right">
    Especialidad
   </div>
   <div class="span8" style="text-align:left">
    <?php echo $row['ivt_specialty']; ?>
   </div>
</div>
<div class="row">
   <div class="span4" style="text-align:right">
    Tel. celular
   </div>
   <div class="span8" style="text-align:left">
    <?php echo $row['ivt_mobile']; ?>
   </div>
</div>
<div class="row">
   <div class="span4" style="text-align:right">
    Ciudad residencia
   </div>
   <div class="span8" style="text-align:left">
    <?php echo $row['ivt_city']; ?>
   </div>
</div>

<?php }

//data to be displayed before saving - updating info
else {?>
	<div class="row">
		<div class="span12">
			<h1>Ingrese sus datos</h1>
		</div>
	</div>
	<form method='POST' action='user_save.php'>
		<div class="row">
			<div class="span4" style="text-align:right">
				Nombres
			</div>
			<div class="span8" style="text-align:left">
				<input type="text" id="ivt_name" name="ivt_name" <?php echo "value='".$row['ivt_name']."'"; ?> placeholder="Nombre" maxlength="15"/>
			</div>
		</div>
		<div class="row">
			<div class="span4" style="text-align:right">
				Apellidos
			</div>
			<div class="span8" style="text-align:left">
				<input type="text" id="ivt_surname" name="ivt_surname" <?php echo "value='".$row['ivt_surname']."'"; ?> placeholder="Apellido" maxlength="15"/>
			</div>
		</div>
		<div class="row">
			<div class="span4" style="text-align:right">
				Cédula
			</div>
			<div class="span8" style="text-align:left">
				<input type="text" id="ivt_doc" name="ivt_doc" <?php echo "value='".$row['ivt_doc']."'"; ?> placeholder="C&eacute;dula" />
			</div>
		</div>
		<div class="row">
			<div class="span4" style="text-align:right">
				Especialidad
			</div>
			<div class="span8" style="text-align:left">
				<select id="ivt_specialty" name="ivt_specialty">
					<option value="">...</option>
					<option value="NEUMOLOGIA" <?php if($row['ivt_specialty']=='NEUMOLOGIA') {echo  "SELECTED"; } ?> >NEUMOLOGIA</option>
					<option value="MEDICINA INTERNA" <?php if($row['ivt_specialty']=='MEDICINA INTERNA') {echo  "SELECTED"; } ?> >MEDICINA INTERNA</option>
					<option value="MEDICINA GENERAL" <?php if($row['ivt_specialty']=='MEDICINA GENERAL') {echo  "SELECTED"; } ?> >MEDICINA GENERAL</option>
					<option value="DIGITADOR NO MEDICO" <?php if($row['ivt_specialty']=='DIGITADOR NO MEDICO') {echo  "SELECTED"; } ?> >DIGITADOR NO MEDICO</option>

				</select>
			</div>
		</div>
		<div class="row">
			<div class="span4" style="text-align:right">
				Tel. celular
			</div>
			<div class="span8" style="text-align:left">
				<input type="text" id="ivt_mobile" maxlength="10" name="ivt_mobile" <?php echo "value='".$row['ivt_mobile']."'"; ?> placeholder="Celular" />
			</div>
		</div>
		<div class="row">
			<div class="span4" style="text-align:right">
				Ciudad residencia
			</div>
			<div class="span8" style="text-align:left">
				<select id="ivt_city" name="ivt_city">
					<option value="">...</option>
					<option value="MEDELLIN" <?php if($row['ivt_city']=='MEDELLIN') {echo  "SELECTED"; } ?> >MEDELLIN</option>
					<option value="BOGOTA" <?php if($row['ivt_city']=='BOGOTA') {echo  "SELECTED"; } ?> >BOGOTA</option>
					<option value="CALI" <?php if($row['ivt_city']=='CALI') {echo  "SELECTED"; } ?> >CALI</option>
					<option value="CARTAGENA" <?php if($row['ivt_city']=='CARTAGENA') {echo  "SELECTED"; } ?> >CARTAGENA</option>

				</select>
			</div>
		</div>
		<div class="row">
			<div class="span4" style="text-align:right">
				Pa&iacute;s residencia
			</div>
			<div class="span8" style="text-align:left">
				<input type="text" id="ivt_country" name="ivt_country" placeholder="Country of residence" disabled value="COLOMBIA" />
			</div>
		</div>
		<div class="row">
			<div class="offset3 span5" style="text-align:left">
				<input type="submit" id="ivt_save_btn" class="span4 btn" value="Guardar" >
			</div>
		</div>
	</form>
	<?php } 
	if (isset($_SESSION['evaluation'])) { ?>
	<div class="row">
      <div class="offset4 span5"><h4>Volver a formularios cl&iacute;nicos</h4></div>
    </div>
    <div class="row">
      <div class="offset4 span4 btn-group btn-group-vertical">
        <a href='myaccount.php?page=basic' class='btn btn-inverse'>DATOS CLINICOS</a>
        <a href='myaccount.php?page=blood' class='btn btn-inverse'>PRUEBAS EN SANGRE</a>
        <a href='myaccount.php?page=diagnostic' class='btn btn-inverse'>IMAGENES CLINICAS</a>
        <a href='myaccount.php?page=cardiovascular' class='btn btn-inverse'>DESEMPENO CARDIOVASCULAR</a>
      </div>
    </div>
    <?PHP }
	else { ?>
	<HR>
	<div class="row">
      <div class="offset4 span5">
      	<a href='myaccount.php?page=patients' class='btn btn-inverse span5'>
      		VOLVER A P&Aacute;GINA SELECCI&Oacute;N DE PACIENTES
      	</a>
      </div>
    </div>
    <?php } ?>	
	<br/>
	<br/>
	<br/>
</div>

<SCRIPT TYPE="text/javascript">
up_cas($("#ivt_name"));
up_cas($("#ivt_surname"));
up_cas($("#ivt_mobile"));
hide_show_savebutton([$("#ivt_name"),$("#ivt_surname"),$("#ivt_doc"),$("#ivt_specialty"),$("#ivt_mobile"), $("#ivt_city")], $("#ivt_save_btn"));
</SCRIPT>


