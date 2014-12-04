/**

-------------------------------------------------------------------------------------

*

*

* name 			: 	var result = to_database(info,table)

* Description 	: 	saves data inside choosen table, 

* 					where 'info' is an array that contains all the values

* 					to be saved and also the id names of fields.

*					the id and column names are equal.

*					THIS FUNCTION GETS THE "NAME" D.O.M. ATTRIBUTE INSTEAD OF "ID"

* Depend on 	: 	get_info(info_id)

* Dependant 	: 	reset_fields(info_id2)

*/

function to_database(info,table) {

	$.ajaxSetup({async: false});

	var result = null;

	

	$.post("../patient/ajax_save.php",{ info:info, table:table }, function(data) {

	//alert("CARE");

	if(data=='Yes') {

		result = "Datos guardados exitosamente";

	}else{

		result = "Ocurrio un problema al guardar los datos";

	}

  });  

	return result;

	$.ajaxSetup({async: true});

}



/**

-------------------------------------------------------------------------------------

* 

 * Name			:	reset_fields(info_id2)

 * Description	:	Function to reset the values when the persistance to the 

 * 					data base is finish in a form

 **/

function reset_fields(info_id2){

	// Can be done with Jquery??

	arr2 = $("." + info_id2);

	for (var item = 0; item < arr2.length; item++) {

		 if(arr2[item].type == "checkbox" ){ 

			 arr2[item].checked = false;

		 }else{		 

			 arr2[item].value = "";

		 }

	}

	$(".date1").next().hide('fast');

	$(".date1").next().next().hide('fast');

}



/**

-------------------------------------------------------------------------------------

* Name			:	get_info(info_id)

* Description	:	Array builder, gets all form fields with class defined in 'info_id' 

* 					where 'info_id' is the name of a DB table and each id matches with

*					the column name of the same table.

* Conditions	: 	The info_id must match with the table name, and all the ids must

*					match with the column names of the table.  Each input field with

*					data to be saved (in the same table) must have the class defined

*					as 'info_id'.

*

*					example:

*					<form action="">

*						<input type="text" id="i1" class="some_class some_table">

*						<input type="text" id="i2" class="some_table">

*					</form>

*					<script>

*					get_info("some_table");

*					</script>

*					

*					Result: array with all the ids and some_table as the table name

*

* Depend on 	: 	None

* Dependant		: 	get_info(info_id) (this function needs the get_info array)

*

*/

function get_info(info_id){

  var dates = "";

  var dates2 = "";

  var result = "";

  

  arr = $("." + info_id);

  

 

  for(var i=0;i<arr.length;i++){

    if( arr[i].type == "checkbox" ){ 



      if( dates != "" ) dates += ",";

      if( dates2 != "" ) dates2 += ",";



      dates += arr[i].name;

      dates2 += arr[i].checked;



    }else if( arr[i].name != "" ){

  



	// This two if's can be put outside, in a function

			if($(arr[i]).is(".date1")){

				if (dates != "") dates += ",";

				if (dates2 != "") dates2 += ","; 

				dates += arr[i].name;

				dates2 += arr[i].value+"-"+arr[i+1].value+"-"+arr[i+2].value; 

				i += 2;

				continue;

			} 

			if($(arr[i]).is(".join2")){

			  if(dates != "") dates += ",";

				if(dates2 != "") dates2 += ",";

				dates += arr[i].name;

				dates2 += arr[i].value+"-"+arr[i+1].value;

				i += 1;

				continue;

			}

      if( dates != "" ) dates += ",";

      if( dates2 != "" ) dates2 += ",";

      

      dates += arr[i].name;

      dates2 += arr[i].value;

    }

  }

  result = dates+"?"+dates2;

  return result;

}



/**

-------------------------------------------------------------------------------------

* Name			:	check_date(column_name,table_name,date)

* Description	:	This function goes and retrive the values of the database and 

* 					see if the given date is already in the database for that 

*					particular patient

* Conditions	: 	The tables names and columns must be as an attribute in the html

* 					in the variable of name

*

*					example:

*					<form action="" name='columnName'>

*						<input type="text" id="i1" class="some_class some_table">

*						<input type="text" id="i2" class="some_table">

*					</form>

*					<script>

*					get_info("some_table");

*					</script>

*					

* Result		:	A message with the result and ask for a good input 

*

* Depend on 	: 	None

*

*/

function check_date(column_name,table_name,date){

	

	$.ajaxSetup({async: false});

	$.post("../patient/ajax_check.php",{ column_name:column_name,

					table_name:table_name, date:date }, function(data) {

		//alert(data);

		$result = true;

		if(data=='occuped') {

			result = false;

		}else{

			result = true;

		}

	  });  

	return result;

	$.ajaxSetup({async: true});

}



/**

 * This function is call to check if the given date is already in the DB

 * also reset some values and hide some forms

 */

