$(function(){

	$("#inputdrug").hide();
	$("#drug_adv_event").hide();
	$("#year_transp").hide();
	$(".susp_date").next().hide();
	$(".alert").hide(); 
	$('.drug_suspension_update').hide();
	$('.susp_date').hide();

	$('#ad_drug').click(function(e){
		e.preventDefault();
		$("#inputdrug").toggle("fast");
		if ($("#ad_drug").html()=="Ocultar") {
			$("#ad_drug").html(
				"<i class='icon-plus-sign'></i> A&ntilde;adir f&aacute;rmaco"
				)
			;
		} else {
			$("#ad_drug").html("Ocultar");
		}
	});

	$('#hide_drug_hap').click(function(e){
		e.preventDefault();
		$('#inputdrug').hide();
		$("#ad_drug").html(
			"<i class='icon-plus-sign'></i> A&ntilde;adir f&aacute;rmaco"
			)
		;
		$('#drug').val('');
		$('#year_ini_d').val('');
		$('#month_ini_d').val('');
		$('#day_ini_d').val('');
	});



	hide_show_savebutton(
		[$("#drug"),
		$("#year_ini_d"),
		$("#month_ini_d"),
		$("#day_ini_d")], 
		$("#save_cancel_drug")
		)
	;

	$('#hide_drug_hap').click(function(){
		$('#inputdrug').hide();
		$("#ad_drug").html("<i class='icon-plus-sign'></i> A&ntilde;adir f&aacute;rmaco");
		$('#drug').val('');
		$('#year_ini_d').val('');
		$('#month_ini_d').val('');
		$('#day_ini_d').val('');
	});

	//
	function enter_drug_toDB(confirm){
		var patient=$('#patient').html();
		var drug=$('#drug').val();
		var y_i=$('#year_ini_d').val();
		var m_i=$('#month_ini_d').val();
		var d_i=$('#day_ini_d').val();

		if (drug!=''&&y_i!=''&&m_i!=''&&d_i!='') {
			if (confirm!='yes') {var confirm='';}
			if (m_i.length==1) {m_i='0'+m_i;} 
			if (d_i.length==1) {d_i='0'+d_i;}
			var drugdate=$('#year_ini_d').val()+'-'+m_i+'-'+d_i;
			var base=$('#base').html();
			$.post(
				base+'/patient/'+patient+'/treatment',
				{
					patient:patient,
					drug:drug,
					confirm:confirm,
					drugdate:drugdate
				},
				function(d){
					$('#btn_add_drug').html(d);
				}
				)
			;
		}
		//$('#btn_add_drug').html(1);
	}
	$('#btn_add_drug').click(function(){enter_drug_toDB('');});
	//
	$("#day_ini_d").keyup(
		function(event){
			if(event.keyCode == 13){
				enter_drug_toDB('');
			} 
		}
		)
	;

	$('#cancel_duplicated_drug').click(function(e){
		e.preventDefault();
		$('#inputdrug').hide();
		$("#ad_drug").html("A&ntilde;adir f&aacute;rmaco");
		$('#drug').val('');
		$('#year_ini_d').val('');
		$('#month_ini_d').val('');
		$('#day_ini_d').val('');
		$('#drug_already_exist').hide();
	});

	function update_inline() {
		var d = new Date();
		$('.suspend_cause_').each(function(){
			var id=$(this).attr('id');
			id=id.replace('suspend_cause_','');

			//Put here functions for html elements with mentioned class
			show_in_table_button($('#suspend_cause_'+id),$('#date_'+id));
			num_ranges($("#year_end_"+id), d.getFullYear(), 1990,0);
			hmd_dateformat($("#year_end_"+id),$("#month_end_"+id),$("#day_end_"+id));
			hide_show_savebutton([  $("#year_end_"+id) ,$("#month_end_"+id) ,$("#day_end_"+id)] ,$("#drg_"+id));

			cancel_updaterow(
				$('#cancel_'+id),//
				[
					$('#day_end_'+id) ,
					$('#month_end_'+id) ,
					$('#year_end_'+id) ,
					$('#drug_end_'+id)
				],
				[ 
					$('#date_'+id) ,
					$('#day_end_'+id) ,
					$('#month_end_'+id) ,
					$('#drg_'+id)
				]
				)
			;
			concatenate_y_m_d(
				$('#year_end_'+id),
				$('#month_end_'+id),
				$('#day_end_'+id),
				$('#drug_end_'+id)
				)
			;

			update_row_in_table(
				$('#update_'+id),
				id,
				$('#suspend_cause_'+id),
				$('#drug_end_'+id),
				$('#td_suspend_cause_'+id),
				$('#td_drug_end_'+id),
				'hap_drug_treatment'
				)
			;
		}
		)
		;
		
		
	}


	update_inline();
	function show_in_table_button(changing,display) {
		changing.change(function(){
			if (changing.val()!="") {display.show('fast');} 
			else{display.hide('fast');};
		});
	}

	function update_row_in_table(button,rowid,col1,col2,td1,td2,table){
		button.click(function(){
			col1val=col1.val();
			col2val=col2.val();
			var base=$('#base').html();
			var patient=$('#patient').html();
			
			$.post(//patient/{patient}/updatetreatment
				base+'/patient/'+patient+'/updatetreatment',
				//'../patient/basic/ajax_update_drug.php'
				{

					rowid:rowid
					,col1val:col1val
					,col2val:col2val
					,table:table}
					,function(data){
						//$('#temporaryid').html(data);
						td1.html(col1val);
						td2.html(col2val);
						//button.hide();
					}
				)
			;
		});

	}
	

	hmd_dateformat($("#year_ini_d"),$("#month_ini_d"),$("#day_ini_d"));

	var d = new Date(); /* Used to calculate the actual year */
	num_ranges($("#year_ini_d"), d.getFullYear(), 1990,0);


});