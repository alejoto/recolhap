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

