<div class="btn-group">

	<a class="btn" href="{{URL::to('patient/'.$p->patient_id.'/clinic')}}" id="basic_eval" rel="tooltip" title="Evaluaci&oacute;n cl&iacute;nica">
		<img width="26px" height="22px" src="{{Asset('assets/images/basic_evaluation.gif')}}"/>
	</a>

	<a class="btn" href="{{URL::to('patient/'.$p->patient_id.'/blood')}}" id="blood_test" rel="tooltip" title="Pruebas en sangre" >
		<img width="26px" height="22px"  src="{{Asset('assets/images/bloodtest.gif')}}"/>
	</a>
	<a class="btn" href="{{URL::to('patient/'.$p->patient_id.'/imaging')}}" id="clin_images" rel="tooltip" title="Im&aacute;genes diagn&oacute;sticas">
		<img width="26px" height="22px"  src="{{Asset('assets/images/clinical_imaging.gif')}}"/>
	</a>
	<a class="btn" href="{{URL::to('patient/'.$p->patient_id.'/performance')}}" id="performance" rel="tooltip" title="Desempe&ntilde;o cardiovascular">
		<img width="26px" height="22px"  src="{{Asset('assets/images/performance.gif')}}"/>
	</a>
</div>
<br><br>

<center>
	<div class="main_icon"></div>
</center>

