


<!--main content here-->
<div class="container">
    <div class="row">

        <!-- left column-->
        <div class="span3" style="margin-top: 0px;">
            <div class="row">
                <div class="span3" style="margin-top: 0px;">
                    <? include '../includes/left_menu.php'; ?>
                </div>
            </div>
            <div class="row">
                <div class="span3">
                    <h3 id="left_title">Im&aacute;genes diagn&oacute;sticas</h3>
                    <h4>Cateterismo derecho</h4>
                    <a class="btn span2" id="showbas">Datos basales</a>
                    <a class="btn span2" id="showrt" >Test vasorreactividad</a>
                </div>
            </div>
        </div>
        <!-- end of left column-->
        <!-- end of left column-->

        <!-- main content-->
        <div class="span9" style="margin-top: 40px;">
            <div class="row">
                <? include '../includes/info.php'; ?>
            </div>
            <br/>
            <div class="row" style="margin-left: 40px">
                <?php  
                include '../patient/right_catheter/basal.php'; 
                include '../patient/right_catheter/reactiv.php'; 
                include '../patient/general_menu.php'; 
                ?>
            </div>
        </div>
        <!--end of main content-->
        <!--end of main content-->
        
    </div>
</div>


<script src="../../assets/js/ajax_forms.js"></script>
<script src="../../assets/js/right_catheter.js"></script>
