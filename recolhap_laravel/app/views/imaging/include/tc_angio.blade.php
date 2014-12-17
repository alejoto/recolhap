<div id="tc_angio" style="text-align:left">

	<div class="row">

		<div class="span8 well well-small" style="text-align:center">

			<h4>TOMOGRAF&Iacute;A PULMONAR</h4>

		</div>

	</div>

	<div class="row" name="tc_angio">

		<div class="span1">Fecha</div>

		<div class="span3">

			<input type="text" id="y_tc" class="span1 tcangio date1" name="a_tc_date" placeholder="a&ntilde;o" maxlength="4"/>

			<input type="text" id="m_tc" class="span1 tcangio" placeholder="mes" maxlength="2"/>

			<input type="text" id="d_tc" class="span1 tcangio date3" placeholder="d&iacute;a" maxlength="2"/>

		</div>

	</div>

	<div class="row">

		<div class="span8"><b>Di&aacute;metros arterias pulmonares (en mil&iacute;metros)</b></div>

	</div>

	<div class="row">

		<div class="span1" style="text-align:right">Tronco</div>

		<div class="span1">

			<input type="text" id="a_tc_main_pulm_art_diamt" class="span1 tcangio" name="a_tc_main_pulm_art_diamt" placeholder="mm"/>

		</div>

		<div class="span1" style="text-align:right">Derecha</div>

		<div class="span1">

			<input type="text" id="a_tc_rt_pulm_art_diamt" class="span1 tcangio" name="a_tc_rt_pulm_art_diamt" placeholder="mm"/>

		</div>

		<div class="span1" style="text-align:right">Izquierda</div>

		<div class="span1">

			<input type="text" id="a_tc_left_pulm_art_diamt" class="span1 tcangio" name="a_tc_left_pulm_art_diamt" placeholder="mm"/>

		</div>

	</div>

	<div class="row">

		<div class="span8"><hr></div>

	</div>

	<div class="row">

		<div class="span8"><b>Marcar hallazgos presentes</b></div>

	</div>

	<div class="row">

		<div class="span3">

			<input type="checkbox" id="a_tc_rt_heart_dilat" class="tcangio" name="a_tc_rt_heart_dilat">Dilataci&oacute;n cavidades derechas

		</div>

		<div class="span3">

			<input type="checkbox" id="a_tc_pulm_thrombos" class="tcangio" name="a_tc_pulm_thrombos">Presencia de trombos

		</div>

	</div>

	<div class="row">

		<div class="span3">

			<input type="checkbox" id="a_tc_inft_interst" class="tcangio" name="a_tc_inft_interst">Inflitrados intersticiales

		</div>

		<div class="span3">

			<input type="checkbox" id="a_tc_inft_alv" class="tcangio" name="a_tc_inft_alv">Infiltrados alveolares

		</div>

	</div>

	<div class="row">

		<div class="span3">

			<input type="checkbox" id="a_tc_inft_nodular" class="tcangio" name="a_tc_inft_nodular">Infiltrados nodulares

		</div>

		<div class="span3">

			<input type="checkbox" id="a_tc_inft_retic" class="tcangio" name="a_tc_inft_retic">Infiltrados reticulares

		</div>

	</div>

	<div class="row">

		<div class="span3">

			<input type="checkbox" id="a_tc_inft_honeycomb" class="tcangio" name="a_tc_inft_honeycomb">Imagen en panal de abeja
		</div>
		<div class="span3">
			<input type="checkbox" id="a_tc_pleural_effusion" class="tcangio" name="a_tc_pleural_effusion">Derrame pleural
		</div>

	</div>

	<div class="row">
		<div class="span3">
			<input type="checkbox" id="a_tc_mosaic" class="tcangio" name="a_tc_mosaic">Patrón en mosaico 
		</div>
	</div>

	<div class="row">

		<div class="span8"><br></div>

	</div>

	<div class="row">

		<div class="span3">

			<select id="a_tc_tep_pattern" class="span3 tcangio" name="a_tc_tep_pattern">

				<option value="">TROMBOEMBOLISMO?...</option>

				<option value="no">Sin signos</option>

				<option value="central">Central</option>

				<option value="periferico">Perif&eacute;rico</option>

				<option value="mosaico">Mosaico</option>

			</select>

		</div>

		<div class="span3">
			<select id="a_tc_congenit" class="span3 tcangio" name="a_tc_congenit" >
				<option value="">DEFECTOS CARDIACOS...</option>
				<option value="no">Sin defectos</option>
				<option value="cia">CIA</option>
				<option value="civ">CIV</option>
				<option value="paradox_septum">Movimiento parad&oacute;jido septum</option>
				<option value="paradox_septum">Foramen oval permeable</option>
				<option value="other">Otros</option>
			</select>
		</div>

	</div>

	<div class="row" id="other_defects1">
		<div class="offset3 span3">
			<input type="text" id="a_tc_congenit_otros" class="span3 tcangio" name="a_tc_congenit_otros" placeholder="Describir defectos cardiacos"/>
		</div>
	</div>

	<div class="row">
		<div class="span8"><br></div>
	</div>

	<div class="row">
		<div class="span8" style="text-align:center">
			<a class="btn" id="tc_save">Guardar</a>
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

