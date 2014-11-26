$(function(){
	$('#change_city').hide();
	$('#newcity_form').hide();
	$('#cascade1_register').hide();
	$('#alreadysubscribed_list').hide();
	$('#hide_already_subscribedlist').hide();

	$('#already_subscribed').click(function(e){
		e.preventDefault();
		$('#alreadysubscribed_list').show('fast');
		$('#hide_already_subscribedlist').show('fast');
	});

	$('#hide_already_subscribedlist').click(function(e){
		e.preventDefault();
		$('#alreadysubscribed_list').hide('fast');
		$('#hide_already_subscribedlist').hide('fast');
	});
	$('#city_recolhap').change(function(){
		//
		var city=$('#city_recolhap').val();
		var cityname=$("#city_recolhap option:selected").text();

		if (city=='newcity') {
			$('#newcity_form').show('fast');
			$('#city_recolhap').hide('fast');
			$('#selected_city').html('');
			$('#change_city').hide('fast');
			$('#cascade1_register').hide('fast');
		} 
		else if (city=='') {
			$('#selected_city').html('');
			$('#change_city').hide('fast');
			$('#cascade1_register').hide('fast');
		} else {
			$('#cascade1_register').hide('fast');
			$('#change_city').show('fast');
			$('#selected_city').html(cityname);
			$(this).hide('fast');
			
			var base=$('#base').html();
			$.get(
				base+'/city/jsoncities/'+city,
				{},
				function(d){
					
					var options='<option value=""></option>';
					$.each(d,function(k,v){
						options=options+
						'<option value="'
						+v.hospital_id+'">'
						+v.hospital_name
						+'</option>';
					}
					)
					;
					options=options+
					'<option value="newhospital">...agregar hospital</option>';
					$('#clinic_recolhap').html('');
					$('#clinic_recolhap').append(options);
					$('#cascade1_register').show('fast');
					
					enable_hospitals();
				}
				)
			;
		}
	});

	function addcityform(){$('#city_recolhap').show('fast');}

	//
	$('#change_city').click(function(e){
		e.preventDefault();
		addcityform();
	});

	$('#newcity_form_cancel').click(function(e){
		e.preventDefault();
		addcityform();
		$('#newcity_form').hide('fast');
		$('#city_recolhap').show('fast');
	});

	function enable_hospitals(){
		$('#change_clinic').hide();
		$('#newclinic_form').hide();
		$('#cascade2_register').hide();

		$('#clinic_recolhap').change(function(){
			var h_id=$(this).val();
			var hospital=$("#clinic_recolhap option:selected").text();
			if (h_id=='') {
				$('#clinic_recolhap').show('fast');
				$('#change_clinic').hide('fast');
				$('#newclinic_form').hide('fast');
				$('#selected_clinic').html('');
				$('#cascade2_register').hide('fast');
			} else if (h_id=='newhospital') {
				$('#clinic_recolhap').hide('fast');
				$('#newclinic_form').show('fast');
				$('#change_clinic').hide('fast');
				$('#selected_clinic').html('');
				$('#cascade2_register').hide('fast');
			} else {
				$('#clinic_recolhap').hide('fast');
				$('#change_clinic').show('fast');
				$('#newclinic_form').hide('fast');
				$('#selected_clinic').html(hospital);
				$('#cascade2_register').show('fast');
			}
			
		});

		$('#change_clinic').click(function(e){
			e.preventDefault();
			$('#clinic_recolhap').show('fast');
		});

		//cancel 
		$('#newclinic_form_cancel').click(function(e){
			e.preventDefault();
			$('#newclinic_form').hide('fast');
			$('#clinic_recolhap').show('fast');
		});

	}
});