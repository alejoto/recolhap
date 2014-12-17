$(document).ready(function() {$("#artergph_location").hide("fast");});

$("#artergph_TEP").change(function() {

	if ($("#artergph_TEP").val()===""||$("#artergph_TEP").val()==="normal") {

		$("#artergph_location").hide("fast");

	}

	else {$("#artergph_location").show("fast");}

});





/**

-------------------------------------------------------------------------------------

*

*

* name         :    No name (execution of previous js function)

* Description  :    Execution of hide_show_savebutton(),

*                   which hides save button until all required

*                   fields are displayed

* Depend on    :    medic.js

* Dependant    :    this file

*/

/*hide/show save button: first parameter is an array, inside [].  Second parameter is the button id*/

hide_show_savebutton([$("#y_ecoc"),$("#m_ecoc"),$("#d_ecoc"), $("#doppl_type"), $("#doppl_syst_press"), $("#eject_fract")], $("#ecoc_save"));

hide_show_savebutton([$("#y_xray"),$("#m_xray"),$("#d_xray"), $("#alveolar_infiltrates"), $("#hypoperfusion_areas"), $("#right_heart_cardiomegs")], $("#xray_save"));

hide_show_savebutton([$("#y_tc"),$("#m_tc"),$("#d_tc"), $("#a_tc_main_pulm_art_diamt"), $("#a_tc_rt_pulm_art_diamt"), $("#a_tc_left_pulm_art_diamt"), $("#a_tc_tep_pattern"), $("#a_tc_congenit")], $("#tc_save"));

hide_show_savebutton([$("#y_rmn"),$("#m_rmn"),$("#d_rmn"), $("#mri_fevd"), $("#mri_main_art_diam"), $("#mri_rt_art_diam"), $("#mri_lt_art_diam"), $("#mri_rt_heart_dilat"), $("#mri_defects")], $("#mri_save"));

hide_show_savebutton([$("#y_artg"),$("#m_artg"),$("#d_artg"), $("#artergph_TEP"), ], $("#artergph_save"));

hide_show_savebutton([$("#y_gamma"),$("#m_gamma"),$("#d_gamma"), $("#gamma_tep")], $("#gamma_save"));

hide_show_savebutton([$("#y_ecoleg"),$("#m_ecoleg"),$("#d_ecoleg"), $("#legsdoppler_result_right"), $("#legsdoppler_result_left")], $("#legsdoppler_save"));



/**

-------------------------------------------------------------------------------------

*

*

* name         :    other_cardiac(sel,showed)

* Description  :    Displays "other(answer)" field when "other" is choosen from 

*                   selectlist, otherwise keeps "other(answer)" field hidden.

* Depend on    :    jquery

* Dependant    :    this file

*/

function other_cardiac(sel,showed) {

	$(document).ready(function() {

		showed.hide();

	});

	sel.change(function() {

		if (sel.val()=="other") {showed.show("fast");}

		else showed.hide("fast");

	});

}



/**

-------------------------------------------------------------------------------------

*

*

* name         :    showmain_img(...)

* Description  :    When clicking button, displays only one form

*                   while hidding the other ones

* Depend on   :     jquery.js

* Dependant   :     this file

*/

function showmain_img(btnsw,hid1,hid2,hid3,hid4,hid5,hid6,shwmain){

	btnsw.click(function(){

		hid1.hide("fast");

		hid2.hide("fast");

		hid3.hide("fast");

		hid4.hide("fast");

		hid5.hide("fast");

		hid6.hide("fast");

		shwmain.show("fast");

	});

}



showmain_img($("#sel_ecocardio"),$("#x_ray"),$("#tc_angio"),$("#mri"),$("#pulm_arteriography"),$("#gammagr"),$("#duplex_legs"),$("#ecocardio"))

showmain_img($("#sel_x_ray"),$("#ecocardio"),$("#tc_angio"),$("#mri"),$("#pulm_arteriography"),$("#gammagr"),$("#duplex_legs"),$("#x_ray"))

