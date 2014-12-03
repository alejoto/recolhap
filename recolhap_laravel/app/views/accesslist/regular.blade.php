<h3>Usuarios regulares activos institución {{$hospital}}</h3>
<table class="table table-hover">
	<tr>
		<th>Acción | Nombre</th>
	</tr>
	@foreach($regular as $r)
		@if($r->user->status==1&&$r->user->rol!=1&&$r->user->rol!=2&&$r->user->rol!=3)
			<tr>
				<td>
					<a href="" id="inactivateprofile{{$r->user->id}}" class='btn  inactivateprofile'>Inactivar</a>
					{{$r->ivt_name}}
					{{$r->ivt_surname}}
					<div id="confirminactivate{{$r->user->id}}" class="confirminactivate">
						Esta seguro que desea inactivar usuario? 
						<br>(Restriccion de ingreso de datos al registro)
						<br>
						<a href="" id='confirminactivation{{$r->user->id}}'class='btn'>Si</a>
						<a href="" id="cancelinactivation{{$r->user->id}}" class='btn'>No</a>
					</div>
					<a href="" id='changeprofile{{$r->user->id}}' class='text-info changeprofile hide'>Cambiar</a>
					<div id="profile{{$r->user->id}}" class="profile hide">
						<select name="" id="">
							<option value="">Coordinador institucional</option>
							<option value="">Usuario regular (solo ingresa datos)</option>
						</select>
						<br>
						<a id="cancelchangeprofile{{$r->user->id}}"href="">Cancelar</a>
					</div>
				</td>
			</tr>
		@endif
	@endforeach
</table>