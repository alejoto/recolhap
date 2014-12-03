<h3>
	Administradores instituciones activos
</h3>
<div class="muted">Haga click en "Inactivar" para inhabilitar usuario.  Puede activarlo nuevamente en el listado de usuarios inactivos</div>
<table class="table table-hover">
	<tr>
		<th>Acción | Nombre</th>
	</tr>
	@if($u->rol==1)
		@include('accesslist.superadmin')
	@endif
	@if($u->rol==1||$u->rol==2)
		@include('accesslist.admin')
	@endif
</table>