showmain_img($("#sel_tc_angio"),$("#ecocardio"),$("#x_ray"),$("#mri"),$("#pulm_arteriography"),$("#gammagr"),$("#duplex_legs"),$("#tc_angio"))

showmain_img($("#sel_mri"),$("#ecocardio"),$("#x_ray"),$("#tc_angio"),$("#pulm_arteriography"),$("#gammagr"),$("#duplex_legs"),$("#mri"))

showmain_img($("#sel_pulm_arteriography"),$("#ecocardio"),$("#x_ray"),$("#tc_angio"),$("#mri"),$("#gammagr"),$("#duplex_legs"),$("#pulm_arteriography"))

showmain_img($("#sel_gammagr"),$("#ecocardio"),$("#x_ray"),$("#tc_angio"),$("#mri"),$("#pulm_arteriography"),$("#duplex_legs"),$("#gammagr"))

showmain_img($("#sel_duplex_legs"),$("#ecocardio"),$("#x_ray"),$("#tc_angio"),$("#mri"),$("#pulm_arteriography"),$("#gammagr"),$("#duplex_legs"))





$(document).ready(function() {

	$("#x_ray").hide();

	$("#tc_angio").hide();

	$("#mri").hide();

	$("#pulm_arteriography").hide();

	$("#gammagr").hide();

	$("#duplex_legs").hide();

	$(".alert").hide();

});





/**

-------------------------------------------------------------------------------------

*

*

* name         :    No name (execution of previous js function)

* Description  :    Execution of icon_exchanger(...),

*                   which changes big icon according to 

*                   small icons hovering

* Depend on   :     medic.js

* Dependant   :     this file

*/

/*icon exchanger syntax

    main_i[class], icon_1,   icon_2,   icon_3,    icon_main,

(icon positioning) pos_ic_1, pos_ic_2, pos_ic_3,  pos_main,

(icon titles)      title1,   title2,   title3,    maintitle

*/

icon_exchanger($(".main_icon"),$("#basic_eval"),$("#blood_test"),$("#performance"),$("#clin_images")

	,'0  75px','-92px 75px','-184px 75px','-276px 0','Evaluaci&oacute;n <br>cl&iacute;nica',

	'Pruebas<br>en sangre','Desempe&ntilde;o cardiovascular','Im&aacute;genes diagn&oacute;sticas');





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
hmd_dateformat($("#y_xray"),$("#m_xray"),$("#d_xray"));
hmd_dateformat($("#y_tc"),$("#m_tc"),$("#d_tc"));
hmd_dateformat($("#y_ecoc"),$("#m_ecoc"),$("#d_ecoc"));
hmd_dateformat($("#y_ecoleg"),$("#m_ecoleg"),$("#d_ecoleg"));
hmd_dateformat($("#y_rmn"),$("#m_rmn"),$("#d_rmn"));
hmd_dateformat($("#y_artg"),$("#m_artg"),$("#d_artg"));
hmd_dateformat($("#y_gamma"),$("#m_gamma"),$("#d_gamma"));

/**
-------------------------------------------------------------------------------------
*
*
* name         :    No name (execution of previous js function)
* Description  :    Execution of num_ranges(...),
*                   which limits value between specified range 
* Depend on   :     medic.js
* Dependant   :     this file
*/



var d = new Date();
num_ranges($("#y_xray"), d.getFullYear(), 2010,0);
num_ranges($("#y_tc"), d.getFullYear(), 2010,0);
num_ranges($("#y_ecoc"), d.getFullYear(), 2010,0);
num_ranges($("#y_ecoleg"), d.getFullYear(), 2010,0);
num_ranges($("#y_rmn"), d.getFullYear(), 2010,0);
num_ranges($("#y_artg"), d.getFullYear(), 2010,0);
num_ranges($("#y_gamma"), d.getFullYear(), 2010,0);

