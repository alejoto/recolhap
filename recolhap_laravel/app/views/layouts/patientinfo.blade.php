<div class="span2">
	<a href="" data-toggle='tooltip' title='Editar paciente'>
		@if($p->gender=='male')
			<img src="{{asset('assets/images/male.png')}}"/>
		@elseif($p->gender=='female')
			<img src="{{asset('assets/images/female.png')}}"/>
		@endif
	</a>
</div>
<div class="span5">
	<div class="row">
		<div class="span5">
			<b>
				<a href="">
					<span id='patient' class="muted">{{$p->patient_id}}</span>
					{{$p->name}} {{$p->surn}}</a></b></div>
	</div>
	<div class="row">
		<div class="span5"><a href="">edad {{$age}} a&ntilde;os</a></div>
	</div>
</div>