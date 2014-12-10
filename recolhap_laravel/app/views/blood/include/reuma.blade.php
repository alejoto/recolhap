<div id="reuma"  style="text-align:left">

	<div class="row">

		<div class="well well-small span8" style="text-align:center">

			<h4>PRUEBAS REUMATOL&Oacute;GICAS</h4>

		</div>

	</div>

	<div class="row">

		<div class="span8"> <b>Factor reumatoideo</b>

		</div>

	</div>

	<div class="row" name="reuma">

		<div class="span1">Fecha</div>

		<div class="span3">

			<input type="text" id="y_f_reum" class="span1 date1 reuma" name="reuma_date"  placeholder="a&ntilde;o" maxlength="4"/>

			<input type="text" id="m_f_reum" class="span1 reuma" placeholder="mes" maxlength="2"/>

			<input type="text" id="d_f_reum" class="span1 reuma date3" placeholder="d&iacute;a" maxlength="2"/>

		</div>

		<div class="span2">

			<select id="f_reum" class="reuma" name="reuma_fr">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

	</div>

	<div class="row">

		<div class="span8">





			<a class="btn" id="f_reum_save">

				Guardar

			</a>

			<div class="alert alert-success">

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

		<div class="span8"> <b>Anticuerpos antinucleares no espec&iacute;ficos (ANA)</b>

		</div>

	</div>

	<div class="row" name="reuma_ana">

		<div class="span1">Fecha</div>

		<div class="span3">

			<input type="text" id="y_uns_ana" class="span1 date1 ana" name="ana_date" placeholder="a&ntilde;o" maxlength="4"/>

			<input type="text" id="m_uns_ana" class="span1 ana" placeholder="mes" maxlength="2"/>

			<input type="text" id="d_uns_ana" class="span1 ana date3" placeholder="d&iacute;a" maxlength="2"/>

		</div>

		<div class="span2">

			<select id="uns_ana_value" class="ana" name="ana_result">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

	</div>

	<div class="row">

		<div class="span8">






			<a class="btn" id="uns_ana_save">Guardar</a>

			<div class="alert alert-success">

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

		<div class="span8"> <b>Anticuerpos antinucleares por tipos</b>

		</div>

	</div>

	<div class="row" name="reuma_spana">

		<div class="span1">Fecha</div>

		<div class="span3">

			<input type="text" id="y_sp_ana" class="span1 spana date1" name="spana_date" placeholder="a&ntilde;o" maxlength="4"/>

			<input type="text" id="m_sp_ana" class="span1 spana" placeholder="mes" maxlength="2"/>

			<input type="text" id="d_sp_ana" class="span1 spana date3" placeholder="d&iacute;a" maxlength="2"/>

		</div>

	</div>

	<div class="row">

		<div class="span2">

			Anticentr&oacute;mero

		</div>

		<div class="span2">

			Anti RNA polimerasa

		</div>

		<div class="span2">

			Anti dsDNA

		</div>

	</div>



	<div class="row">

		<div class="span2">

			<select id="centromere" class="span2 spana" name="spana_ctmere">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

		<div class="span2">

			<select id="anti_rna_polim" class="span2 spana" name="spana_anti_rna">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

		<div class="span2">

			<select id="antidsDNA" class="span2 spana" name="spana_anti_dna">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

	</div>

	<div class="row">

		<div class="span8">





			<a class="btn" id="sp_ana_save">Guardar</a>

			<div class="alert alert-success">

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

		<div class="span8"><b>Anticuerpos antinucleares antiENAs</b></div>

	</div>

	<div class="row" name="reuma_enas">

		<div class="span1">Fecha</div>

		<div class="span3">

			<input type="text" id="y_anti_ENAs" class="span1 enas date1" name="enas_date" placeholder="a&ntilde;o" maxlength="4"/>

			<input type="text" id="m_anti_ENAs" class="span1 enas" placeholder="mes" maxlength="2"/>

			<input type="text" id="d_anti_ENAs" class="span1 enas date3" placeholder="d&iacute;a" maxlength="2"/>

		</div>

	</div>

	<div class="row">

		<div class="span2">

			Anti Ro/SS-A

		</div>

		<div class="span2">

			Anti La/SS-B

		</div>

		<div class="span2">

			Anti Smit

		</div>

	</div>

	<div class="row">

		<div class="span2">

			<select id="anti_ro" class="span2 enas" name="enas_anti_ro">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

		<div class="span2">

			<select id="anti_la" class="span2 enas" name="enas_anti_la">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

		<div class="span2">

			<select id="anti_smith" class="span2 enas" name="enas_anti_smith">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

	</div>

	<div class="row">

		<div class="span2">

			Anti RNP

		</div>

		<div class="span2">

			Anti U1 RNP (snRNP70)

		</div>

		<div class="span2">

			Anti U3 RNP (anti fibrilarina)

		</div>

	</div>



	<div class="row">

		<div class="span2">

			<select id="anti_rnp" class="span2 enas" name="enas_anti_rnp">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

		<div class="span2">

			<select id="antiRNP70" class="span2 enas" name="enas_antiRNP70">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

		<div class="span2">

			<select id="anti_u3_rnp" class="span2 enas" name="enas_anti_u3">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

	</div>

	<div class="row">

		<div class="span2">

			Anti Jo1

		</div>

		<div class="span2">

			Anti Scl

		</div>

	</div>

	<div class="row">

		<div class="span2">

			<select id="antijo" class="span2 enas" name="enas_antijo">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

		<div class="span2">

			<select id="anti_scl" class="span2 enas" name="enas_anti_scl">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

	</div>

	<div class="row">

		<div class="span8"> 

			




			<a class="btn" id="anti_ENAs_save">Guardar</a>

			<div class="alert alert-success">

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

		<div class="span8"> <b>Anticuerpos antifosfol&iacute;pidos:</b></div>

	</div>

	<div class="row" name="reuma_antilip">

		<div class="span1">Fecha</div>

		<div class="span3">

			<input type="text" id="y_anti_ph_lip" class="span1 antilip date1" name="antilip_date" placeholder="a&ntilde;o" maxlength="4"/>

			<input type="text" id="m_anti_ph_lip" class="span1 antilip" placeholder="mes" maxlength="2"/>

			<input type="text" id="d_anti_ph_lip" class="span1 antilip date3" placeholder="d&iacute;a" maxlength="2"/>

		</div>

	</div>

	<div class="row">

		<div class="span3">

			Anticardiolipina Ig G

		</div>

		<div class="span3">

			Anticardiolipina Ig M

		</div>

	</div>



	<div class="row">

		<div class="span3">

			<select id="acl_g" class="span3 antilip" name="antilip_acl_g">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

		<div class="span3">

			<select id="acl_m" class="span3 antilip" name="antilip_acl_m">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

	</div>

	<div class="row">

		<div class="span3">

			Anticoagulante L&uacute;pico

		</div>

		<div class="span3">

			Anti glicoproten&iacute;a beta 2 (B2gp)

		</div>

	</div>



	<div class="row">

		<div class="span3">

			<select id="a_coag_lup" class="span3 antilip" name="antilip_a_coag_lup">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

		<div class="span3">

			<select id="anti_b2gp" class="span3 antilip" name="antilip_anti_b2gp">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

	</div>

	<div class="row">

		<div class="span8">

			<br/>

		</div>

	</div>

	<div class="row">

		<div class="span8"> 




			<a class="btn" id="anti_ph_lip_save">Guardar</a>

			<div class="alert alert-success">

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

		<div class="span8"> <b>Anticuerpos citoplasm&aacute;ticos antineutr&oacute;filos ANCA</b></div>

	</div>

	<div class="row" name="reuma_anca">

		<div class="span1">Fecha</div>

		<div class="span3">

			<input type="text" id="y_anca_ab" class="span1 anca date1" name="anca_date" placeholder="a&ntilde;o" maxlength="4"/>

			<input type="text" id="m_anca_ab" class="span1 anca" placeholder="mes" maxlength="2"/>

			<input type="text" id="d_anca_ab" class="span1 anca date3" placeholder="d&iacute;a" maxlength="2"/>

		</div>

	</div>

	<div class="row">

		<div class="span3">

			c ANCA (citoplasm&aacute;tico)

		</div>

		<div class="span3">

			p ANCA (perinuclear)

		</div>

	</div>



	<div class="row">

		<div class="span3">

			<select id="c_anca" class="span3 anca" name="anca_c_anca">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

		<div class="span3">

			<select id="p_anca" class="span3 anca" name="anca_p_anca">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

	</div>

	<div class="row">

		<div class="span8">

			<br/>

		</div>

	</div>

	<div class="row">

		<div class="span8"> 





			<a class="btn" id="anca_ab_save">Guardar</a>

			<div class="alert alert-success">

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

		<div class="span8"> <b>Anticuerpos anticitrulina</b></div>

	</div>

	<div class="row" name="reuma_citrul">

		<div class="span1">Fecha</div>

		<div class="span3">

			<input type="text" id="y_citrul_ab" class="span1 citrul date1" name="citrul_date" placeholder="a&ntilde;o" maxlength="4"/>

			<input type="text" id="m_citrul_ab" class="span1 citrul" placeholder="mes" maxlength="2"/>

			<input type="text" id="d_citrul_ab" class="span1 citrul date3" placeholder="d&iacute;a" maxlength="2"/>

		</div>

		<div class="span2">

			<select id="a_citrul" class="citrul" name="citrul_a_citrul">

				<option value=""></option>

				<option value="pos">Positivo</option>

				<option value="neg">Negativo / indeterminado</option>

			</select>

		</div>

	</div>

	<div class="row">

		<div class="span8">

			<br/>

		</div>

	</div>

	<div class="row">

		<div class="span8">

			




			<a class="btn" id="citrul_ab_save">

				Guardar

			</a>

			<div class="alert alert-success">

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

		<div class="span8">

			<br/>

			<br/>

		</div>

	</div>

</div>