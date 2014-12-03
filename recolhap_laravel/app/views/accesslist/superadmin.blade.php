@foreach($admin as $a)
	<tr>
		<td>
			<button class="btn">No editable</button>
			 
			<spam class="">
				{{$a->investigator->ivt_name}}
				{{$a->investigator->ivt_surname}}
			</spam>
			<spam class='text-info'>Coordinador general</spam>
			<spam class="muted">
				({{$a->investigator->hospital->hospital_name}}
				-
				{{$a->investigator->hospital->city->name}})
			</spam>
		</td>
	</tr>
@endforeach
