<div id="first_eval_form">
	@if($beginning==0)
		<div id='symptoms_onset_empty' class="row">
			<div class="offset2 span6" style="text-align: left;">
				Año y mes inicio s&iacute;ntomas (antes del diagnostico)
				<br>
				<input type="text" id="year" placeholder="a&ntilde;o" class="span1 " maxlength="4"/>
				<input type="text" id="month" placeholder="mes" class="span1 " maxlength="2"/>
			</div>
		</div>
	@else
		<div id='symptoms_onset_filled' class="row">
			<div class="offset2 span6" style="text-align: left;">
				Año y mes inicio s&iacute;ntomas (antes del diagnostico)
				<br>
				<b>año {{$f_year}}, mes {{$f_month}} </b>
			</div>
		</div>
	@endif
	<br>
	@if($afro==0)
		<div id='afroamerican_trait_empty' class="row">
			<div class="offset2 span6" style="text-align:left">
				Raza afroamericana?
				<br>
				<select id='afroamerican' class="span2">
					<option value=""></option>
					<option value="si">S&iacute;</option>
					<option value="no">No</option>
				</select>
			</div>
		</div>
	@else
		<div id='afroamerican_trait_filled' class="row">
			<div class="offset2 span6" style="text-align:left">
				Raza afroamericana?
				<br>
				<b>{{$f->afroamerican}}</b>
			</div>
		</div>
	@endif
	<br>
	@if($dxtype==0)
		<div id='dx_type_empty' class="row">
			<div class="offset2 span6">
				Clasificación
				<br>
				<select name="" id="haptype">
					<option value=""></option>
					<option value="HAP idiopática (grupo 1)">
						HAP idiopática (grupo 1)
					</option>
					<option value="HAP hereditaria BMPR2 (grupo 1)">
						HAP hereditaria BMPR2 (grupo 1)
					</option>
					<option value="HAP hereditaria ALK-1, ENG, SMAD9, CAV1, KCNK3 (grupo 1)">
						HAP hereditaria ALK-1, ENG, SMAD9, CAV1, KCNK3 (grupo 1)
					</option>
					<option value="HAP hereditaria desconocida (grupo 1)">
						HAP hereditaria desconocida (grupo 1)
					</option>
					<option value="HAP inducida por drogas/toxinas (grupo 1)">
						HAP inducida por drogas/toxinas (grupo 1)
					</option>
					<option value="HAP asociada a enf. tejido conectivo (grupo 1)">
						HAP asociada a enf. tejido conectivo (grupo 1)
					</option>
					<option value="HAP asociada a VIH (grupo 1)">
						HAP asociada a VIH (grupo 1)
					</option>
					<option value="HAP asociada a hipertensión portal (grupo 1)">
						HAP asociada a hipertensión portal (grupo 1)
					</option>
					<option value="HAP asociada a cardiopatía congénita (grupo 1)">
						HAP asociada a cardiopatía congénita (grupo 1)
					</option>
					<option value="HAP asociada a esquistosomiasis (grupo 1)">
						HAP asociada a esquistosomiasis (grupo 1)
					</option>
					<option value="HAP asociada a enfermedad venooclusiva pulmonar (grupo 1)">
						HAP asociada a enfermedad venooclusiva pulmonar (grupo 1)
					</option>
					<option value="HAP asociada a hemangiomatosis pulmonar capilar (grupo 1)">
						HAP asociada a hemangiomatosis pulmonar capilar (grupo 1)
					</option>
					<option value="HAP persistente del recién nacido (grupo 1)">
						HAP persistente del recién nacido (grupo 1)
					</option>
					<option value="HAP tromboembólica crónica (grupo 4)">
						HAP tromboembólica crónica (grupo 4)
					</option>
				</select>
			</div>
		</div>
	@else
		<div  id='dx_type_filled' class="row">
			<div class="offset2 span">
				Clasificación
				<br>
				<b>{{$f->haptype}}</b>
			</div>
		</div>
	@endif
</div>
