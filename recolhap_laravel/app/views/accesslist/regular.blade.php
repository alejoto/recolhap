<h3>Usuarios regulares</h3>
<table class="table table-hover">
	<tr>
		<th>Nombre</th>
		<th>Institución</th>
		<th>Perfil</th>
	</tr>
	@foreach($regular as $r)
		@if($r->user->status==1&&$r->user->rol!=1)
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
					<a href="" id="inactivateprofile{{$r->user->id}}" class='text-info inactivateprofile'>Inactivar</a>
					<br>
					<div id="profile{{$r->user->id}}" class="profile">
						<select name="" id="">
							<option value="">Coordinador institucional</option>
							<option value="">Usuario regular (solo ingresa datos)</option>
						</select>
						<br>
						<a id="cancelchangeprofile{{$r->user->id}}"href="">Cancelar</a>
					</div>
					<div id="confirminactivate{{$r->user->id}}" class="confirminactivate">
						Esta seguro que desea inactivar usuario? 
						<br>(Restriccion de ingreso de datos al registro)
						<br>
						<a href="" id='confirminactivation{{$r->user->id}}'class='btn'>Si</a>
						<a href="" id="cancelinactivation{{$r->user->id}}" class='btn'>No</a>
					</div>
				</td>
			</tr>
		@endif
	@endforeach
</table>