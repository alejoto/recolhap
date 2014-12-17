<div id="mri" style="text-align:left">

	<div class="row">

		<div class="span8 well well-small" style="text-align:center">

			<h4>RESONANCIA MAGN&Eacute;TICA NUCLEAR</h4>

		</div>

	</div>

	<div class="row" name="mri">

		<div class="span1">Fecha</div>

		<div class="span3">

			<input type="text" id="y_rmn" class="span1 mri1 date1" name="mri_date" placeholder="a&ntilde;o" maxlength="4"/>

			<input type="text" id="m_rmn" class="span1 mri1" placeholder="mes" maxlength="2"/>

			<input type="text" id="d_rmn" class="span1 mri1 date3" placeholder="d&iacute;a" maxlength="2"/>

		</div>

	</div>

	<div class="row">

		<div class="span4" style="text-align:right">Fracci&oacute;n eyecci&oacute;n ventr&iacute;culo derecho</div>

		<div class="span1">

			<input type="text" id="mri_fevd" class="span1 mri1" name="mri_fevd" placeholder="%"  maxlength="2"/>

		</div>

	</div>

	<div class="row">

		<div class="span8"><b>Di&aacute;metros arterias pulmonares (en mil&iacute;metros)</b></div>

	</div>

	<div class="row">

		<div class="span1" style="text-align:right">Tronco</div>

		<div class="span1">

			<input type="text" id="mri_main_art_diam" class="span1 mri1" name="mri_main_art_diam" placeholder="mm"/>

		</div>

		<div class="span1" style="text-align:right">Derecha</div>

		<div class="span1">

			<input type="text" id="mri_rt_art_diam" class="span1 mri1" name="mri_rt_art_diam" placeholder="mm"/>

		</div>

		<div class="span1" style="text-align:right">Izquierda</div>

		<div class="span1">

			<input type="text" id="mri_lt_art_diam" class="span1 mri1" name="mri_lt_art_diam" placeholder="mm"/>

		</div>

	</div>

	<div class="row">

		<div class="span3">Dilat. cavidades derechas?</div>

		<div class="span3">Defectos cardiacos?</div>

	</div>

	

	<div class="row">

		<div class="span3">

			<select id="mri_rt_heart_dilat" class="span3 mri1" name="mri_rt_heart_dilat">

				<option value="">...</option>

				<option value="no">No</option>

				<option value="si_aur_der">Dilataci&oacute;n aur&iacute;cula derecha</option>

				<option value="si_vent_der">Dilataci&oacute;n ventr&iacute;culo derecho</option>

				<option value="si_ambos">Dilataci&oacute;n aur. y ventr. derecho</option>

			</select>

		</div>

		<div class="span3">

			<select id="mri_defects" class="span3 mri1" name="mri_defects">

				<option value="">...</option>

				<option value="no">Sin defectos cardiacos</option>

				<option value="cia">CIA</option>

				<option value="civ">CIV</option>

				<option value="paradox_septum">Movimiento parad&oacute;jido septum</option>

				<option value="paradox_septum">Foramen oval permeable</option>

				<option value="other">Otros</option>

			</select>

		</div>

		

	</div>

	

	<div class="row" id="other_defects3">

		<div class="offset3 span3">

			<input type="text" id="mri_other_defects" class="span3 mri1" name="mri_other_defects" placeholder="Describir defectos cardiacos"/>

		</div>

	</div>

	<div class="row">

		<div class="span8"><br></div>

	</div>

	<div class="row">

		<div class="span8" style="text-align:center">

			<a class="btn" id="mri_save">Guardar</a>

			<div class="alert alert-success">

				<button type="button" class="close">&times;</button>

				<strong></strong>

			</div>

		</div>

	</div>

	<div class="row">

		<div class="span8"><br></div>

	</div>

</div>

