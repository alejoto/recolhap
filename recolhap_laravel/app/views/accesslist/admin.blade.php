@foreach($coord as $c)
	<tr>
		<td>
			@if($c->investigator==null)
				{{$c->email}}
			@else 
				{{$c->investigator->ivt_name}}
				{{$c->investigator->ivt_surname}}
			@endif
			
		</td>
		<td>
			@if($c->investigator==null)
				institucion no asignada
			@elseif($c->investigator->hospital==null)
				institucion no asignada
			@else 
				{{$c->investigator->hospital->hospital_name}}
			@endif
		</td>
		<td>
			Coordinador institucional 
			<a href="" id='changeprofile{{$c->id}}' class='text-info changeprofile'>Cambiar</a>
			|
			<a href="" id="inactivateprofile{{$c->id}}" class='text-info inactivateprofile'>Inactivar</a>
			<br>
			<div id="profile{{$c->id}}" class="profile">
				<select name="" id="">
					<option value="">Coordinador institucional</option>
					<option value="">Investigador (solo ingresa datos)</option>
				</select>
				<br>
				<a id="cancelchangeprofile{{$c->id}}"href="">Cancelar</a>
			</div>
			<div id="confirminactivate{{$c->id}}" class="confirminactivate">
				Esta seguro que desea inactivar usuario? 
				<br>(Restriccion de ingreso de datos al registro)
				<br>
				<a href="" id='confirminactivation{{$c->id}}' class='btn'>Si</a>
				<a href="" id="cancelinactivation{{$c->id}}" class='btn'>No</a>
			</div>
		</td>
	</tr>
@endforeach