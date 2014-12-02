$(function(){
	hide_show_savebutton(
		[
		$('#ivt_name'),
		$('#ivt_surname'),
		$('#ivt_doc'),
		$('#ivt_specialty'),
		$('#ivt_mobile'),
		$('#ivt_city')
		],
		$('#completeinvestigatordata')
		)
	;

	$('#ivt_city').change(function(){
		var city=$('#ivt_city').val();
		if (city=='') {
			$('#hospital_id').html('<option value=""></option>');
		}
		else {
			var base=$('#base').html();
			$.get(
				base+'/city/jsoncities/'+city,
				{},
				function(d){
					
					var options='<option value="">HOSPITAL</option>';
					$.each(d,function(k,v){
						options=options+
						'<option value="'
						+v.hospital_id+'">'
						+v.hospital_name
						+'</option>';
					}
					)
					;
					$('#hospital_id').html('');
					$('#hospital_id').append(options);
				}
				)
			;
		}
	});
});