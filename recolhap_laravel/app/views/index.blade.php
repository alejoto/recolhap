@extends('layouts.base')


@section('content')

@if(isset($_GET['doctor']))
<?php  
$doctor=$_GET['doctor'];
$main_pt=Main_patient::where('digiter_id','=',$doctor)->orderBy('surn','desc');
$count=$main_pt->count();
$patient=$main_pt->get();
?>
	@if($count>0)
	<table class="table table-hover table-bordered table-condensed">
		<tr>
			<th>NOMBRE COMPLETO</th>
			<th>DOCUMENTO</th>
			<th> Cateterismo</th>
			<th>Seguimiento 1</th>
			<th>Seguimiento 2</th>
			<th>Seguimiento 3</th>
			<th>Seguimiento 4</th>
			<th>Seguimiento 5</th>
			<th>Seguimiento 6</th>
			

		</tr>
		@foreach($patient as $p)
			<?php  
			if ($p->gender=='male') {
				$g='masculino';
			}
			else {$g='femenino';}
			?>
			
			<tr>
				<td>
					<?php  
					$link='../../modules/includes/table_redirect.php?patient='.$p->patient_id;

					?>
					<a href="{{$link}}">
						{{$p->surn}} {{$p->name}} ({{$g}})
					</a>
				</td>
				<td>{{$p->patient_id}}</td>
				<td>Pendiente</td>
				<td>Pendiente</td>
				<td>Pendiente</td>
				<td>Pendiente</td>
				<td>Pendiente</td>
				<td>Pendiente</td>
				<td>Pendiente</td>
			</tr>
		@endforeach
		<!-- 	-->
	</table>
	@endif	
@endif

@stop

@section('scripts')
<script type="text/javascript">
	$('.timepicker').timepicker({
		template: 'dropdown',
		showSeconds: true,
		minuteStep: 30,
		//secondStep: 0,
		showInputs: false,
		disableFocus: true,
		defaultTime: '8:00:00',
		showMeridian: false
	});
	$(function(){
		$('.datepicker').datepicker({
			format : 	'yyyy/mm/dd'
		});
		hmdfloatnumb($('#onlynumbers'));
	});
	
</script>
@stop