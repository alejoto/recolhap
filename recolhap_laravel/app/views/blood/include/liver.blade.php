<div id="liver" style="text-align:left">
	<div class="row">
		<div class="well well-small span8" style="text-align:center">
			<h4>FUNCI&Oacute;N HEP&Aacute;TICA</h4>
		</div>
	</div>
	<div class="row">
		<div class="span8">Pruebas hep&aacute;ticas</div>
	</div>
	<div class="row" name="hepatic">
		<div class="span1">Fecha</div>
		<div class="span3">
			<input type="text" id="y_liver" class="span1 live date1" name="hep_date" placeholder="a&ntilde;o" maxlength="4"/>
			<input type="text" id="m_liver" class="span1 live" placeholder="mes" maxlength="2"/>
			<input type="text" id="d_liver" class="span1 live date3" placeholder="d&iacute;a" maxlength="2"/>
		</div>
	</div>
	<div class="row">
		<div class="offset1 span1">Bilirrubina</div>
		<div class="span1" style="text-align:right">Total</div>
		<div class="span1">

			<input type="text" id="bili_tot" class="span1 live" name="bili_tot" placeholder="mg/dL" />

		</div>

		<div class="span1" style="text-align:right">Directa:</div>

		<div class="span1">

			<input type="text" id="bili_dir" class="span1 live" name="bili_dir" placeholder="mg/dL" />

		</div>

	</div>

	<div class="row">

		<div class="span1">AST</div>

		<div class="span1">

			<input type="text" id="hep_ast" class="span1 live" name="hep_ast" placeholder="U/L" />

		</div>

		<div class="span1" style="text-align:right">ALT</div>

		<div class="span1">

			<input type="text" id="hep_alt" class="span1 live" name="hep_alt" placeholder="U/L" />

		</div>

		<div class="span1" style="text-align:right" rel="tooltip" title="Fosfatasa alcalina"

		data-placement="top">FAL</div>

		<div class="span1">

			<input type="text" id="hep_fal" class="span1 live" name="hep_fal" placeholder="U/L" rel="tooltip"

			title="Fosfatasa alcalina" data-placement="top" />

		</div>

	</div>

	<div class="row">

		<div class="span1">GGT</div>

		<div class="span1">

			<input type="text" id="hep_ggt" class="span1 live" name="hep_ggt" placeholder="U/L" />

		</div>

		<div class="span1" style="text-align:right">Alb&uacute;mina</div>

		<div class="span2">

			<input type="text" id="hep_albumin" class="span1 live" name="hep_albumin" placeholder="g/dL" />

		</div>

		<div class="span4"> 




			<a class="btn span1" id="liver_save">Guardar</a>

			<div class="alert alert-success span4">

				<button type="button" class="close">&times;</button>

				<strong></strong>

			</div>

		</div>

	</div>

	<div class="row">

		<div class="span8">

			<hr/>

		</div>

	</div>

	<div class="row">

		<div class="span8">Pruebas de coagulaci&oacute;n</div>

	</div>

	<div class="row" name="coag">

		<div class="span1">Fecha</div>

		<div class="span3">

			<input type="text" id="y_bleed" class="span1 coag date1" name="coag_date" placeholder="a&ntilde;o" maxlength="4"/>

			<input type="text" id="m_bleed" class="span1 coag" placeholder="mes" maxlength="2"/>

			<input type="text" id="d_bleed" class="span1 coag date3" placeholder="d&iacute;a" maxlength="2"/>

		</div>

	</div>

	<div class="row">

		<div class="span1">TPT</div>

		<div class="span1">

			<input type="text" id="hep_tpt" class="span1 coag" name="hep_tpt" placeholder="seg." />

		</div>

		<div class="span1" style="text-align:right">TP</div>

		<div class="span1">

			<input type="text" id="hep_tp" class="span1 coag" name="hep_tp" placeholder="seg." />

		</div>

		<div class="span1" style="text-align:right">INR</div>

		<div class="span1">

			<input type="text" id="hep_inr" class="span1 coag" name="hep_inr" placeholder="INR" />

		</div>

	</div>

	<div class="row">

		<div class="offset3 span4"> 






			<a class="btn span1" id="bleed_save">Guardar</a>

			<div class="alert alert-success span4">

				<button type="button" class="close">&times;</button>

				<strong></strong>

			</div>

		</div>

	</div>

</div>

