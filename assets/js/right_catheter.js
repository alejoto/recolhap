/*Esconder formulario del test de vasorreactividad*/

    $(document).ready(function() { $("#reactiv").hide(); });

    





    

    $(document).ready(function() {

        $("#save_rt_cath").hide();

        $("#vreac_test_done").change(function(){

            var vreac_test_done=$("#vreac_test_done").val();

            if (vreac_test_done=="no") {$("#save_rt_cath").show("fast");}

            else if (vreac_test_done=="si") {

                $("#save_rt_cath").hide("fast");

                $("#basal").hide("fast");

                $("#reactiv").show("fast");

            }

            else {$("#save_rt_cath").hide("fast");}

        });

    });





hide_show_savebutton(
    [
    $("#year"),
    $("#month"),
    $("#day")

    ,$('#pap_sys'),
    $('#pap_dias'),
    $('#pas_sys')

    ,$('#pas_dias'),
    $('#rt_atr_press'),
    $('#pulm_wedg_press')

    ,$('#cardiac_outp')], 
    $('#ask_for_react_test')
    )
;



hide_show_savebutton([$('#post_pap_sys'),$('#post_pap_dias'),$('#post_pas_sys')

    ,$('#post_pas_dias'),$('#post_rt_atr_press'),$('#post_pulm_wedg_press')

    ,$('#post_cardiac_outp')], $('#react_save'));







icon_exchanger($(".main_icon"),$("#basic_eval"),$("#blood_test"),$("#performance"),$("#clin_images")

              ,'0  75px','-92px 75px','-184px 75px','-276px 0','Evaluaci&oacute;n <br>cl&iacute;nica',

              'Pruebas<br>en sangre','Desempe&ntilde;o cardiovascular','Im&aacute;genes<br/>diagn&oacute;sticas');





    /*Next lines execute prevoius functions */

    

    clickhideshow($("#showrt"), $("#basal"), $("#reactiv"));

    clickhideshow($("#showbas"), $("#reactiv"), $("#basal"));



/*hmd_dateformat(...) limits number of days acconding to month and bisester years, also limits

number of months until 12*/

hmd_dateformat($("#year"),$("#month"),$("#day"));

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





    num_ranges($("#year"), 2020, 2010, 0);

    num_ranges($("#wgt"), 250, 0, 0);

    num_ranges($("#hgt"), 3, 0, 1);

    num_ranges($("#res_vasc_pulm"), 5000, 0, 0);

    num_ranges($("#res_vasc_syst"), 5000, 0, 0);

    num_ranges($("#pap_sys"), 300, 0, 0);

    num_ranges($("#pap_dias"), 300, 0, 0);

    num_ranges($("#pas_sys"), 300, 0, 0);

    num_ranges($("#pas_dias"), 300, 0, 0);

    num_ranges($("#rt_atr_press"), 300, 0, 0);

    num_ranges($("#pulm_wedg_press"), 300, 0, 0);

    num_ranges($("#its_right"), 50, 0);

    num_ranges($("#its_left"), 100, 0);

    num_ranges($("#cardiac_outp"), 30, 0, 1);

    num_ranges($("#rt_atr_oxim"), 100, 0, 0);

    num_ranges($("#rt_ventr_oxim"), 100, 0, 0);

    num_ranges($("#pulm_artery"), 100, 0, 0);

    num_ranges($("#heart_rate"), 550, 0, 0);



    

    num_ranges($("#post_res_vasc_pulm"), 5000, 0, 0);

    num_ranges($("#post_res_vasc_syst"), 5000, 0, 0);

    num_ranges($("#post_pap_sys"), 300, 0, 0);

    num_ranges($("#post_pap_dias"), 300, 0, 0);

    num_ranges($("#post_pas_sys"), 300, 0, 0);

    num_ranges($("#post_pas_dias"), 300, 0, 0);

    num_ranges($("#post_rt_atr_press"), 300, 0, 0);

    num_ranges($("#post_pulm_wedg_press"), 300, 0, 0);

    num_ranges($("#post_pulm_gradient"), 300, 0, 0);

    num_ranges($("#post_its_right"), 50, 0);

    num_ranges($("#post_its_left"), 100, 0);

    num_ranges($("#post_cardiac_outp"), 30, 0, 1);

    num_ranges($("#post_rt_atr_oxim"), 100, 0, 0);

    num_ranges($("#post_rt_ventr_oxim"), 100, 0, 0);

    num_ranges($("#post_pulm_artery"), 100, 0, 0);

    num_ranges($("#post_heart_rate"), 550, 0, 0);



    samevalue($("#year"), $("#year2"));

    samevalue($("#month"), $("#month2"));

    samevalue($("#day"), $("#day2"));



    tiprequired($("#day"));

    //tiprequired($("#day2"));



    hide_if_empty($("#test_drug"), $("#drugdependant"));



    p_a_m($("#pap_sys"), $("#pap_dias"), $("#pam_pulm"));

    p_a_m($("#pas_sys"), $("#pas_dias"), $("#pam_stm"));

    p_a_m($("#post_pap_sys"), $("#post_pap_dias"), $("#post_pam_pulm"));

    p_a_m($("#post_pas_sys"), $("#post_pas_dias"), $("#post_pam_stm"));



    tgp_formula($("#pulm_wedg_press"), $("#pam_pulm"), $("#pulm_gradient"));

    tgp_formula($("#post_pulm_wedg_press"), $("#post_pam_pulm"), $("#post_pulm_gradient"));



    trigger_c_idx($("#wgt"), $("#hgt"), $("#cardiac_outp"), $("#cardiac_index"));

    trigger_c_idx($("#wgt"), $("#hgt"), $("#post_cardiac_outp"), $("#post_cardiac_index"));



    trigger_bsa($("#wgt"), $("#hgt"), $("#bsa"));



    trigger_v_react_test($("#pap_sys"),$("#pap_dias"),$("#post_pap_sys"),$("#post_pap_dias"),$("#cardiac_outp"),$("#post_cardiac_outp"));



    $('#day').keyup(function(){ show_react_test_question(); });

    $('#res_vasc_pulm').keyup(function(){ show_react_test_question(); });

    $('#res_vasc_syst').keyup(function(){ show_react_test_question(); });

    $('#pap_sys').keyup(function(){ show_react_test_question(); });

    $('#pap_dias').keyup(function(){ show_react_test_question(); });

    $('#pas_sys').keyup(function(){ show_react_test_question(); });

    $('#pas_dias').keyup(function(){ show_react_test_question(); });

    $('#rt_atr_press').keyup(function(){ show_react_test_question(); });

    $('#pulm_wedg_press').keyup(function(){ show_react_test_question(); });

    $('#cardiac_outp').keyup(function(){ show_react_test_question(); });

    $('#rt_atr_oxim').keyup(function(){ show_react_test_question(); });

    $('#heart_rate').keyup(function(){ show_react_test_question(); });