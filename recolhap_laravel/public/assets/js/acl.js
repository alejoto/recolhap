$(function(){
	$('#admin_users_btn').hide();
	$('.profile').hide();
	$('.confirminactivate').hide();
	$('.confirm_activate').hide();

	$('.changeprofile').each(function(){
		var id=$(this).attr('id');
		id=id.replace('changeprofile','');
		changeprofile(id);
	});

	function changeprofile(id){
		$('#changeprofile'+id).click(function(e){
			e.preventDefault();
			$('#profile'+id).show('fast');
		});

		$('#cancelchangeprofile'+id).click(function(e){
			e.preventDefault();
			$('#profile'+id).hide('fast');
		});

		$('#inactivateprofile'+id).click(function(e){
			e.preventDefault();
			$('#confirminactivate'+id).show('fast');
		});

		$('#cancelinactivation'+id).click(function(e){
			e.preventDefault();
			$('#confirminactivate'+id).hide('fast');
		});

		$('#confirminactivation'+id).click(function(e){
			e.preventDefault();
			var base=$('#base').html();
			$.post(base+'/inactivate',{id:id},function(d){
				if (d==1) {
					window.location.reload();
				}
			});
		});
	}

	$('.activateprofile').each(function(){
		var id=$(this).attr('id');
		id=id.replace('activateprofile','');
		activateprofile(id);
	});

	function activateprofile(id) {
		$('#activateprofile'+id).click(function(e){
			e.preventDefault();
			$('#confirm_activate'+id).show('fast');
		});

		$('#cancel_activation'+id).click(function(e){
			e.preventDefault();
			$('#confirm_activate'+id).hide('fast');
		});

		$('#confirm_activation'+id).click(function(e){
			e.preventDefault();
			var base=$('#base').html();
			$.post(base+'/activate',{id:id},function(d){
				if (d==1) {
					window.location.reload();
				}
			});
		});
	}


});