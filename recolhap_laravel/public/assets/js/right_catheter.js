$(function(){

	$("#save_rt_cath").hide();
	$("#reactiv").hide(); 
	//
	

	$("#vreac_test_done").change(function(){
		var vreac_test_done=$("#vreac_test_done").val();
		if (vreac_test_done=="no") {
			$("#save_rt_cath").show("fast");
			$('#required_cardiac_output_for_reactivity_test').html('');
			$("#reactiv").hide("fast");
		} else if (vreac_test_done=="si"){
			var cardiac_outp=$('#cardiac_outp').val();
			if (cardiac_outp=='') {
				$('#cardiac_outp').focus();
				$('#required_cardiac_output_for_reactivity_test').html(
					'El gasto cardiaco es requerido <br><br>'
					)
				;
			} else {
				$("#save_rt_cath").hide("fast");
				//$("#basal").hide("fast");
				$("#reactiv").show("fast");
			}
		} else {
			$("#save_rt_cath").hide("fast");
		}
	});

	function save_basal(){
		var patient_id=$('#patient_id').val();
		var year=$('#year').val();
		var month=$('#month').val();
		var day=$('#day').val();
		//
		var res_vasc_pulm=		$('#res_vasc_pulm').val();
		var res_vasc_pulm_unit=	$('#res_vasc_pulm_unit').val();
		var res_vasc_syst=		$('#res_vasc_syst').val();
		var res_vasc_syst=		$('#res_vasc_syst').val();
		var res_vasc_syst_unit=	$('#res_vasc_syst_unit').val();
		var pap_sys=			$('#pap_sys').val();
		var pap_dias=			$('#pap_dias').val();
		var pam_pulm=			$('#pam_pulm').text();
		var pas_sys=			$('#pas_sys').val();
		var pas_dias=			$('#pas_dias').val();
		var pam_stm=			$('#pam_stm').text();
		var rt_atr_press=		$('#rt_atr_press').val();
		var pulm_wedg_press=	$('#pulm_wedg_press').val();
		var pulm_gradient=		$('#pulm_gradient').val();
		var cardiac_outp=		$('#cardiac_outp').val();
		var cardiac_index=		$('#cardiac_index').val();
		var rt_atr_oxim=		$('#rt_atr_oxim').val();
		var rt_ventr_oxim=		$('#rt_ventr_oxim').val();
		var pulm_artery=		$('#pulm_artery').val();
		var heart_rate=			$('#heart_rate').val();
		var vreac_test_done=	$('#vreac_test_done').val();

		//
		var reactivity=$('#reactivity').val();
		var test_drug=$('#test_drug').val();
		var post_res_vasc_pulm=$('#post_res_vasc_pulm').val();
		var post_res_vasc_pulm_unit=$('#post_res_vasc_pulm_unit').val();
		var post_res_vasc_syst=$('#post_res_vasc_syst').val();
		var post_res_vasc_syst_unit=$('#post_res_vasc_syst_unit').val();
		var post_pap_sys=$('#post_pap_sys').val();
		var post_pap_dias=$('#post_pap_dias').val();
		var post_pas_sys=$('#post_pas_sys').val();
		var post_pas_dias=$('#post_pas_dias').val();
		var post_rt_atr_press=$('#post_rt_atr_press').val();
		var post_pulm_wedg_press=$('#post_pulm_wedg_press').val();
		var post_pulm_gradient=$('#post_pulm_gradient').val();
		var post_cardiac_outp=$('#post_cardiac_outp').val();
		var post_cardiac_index=$('#post_cardiac_index').val();
		var post_rt_ventr_oxim=$('#post_rt_ventr_oxim').val();
		var post_pulm_artery=$('#post_pulm_artery').val();
		var post_rt_atr_oxim=$('#post_rt_atr_oxim').val();
		var post_heart_rate=$('#post_heart_rate').val();

		//required for post action
		var base=$('#base').html();


		$.post(
			base+'/cath/patient',
			{
				patient_id:patient_id
				//,wholedate:wholedate
				,year:year
				,month:month
				,day:day
				,res_vasc_pulm:res_vasc_pulm
				,res_vasc_pulm_unit:res_vasc_pulm_unit
				,res_vasc_syst:res_vasc_syst
				,res_vasc_syst_unit:res_vasc_syst_unit
				,pap_sys:pap_sys
				,pap_dias:pap_dias
				,pas_sys:pas_sys
				,pas_dias:pas_dias
				,rt_atr_press:rt_atr_press
				,pulm_wedg_press:pulm_wedg_press
				,pulm_gradient:pulm_gradient
				,cardiac_outp:cardiac_outp
				,cardiac_index:cardiac_index
				,rt_atr_oxim:rt_atr_oxim
				,rt_ventr_oxim:rt_ventr_oxim
				,pulm_artery:pulm_artery
				,heart_rate:heart_rate
				,vreac_test_done:vreac_test_done

				//variables for vasoreactivity test
				,reactivity:reactivity
				,test_drug:test_drug
				,post_res_vasc_pulm:post_res_vasc_pulm
				,post_res_vasc_pulm_unit:post_res_vasc_pulm_unit
				,post_res_vasc_syst:post_res_vasc_syst
				,post_res_vasc_syst_unit:post_res_vasc_syst_unit
				,post_pap_sys:post_pap_sys
				,post_pap_dias:post_pap_dias
				,post_pas_sys:post_pas_sys
				,post_pas_dias:post_pas_dias
				,post_rt_atr_press:post_rt_atr_press
				,post_pulm_wedg_press:post_pulm_wedg_press
				,post_pulm_gradient:post_pulm_gradient
				,post_cardiac_outp:post_cardiac_outp
				,post_cardiac_index:post_cardiac_index
				,post_rt_ventr_oxim:post_rt_ventr_oxim
				,post_pulm_artery:post_pulm_artery
				,post_rt_atr_oxim:post_rt_atr_oxim
				,post_heart_rate:post_heart_rate/**/

			},
			function(d){
				if (d==1) {
					//return 1;//
					window.location.href=base+'/cath/show/'+patient_id;
				}
			}
			)
		;/**/
	}

	$('#save_rt_cath').click(function(e){
		e.preventDefault();
		var d=save_basal();
		if (d==1) {
			window.location.href=base+'/cath/show/'+patient_id;
		}
	});
	
	//showrt
	hide_show_savebutton(
		[
		$("#year"),
		$("#month"),
		$("#day")
		,$('#pap_sys')
		,$('#pap_dias')
		,$('#pulm_wedg_press')
		], 
		$('#showrt'));

	$('#cardiac_outp').keyup(function(e){
		//e.preventDefault();
		var vreac_test_done=$('#vreac_test_done').val();
		var cardiac_outp=$('#cardiac_outp').val();
		if (cardiac_outp!='' && vreac_test_done=='si') {
			$('#required_cardiac_output_for_reactivity_test').html('');
			$('#reactiv').show('fast');
			$('#save_rt_cath').hide('fast');
		}
	});

	$('#react_save').click(function(e){
		e.preventDefault();
		var d=save_basal();
		if (d==1) {
			window.location.href=base+'/cath/show/'+patient_id;
		}
	});

});
/*Esconder formulario del test de vasorreactividad*/

hide_show_savebutton([$("#year"),$("#month"),$("#day")

	,$('#pap_sys')
	,$('#pap_dias')
    //,$('#pas_sys')
    //,$('#pas_dias')
    //,$('#rt_atr_press')
    ,$('#pulm_wedg_press')
    //,$('#cardiac_outp')
    ], $('#ask_for_react_test'));



hide_show_savebutton(
	[$('#post_pap_sys'),
	$('#post_pap_dias'),
	//$('#post_pas_sys'),
	//$('#post_pas_dias'),
	//$('#post_rt_atr_press'),
	$('#post_pulm_wedg_press'),
	$('#post_cardiac_outp')
	],
	$('#react_save'));







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



