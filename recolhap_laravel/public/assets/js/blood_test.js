

/**
-------------------------------------------------------------------------------------
*
*
* name      	: 	No name (execution of previous js function)
* Description  : 	Execution of hide_show_savebutton(),
*           		which hides save button until all required
*           		fields are displayed
* Depend on   :   	medic.js
* Dependant   :   	this file
*/



hide_show_savebutton([$("#y_hb"),$("#m_hb"),$("#d_hb"), $("#hb_value")], $("#hb_save"));

hide_show_savebutton([$("#y_thyr"),$("#m_thyr"),$("#d_thyr"), $("#tsh")], $("#thyroid_save"));

hide_show_savebutton([$("#y_dimer"),$("#m_dimer"),$("#d_dimer"), $("#d_dimer_value")], $("#d_dimer_save"));

hide_show_savebutton([$("#y_trop"),$("#m_trop"),$("#d_trop"), $("#trop_result")], $("#trop_save"));

hide_show_savebutton([$("#y_bpn"),$("#m_bpn"),$("#d_bpn"), $("#pep_natr_value")], $("#bpn_save"));

hide_show_savebutton([$("#y_vih"),$("#m_vih"),$("#d_vih"), $("#hiv_result")], $("#hiv_save"));

hide_show_savebutton([$("#y_art_gas"),$("#m_art_gas"),$("#d_art_gas"), $("#bld_gass_fio2"), $("#bld_gass_ph"), $("#bld_gass_paco2"), $("#bld_gass_pao2"), $("#bld_gass_hco3")], $("#bld_gass_save"));

hide_show_savebutton([$("#y_renal"),$("#m_renal"),$("#d_renal"), $("#creat")], $("#renal_save"));

hide_show_savebutton([$("#y_liver"),$("#m_liver"),$("#d_liver"), $("#hep_ast"), $("#hep_alt"), $("#hep_fal")], $("#liver_save"));

hide_show_savebutton([$("#y_bleed"),$("#m_bleed"),$("#d_bleed"), $("#hep_tpt"), $("#hep_tp"), $("#hep_inr")], $("#bleed_save"));

hide_show_savebutton([$("#y_f_reum"),$("#m_f_reum"),$("#d_f_reum"), $("#f_reum")], $("#f_reum_save"));

hide_show_savebutton([$("#y_uns_ana"),$("#m_uns_ana"),$("#d_uns_ana"), $("#uns_ana_value")], $("#uns_ana_save"));

hide_show_savebutton([$("#y_sp_ana"),$("#m_sp_ana"),$("#d_sp_ana"), $("#centromere"), $("#anti_rna_polim"), $("#antidsDNA")], $("#sp_ana_save"));

hide_show_savebutton([$("#y_anti_ENAs"),$("#m_anti_ENAs"),$("#d_anti_ENAs"), $("#anti_ro"), $("#anti_la"), $("#anti_smith"), $("#anti_rnp"), $("#antiRNP70"), $("#anti_u3_rnp"), $("#antijo"), $("#anti_scl")], $("#anti_ENAs_save"));

hide_show_savebutton([$("#y_anti_ph_lip"),$("#m_anti_ph_lip"),$("#d_anti_ph_lip"), $("#acl_g"), $("#acl_m"), $("#a_coag_lup"), $("#anti_b2gp")], $("#anti_ph_lip_save"));

hide_show_savebutton([$("#y_anca_ab"),$("#m_anca_ab"),$("#d_anca_ab"), $("#c_anca"), $("#p_anca")], $("#anca_ab_save"));

hide_show_savebutton([$("#y_citrul_ab"),$("#m_citrul_ab"),$("#d_citrul_ab"), $("#a_citrul")], $("#citrul_ab_save"));



/**

-------------------------------------------------------------------------------------

*

*

* name      	: 	No name (execution of previous js function)

* Description  : 	Execution of icon_exchanger(...),

*           		which changes big icon according to 

*           		small icons hovering

* Depend on   :   	medic.js

* Dependant   :   	this file

*/

