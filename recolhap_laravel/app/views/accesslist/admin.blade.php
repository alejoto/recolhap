@foreach($coord as $c)
	<tr>
		<td>
			<a href="" id="inactivateprofile{{$c->id}}" class='btn inactivateprofile'>Inactivar</a>
			@if($c->investigator==null)
				<spam class="">
					{{$c->email}}
				</spam>
				<spam class="muted">(institucion no asignada)</spam>
			@else 
				{{$c->investigator->ivt_name}}
				{{$c->investigator->ivt_surname}}
				@if($c->investigator->hospital==null)
					<spam class="muted">(institucion no asignada)</spam>
				@else
					<spam class="muted">({{$c->investigator->hospital->hospital_name}})</spam>
				@endif
			@endif
			<div id="confirminactivate{{$c->id}}" class="confirminactivate">
				Esta seguro que desea inactivar usuario? 
				<br>(Restriccion de ingreso de datos al registro)
				<br>
				<a href="" id='confirminactivation{{$c->id}}' class='btn'>Si</a>
				<a href="" id="cancelinactivation{{$c->id}}" class='btn'>No</a>
			</div>
			<a href="" id='changeprofile{{$c->id}}' class='text-info changeprofile hide'>Cambiar</a>
			<div id="profile{{$c->id}}" class="profile hide">
				<select name="" id="">
					<option value="">Coordinador institucional</option>
					<option value="">Investigador (solo ingresa datos)</option>
				</select>
				<br>
				<a id="cancelchangeprofile{{$c->id}}"href="">Cancelar</a>
			</div>
		</td>
	</tr>
@endforeach