$(function(){
	var d = new Date(); /* Used to calculate the actual year */
	hide_show_savebutton(
		[$("#year_death"),
		$("#month_death"),
		$("#day_death"),
		$("#dead_cause")], 
		$("#outcome_save")
		)
	;
	//
	hmd_dateformat(
		$("#year_death"),
		$("#month_death"),
		$("#day_death")
		)
	;
	//
	num_ranges($("#year_death"), d.getFullYear(), 1990,0);

	$('#outcome_save').click(function(e){
		e.preventDefault();
		var patient=$('#patient').html();
		var year_death=$('#year_death').val();
		var month_death=$('#month_death').val();
		var day_death=$('#day_death').val();
		var dead_cause=$('#dead_cause').val();
		var base=$('#base').html();
		$.post(
			base+'/patient/'+patient+'/outcome',
			{
				patient:patient,
				year_death:year_death,
				month_death:month_death,
				day_death:day_death,
				dead_cause:dead_cause
			},
			function(d){
				window.location.href=base+'/patient/'+patient+'/clinic';
			}
			)
		;
	});
});