/*icon exchanger syntax

    main_i[class], icon_1,   icon_2,   icon_3,    icon_main,

(icon positioning) pos_ic_1, pos_ic_2, pos_ic_3,  pos_main,

(icon titles)      title1,   title2,   title3,    maintitle

*/

icon_exchanger($(".main_icon")

	, $("#basic_eval")

	, $("#performance")

	, $("#clin_images")

	, $("#blood_test")

	, '0  75px'

	, '-184px 75px'

	, '-276px 75px'

	, '-92px 0px'

	, 'Evaluaci&oacute;n <br>cl&iacute;nica'

	, 'Desempe&ntilde;o cardiovascular'

	, 'Im&aacute;genes diagn&oacute;sticas'

	, 'Pruebas<br>en sangre');





$(document).ready(function () {

  $("#art_gasses").hide();

  $("#renal").hide();

  $("#liver").hide();

  $("#reuma").hide();

  $(".alert").hide();

});



/**

-------------------------------------------------------------------------------------

*

*

* name      	: 	showmain2(...)

* Description  : 	When clicking button, displays only one form

*           		while hidding the other ones

* Depend on   :   	jquery.js

* Dependant   :   	this file

*/

function showmain2(btnsw, hid0, hid1, hid2, hid3, hid4, shwmain) {

  btnsw.click(function () {

    hid0.hide("fast");

    hid1.hide("fast");

    hid2.hide("fast");

    hid3.hide("fast");

    hid4.hide("fast");

    shwmain.show("fast");

  });

}



showmain2($("#sel_hb_and_others"), $("#art_gasses"), $("#renal"), $("#liver"), $("#reuma"), $("#othertests"), $("#hb_and_others"));

showmain2($("#sel_art_gasses"), $("#hb_and_others"), $("#renal"), $("#liver"), $("#reuma"), $("#othertests"), $("#art_gasses"));

showmain2($("#sel_renal"), $("#hb_and_others"), $("#art_gasses"), $("#liver"), $("#reuma"), $("#othertests"), $("#renal"));

showmain2($("#sel_liver"), $("#hb_and_others"), $("#art_gasses"), $("#renal"), $("#reuma"), $("#othertests"), $("#liver"));

showmain2($("#sel_reuma"), $("#hb_and_others"), $("#art_gasses"), $("#renal"), $("#liver"), $("#othertests"), $("#reuma"));



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

hmd_dateformat($("#y_hb"),$("#m_hb"),$("#d_hb"));

hmd_dateformat($("#y_thyr"),$("#m_thyr"),$("#d_thyr"));

hmd_dateformat($("#y_dimer"),$("#m_dimer"),$("#d_dimer"));

hmd_dateformat($("#y_trop"),$("#m_trop"),$("#d_trop"));

hmd_dateformat($("#y_bpn"),$("#m_bpn"),$("#d_bpn"));

hmd_dateformat($("#y_vih"),$("#m_vih"),$("#d_vih"));

hmd_dateformat($("#y_art_gas"),$("#m_art_gas"),$("#d_art_gas"));

hmd_dateformat($("#y_renal"),$("#m_renal"),$("#d_renal"));

hmd_dateformat($("#y_liver"),$("#m_liver"),$("#d_liver"));

hmd_dateformat($("#y_bleed"),$("#m_bleed"),$("#d_bleed"));

hmd_dateformat($("#y_f_reum"),$("#m_f_reum"),$("#d_f_reum"));

hmd_dateformat($("#y_uns_ana"),$("#m_uns_ana"),$("#d_uns_ana"));

hmd_dateformat($("#y_sp_ana"),$("#m_sp_ana"),$("#d_sp_ana"));

hmd_dateformat($("#y_anti_ENAs"),$("#m_anti_ENAs"),$("#d_anti_ENAs"));

