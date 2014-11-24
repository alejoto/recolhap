<!--main content here-->

<div class="container">
  <div class="row">
  

    <div class="span3" style="margin-top: 0px;">

      <?php 

      include '../includes/left_menu.php'; 

      ?>



      <div style="margin-left: 13px;">

        <h3 id="left_title">Evaluaci&oacute;n<br>cl&iacute;nica</h3>

        <a class="btn span2" id="sel_anam">Anamnesis&EF</a>

        <!-- <a class="btn span2" id="sel_ex_fc">Examen f&iacute;sico</a> -->

        <a class="btn span2" id="sel_hiperclot">Hipercoagulabilidad</a>

        <a class="btn span2" id="sel_treatment">Tratamiento</a>

        <a class="btn span2" id="sel_outcome">Fallecido?</a>

      </div>



    </div>

    

    <div class="span9" style="margin-top: 40px;">



      <div class="row">

        <?php include '../includes/info.php'; ?>

      </div><br>



      <!-- anamnesis begin -->

        <?php include '../patient/basic/anamnesis.php'; ?>

      <!-- anamnesis end -->

      

      <!-- examen fisico begin -->

        <?php include '../patient/basic/ex_fc.php'; ?>

      <!-- examen fisico end -->

      

      <!-- hipercoagulabilidad begin -->

        <?php include '../patient/basic/hiperclot.php'; ?>

      <!-- hipercoagulabilidad end -->



      <!-- tratamiento begin -->

        <?php include '../patient/basic/treatment.php'; ?>

      <!-- tratamiento end -->



      <!-- fallecido begin -->

        <?php include '../patient/basic/outcome.php'; ?>

      <!-- fallecido end -->

      

    </div>

  

  </div>

</div>

<!--end of main content-->



<script src="../../assets/js/ajax_forms.js"></script>

<script src="../../assets/js/clinic_eval.js"></script>

