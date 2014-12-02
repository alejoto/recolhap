
	
@foreach($admin as $a)
	<tr>
		<td>
			{{$a->investigator->ivt_name}}
			{{$a->investigator->ivt_surname}}
		</td>
		<td>
			{{$a->investigator->hospital->hospital_name}}
			({{$a->investigator->hospital->city->name}})
		</td>
		<td>
			Coordinador general
		</td>
	</tr>
@endforeach