hmd_dateformat($("#y_anca_ab"),$("#m_anca_ab"),$("#d_anca_ab"));

hmd_dateformat($("#y_citrul_ab"),$("#m_citrul_ab"),$("#d_citrul_ab"));

hmd_dateformat($("#y_anti_ph_lip"),$("#m_anti_ph_lip"),$("#d_anti_ph_lip"));





/**

-------------------------------------------------------------------------------------

*

*

* name      	: 	No name (execution of previous js function)

* Description  : 	Execution of num_ranges(...),

*           		which limits value between specified range 

* Depend on   :   	medic.js

* Dependant   :   	this file

*/

var d = new Date();

/*numrange dates*/

num_ranges($("#y_hb"), d.getFullYear(), 2010, 0);

num_ranges($("#y_thyr"), d.getFullYear(), 1990, 0);

num_ranges($("#y_dimer"), d.getFullYear(), 2010, 0);

num_ranges($("#y_trop"), d.getFullYear(), 2010, 0);

num_ranges($("#y_bpn"), d.getFullYear(), 2010, 0);

num_ranges($("#y_vih"), d.getFullYear(), 1990, 0);

num_ranges($("#y_art_gas"), d.getFullYear(), 2010, 0);

num_ranges($("#y_renal"), d.getFullYear(), 2010, 0);

num_ranges($("#y_liver"), d.getFullYear(), 2010, 0);

num_ranges($("#y_bleed"), d.getFullYear(), 2010, 0);

num_ranges($("#y_f_reum"), d.getFullYear(), 1990, 0);

num_ranges($("#y_uns_ana"), d.getFullYear(), 1990, 0);

num_ranges($("#y_sp_ana"), d.getFullYear(), 1990, 0);

num_ranges($("#y_anti_ENAs"), d.getFullYear(), 1990, 0);

num_ranges($("#y_anca_ab"), d.getFullYear(), 1990, 0);

num_ranges($("#y_citrul_ab"), d.getFullYear(), 1990, 0);

num_ranges($("#y_anti_ph_lip"), d.getFullYear(), 1990, 0);







/*lab values range*/

num_ranges($("#hb_value"), 50, 0, 0);

num_ranges($("#tsh"), 200, 0, 1);

num_ranges($("#t_4_total"), 200, 0, 1);

num_ranges($("#t_4_free"), 50, 0, 1);

num_ranges($("#d_dimer_value"), 10000, 0, 0);

num_ranges($("#trop_result"), 100, 0, 1);

num_ranges($("#pep_natr_value"), 10000, 0, 1);

num_ranges($("#pro_pep_natr_value"), 50000, 0, 1);

num_ranges($("#bld_gass_fio2"), 100, 0, 0);

num_ranges($("#bld_gass_ph"), 10, 4, 1);

num_ranges($("#bld_gass_paco2"), 150, 0, 0);

num_ranges($("#bld_gass_pao2"), 150, 0, 0);

num_ranges($("#bld_gass_hco3"), 99, 0, 0);

num_ranges($("#creat"), 150, 0, 1);

num_ranges($("#bun"), 200, 0, 1);

num_ranges($("#bili_tot"), 100, 0, 1);

num_ranges($("#bili_dir"), 50, 0, 1);

num_ranges($("#hep_ast"), 2000, 0, 0);

num_ranges($("#hep_alt"), 2000, 0, 0);

num_ranges($("#hep_fal"), 2000, 0, 0);

num_ranges($("#hep_albumin"), 100, 0, 0);

num_ranges($("#hep_tpt"), 1000, 0, 0);

num_ranges($("#hep_tp"), 100, 0, 0);

num_ranges($("#hep_inr"), 999999, 0, 1);


