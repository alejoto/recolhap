<h2>Lista de usuarios inactivos</h2>

@if($rol<=2)
<h3>Administradores instituciones inactivos</h3>
<table class="table table-hover">
	<tr>
		<th>
			Nombre
		</th>
		<th>
			Institución
		</th>
		<th>
			Perfil
		</th>
	</tr>
	@foreach($i_coord as $c)
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
				<a href="" id="activateprofile{{$c->id}}" class='text-info activateprofile'>Activar</a>
				<br>
				<div id="profile{{$c->id}}" class="profile">
					<select name="" id="">
						<option value="">Coordinador institucional</option>
						<option value="">Investigador (solo ingresa datos)</option>
					</select>
					<br>
					<a id="cancelchangeprofile{{$c->id}}"href="">Cancelar</a>
				</div>
				<div id="confirm_activate{{$c->id}}" class="confirm_activate">
					Esta seguro que desea activar usuario? 
					<br>(Permitir ingreso de datos al registro)
					<br>
					<a href="" id='confirm_activation{{$c->id}}' class='btn'>Si</a>
					<a href="" id="cancel_activation{{$c->id}}" class='btn'>No</a>
				</div>
			</td>
		</tr>
	@endforeach
</table>
@endif

<hr>
