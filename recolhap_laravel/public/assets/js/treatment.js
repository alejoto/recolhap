$(function(){

	$("#inputdrug").hide();
	$("#drug_adv_event").hide();
	$("#year_transp").hide();
	$(".susp_date").next().hide();
	$(".alert").hide(); 
	$('.drug_suspension_update').hide();
	$('.susp_date').hide();
	$('#drug_already_exist').hide();
	$("#treatment_save").hide();
	$("#year_tendt").hide();
	$("#tendt_hide").hide();
	$("#atr_sept_hide").hide();

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
					if (d==2) {
						$('#drug_already_exist').show('fast');
						$('#inputdrug').hide('fast');
						//
					} else {
						window.location.reload();
					}
					/*if (d==2) {
						$('#drug_already_exist').show('fast');
					}*/
					//$('#btn_add_drug').html(d);
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
		$('#inputdrug').hide('fast');
		$('#inputdrug').show('fast');
		$("#ad_drug").html("A&ntilde;adir f&aacute;rmaco");
		$('#drug').val('');
		$('#year_ini_d').val('');
		$('#month_ini_d').val('');
		$('#day_ini_d').val('');
		$('#drug_already_exist').hide();
	});

	$('#reconfirm_drugsave').click(function(){
		var confirm='yes';
		enter_drug_toDB(confirm);
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
	



	$("#transplant").change(function(){
		if ($("#transplant").val()==""){
			$("#treatment_save").hide('fast');
		}else if ($("#transplant").val()=="en espera"){
			$("#treatment_save").show('fast');
		}

		if ($("#transplant").val()=="pulmon"||$("#transplant").val()=="corazon pulmon") {
			$("#year_transp").show("fast");
			if($("#year_transp").val() == ""){
				hide_show_savebutton([$("#year_transp"),$("#month_transp"),$("#day_transp")], $("#treatment_save"));
			}
		} else {
			$("#year_transp").hide("fast");
			$("#year_transp").val("");
			$("#month_transp").hide("fast");
			$("#month_transp").val("");
			$("#day_transp").hide("fast");
			$("#day_transp").val("");
		}

	});

	$("#tendt").change(function(){
		if (this.checked ){
			$('#year_tendt').show('fast');
			$("#tendt_hide").show('fast');
			hide_show_savebutton([$("#year_tendt"),$("#month_tendt"),$("#day_tendt")], $("#treatment_save"));
		} else {
			$('#year_tendt').val('');
			$('#day_tendt').val('');
			$('#month_tendt').val('');
			$('#month_tendt').hide('fast');
			$('#day_tendt').hide('fast');
			$("#tendt_hide").hide('fast');
			if($("#day_transp").val() != "" || $("#transplant").val()=="en espera"){
				$("#treatment_save").show('fast');
			}else{
				$("#treatment_save").hide('fast');
			}
		}
	});
	$("#atr_sept").change(function(){
		if (this.checked){
			$("#atr_sept_hide").show('fast');
			hide_show_savebutton([$("#year_atr"),$("#month_atr"),$("#day_atr")], $("#treatment_save"));
		}
		else{
			$('#year_atr').val('');
			$('#day_atr').val('');
			$('#month_atr').val('');
			$('#month_atr').hide('');
			$('#day_atr').hide('');
			$("#atr_sept_hide").hide('fast');
			if($("#day_transp").val() != "" || $("#transplant").val()=="en espera"){
				$("#treatment_save").show('fast');
			}else{
				$("#treatment_save").hide('fast');
			}
		}
	});

	hmd_dateformat($("#year_ini_d"),$("#month_ini_d"),$("#day_ini_d"));
	hmd_dateformat($("#year_transp"),$("#month_transp"),$("#day_transp"));
	hmd_dateformat($("#year_tendt"),$("#month_tendt"),$("#day_tendt"));
	hmd_dateformat($("#year_atr"),$("#month_atr"),$("#day_atr"));


	var d = new Date(); /* Used to calculate the actual year */
	num_ranges($("#year_ini_d"), d.getFullYear(), 1990,0);
	num_ranges($("#year_transp"), d.getFullYear(), 1990,0);
	num_ranges($("#year_tendt"), d.getFullYear(), 1990,0);
	num_ranges($("#year_atr"), d.getFullYear(), 1990,0);

	$("#treatment_save").click(function(){
		//transplant type
		var surgical_type=$('#transplant').val();
		//
		//date of lung transplant
		var year_transp=$('#year_transp').val();
		var month_transp=$('#month_transp').val();
		var day_transp=$('#day_transp').val();
		//concatenated date
		var surgical_date=year_transp+'-'+month_transp+'-'+day_transp;
		//
		//tromboendarterectomy date
		var year_tendt=$('#year_tendt').val();
		var month_tendt=$('#month_tendt').val();
		var day_tendt=$('#day_tendt').val();
		//concatenated trombendarterectomy date
		var surgical_tendt_date=year_tendt+'-'+month_tendt+'-'+day_tendt;
		//
		var year_atr=$('#year_atr').val();
		var month_atr=$('#month_atr').val();
		var day_atr=$('#day_atr').val();
		var surgical_atr_date=year_atr+'-'+month_atr+'-'+day_atr;
		var patient=$('#patient').html();
		var base=$('#base').html();
		$.post(
			base+'/patient/'+patient+'/surgical',
			{
				surgical_type:surgical_type,
				year_transp:year_transp,
				month_transp:month_transp,
				day_transp:day_transp,
				year_tendt:year_tendt,
				month_tendt:month_tendt,
				day_tendt:day_tendt,
				year_atr:year_atr,
				month_atr:month_atr,
				day_atr:day_atr
			},
			function(d){
				window.location.reload();
				//$("#treatment_save").html(d);
			}
			)
		;
	});



});