$(function(){

  function saveblood(values){
    var base=$('#base').html();
    var patient=$('#patient').html();
    $.post(
      base+'/patient/'+patient+'/saveblood',
      values,
      function(d){
        if (d==1) {
          window.location.href=base+'/patient/'+patient+'/blood';
        }
      }
      )
    ;
  }
  var base=$('#base').html();
  var patient=$('#patient').html();

  $('#hb_save').click(function(e){ e.preventDefault(); 
    var y_hb=$('#y_hb').val();
    var m_hb=$('#m_hb').val();
    var d_hb=$('#d_hb').val();
    var date=y_hb+'-'+m_hb+'-'+d_hb;
    var hb_value=$('#hb_value').val();
    var values={patient:patient,date:date,hb_value:hb_value
      ,model:'Hb'};
    saveblood(values);
  });


  $('#d_dimer_save').click(function(e){ e.preventDefault();
    var y_dimer=$('#y_dimer').val();
    var m_dimer=$('#m_dimer').val();
    var d_dimer=$('#d_dimer').val();
    var date=y_dimer+'-'+m_dimer+'-'+d_dimer;
    var d_dimer_value=$('#d_dimer_value').val();
    var values={patient:patient,date:date,d_dimer_value:d_dimer_value
      ,model:'Hemoqdim' };
    saveblood(values);
   });





  $('#thyroid_save').click(function(e){ e.preventDefault();
    var y_thyr=$('#y_thyr').val();
    var m_thyr=$('#m_thyr').val();
    var d_thyr=$('#d_thyr').val();
    var date=y_thyr+'-'+m_thyr+'-'+d_thyr;
    var tsh=$('#tsh').val();
    var t_4_total=$('#t_4_total').val();
    var t_4_free=$('#t_4_free').val();
    var values={patient:patient
      ,date:date
      ,tsh:tsh
      ,t_4_total:t_4_total
      ,t_4_free:t_4_free
      ,model:'Hemoqthyro'
      };
    saveblood(values);
   });







  $('#trop_save').click(function(e){ e.preventDefault();
    var y_trop=$('#y_trop').val();
    var m_trop=$('#m_trop').val();
    var d_trop=$('#d_trop').val();
    var date=y_trop+'-'+m_trop+'-'+d_trop;
    var trop_result=$('#trop_result').val();
    var values={patient:patient,date:date,trop_result:trop_result
      ,model:'Hemoqtropo'};
    saveblood(values);
   });





  $('#bpn_save').click(function(e){ e.preventDefault();
    var y_bpn=$('#y_bpn').val();
    var m_bpn=$('#m_bpn').val();
    var d_bpn=$('#d_bpn').val();
    var date=y_bpn+'-'+m_bpn+'-'+d_bpn;
    var pep_natr_value=$('#pep_natr_value').val();
    var pro_pep_natr_value=$('#pro_pep_natr_value').val();
    var values={patient:patient,date:date,pep_natr_value:pep_natr_value
      ,pro_pep_natr_value:pro_pep_natr_value
      ,model:'Pepqnatr'};
    saveblood(values);
   });



  $('#hiv_save').click(function(e){ e.preventDefault();
    var y_vih=$('#y_vih').val();
    var m_vih=$('#m_vih').val();
    var d_vih=$('#d_vih').val();
    var date=y_vih+'-'+m_vih+'-'+d_vih;
    var hiv_result=$('#hiv_result').val();
    var values={patient:patient,date:date,hiv_result:hiv_result
      ,model:'Vih'}
    saveblood(values);
   });

  $('#bld_gass_save').click(function(e){ e.preventDefault(); 
    var y_art_gas=$('#y_art_gas').val();
    var m_art_gas=$('#m_art_gas').val();
    var d_art_gas=$('#d_art_gas').val();

    var date=y_art_gas+'-'+m_art_gas+'-'+d_art_gas;
    var bld_gass_fio2=$('#bld_gass_fio2').val();
    var bld_gass_ph=$('#bld_gass_ph').val();
    var bld_gass_paco2=$('#bld_gass_paco2').val();
    var bld_gass_pao2=$('#bld_gass_pao2').val();
    var bld_gass_hco3=$('#bld_gass_hco3').val();
    var values={patient:patient,date:date,bld_gass_fio2:bld_gass_fio2
    ,bld_gass_ph:bld_gass_ph
    ,bld_gass_paco2:bld_gass_paco2
    ,bld_gass_pao2:bld_gass_pao2
    ,bld_gass_hco3:bld_gass_hco3
    ,model:'Arterialgasses'};
    saveblood(values);



  });


  $('#liver_save').click(function(e){ e.preventDefault(); 
    //
    var y_liver=$('#y_liver').val();
    var m_liver=$('#m_liver').val();
    var d_liver=$('#d_liver').val();
    var date=y_liver+'-'+m_liver+'-'+d_liver;
    var hep_albumin=$('#hep_albumin').val();
    var hep_ast=$('#hep_ast').val();
    var hep_alt=$('#hep_alt').val();
    var hep_fal=$('#hep_fal').val();
    var hep_ggt=$('#hep_ggt').val();
    var bili_tot=$('#bili_tot').val();
    var bili_dir=$('#bili_dir').val();
    var values={patient:patient,date:date,hep_albumin:hep_albumin
    ,hep_ast:hep_ast
    ,hep_alt:hep_alt
    ,hep_fal:hep_fal
    ,hep_ggt:hep_ggt
    ,bili_tot:bili_tot
    ,bili_dir:bili_dir
    ,model:'Hepatic'};
    saveblood(values);



  });


  $('#renal_save').click(function(e){ e.preventDefault(); 
    //
    var y_renal=$('#y_renal').val();
    var m_renal=$('#m_renal').val();
    var d_renal=$('#d_renal').val();
    var date=y_renal+'-'+m_renal+'-'+d_renal;
    var creat=$('#creat').val();
    var bun=$('#bun').val();
    var values={patient:patient,date:date,creat:creat
    ,bun:bun
    ,model:'Renal'};
    saveblood(values);



  });


  $('#f_reum_save').click(function(e){ e.preventDefault(); 
    //
    var y_f_reum=$('#y_f_reum').val();
    var m_f_reum=$('#m_f_reum').val();
    var d_f_reum=$('#d_f_reum').val();
    var date=y_f_reum+'-'+m_f_reum+'-'+d_f_reum;
    var f_reum=$('#f_reum').val();
    var values={patient:patient,date:date,f_reum:f_reum
    ,model:'Reuma'};
    saveblood(values);



  });


  $('#uns_ana_save').click(function(e){ e.preventDefault(); 
    //
    var y_uns_ana=$('#y_uns_ana').val();
    var m_uns_ana=$('#m_uns_ana').val();
    var d_uns_ana=$('#d_uns_ana').val();
    var date=y_uns_ana+'-'+m_uns_ana+'-'+d_uns_ana;
    var uns_ana_value=$('#uns_ana_value').val();
    var values={patient:patient,date:date,uns_ana_value:uns_ana_value
    ,model:'Reumaqana'};
    saveblood(values);



  });


  $('#anca_ab_save').click(function(e){ e.preventDefault(); 
    //
    var y_anca_ab=$('#y_anca_ab').val();
    var m_anca_ab=$('#m_anca_ab').val();
    var d_anca_ab=$('#d_anca_ab').val();
    var date=y_anca_ab+'-'+m_anca_ab+'-'+d_anca_ab;
    var c_anca=$('#c_anca').val();
    var p_anca=$('#p_anca').val();
    var values={patient:patient,date:date,c_anca:c_anca
    ,p_anca:p_anca
    ,model:'Reumaqanca'};
    saveblood(values);



  });


  $('#anti_ph_lip_save').click(function(e){ e.preventDefault(); 
    //
    var y_anti_ph_lip=$('#y_anti_ph_lip').val();
    var m_anti_ph_lip=$('#m_anti_ph_lip').val();
    var d_anti_ph_lip=$('#d_anti_ph_lip').val();
    var date=y_anti_ph_lip+'-'+m_anti_ph_lip+'-'+d_anti_ph_lip;
    var acl_g=$('#acl_g').val();
    var acl_m=$('#acl_m').val();
    var a_coag_lup=$('#a_coag_lup').val();
    var anti_b2gp=$('#anti_b2gp').val();
    var values={patient:patient,date:date,acl_g:acl_g
    ,acl_m:acl_m
    ,a_coag_lup:a_coag_lup
    ,anti_b2gp:anti_b2gp
    ,model:'Reumaqantilip'};
    saveblood(values);



  });

  $('#citrul_ab_save').click(function(e){ e.preventDefault(); 
    //
    var y_citrul_ab=$('#y_citrul_ab').val();
    var m_citrul_ab=$('#m_citrul_ab').val();
    var d_citrul_ab=$('#d_citrul_ab').val();
    var date=y_citrul_ab+'-'+m_citrul_ab+'-'+d_citrul_ab;
    var a_citrul=$('#a_citrul').val();
    var values={patient:patient,date:date,a_citrul:a_citrul
    ,model:'Reumaqcitrul'};
    saveblood(values);



  });




  $('#anti_ENAs_save').click(function(e){ e.preventDefault(); 
    //
    var y_anti_ENAs=$('#y_anti_ENAs').val();
    var m_anti_ENAs=$('#m_anti_ENAs').val();
    var d_anti_ENAs=$('#d_anti_ENAs').val();
    var date=y_anti_ENAs+'-'+m_anti_ENAs+'-'+d_anti_ENAs;
    var anti_ro=$('#anti_ro').val();
    var anti_la=$('#anti_la').val();
    var anti_smith=$('#anti_smith').val();
    var anti_rnp=$('#anti_rnp').val();
    var antiRNP70=$('#antiRNP70').val();
    var anti_u3_rnp=$('#anti_u3_rnp').val();
    var antijo=$('#antijo').val();
    var anti_scl=$('#anti_scl').val();
    var values={patient:patient,date:date,anti_ro:anti_ro
    ,anti_la:anti_la
    ,anti_smith:anti_smith
    ,anti_rnp:anti_rnp
    ,antiRNP70:antiRNP70
    ,anti_u3_rnp:anti_u3_rnp
    ,antijo:antijo
    ,anti_scl:anti_scl
    ,model:'Reumaqenas'};
    saveblood(values);



  });


  $('#sp_ana_save').click(function(e){ e.preventDefault(); 
    //
    var y_sp_ana=$('#y_sp_ana').val();
    var m_sp_ana=$('#m_sp_ana').val();
    var d_sp_ana=$('#d_sp_ana').val();
    var date=y_sp_ana+'-'+m_sp_ana+'-'+d_sp_ana;
    var centromere=$('#centromere').val();
    var anti_rna_polim=$('#anti_rna_polim').val();
    var antidsDNA=$('#antidsDNA').val();
    var values={patient:patient,date:date,centromere:centromere
    ,anti_rna_polim:anti_rna_polim
    ,antidsDNA:antidsDNA
    ,model:'Reumaqspana'};
    saveblood(values);



  });


  $('#bleed_save').click(function(e){ e.preventDefault(); 
    //
    var y_bleed=$('#y_bleed').val();
    var m_bleed=$('#m_bleed').val();
    var d_bleed=$('#d_bleed').val();
    var date=y_bleed+'-'+m_bleed+'-'+d_bleed;
    var hep_tpt=$('#hep_tpt').val();
    var hep_tp=$('#hep_tp').val();
    var hep_inr=$('#hep_inr').val();
    var values={patient:patient,date:date,hep_tpt:hep_tpt
    ,hep_tp:hep_tp
    ,hep_inr:hep_inr
    ,model:'Coag'};
    saveblood(values);





  });




});
