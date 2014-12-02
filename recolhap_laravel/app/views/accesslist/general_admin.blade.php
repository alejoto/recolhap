<h3>Administradores instituciones activos</h3>
<table class="table table-hover">
	<tr>
		<th>Nombre</th>
		<th>Institución</th>
		<th>Perfil</th>
	</tr>
	@if($u->rol==1)
		@include('accesslist.superadmin')
	@endif
	@if($u->rol==1||$u->rol==2)
		@include('accesslist.admin')
	@endif
</table>