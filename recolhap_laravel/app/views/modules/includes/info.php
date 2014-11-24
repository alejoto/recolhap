<?php 
include '../DB/connect.php';
if (!isset($_SESSION['hap_patient_id'])) {
	header('Location: myaccount.php?page=patients');
}

$docid=$_SESSION['hap_patient_id'];
$result = mysqli_query($con,"SELECT * FROM main_patient WHERE patient_id='$docid' "  );
$row = mysqli_fetch_array($result);
?>

<div class='span2'>
	<a <?php if ($_GET['page']!='edit') {echo "href='myaccount.php?page=edit' data-toggle='tooltip' title='Editar paciente' ";}?>  >
		<?php /*Choosing image for male or female gender*/
		if ($row['gender']=='male') { ?>
		<img src="../../assets/images/male.png"/>
		<?php }
		else if ($row['gender']=='female') { ?>
		<img src="../../assets/images/female.png"/>
		<?php } ?>
	</a>
</div>

<div class='span5' style='text-align:left'>
	<div class="row">
		<div class="span5">
			<b>
				<a <?php if ($_GET['page']!='edit') {echo "href='myaccount.php?page=edit' data-toggle='tooltip' title='Editar paciente' ";}?>  >
					<?php  echo $row['name'].' '.$row['surn']; ?>
				</a>
			</b>
		</div>
	</div>
	<div class="row">
		<div class="span5"> 	
			<a <?php if ($_GET['page']!='edit') {echo "href='myaccount.php?page=edit' data-toggle='tooltip' title='Editar paciente' ";}?>  >
				Documento
				<?php echo $row['patient_id']; ?>

			</a>

		</div>

	</div>

	<div class="row">

		<div class="span5">

			<a <?php if ($_GET['page']!='edit') {echo "href='myaccount.php?page=edit' data-toggle='tooltip' title='Editar paciente' ";}?>  >

				<?php 

				$now=date('Y-m-d');

				$thisyear=(int)substr($now,0,4);

				$thismonth=substr($now,5,2);

				$today=substr($now,8,2);

				$this_month_and_day=$thismonth.$today;

				$this_month_and_day=(int)$this_month_and_day;



				$birthdate=$row['birthd'];

				$birthyear=(int)substr($birthdate,0,4);

				$birthmonth=substr($birthdate,5,2);

				$birthday=substr($birthdate,8,2);

				$birth_month_and_day=$birthmonth.$birthday;

				$birth_month_and_day=(int)$birth_month_and_day;



				if ($birth_month_and_day>$this_month_and_day) {echo $thisyear-$birthyear-1;}

				else {echo $thisyear-$birthyear;}

				?> a&ntilde;os

			</a>

		</div>

	</div>

</div>