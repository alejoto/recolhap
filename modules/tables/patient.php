<?php
include '../DB/connect.php';

// Data in table main_patient left join add_data_patient
$sql    = "SELECT 
main_patient.patient_id as doc_id
,main_patient.timestamp
,main_patient.name
,main_patient.surn
,main_patient.gender
,main_patient.birthd
,main_patient.countrybth
,main_patient.citybth
,main_patient.statebth
,main_patient.digiter_id
,add_data_patient.add_data_patient_id
,add_data_patient.timestamp
,add_data_patient.mobile
,add_data_patient.phone
,add_data_patient.eps
,add_data_patient.insurancetype
,add_data_patient.countryreside
,add_data_patient.cityreside
,add_data_patient.statereside
,add_data_patient.clinrecordnum
,add_data_patient.pte_id
,add_data_patient.patient_id

 FROM main_patient LEFT JOIN add_data_patient ON main_patient.patient_id = add_data_patient.patient_id
ORDER BY main_patient.patient_id asc";
$result = mysqli_query($con,$sql);
?>
<!--main content here-->
<div class="">
  <div class="row" style="padding: 50px">
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Fecha de nacimiento</th>
                <th>Genero</th>
                <th>Documento</th>
                <th>Pa&iacute;s de nacimiento</th>
                <th>Ciudad de nacimiento</th>
                <!--<th>Estado</th>-->
                <th>Digitador</th>
                <th>Celular</th>
                <th>Tel&eacute;fono</th>
                <th>EPS</th>
                <th>Pa&iacute;s de Residencia</th>
                <th>Ciudad de Residencia</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //error_reporting(0);
            while($row = mysqli_fetch_array($result))
            {
            ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['surn']; ?></td>
                    <td><?php echo $row['birthd']; ?></td>
                    <td><?php echo $row['gender']; ?></td>
                    <td><?php echo $row['doc_id']; ?></td>
                    <td><?php echo $row['countrybth']; ?></td>
                    <td><?php echo $row['citybth']; ?></td>
                    <!--<td><?php /*echo $row['statebth']; */ ?></td> -->
                    <td><?php echo $row['digiter_id']; ?></td>
                    <td><?php echo $row['mobile']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['eps']; ?></td>
                    <td><?php echo $row['countryreside']; ?></td>
                    <td><?php echo $row['cityreside']; ?></td>
                    <td><?php echo $row['statereside']; ?></td>
                    <!--<td>
                        <button type="submit" class="btn btn-mini btn-primary">Ver</button>
                    </td>-->
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>
</div>
