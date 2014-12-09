<div id="anam">
	<div class="row">
		<div class="span8 well well-small">
			<h4>ANAMNESIS</h4>
		</div>
	</div>
	<div class="row">
		<div class="span7 text-info">
			<h4>SOBRE INICIO DE LA ENFERMEDAD</h4>
		</div>
	</div>
	@include('clinical.includes.first_eval')
	<div class="row">
		<div class="span8"><hr></div>
	</div>
	<div class="row">
		<div class="span7 text-info" >
			<h4>EVALUACI&Oacute;N DE SEGUIMIENTO</h4><br/>
		</div>
	</div>
	<div class="row" name="follow_up">
		<div class="span2" style="text-align:left">Fecha evaluaci&oacute;n</div>
		<div class="span3" style="text-align: left;">
			<input type="text" id="year_ev" class="span1 date1" name="eval_date"placeholder="a&ntilde;o" maxlength="4"/>
			<input type="text" id="month_ev" class="span1 " placeholder="mes" maxlength="2"/>
			<input type="text" id="day_ev" class="span1 date3" placeholder="d&iacute;a" maxlength="2"/>
		</div>
	</div>
	<div class="row">
		<div class="span2" style="text-align:left">Clase funcional</div>
		<div class="span6" style="text-align: left; ">
			<select id="nyha_funct_class" class="span5 ex_fc">
				<option value=""></option>
				<option value="i">I. Asintom&aacute;tico</option>
				<option value="ii">II. Disnea que limita pocas actividades cotidianas</option>
				<option value="iii">III. Disnea incapacitante, cede solo al reposo</option>
				<option value="iv">IV. Disnea de reposo</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="span8" style="text-align: left;"><h4>S&iacute;ntomas de inter&eacute;s para HAP</h4></div>
	</div>
	<div class="row">
		<div class="span2" style="text-align:right">
			Disnea 
			<input type="checkbox" id="dyspnea" class="anamnesis">
		</div>
		<div class="span2" style="text-align:right">
			Tos 
			<input type="checkbox" id="cough" class="anamnesis">
		</div>
		<div class="span2" style="text-align:right">
			Dolor tor&aacute;cico 
			<input type="checkbox" id="chestpain" class="anamnesis">
		</div>
	</div>
	<div class="row">
		<div class="span2" style="text-align:right">
			Edema MsIs 
			<input type="checkbox" id="loweredema" class="anamnesis">
		</div>
		<div class="span2" style="text-align:right">
			Hemoptisis 
			<input type="checkbox" id="hemoptysis" class="anamnesis">
		</div>
		<div class="span2" style="text-align:right">
			S&iacute;ncope 
			<input type="checkbox" id="syncope" class="anamnesis">
		</div>
	</div>
	<div class="row">
		<div class="span8"><br></div>
	</div>
	<div class="row">
		<div class="offset1 span3" style="text-align:right">S&iacute;ntomas han mejorado?</div>
		<div class="span2">
			<select id="improved_symts" class="span2 ex_fc">
				<option value=""></option>
				<option value="si">S&iacute;</option>
				<option value="no">No</option>
			</select>
		</div>
	</div>
	<div class="row">
		<div class="span8" style="text-align: left;">
			<a class="btn" id="sympt_save2">Continuar..</a>
			<br><br><br>
		</div>
	</div>
</div>


