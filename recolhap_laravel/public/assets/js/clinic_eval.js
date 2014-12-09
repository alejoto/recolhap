

/**

-------------------------------------------------------------------------------------

*

*

* name         :  No name (execution of previous js function)

* Description  :  Execution of hide_show_savebutton(),

*                 which hides save button until all required

*                 fields are displayed

* Depend on   :   medic.js

* Dependant   :   this file

*/

/*hide/show save button: first parameter is an array, inside [].  Second parameter is the button id*/

hide_show_savebutton([$("#year_ev"),$("#month_ev"),$("#day_ev"),$("#nyha_funct_class")], $("#sympt_save"));

hide_show_savebutton([$("#pulse"),$("#breathing"),$("#psist"),$("#pdiast")], $("#ef_save"));

//hide_show_savebutton([$("#drug"),$("#year_ini_d"),$("#month_ini_d"),$("#day_ini_d")], $("#save_cancel_drug"));

hide_show_savebutton([$("#year_death"),$("#month_death"),$("#day_death"),$("#dead_cause")], $("#outcome_save"));





$("#treatment_save").hide('fast');



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









/*Hide selected fields when loading page*/

$(document).ready(function() {

	//$("#inputdrug").hide();

	//$("#drug_adv_event").hide();

	//$("#year_transp").hide();

	//$(".susp_date").next().hide();

	//$(".alert").hide(); 

});







/* Erase the values of the dates and hide the inputs */

function date_pharmac(input){

	input.val("");

	input.next().hide();

	input.next().next().hide();

}



/**

 * Show the save button if th values of the date are correct

 */

 $(".susp_date").find("#day_end_d").change(function(){

	if($(this).val() != "" || $(this).val() != null){

		$(this).parent().parent().next().next().children().show('fast');

	}

	else if($(this).val() == "" || $(this).val() == null){

		$(this).parent().parent().next().next().children().hide('fast');

	}



});









 /* "Add drug" toggle effect */

/* $("#ad_drug").click(function(){

	$("#inputdrug").toggle("fast");

	if ($("#ad_drug").html()=="Ocultar") {$("#ad_drug").html("<i class='icon-plus-sign'></i> A&ntilde;adir");}

	else {$("#ad_drug").html("Ocultar");}

 });*/

 //$('#hide_drug_hap').click(function(){

	/*$('#inputdrug').hide();

	$("#ad_drug").html("<i class='icon-plus-sign'></i> A&ntilde;adir");

	$('#drug').val('');

	$('#year_ini_d').val('');

	$('#month_ini_d').val('');

	$('#day_ini_d').val('');*/

  //           

//});