$(".date3").change(function(){

	/* Create a variable with the date with jQuery */

	var date = $(this).prev().prev().val() + "-"+ $(this).prev().val() 

				+ "-" + $(this).val();

	/* Find the colum name for the date */

	var column_name = $(this).prev().prev().attr("name");

	//alert(column_name);

	

	/* Find the table where this date must be persisted */

	var table_name = "hap_"+$(this).parent().parent().attr("name");

	//var result = check_date(column_name, table_name, date);	

	//alert(check_date(column_name, table_name, date));

	if (!check_date(column_name, table_name, date)){

		$(this).val("");

		$(this).prev().val("");

		$(this).prev().prev().val("");

		$(this).prev().hide("fast");

		$(this).hide("fast");

		$(this).prev().prev().focus();

		$(this).prev().prev().popover('show');

		$(this).prev().prev().popover('destroy');

		$(this).prev().prev().popover({

            title: "Ya se ha realizado este examen a este paciente en esta fecha, ingrese una fecha diferente",

            placement: 'right'

        });

		$(this).prev().prev().popover('show');

		



	}	

});





/* Function to show the alert */

function show_alert(result, button){

	$(button).next().children().next().html(result);

	if(result[0] == 'O'){

		$(button).next().removeClass("alert-success");

		$(button).next().addClass("alert-error");

	}

	$(button).next().show('fast');

}



/* This is use for the new alert, when the 'x' is click hide the alert */

$(".close").click(function(){

	$(this).parent().hide("fast");

});



/**

* ---------------------------------------------------------------------

* 'EVALUACION CLINICA' BUTTONS

* @author: HMD team

*

*/

/*

$("#hiperclot_save").click(function(){

  var info = get_info("hiperclot");

  var result = to_database(info,"table_name");

  

  reset_fields("hiperclot");

  $("#hiperclot_save").hide();

});/**/



$("#treatment_save").click(function(){

  var info = get_info("surgical");

  var result = to_database(info,"hap_surgical");

  show_alert(result,$(this));

  reset_fields("surgical");

  $("#treatment_save").hide();

});



$("#outcome_save").click(function(){

  var info = get_info("outcome");

  var result = to_database(info,"hap_outcome");

  show_alert(result,$(this));

  reset_fields("outcome");

  $("#outcome_save").hide();

});







/**

*'DESEMPENO CARDIOVASCULAR' BUTTONS

*/





$("#save_ecg").click(function(){

  var info = get_info("ecg");

  var result = to_database(info,"hap_electrok", this);

  show_alert(result,$(this));

  reset_fields("ecg");

  $("#save_ecg").hide();

});





$("#save_spir").click(function(){

	var info = get_info("spir1");

	var result = to_database(info,"hap_spirometry");

	show_alert(result,$(this));

	reset_fields("spir1");

	$("#save_spir").hide();

});



$("#vo2_save").click(function(){

	var info = get_info("cpt");

	var result = to_database(info,"hap_cp_stress_test");

	show_alert(result,$(this));

	reset_fields("cpt");

	$("#vo2_save").hide();

});



$("#sixmin_save").click(function(){

	var info = get_info("sixmw");

	var result = to_database(info,"hap_six_mins_walk");

	show_alert(result,$(this));

	reset_fields("sixmw");

	$("#sixmin_save").hide();

	

});



/**

* 'IMAGENES DIAGNOSTICAS' BUTTONS

*/





$("#xray_save").click(function(){

	var info = get_info("xray");

	var result = to_database(info,"hap_x_ray");

	show_alert(result,$(this));

	reset_fields("xray");

	$("#xray_save").hide();

});



$("#tc_save").click(function(){

	var info = get_info("tcangio");

	var result = to_database(info,"hap_tc_angio");

	show_alert(result,$(this));

	reset_fields("tcangio");

	$("#tc_save").hide();

});



$("#gamma_save").click(function(){

	var info = get_info("gam");

	var result = to_database(info,"hap_gammagr");

	show_alert(result,$(this));

	reset_fields("gam");

	$("#gamma_save").hide();

});



$("#artergph_save").click(function(){

	var info = get_info("p_art");

	var result = to_database(info,"hap_pulm_arteriography");

	show_alert(result,$(this));

	reset_fields("p_art");

	$("#artergph_save").hide();

});



$("#mri_save").click(function(){

	var info = get_info("mri1");

	var result = to_database(info,"hap_mri");

	show_alert(result,$(this));

	reset_fields("mri1");

	$("#mri_save").hide();

});



$("#ecoc_save").click(function(){

	var info = get_info("eco");

	var result = to_database(info,"hap_ecocardio");

	show_alert(result,$(this));

	reset_fields("eco");

	$("#ecoc_save").hide();

});



$("#legsdoppler_save").click(function(){

	var info = get_info("du_legs");

	var result = to_database(info,"hap_duplex_legs");

	show_alert(result,$(this));

	reset_fields("du_legs");

	$("#legsdoppler_save").hide();

});



