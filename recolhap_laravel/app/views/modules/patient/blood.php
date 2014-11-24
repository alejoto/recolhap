<!--main content here-->
<div class="container">
  <div class="row">

    <div class="span3" style="margin-top: 0px;">
      <?php  include '../includes/left_menu.php'; ?>

      <div style="margin-left: 13px;">
        <h3 id="left_title">Pruebas en sangre</h3>
        <a class="btn span2" id="sel_hb_and_others">Hemoglobina y otros</a>
        <a class="btn span2" id="sel_art_gasses">Gases arteriales</a> 
        <a class="btn span2" id="sel_renal">Funci&oacute;n renal</a>
        <a class="btn span2" id="sel_liver">Funci&oacute;n hep&aacute;tica</a> 
        <a class="btn span2" id="sel_reuma">Pruebas reumat.</a>
      </div>

    </div>

    <div class="span9" style="margin-top: 40px;">

      <div class="row">
        <?php  include '../includes/info.php'; ?>
      </div><br>      
      
      <!-- hemoglobine begin -->
        <?php include '../patient/blood/hemoglobine.php'; ?>
      <!-- hemoglobine end -->

      <!-- arteries begin -->
        <?php include '../patient/blood/arteries.php'; ?>
      <!-- arteries end -->

      <!-- renal begin -->
        <?php include '../patient/blood/renal.php'; ?>
      <!-- renal end -->

      <!-- liver begin -->
        <?php include '../patient/blood/liver.php'; ?>
      <!-- liver end -->

      <!-- reuma begin -->
        <?php include '../patient/blood/reuma.php'; ?>
      <!-- reuma end -->

    </div>

  </div>
</div>
<!--end of main content-->

<script src="../../assets/js/ajax_forms.js"></script>
<script src="../../assets/js/blood_test.js"></script>