/**

 * lines to hide the input of the date if the checkboxes arent checked

 */

 $(document).ready(function() {$("#tendt_hide").hide();})

 $(document).ready(function() {$("#atr_sept_hide").hide();})

 $("#tendt").change(function(){

	if (this.checked ){

		$("#tendt_hide").show('fast');

		hide_show_savebutton([$("#year_tendt"),$("#month_tendt"),$("#day_tendt")], $("#treatment_save"));

	}

	else{

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



/**

 * END OF lines hide

 */





// Saving 'anamnesis' and 'ex fco' in DB table

hide_show_savebutton([$('#year_ev'),$('#month_ev'),$('#day_ev'),$('#nyha_funct_class')],$('#sympt_save2'));



$('#sympt_save2').click(function(){

	$('#anam').hide('fast');

	$('#ex_fc').show('fast');

});



$('#ef_save').click(function(){

	//patient
	var patient=$('#patient').html();

	//symptoms onset
	var year=$('#year').val();
	var month=$('#month').val();

	var dxdate=null;
	if (year!=null&&year!='') {

		//adjusting dxdate as yyyy-mm-dd, with day = 01
		dxdate=year+'-'+month+'-01';
	}
	var afroamerican=$('#afroamerican').val();
	var haptype=$('#haptype').val();
	//fixing evaluation date
	var anam_year=$('#year_ev').val();
	var anam_month=$('#month_ev').val();
	var anam_day=$('#day_ev').val();
	if (anam_month.length==1) {anam_month='0'+anam_month;}
	if (anam_day.length==1) {anam_day='0'+anam_day;}
	var eval_date=anam_year+'-'+anam_month+'-'+anam_day;
	var nyha_funct_class=$('#nyha_funct_class').val();
	//checkbox values

	if($("#dyspnea").is(':checked')) { var dyspnea="si";} else {var dyspnea="no";}
	if($("#cough").is(':checked')) { var cough="si";} else {var cough="no";}
	if($("#chestpain").is(':checked')) { var chestpain="si";} else {var chestpain="no";}
	if($("#loweredema").is(':checked')) { var loweredema="si";} else {var loweredema="no";}
	if($("#hemoptysis").is(':checked')) { var hemoptysis="si";} else {var hemoptysis="no";}
	if($("#syncope").is(':checked')) { var syncope="si";} else {var syncope="no";}


	var improved_symts=$('#improved_symts').val();
	var pulse=$('#pulse').val();
	var breathing=$('#breathing').val();
	var sat_ox=$('#sat_ox').val();
	var pres_art_exfco=$('#psist').val()+ '/' +$('#pdiast').val();
	var weight=$('#weight').val();
	var height=$('#height').val();



	if($("#ing_yu").is(':checked')) { var ing_yu="si";} else {var ing_yu="no";}
	if($("#hepatomegaly").is(':checked')) { var hepatomegaly="si";} else {var hepatomegaly="no";}
	if($("#cyanosis").is(':checked')) { var cyanosis="si";} else {var cyanosis="no";}
	if($("#ef_edema").is(':checked')) { var ef_edema="si";} else {var ef_edema="no";}
	if($("#finger_clubbing").is(':checked')) { var finger_clubbing="si";} else {var finger_clubbing="no";}


	if (anam_day==''||nyha_funct_class=='') {

		$('#anam').show('fast');
		$('#ex_fc').hide('fast');
		$('#year_ev').focus();

	}  else {
		var base=$('#base').html();
		$.post(
			base+'/patient/'+patient+'/clinic',
			//'../patient/save_anam.php',
			{
				//patient identification
				patient:patient
				
				//disease onset (fist_eval table)
				,afroamerican:afroamerican
				,dxdate:dxdate
				,haptype:haptype

				//clinical follow-up
				,eval_date:eval_date
				,nyha_funct_class:nyha_funct_class
				,dyspnea:dyspnea
				,cough:cough
				,chestpain:chestpain
				,loweredema:loweredema
				,hemoptysis:hemoptysis
				,syncope:syncope
				,improved_symts:improved_symts
				,pulse:pulse
				,breathing:breathing
				,sat_ox:sat_ox
				,pres_art_exfco:pres_art_exfco
				,weight:weight
				,height:height
				,ing_yu:ing_yu
				,hepatomegaly:hepatomegaly
				,cyanosis:cyanosis
				,ef_edema:ef_edema
				,finger_clubbing:finger_clubbing
			},
			function(data){
				window.location.href=base+'/patient/'+patient+'/clinic';
			}
		)
		;
	}
});





//.post ajax for saving new drug in DB



/**

-------------------------------------------------------------------------------------

*

*

* name         :  Enter_drug_toDB(confirm)

* Description  :  saves new entered drug into DB table,

*                 and displays it on HTML table

* Depend on   :   jquery

* Dependant   :   this file

*/

function enter_drug_toDB(confirm){

	if ($('#drug').val()!=''&&$('#year_ini_d').val()!=''&&$('#month_ini_d').val()!=''&&$('#day_ini_d').val()!='') {



		if (confirm!='yes') {var confirm='';}

		var drug=$('#drug').val();



		var month_dg=$('#month_ini_d').val();

		if (month_dg.length==1) {month_dg='0'+month_dg;} 



		var day_drg=$('#day_ini_d').val();

		if (day_drg.length==1) {day_drg='0'+day_drg;}



		var drugdate=$('#year_ini_d').val()+'-'+month_dg+'-'+day_drg;



		$.post(

			'../patient/ajax_new_drug.php'

			,{drugdate:drugdate,drug:drug,confirm:confirm}

			,function(data){

				if (data=='exist') {

					$('#drug_already_exist').show('fast');

				}

				else {$('#table_drug_result').html(data);

				$('#treatment_tb > tbody > tr').eq(1).after('<tr class="span8"><td  class="span2">'

					+$('#drug').val()

					+'</td><td class="span2">'

					+drugdate

					+'</td><td class="span2"></td><td class="span2"></td></tr>');

				$('#inputdrug').hide();

				$("#ad_drug").html("A&ntilde;adir f&aacute;rmaco");

				$('#drug').val('');

				$('#year_ini_d').val('');

				$('#month_ini_d').val('');

				$('#day_ini_d').val('');

				$('#drug_already_exist').hide('fast');

			}

		});

	} 

}



//$('#btn_add_drug').click(function(){enter_drug_toDB('');});

//$("#day_ini_d").keyup(function(event){if(event.keyCode == 13){enter_drug_toDB('');} });



$('#reconfirm_drugsave').click(function(){

	var confirm='yes';

	enter_drug_toDB(confirm);

});



/*$('#cancel_duplicated_drug').click(function(){

	$('#inputdrug').hide();

	$("#ad_drug").html("A&ntilde;adir f&aacute;rmaco");

	$('#drug').val('');

	$('#year_ini_d').val('');

	$('#month_ini_d').val('');

	$('#day_ini_d').val('');

	$('#drug_already_exist').hide();

});*/





/*anam,ex_fc,hiperclot,outcome */

$(document).ready(function() {

	$("#ex_fc").hide();

	$("#hiperclot").hide();

	$("#treatment").hide();

	$("#outcome").hide();

});



/*

updating table with suspended drug cause and date

*/





function update_in_line() {

	var suspension= new Array();

	suspension= $('.suspension').map(function() {return this.id;});

	var d = new Date();

	var real_id=new Array();

	for (var i = 0; i < suspension.length; i++) 

	{

		real_id[i]=suspension[i].replace("suspend_cause_","");

		show_in_table_button($('#suspend_cause_'+real_id[i]),$('#date_'+real_id[i]));

		num_ranges($("#year_end_"+real_id[i]), d.getFullYear(), 1990,0);

		hmd_dateformat($("#year_end_"+real_id[i]),$("#month_end_"+real_id[i]),$("#day_end_"+real_id[i]));

		hide_show_savebutton([  $("#year_end_"+real_id[i]) ,$("#month_end_"+real_id[i]) ,$("#day_end_"+real_id[i])] ,$("#drg_"+real_id[i]));

		cancel_updaterow(

			/* button id: */ $('#cancel_'+real_id[i])

			/* reset array: */ ,[$('#day_end_'+real_id[i]) ,$('#month_end_'+real_id[i]) ,$('#year_end_'+real_id[i]) ,$('#drug_end_'+real_id[i]) ]

			/* hide array: */ ,[ $('#date_'+real_id[i]) ,$('#day_end_'+real_id[i]) ,$('#month_end_'+real_id[i]) ,$('#drg_'+real_id[i]) ] );

		concatenate_y_m_d($('#year_end_'+real_id[i]),$('#month_end_'+real_id[i]),$('#day_end_'+real_id[i]),$('#drug_end_'+real_id[i]));

		update_row_in_table(

			/* button id: */$('#update_'+real_id[i])

			/* row id: */,real_id[i]

			/* update id: */,$('#suspend_cause_'+real_id[i]),$('#drug_end_'+real_id[i])

			/* td id: */,$('#td_suspend_cause_'+real_id[i]),$('#td_drug_end_'+real_id[i])

			/* table: */,'hap_drug_treatment'

			);

	}





	/*NEXT FUNCTION SHOULD BE REPLACED BY ONE THAT

	APPLIES SAME EFFECT BOTH FOR TEXT OR SELECT INPUT

	FIELD*/

	function show_in_table_button(changing,display) {

		changing.change(function(){

			if (changing.val()!="") {display.show();} 

			else{display.hide();};

		});

	}





	//pending to loop with cols and td

	function update_row_in_table(button,rowid,col1,col2,td1,td2,table){

		button.click(function(){

			col1val=col1.val();

			col2val=col2.val();

			$.post('../patient/basic/ajax_update_drug.php'

				,{

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

				);

		});

	}



}









update_in_line();

/**

-------------------------------------------------------------------------------------

*

*

* name		:	showmain(...)

* Description	:	When clicking button, displays only one form

*				while hidding the other ones

* Depend on	:	jquery.js

* Dependant	:	this file

*/

function showmain(btnsw,hid1,hid2,hid3,hid4,shwmain){

	btnsw.click(function(){

		hid1.hide("fast");

		hid2.hide("fast");

		hid3.hide("fast");

		hid4.hide("fast");

		shwmain.show("fast");

	}

	);

}

showmain($("#sel_outcome"),$("#anam"),$("#ex_fc"),$("#hiperclot"),$("#treatment"),$("#outcome"));

showmain($("#sel_anam"),$("#outcome"),$("#ex_fc"),$("#hiperclot"),$("#treatment"),$("#anam"));

showmain($("#sel_ex_fc"),$("#outcome"),$("#anam"),$("#hiperclot"),$("#treatment"),$("#ex_fc"));

showmain($("#sel_hiperclot"),$("#outcome"),$("#anam"),$("#ex_fc"),$("#treatment"),$("#hiperclot"));

showmain($("#sel_treatment"),$("#outcome"),$("#anam"),$("#ex_fc"),$("#hiperclot"),$("#treatment"));





/*Funciones invocadas desde archivo clinic.js*/



/**

-------------------------------------------------------------------------------------

*

*

* name    	:	No name (execution of previous js function)

* Description  :	Execution of icon_exchanger(...),

*         		which changes big icon according to 

*         		small icons hovering

* Depend on   : 	medic.js

* Dependant   : 	this file

*/

icon_exchanger($(".main_icon"),$("#blood_test"),$("#performance"),$("#clin_images"),$("#basic_eval")

	,'-92px 75px','-184px 75px','-276px 75px','0  0px'

	,'Pruebas<br>en sangre','Desempe&ntilde;o cardiovascular'

	,'Im&aacute;genes diagn&oacute;sticas','Evaluaci&oacute;n <br>cl&iacute;nica');

/**

-------------------------------------------------------------------------------------

*

*

* name    	:	No name (execution of previous js function)

* Description  :	Execution of show_ifnoempty(...),

*         		which displays second field if first is filled with data.

*				and while first field keeps empty second will be hidden

* Depend on   : 	medic.js

* Dependant   : 	this file

*/

show_ifnoempty($("#year"),$("#month"));



/**

-------------------------------------------------------------------------------------

*

*

* name         :    No name (execution of previous js function)

* Description  :    Execution of hmd_dateformat(...),

*                   which limits months and days inputs

*                   to valid dates.

* Depend on   :     medic.js

* Dependant   :     this file

*/

/*Anammnesis (also applies to "examen fisico") date*/

hmd_dateformat($("#year_ev"),$("#month_ev"),$("#day_ev"));



/*treatment and trasplantation dates*/

//hmd_dateformat($("#year_ini_d"),$("#month_ini_d"),$("#day_ini_d"));

hmd_dateformat($("#year_end_d"),$("#month_end_d"),$("#day_end_d"));

hmd_dateformat($("#year_transp"),$("#month_transp"),$("#day_transp"));

hmd_dateformat($("#year_tendt"),$("#month_tendt"),$("#day_tendt"));

hmd_dateformat($("#year_atr"),$("#month_atr"),$("#day_atr"));

hmd_dateformat($("#year_death"),$("#month_death"),$("#day_death"));



/**

-------------------------------------------------------------------------------------

*

*

* name    	:	No name (execution of previous js function)

* Description  :	Execution of num_ranges(...),

*         		which limits value between specified range 

* Depend on   : 	medic.js

* Dependant   : 	this file

*/

var d = new Date(); /* Used to calculate the actual year */

num_ranges($("#year"), d.getFullYear(), 1990,0);

num_ranges($("#month"), 12, 1,0);





/*Ranges for years*/

num_ranges($("#year_ev"), d.getFullYear(), 1990,0);

//num_ranges($("#year_ini_d"), d.getFullYear(), 1990,0);

num_ranges($("#year_end_d"), d.getFullYear(), 1990,0);

num_ranges($("#year_transp"), d.getFullYear(), 1990,0);

num_ranges($("#year_tendt"), d.getFullYear(), 1990,0);

num_ranges($("#year_atr"), d.getFullYear(), 1990,0);

num_ranges($("#year_death"), d.getFullYear(), 1990,0);



num_ranges($("#weight"), 200, 1,0);

num_ranges($("#height"), 3, 0,1);

num_ranges($("#pulse"), 300, 0,0);

num_ranges($("#breathing"), 50, 0,0);

num_ranges($("#sat_ox"), 100, 0,0);



/**

-------------------------------------------------------------------------------------

*

*

* name    	:	No name (execution of previous js function)

* Description  :	Execution of tiprequired(...),

*         		which displays the tooltip "required field" 

* Depend on   : 	medic.js

* Dependant   : 	this file

*/

tiprequired($("#day_ev"));



/**

-------------------------------------------------------------------------------------

*

*

* name    	:	No name (execution of previous js function)

* Description  :	Execution of trigger_bsa(...),

*         		which calculates body surface area 

* Depend on   : 	medic.js

* Dependant   : 	this file

*/

trigger_bsa($("#weight"), $("#height"), $("#bsa"));

/**

-------------------------------------------------------------------------------------

*

*

* name    	:	No name (execution of previous js function)

* Description  :	Execution of p_a_m(...),

*         		which calculates mean arterial pressure 

* Depend on   : 	medic.js

* Dependant   : 	this file

*/

p_a_m($("#psist"), $("#pdiast"), $("#ef_pam"));

