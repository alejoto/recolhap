$(function(){
	$('#change_city').hide();
	$('#newcity_form').hide();
	$('#cascade1_register').hide();

	$('#city_recolhap').change(function(){
		var city=$('#city_recolhap').val();
		var cityname=$("#city_recolhap option:selected").text();


		$('#clinic_recolhap').hide('fast');

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
		}
		else {
			$('#newcity_form').hide('fast');
			$('#city_recolhap').show('fast');
			$('#clinic_recolhap').show('fast');
			$('#change_city').show('fast');
			$('#selected_city').html(cityname);
			$(this).hide('fast');
			$('#cascade1_register').show('fast');
			
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

	//
	function enable_hospitals(){
		$('#change_clinic').hide();
		$('#newclinic_form').hide();
		$('#cascade2_register').hide();

		$('#clinic_recolhap').change(function(){
			var h_id=$(this).val();
			var hospital=$("#clinic_recolhap option:selected").text();
			//
			if (h_id=='') {
				$('#clinic_recolhap').show('fast');
				$('#change_clinic').hide('fast');
				$('#newclinic_form').hide('fast');
				$('#selected_clinic').html('');
				//$('#cascade2_register').hide('fast');
			}
			else if (h_id=='newhospital') {
				$('#clinic_recolhap').hide('fast');
				$('#newclinic_form').show('fast');
				$('#change_clinic').hide('fast');
				$('#selected_clinic').html('');
				//$('#cascade2_register').hide('fast');
			} 
			else {
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

	$('#accept_hospital').click(function(e){
		e.preventDefault();
		var clinic=$('#clinic_recolhap').val();
		var base=$('#base').html();
		$.post(base+'/complete/hospital',
			{clinic:clinic},
			function(d){
				//$('#accept_hospital').html(d);
				if (d==1) {
					window.location.href=base+'/patients';
				}
			//
			//$('#accept_hospital').html('1');
		});
	});


	up_cas( $('#newcityname') );

	$('#add_new_city').click(function(e){
		e.preventDefault();
		var city=$('#newcityname').val();
		var base=$('#base').html();
		$.post(
			base+'/city',
			{city:city},
			function(d){
				$('#add_new_city').html(1);
				$('#city_recolhap').append(
					'<option value="'+d+'" selected>'
					+city
					+'</option>'
					)
				;
				$('#city_recolhap').hide('fast');
				$('#newcity_form').hide('fast');
				$('#change_city').show('fast');
				$('#selected_city').html(city);
			}
			)
		;
	});

	up_cas( $('#newclinicname') );


	$('#add_new_clinic').click(function(e){
		e.preventDefault();
		var city=$('#city_recolhap').val();
		var clinic=$('#newclinicname').val();
		var base=$('#base').html();
		$.post(base+'/hospital',{
			city:city,
			clinic:clinic
		},function(d){
			$('#clinic_recolhap').append(
				'<option value="'+d+'" selected>'+
				clinic+
				'</option>'
				)
			;
			$('#clinic_recolhap').hide('fast');
			$('#change_clinic').show('fast');
			$('#newclinic_form').hide('fast');
			$('#selected_clinic').html(clinic);
			$('#cascade2_register').show('fast');
		});
	});






});