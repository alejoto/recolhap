<table id="treatment_tb" class="table table-hover">
	<tr>
		<th>F&aacute;rmaco</th>
		<th>Fecha inicio</th>
		<th>Motivo suspensi&oacute;n</th>
		<th>Fecha suspensi&oacute;n</th>
	</tr>
	@if($eval_treatment->count()>0)
		@foreach($eval_treatment->get() as $e)
		<?php $d=$e->drugqtreatment; ?>
			<tr>
				<td>
					{{$d->drug}}
				</td>
				<td>
					{{$d->drug_ini}}
				</td>
				<td id='td_suspend_cause_{{$d->drug_treatment_id}}'>
					{{$d->suspend_cause}}
					@if($d->suspend_cause==null)
						<select  id="suspend_cause_{{$d->drug_treatment_id}}" class="suspension suspend_cause_">
							<option value=""></option>
							<option value="evento adverso">Evento adverso</option>
					        <option value="falla terapeutica">Falla terap&eacute;utica (no mejor&iacute;a)</option>
					        <option value="desersion">Desersi&oacute;n al tratamiento</option>
					        <option value="negacion asegurador">Negaci&oacute;n por asegurador</option>
					        <option value="mejora con otro tratamiento">Mejor&oacute; con otro tratamiento</option>
					        <option value="otras">Otras causas</option>
						</select>
						<div id="drg_{{$d->drug_treatment_id}}" class="btn-group drug_suspension_update">
							<button id="update_{{$d->drug_treatment_id}}" class="btn">
								<i class="icon-ok"></i>
								Actualizar
							</button>
							<button class="btn" id="cancel_{{$d->drug_treatment_id}}">
								<i class="icon-remove"></i>
								Borrar
							</button>
						</div>
					@else 
						{{$d->suspend_cause}}
					@endif
				</td>
				<td id='td_drug_end_{{$d->drug_treatment_id}}'>
					@if($d->drug_end==null)
						<div id="date_{{$d->drug_treatment_id}}" class="susp_date">
							<input type="text" id="year_end_{{$d->drug_treatment_id}}" class="span1 supension year_end_d date1" maxlength="4" placeholder="a&ntilde;o">
							<input type="text" id="month_end_{{$d->drug_treatment_id}}" class="span1 supension month_end_d" placeholder='mes'>
							<input type="text" id="day_end_{{$d->drug_treatment_id}}" class="span1 supension day_end_d" placeholder='d&iacute;a'>
							<input type="hidden" id='drug_end_{{$d->drug_treatment_id}}'>
						</div>

					@endif
					{{$d->drug_end}}
				</td>
			</tr>
		
		@endforeach
	
	@endif
	<tr>
		<td>
			<a href="" id="ad_drug">
				<i class="icon-plus-sign"></i>
				A&ntilde;adir f&aacute;rmaco
			</a>
		</td>
		<td></td>
		<td></td>
		<td></td>
	</tr>
</table>
<div id="temporaryid"></div>