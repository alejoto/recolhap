
<h2>Lista de usuarios inactivos</h2>
<div class="muted">
Su perfil de administrador, además de ingresar datos de pacientes a RECOLHAP, permite habilitar o restringir permisos a otros usuarios que se hayan suscrito al registro para alimentar la base de datos a nivel nacional.
</div>
@if($rol<=2)
<div class="muted">Los siguientes médicos aunque están en el registro no pueden ingresar datos a la plataforma hasta que usted los active (botón "Activar")</div>
<table class="table table-hover">
	<tr>
		<th>Acción | Nombre </th>
	</tr>
	@foreach($i_coord as $c)
		<tr>
			<td>
				<a href="" id="activateprofile{{$c->id}}" class='btn btn-info activateprofile'>Activar</a>
				@if($c->investigator==null)
					{{$c->email}}
					(institucion no asignada)
				@else 
					{{$c->investigator->ivt_name}}
					{{$c->investigator->ivt_surname}}
					@if($c->investigator->hospital==null)
						(institucion no asignada)
					@else
						({{$c->investigator->hospital->hospital_name}})
					@endif
				@endif
				<div id="confirm_activate{{$c->id}}" class="confirm_activate">
					Esta seguro que desea activar usuario? 
					<br>(Permitir ingreso de datos al registro)
					<br>
					<a href="" id='confirm_activation{{$c->id}}' class='btn'>Si</a>
					<a href="" id="cancel_activation{{$c->id}}" class='btn'>No</a>
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
</table>
@endif
		

<hr>
