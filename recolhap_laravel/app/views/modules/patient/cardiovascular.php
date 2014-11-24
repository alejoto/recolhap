<!--main content here-->

<div class="container">
	<div class="row">

		<div class="span3" style="margin-top: 0px;">
			<?php include '../includes/left_menu.php'; ?>

			<div style="margin-left: 13px;">
				<h3 id="left_title">Desempe&ntilde;o cardiovascular</h3>
				<a class="btn span2" id="sel_elecg">Electrocardiograma</a> <a
					class="btn span2" id="sel_spir">Espirometr&iacute;a</a> <a
					class="btn span2" id="sel_sixm_walk">Caminata 6 mins</a> <a
					class="btn span2" id="sel_cp_test">Prueba esfuerzo cp</a>
			</div>

		</div>

		<div class="span9" style="margin-top: 40px;">

			<div class="row">
				<?php include '../includes/info.php'; ?>
			</div>
			<br>

			<!-- elecg begin -->
			<?php include '../patient/cardiovascular/elecg.php'; ?>
			<!-- elecg end -->

			<!-- spir begin -->
			<?php include '../patient/cardiovascular/spir.php'; ?>
			<!-- spir end -->

			<!-- sixm_walk begin -->
			<?php include '../patient/cardiovascular/sixm_walk.php'; ?>
			<!-- sixm_walk end -->

			<!-- cp_test begin -->
			<?php include '../patient/cardiovascular/cp_test.php'; ?>
			<!-- cp_test end -->

		</div>

	</div>
</div>
<!--end of main content-->

<script
	src="../../assets/js/ajax_forms.js"></script>
<script
	src="../../assets/js/cardiovascular.js"></script>
