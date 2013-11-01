<div id="reactiv">
    <div CLASS="well well-small" style="text-align:center">
        <h4>TEST DE VASOREACTIVIDAD</h4>
    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Fecha examen:</div>
        <div class="span1">
            <input type="text" id="year2" placeholder="a&ntilde;o" class="span1 react date1" name="reactivity_date" disabled>
        </div>
        <div class="span1">
            <input type="text" id="month2" placeholder="mes" class="span1 react" disabled>
        </div>
        <div class="span1">
            <input type="text" id="day2" placeholder="d&iacute;a" class="span1 react" disabled>
        </div>

    </div>
    <div class="row">
        <div class="span2" style="text-align:right">Medicamento</div>
        <div class="span3">
            <select id="test_drug" class="span3 react" name="test_drug">
                <option value=""></option>
                <option value="adenosina">Adenosina</option>
                <option value="epoprosterol">Epoprosterol</option>
                <option value="iloprost">Iloprost</option>
                <option value="ox_nitrico">&Oacute;xido n&iacute;trico</option>
            </select>
        </div>
    </div>
    <div id="drugdependant">
        <div class="row">
            <div class="span2" style="text-align:right">Res. vasc.r pulmonar</div>
            <div class="span1">
                <input type="text" id="post_res_vasc_pulm" placeholder="RVP" class="span1 react" name="post_res_vasc_pulm"/>
            </div>
            <div class="span2">
                <select id="post_res_vasc_pulm_unit" class="span2 react" name="post_res_vasc_pulm_unit">
                    <option>dinas</option>
                    <option>woods</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Res. vasc. sist</div>
            <div class="span1">
                <input type="text" id="post_res_vasc_syst" placeholder="RVS" class="span1 react" name="post_res_vasc_syst">
            </div>
            <div class="span2">
                <select id="post_res_vasc_syst_unit" class="span2 react" name="post_res_vasc_syst_unit">
                    <option>dinas</option>
                    <option>woods</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">P.A. <b>Pulmonar</b></div>
            <div class="span1">
                <input type="text" id="post_pap_sys" placeholder="sist&oacute;l." class="span1 react" name="post_pap_sys"  maxlength="3">
            </div>
            <div class="span1">
                <input type="text" id="post_pap_dias" placeholder="diast&oacute;l." class="span1 react" name="post_pap_dias" maxlength="3">
            </div>
            <div class="span2">
                <b><span id="post_pam_pulm"></span></b>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">P.A. <b>Sist&eacute;mica</b></div>
            <div class="span1">
                <input type="text" id="post_pas_sys" placeholder="sist&oacute;l." class="span1 react" name="post_pas_sys" maxlength="3">
            </div>
            <div class="span1">
                <input type="text" id="post_pas_dias" placeholder="diast&oacute;l." class="span1 react" name="post_pas_dias" maxlength="3">
            </div>
            <div class="span2">
                <b><span id="post_pam_stm"></span></b>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Pres. aur&iacute;cula derecha</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_rt_atr_press" placeholder="PAD" class="span2 react" name="post_rt_atr_press" maxlength="3">
                    <span class="add-on">mmHg</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Pres. cu&ntilde;a pulmonar</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_pulm_wedg_press" placeholder="PCP" class="span2 react" name="post_pulm_wedg_press">
                    <span class="add-on">mmHg</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Gradiente transpulmonar</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_pulm_gradient" placeholder="GTP" class="span2 react" name="post_pulm_gradient" disabled>
                    <span class="add-on">mmHg</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Gasto cardiaco</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_cardiac_outp" placeholder="CO -L/min" class="span2 react" name="post_cardiac_outp">
                    <span class="add-on">Lt/min</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">&Iacute;ndice cardiaco</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_cardiac_index" placeholder="L/min/Mt2" class="span2 react" name="post_cardiac_index" disabled>
                    <span class="add-on">Lt/min/Mt2</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Oximetr&iacute;a %</div>
            <div class="span1">
                <input type="text" id="post_rt_atr_oxim" placeholder="aur der" class="span1 react" name="post_rt_atr_oxim" maxlength="2">
            </div>
            <div class="span1">
                <input type="text" id="post_rt_ventr_oxim" placeholder="vt der" class="span1 react" name="post_rt_ventr_oxim" maxlength="2">
            </div>
            <div class="span1">
                <input type="text" id="post_pulm_artery" placeholder="at pulm." class="span1 react" name="post_pulm_artery" maxlength="2">
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">Frecuencia cardiaca</div>
            <div class="span2">
                <div class="input-append">
                    <input type="text" id="post_heart_rate" placeholder="pulso" class="span2 react" name="post_heart_rate" maxlength="3">
                    <span class="add-on">lat/min</span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="span2" style="text-align:right">RESULTADO</div>
            <div class="span4"  id="reactivity_display">
                No se hizo test
            </div>
            <div style="display:none">
                <input type="text" id="reactivity" name="reactivity" class="react">
            </div>
        </div>
        <div class="row">
            <div class="span6">
                <!--
                * button name:          react_save
                * Triggers:             $("#react_save").click() -> to_database()
                * Brieff description:   Save Vasoreactividad test
                * js associated file:   ajax_forms.js
                * php AJAX:             /patient/ajax_save.php
                -->
                <button class="btn span6" id="react_save">Guardar</button>

            </div>
        </div>
        <br>
        <br>
        <br>
        <!--end of "drugdependant" -->
    </div>
</div>
