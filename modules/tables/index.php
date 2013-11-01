<!--main content here-->
<div class="container">
  <div class="row">
    
    
    <div class="span12">
            
      <div class="well well-small span12" style="color: gray; margin-top: 40px; text-align: center; " >
        
          Tablas: &nbsp;
          <select id="tables_select">
                <option value="0" selected>Selecciona</option>
                <option value="t_patient">t_patient</option>
                <option value="t_arterialgasses">t_arterialgasses</option>
                <option value="t_cp_stress_test">t_cp_stress_test</option>
                <option value="t_dimer_trop">t_dimer_trop</option>
                <option value="t_drug_treatment">t_drug_treatment</option>
                <option value="t_duplex_legs">t_duplex_legs</option>
                <option value="t_ecocardio">t_ecocardio</option>
                <option value="t_electrok">t_electrok</option>
                <option value="t_first_eval">t_first_eval</option>
                <option value="t_follow_up">t_follow_up</option>
                <option value="t_gammagr">t_gammagr</option>
                <option value="t_hb">t_hb</option>
                <option value="t_hemo_dim">t_hemo_dim</option>
                <option value="t_hemo_pept">t_hemo_pept</option>
                <option value="t_hemo_thyro">t_hemo_thyro</option>
                <option value="t_hemo_tropo">t_hemo_tropo</option>
                <option value="t_hepatic">t_hepatic</option>
                <option value="t_hyperclotting">t_hyperclotting</option>
                <option value="t_mri">t_mri</option>
                <option value="t_outcome">t_outcome</option>
                <option value="t_pep_natr">t_pep_natr</option>
                <option value="t_renal">t_renal</option>
                <option value="t_reuma">t_reuma</option>
                <option value="t_reuma_ana">t_reuma_ana</option>
                <option value="t_reuma_anca">t_reuma_anca</option>
                <option value="t_reuma_antilip">t_reuma_antilip</option>
                <option value="t_reuma_citrul">t_reuma_citrul</option>
                <option value="t_reuma_enas">t_reuma_enas</option>
                <option value="t_reuma_spana">t_reuma_spana</option>
                <option value="t_right_cathet">t_right_cathet</option>
                <option value="t_six_mins_walk">t_six_mins_walk</option>
                <option value="t_spirometry">t_spirometry</option>
                <option value="t_surgical">t_surgical</option>
                <option value="t_tc_angio">t_tc_angio</option>
                <option value="t_vasoreact_test">t_vasoreact_test</option>
                <option value="t_vih">t_vih</option>
                <option value="t_x_ray">t_x_ray</option>
            </select>
        
        <input class="btn btn-inverse" type="button" id="tables_btn" onclick="view_table()" value="Ver" style="margin-top: 7px; margin-left: 30px;"/>
      </div>
      
      <div class="well well-small span12" id="graph_area" style=" margin-top: 0px; padding: 40px 10px 40px 10px;">
        <div id="container" style="min-width: 400px; margin: 0 auto"></div>
      </div>
          
    </div>
      
  
  </div>
</div>
<!--end of main content-->