num_ranges($("#cardiothrx_index"), 1, 0,1);
num_ranges($("#a_tc_main_pulm_art_diamt"), 120, 0,0);
num_ranges($("#a_tc_rt_pulm_art_diamt"), 120, 0,0);
num_ranges($("#a_tc_left_pulm_art_diamt"), 120, 0,0);
num_ranges($("#mri_main_art_diam"), 120, 0,0);
num_ranges($("#mri_rt_art_diam"), 120, 0,0);
num_ranges($("#mri_lt_art_diam"), 120, 0,0);
num_ranges($("#doppl_syst_press"), 300, 0,0);
num_ranges($("#eject_fract"), 100, 0,0);
num_ranges($("#tapse"), 9, 0,1);



/**

-------------------------------------------------------------------------------------
*
*
* name         :    No name (execution of previous js function)
* Description  :    Execution of show_ifnoempty(...),
*                   which displays second field if first is filled with data.
*                   and while first field keeps empty second will be hidden
* Depend on   :     medic.js
* Dependant   :     this file
*/

/*Execution of "other_cardiac" function, created at the beginning of this file*/
other_cardiac($("#a_tc_congenit"),$("#other_defects1"));
other_cardiac($("#doppl_cong_defects"),$("#other_defects2"));
other_cardiac($("#mri_defects"),$("#other_defects3"));

