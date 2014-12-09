<!--main content here-->

<div class="container">
  <div class="row">
 

    

    <div class="span9" style="margin-top: 40px;">




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

