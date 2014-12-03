<h3>Usuarios regulares inactivos institución "{{Auth::user()->investigator->hospital->hospital_name}}"</h3>
<table class="table table-hover">
	<tr>
		<th>Activar | Nombre</th>
	</tr>
	@foreach($regular as $r)
		@if($r->user->status<1&&$r->user->rol<1&&$r->user->rol<2&&$r->user->rol<3)
			<tr>
				<td>
					<a href="" id="activateprofile{{$r->user->id}}" class='btn btn-info activateprofile'>Activar</a>
					{{$r->ivt_name}}
					{{$r->ivt_surname}}
					<div id="confirm_activate{{$r->user->id}}" class="confirm_activate">
						Esta seguro que desea activar usuario? 
						<br>(Permitir ingreso de datos al registro)
						<br>
						<a href="" id='confirm_activation{{$r->user->id}}'class='btn'>Si</a>
						<a href="" id="cancel_activation{{$r->user->id}}" class='btn'>No</a>
					</div>
					<a href="" id='changeprofile{{$r->user->id}}' class='text-info changeprofile hide'>Cambiar</a>
					<div id="profile{{$r->user->id}}" class="profile hide">
						<select name="" id="">
							<option value="">Coordinador institucional</option>
							<option value="">Usuario regular (solo ingresa datos)</option>
						</select>
						<br>
						<a id="cancelchangeprofile{{$r->user->id}}" href="">Cancelar</a>
					</div>
				</td>
			</tr>
		@endif
	@endforeach
</table>