$(function(){
	function saveimaging(values){
		var base=$('#base').html();
		var patient=$('#patient').html();
		$.post(
			base+'/patient/'+patient+'/imaging',
			values,
			function(d){
				if (d==1) {
					window.location.href=base+'/patient/'+patient+'/imaging';
				}
			}
			)
		;
	}


	var patient=$('#patient').html();
	$('#ecoc_save').click(function(e){  
		e.preventDefault();
		var y_ecoc=$('#y_ecoc').val();
		var m_ecoc=$('#m_ecoc').val();
		var d_ecoc=$('#d_ecoc').val();
		var doppl_type=$('#doppl_type').val();
		//
		var doppl_right_dilat='';
		var doppl_right_dysf='';
		var doppl_pleur_effuss='';
		var left_heart_dysf='';
		var doppl_septum_dev='';
		//
		if ($('#doppl_right_dilat').is(':checked')) {doppl_right_dilat=1;};
		if ($('#doppl_right_dysf').is(':checked')) {doppl_right_dysf=1;};
		if ($('#doppl_pleur_effuss').is(':checked')) {doppl_pleur_effuss=1;};
		if ($('#left_heart_dysf').is(':checked')) {left_heart_dysf=1;};
		if ($('#doppl_septum_dev').is(':checked')) {doppl_septum_dev=1;};
		var doppl_syst_press=$('#doppl_syst_press').val();
		var eject_fract=$('#eject_fract').val();
		var tapse=$('#tapse').val();
		var tryc_reg_vel=$('#tryc_reg_vel').val();
		var doppl_cong_defects=$('#doppl_cong_defects').val();
		var doppl_cong_defects_otros=$('#doppl_cong_defects_otros').val();
		var date=y_ecoc+'-'+m_ecoc+'-'+d_ecoc;
		var values={patient:patient,date:date,
			doppl_type:doppl_type,
			doppl_syst_press:doppl_syst_press,
			doppl_right_dilat:doppl_right_dilat,
			doppl_right_dysf:doppl_right_dysf,
			doppl_pleur_effuss:doppl_pleur_effuss,
			left_heart_dysf:left_heart_dysf,
			eject_fract:eject_fract,
			tapse:tapse,
			tryc_reg_vel:tryc_reg_vel,
			doppl_cong_defects:doppl_cong_defects,
			doppl_cong_defects_otros:doppl_cong_defects_otros,
			doppl_septum_dev:doppl_septum_dev,model:'Ecocardio'
		};
		saveimaging(values);
	});


	$('#xray_save').click(function(e){  
		e.preventDefault(); 
		var y_xray=$('#y_xray').val();
		var m_xray=$('#m_xray').val();
		var d_xray=$('#d_xray').val();
		var alveolar_infiltrates=$('#alveolar_infiltrates').val();
		var hypoperfusion_areas=$('#hypoperfusion_areas').val();
		var right_heart_cardiomegs=$('#right_heart_cardiomegs').val();
		//
		var pleur_effuss='';
		var b_kerkey_lines='';
		var pulm_cone_evertion='';
		//
		if ($('#pleur_effuss').is(':checked')) {pleur_effuss=1;}
		if ($('#b_kerkey_lines').is(':checked')) {b_kerkey_lines=1;}
		if ($('#pulm_cone_evertion').is(':checked')) {pulm_cone_evertion=1;}
		//
		//
		var cardiothrx_index=$('#cardiothrx_index').val();
		var date=y_xray+'-'+m_xray+'-'+d_xray;
		var values={patient:patient,date:date,
			alveolar_infiltrates:alveolar_infiltrates,
			hypoperfusion_areas:hypoperfusion_areas,
			right_heart_cardiomegs:right_heart_cardiomegs,
			pleur_effuss:pleur_effuss,
			b_kerkey_lines:b_kerkey_lines,
			pulm_cone_evertion:pulm_cone_evertion,
			cardiothrx_index:cardiothrx_index,model:'Xqray'
		};
		saveimaging(values);
	});


	$('#tc_save').click(function(e){  
		e.preventDefault(); 
		var y_tc=$('#y_tc').val();
		var m_tc=$('#m_tc').val();
		var d_tc=$('#d_tc').val();
		var a_tc_main_pulm_art_diamt=$('#a_tc_main_pulm_art_diamt').val();
		var a_tc_rt_pulm_art_diamt=$('#a_tc_rt_pulm_art_diamt').val();
		var a_tc_left_pulm_art_diamt=$('#a_tc_left_pulm_art_diamt').val();
		//
		var a_tc_rt_heart_dilat='';//$('#a_tc_rt_heart_dilat').val();
		var a_tc_pulm_thrombos='';//$('#a_tc_pulm_thrombos').val();
		var a_tc_inft_interst='';//$('#a_tc_inft_interst').val();
		var a_tc_inft_alv='';//$('#a_tc_inft_alv').val();
		var a_tc_inft_nodular='';//$('#a_tc_inft_nodular').val();
		var a_tc_mosaic='';//$('#a_tc_mosaic').val();
		var a_tc_inft_retic='';//$('#a_tc_inft_retic').val();
		var a_tc_inft_honeycomb='';//$('#a_tc_inft_honeycomb').val();
		var a_tc_pleural_effusion='';//$('#a_tc_pleural_effusion').val();
		if ($('#a_tc_rt_heart_dilat').is(':checked')) {a_tc_rt_heart_dilat=1;}
		if ($('#a_tc_pulm_thrombos').is(':checked')) {a_tc_pulm_thrombos=1;}
		if ($('#a_tc_inft_interst').is(':checked')) {a_tc_inft_interst=1;}
		if ($('#a_tc_inft_alv').is(':checked')) {a_tc_inft_alv=1;}
		if ($('#a_tc_inft_nodular').is(':checked')) {a_tc_inft_nodular=1;}
		if ($('#a_tc_mosaic').is(':checked')) {a_tc_mosaic=1;}
		if ($('#a_tc_inft_retic').is(':checked')) {a_tc_inft_retic=1;}
		if ($('#a_tc_inft_honeycomb').is(':checked')) {a_tc_inft_honeycomb=1;}
		if ($('#a_tc_pleural_effusion').is(':checked')) {a_tc_pleural_effusion=1;}
		//
		var a_tc_tep_pattern=$('#a_tc_tep_pattern').val();
		var a_tc_congenit=$('#a_tc_congenit').val();
		var a_tc_congenit_otros=$('#a_tc_congenit_otros').val();
		var date=y_tc+'-'+m_tc+'-'+d_tc;
		var values={patient:patient,date:date,
			a_tc_main_pulm_art_diamt:a_tc_main_pulm_art_diamt,
			a_tc_rt_pulm_art_diamt:a_tc_rt_pulm_art_diamt,
			a_tc_left_pulm_art_diamt:a_tc_left_pulm_art_diamt,
			a_tc_rt_heart_dilat:a_tc_rt_heart_dilat,
			a_tc_tep_pattern:a_tc_tep_pattern,
			a_tc_pulm_thrombos:a_tc_pulm_thrombos,
			a_tc_inft_interst:a_tc_inft_interst,
			a_tc_inft_alv:a_tc_inft_alv,
			a_tc_inft_nodular:a_tc_inft_nodular,
			a_tc_mosaic:a_tc_mosaic,
			a_tc_inft_retic:a_tc_inft_retic,
			a_tc_inft_honeycomb:a_tc_inft_honeycomb,
			a_tc_pleural_effusion:a_tc_pleural_effusion,
			a_tc_congenit:a_tc_congenit,
			a_tc_congenit_otros:a_tc_congenit_otros,model:'Tcqangio'
		};
		saveimaging(values);
	});


	$('#mri_save').click(function(e){  
		e.preventDefault(); 
		var y_rmn=$('#y_rmn').val();
		var m_rmn=$('#m_rmn').val();
		var d_rmn=$('#d_rmn').val();
		var mri_fevd=$('#mri_fevd').val();
		var mri_main_art_diam=$('#mri_main_art_diam').val();
		var mri_rt_art_diam=$('#mri_rt_art_diam').val();
		var mri_lt_art_diam=$('#mri_lt_art_diam').val();
		var mri_rt_heart_dilat=$('#mri_rt_heart_dilat').val();
		var mri_defects=$('#mri_defects').val();
		var mri_other_defects=$('#mri_other_defects').val();
		var date=y_rmn+'-'+m_rmn+'-'+d_rmn;
		var values={patient:patient,date:date,
			mri_fevd:mri_fevd,
			mri_main_art_diam:mri_main_art_diam,
			mri_rt_art_diam:mri_rt_art_diam,
			mri_lt_art_diam:mri_lt_art_diam,
			mri_rt_heart_dilat:mri_rt_heart_dilat,
			mri_defects:mri_defects,
			mri_other_defects:mri_other_defects,model:'Mri'
		};
		saveimaging(values);
	});


	$('#artergph_save').click(function(e){  
		e.preventDefault(); 
		var y_artg=$('#y_artg').val();
		var m_artg=$('#m_artg').val();
		var d_artg=$('#d_artg').val();
		var artergph_TEP=$('#artergph_TEP').val();
		var artergph_location=$('#artergph_location').val();
		var date=y_artg+'-'+m_artg+'-'+d_artg;
		var values={patient:patient,date:date,
			artergph_TEP:artergph_TEP,
			artergph_location:artergph_location,model:'Pulmqarteriography'
		};
		saveimaging(values);
	});


	$('#gamma_save').click(function(e){  
		e.preventDefault(); 
		var y_gamma=$('#y_gamma').val();
		var m_gamma=$('#m_gamma').val();
		var d_gamma=$('#d_gamma').val();
		var gamma_tep=$('#gamma_tep').val();
		var date=y_gamma+'-'+m_gamma+'-'+d_gamma;
		var values={patient:patient,date:date,
			gamma_tep:gamma_tep,model:'Gammagr'
		};
		saveimaging(values);
	});


	$('#legsdoppler_save').click(function(e){  
		e.preventDefault(); 
		var y_ecoleg=$('#y_ecoleg').val();
		var m_ecoleg=$('#m_ecoleg').val();
		var d_ecoleg=$('#d_ecoleg').val();
		var legsdoppler_result_right=$('#legsdoppler_result_right').val();
		var legsdoppler_result_left=$('#legsdoppler_result_left').val();
		var date=y_ecoleg+'-'+m_ecoleg+'-'+d_ecoleg;
		var values={patient:patient,date:date,
			legsdoppler_result_right:legsdoppler_result_right,
			legsdoppler_result_left:legsdoppler_result_left,model:'Duplexqlegs'
		};
		saveimaging(values);
	});
});