/*$("#save_rt_cath").click(function(){

	var info = get_info("bas");

	var result = to_database(info,"hap_right_cathet");

	$('#success_on_save').show('fast');

	$('#basal').hide('fast');

	reset_fields("bas");

	$("#save_rt_cath").hide();

	//window.location.href = "myaccount.php?page=diagnostic";

});*/



$("#vreac_test_done").change(function(){

	if (this.value == "si") {

		var info = get_info("bas");

		var result = to_database(info,"hap_right_cathet");

		//reset_fields("bas");  

		/*data cannot be reseted: needed for react_test 

		*calculations

		*/

		$("#vreac_test_done").hide();

	}

});



$("#react_save").click(function(){

	var info = get_info("react");

	var result = to_database(info,"hap_vasoreact_test");

	$('#success_on_save').show('fast');

	$('#reactiv').hide('fast');

	reset_fields("react");

	$("#react_save").hide();

	//window.location.href = "myaccount.php?page=diagnostic";

});



		////BUTTONS OF 'PRUEBAS DE SANGRE'////



$("#hb_save").click(function(){ 

	var info = get_info("hemo");

	var result = to_database(info,"hap_hb");

	show_alert(result,$(this));

	reset_fields("hemo");

	$("#hb_save").hide();

});



//TODO The rest of the Blood!!!

$("#uns_ana_save").click(function(){

	var info = get_info("ana");

	var result = to_database(info,"hap_reuma_ana");

	show_alert(result,$(this));

	reset_fields("ana");

	$("#uns_ana_save").hide();

	

});



$("#f_reum_save").click(function(){

	var info = get_info("reuma");

	var result = to_database(info,"hap_reuma");

	show_alert(result,$(this));

	reset_fields("reuma");

	$("#f_reum_save").hide();	

});



$("#sp_ana_save").click(function(){

	var info = get_info("spana");

	var result = to_database(info, "hap_reuma_spana");

	show_alert(result,$(this));

	reset_fields("spana");

	$("#sp_ana_save").hide();

});



$("#anti_ENAs_save").click(function(){

	var info = get_info("enas");

	var result = to_database(info, "hap_reuma_enas");

	show_alert(result,$(this));

	reset_fields("enas");

	$("#anti_ENAs_save").hide();

});



$("#anti_ph_lip_save").click(function(){

	var info = get_info("antilip");

	var result = to_database(info, "hap_reuma_antilip");

	show_alert(result,$(this));

	reset_fields("antilip");

	$("#anti_ph_lip_save").hide();

});



$("#anca_ab_save").click(function(){

	var info = get_info("anca");

	var result = to_database(info, "hap_reuma_anca");

	show_alert(result,$(this));

	reset_fields("anca");

	$("#anca_ab_save").hide();

});



$("#citrul_ab_save").click(function(){

	var info = get_info("citrul");

	var result = to_database(info, "hap_reuma_citrul");

	show_alert(result,$(this));

	reset_fields("citrul");

	$("#citrul_ab_save").hide();

});



$("#thyroid_save").click(function() {

	var info = get_info("thyro");

	var result = to_database(info, "hap_hemo_thyro");

	show_alert(result,$(this));

	reset_fields("thyro");

	$("#thyroid_save").hide();

});



$("#d_dimer_save").click(function() {

	var info = get_info("dim");

	var result = to_database(info, "hap_hemo_dim");

	show_alert(result,$(this));

	reset_fields("dim");

	$("#d_dimer_save").hide();

});



$("#trop_save").click(function() {

	var info = get_info("tropo");

	var result = to_database(info, "hap_hemo_tropo");

	show_alert(result,$(this));

	reset_fields("tropo");

	$("#trop_save").hide();

});



$("#bpn_save").click(function() {

	var info = get_info("pept");

	var result = to_database(info, "hap_hemo_pept");

	show_alert(result,$(this));

	reset_fields("pept");

	$("#bpb_save");

});





$("#hiv_save").click(function(){ 

	var info = get_info("vih");

	var result = to_database(info,"hap_vih");

	show_alert(result,$(this));

	reset_fields("vih");

	$("#hiv_save").hide();

});



$("#bld_gass_save").click(function(){

	var info = get_info("art_gas");

	var result = to_database(info,"hap_arterialgasses");

	show_alert(result,$(this));

	reset_fields("art_gas");

	$("#bld_gass_save").hide();

});



$("#renal_save").click(function(){

	var info = get_info("ren");

	var result = to_database(info,"hap_renal");

	show_alert(result,$(this));

	reset_fields("ren");

	$("#renal_save").hide();

});



$("#liver_save").click(function(){

	var info = get_info("live");

	var result = to_database(info,"hap_hepatic");

	show_alert(result,$(this));

	reset_fields("live");

	$("#liver_save").hide();

});



$("#button_modal2").click(function(){

	alert("sirve");

});



$("#bleed_save").click(function(){

	var info = get_info("coag");

	var result = to_database(info,"hap_coag");

	show_alert(result,$(this));

	reset_fields("coag");

	$("#bleed_save").hide();

});



