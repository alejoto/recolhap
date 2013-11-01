<div id="spir">
    <div class="row"  style="text-align:left">
        <div class="span8 well well-small" style="text-align:center">
        		<h4>ESPIROMETR&Iacute;A</h4>
        </div>
    </div>
    <div class="row" name="spirometry">
        <div class="span2">Fecha realizaci&oacute;n</div>
        <div class="span3" style="text-align:left">
            <input type="text" id="y_spir" class="span1 spir1 date1" name="spirodate" placeholder="a&ntilde;o" maxlength="4"/>
            <input type="text" id="m_spir" class="span1 spir1" placeholder="mes" maxlength="2"/>
            <input type="text" id="d_spir" class="span1 spir1 date3" placeholder="d&iacute;a" maxlength="2"/>
        </div>
    </div>
    <div class="row">
        <div class="span2">
            <div class="input-append">
                <input type="text" placeholder="CVF" class="span1 spir1" id="cvf_lt" name="cvf_lt">
                <span class="add-on">Lts. CVF</span>
            </div>
        </div>
        <div class="span2">
            <div class="input-append">
                <input type="text" placeholder="VEF1" class="span1 spir1" id="vef1_lt" name="vef1_lt">
                <span class="add-on">Lts/1seg.</span>
            </div>
        </div>
        <div class="span3">
            <div class="input-append">
                <input type="text" placeholder="%" class="span1 spir1" id="vef1_cvf" name="vef1_cvf" style="text-align:right" disabled>
                <span class="add-on">% (VEF1/CVF)</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span8"><hr></div>
    </div>
    <div class="row">
        <div class="span8"><h5>Resultados post-broncodilatador</h5></div>
    </div>
    <div class="row">
        <div class="span2">
            <div class="input-append">
                <input type="text" placeholder="CVF" class="span1 spir1" id="post_cvf_lt" name="post_cvf_lt">
                <span class="add-on">Lts. CVF</span>
            </div>
        </div>
        <div class="span2">
            <div class="input-append">
                <input type="text" placeholder="VEF1" class="span1 spir1" id="post_vef1_lt" name="post_vef1_lt">
                <span class="add-on">Lts/1seg.</span>
            </div>
        </div>
        <div class="span3">
            <div class="input-append">
                <input type="text" placeholder="%" class="span1 spir1" id="post_vef1_cvf" name="post_vef1_cvf" style="text-align:right" disabled>
                <span class="add-on">% (VEF1/CVF)</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span8"><br></div>
    </div>
    <div class="row">
        <div class="span2">Incremento VEF1</div>
        <div class="span2">Cambio VEF1(%)</div>
    </div>
    <div class="row">
        <div class="span2">
            <div class="input-append">
                <input type="text" class="span1 spir1" id="delta_abs_vef" name="delta_abs_vef" disabled>
                <span class="add-on">cc(ml)</span>
            </div>
        </div>
        <div class="span2">
            <div class="input-append">
                <input type="text" class="span1 spir1" id="delta_vef1" name="delta_vef1" style="text-align:right" disabled>
                <span class="add-on">%</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span8">
            <hr>
        </div>
    </div>
    <div class="row">
        <div class="offset1 span1" style="text-align:right">DLCO(%)</div>
        <div class="span2">
            <div class="input-append">
                <input type="text" class="span1 spir1" id="dlco_percent" name="dlco_percent" placeholder="DLCO">
                <span class="add-on">%</span>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="span8">
            <br>
        </div>
    </div>
    <div class="row">
        <div class="span8" style="text-align:center">
            
            <!--
        * button name:          save_spir
        * Triggers:             $('#save_spir').click() -> to_database() 
        * Brieff description:   Save info of hap_spirometry
        * js associated file:   ajax_forms.js 
        * php AJAX:             patient/ajax_save.php 
        -->
            
            <a class="btn" id="save_spir">Guardar</a>
            <div class="alert alert-success">
 			 				<button type="button" class="close">&times;</button>
  						<strong></strong>
						</div>            
        </div>
    </div>
    <div class="row">
        <div class="span2">
            <br>
        </div>
    </div>
</div>
