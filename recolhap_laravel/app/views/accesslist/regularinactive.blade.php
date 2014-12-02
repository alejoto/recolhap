<h3>Usuarios regulares inactivos</h3>
<table class="table table-hover">
	<tr>
		<th>Nombre</th>
		<th>Institución</th>
		<th>Perfil</th>
	</tr>
	@foreach($regular as $r)
		@if($r->user->status<1&&$r->user->rol<1)
			<tr>
				<td>
					{{$r->ivt_name}}
					{{$r->ivt_surname}}
				</td>
				<td>
					{{$r->hospital->hospital_name}}
				</td>
				<td>
					Usuario regular 
					<a href="" id='changeprofile{{$r->user->id}}' class='text-info changeprofile'>Cambiar</a>
					|
					<a href="" id="activateprofile{{$r->user->id}}" class='text-info activateprofile'>Activar</a>
					<br>
					<div id="profile{{$r->user->id}}" class="profile">
						<select name="" id="">
							<option value="">Coordinador institucional</option>
							<option value="">Usuario regular (solo ingresa datos)</option>
						</select>
						<br>
						<a id="cancelchangeprofile{{$r->user->id}}"href="">Cancelar</a>
					</div>
					<div id="confirm_activate{{$r->user->id}}" class="confirm_activate">
						Esta seguro que desea activar usuario? 
						<br>(Permitir ingreso de datos al registro)
						<br>
						<a href="" id='confirm_activation{{$r->user->id}}'class='btn'>Si</a>
						<a href="" id="cancel_activation{{$r->user->id}}" class='btn'>No</a>
					</div>
				</td>
			</tr>
		@endif
	@endforeach
</table>