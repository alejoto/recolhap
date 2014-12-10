<div id="renal"  style="text-align:left">
	<div class="row">
		<div class="well well-small span8" style="text-align:center">
			<h4>FUNCI&Oacute;N RENAL</h4>
		</div>
	</div>
	<div class="row" name="renal">
		<div class="span1">Fecha</div>
		<div class="span3">
			<input type="text" id="y_renal" class="span1 ren date1" name="renal_date" placeholder="a&ntilde;o" maxlength="4"/>
			<input type="text" id="m_renal" class="span1 ren" placeholder="mes" maxlength="2"/>
			<input type="text" id="d_renal" class="span1 ren date3" placeholder="d&iacute;a" maxlength="2"/>
		</div>
	</div>

	<div class="row">
		<div class="offset1 span2">Creatinina</div>
		<div class="span1">BUN</div>
	</div>

	<div class="row">
		<div class="offset1 span2">
			<input type="text" id="creat" class="span1 ren" name="creat" placeholder="mg/dL" />
		</div>
		<div class="span1">
			<input type="text" id="bun" class="span1 ren" name="bun" placeholder="mg/dL" />
		</div>
	</div>

	<div class="row">
		<div class="offset1 span1">
			<br/> 
			<!--
			* button name:          renal_save
			* Triggers:             $('#renal_save').click() -> to_database() 
			* Brieff description:   Save info of hap_renal 
			* js associated file:   ajax_forms.js 
			* php AJAX:             patient/ajax_save.php 
			-->
			<a class="btn" id="renal_save">Guardar</a>
			<div class="alert alert-success">
				<button type="button" class="close">&times;</button>
				<strong></strong>
			</div>
		</div>
	</div>
</div>