<!--main content here-->
<div class="container">
  <div class="row">
    
    
    <div class="span12">
            
      <div class="well well-small span12" style="color: gray; margin-top: 40px; text-align: center; " >
        <h5 style="margin: 10px 0px 0px 10px; float: left;" class="span2">Graficando</h5>
        <div style="float: left; margin-top: 10px; margin-left: 0px;">|</div>

        <div style="float: left; margin-left: 40px; margin-top: 0px;" >
          Datos a graficar: &nbsp;
          <select class="span3" id="info_type" style="margin-top: 7px;">
            <option value=""></option>
            <option value="pacientes">Pacientes</option>
            <option value="genero">G&eacute;nero</option>
            <option value="edades">Edades</option>
            <option value="afroamerican">Raza afroamericana</option>
            <option value="funcional">Clase funcional</option>
            <option value="funcional_tiempo">Funcional en el tiempo</option>
            <!-- <option value="primer">Primer diagn&oacute;stico</option> -->
          </select>
        </div>

        <div style="float: left; margin-left: 30px; margin-top: 0px;" id="year_opt">
          A&ntilde;o: &nbsp;
          <select class="span2" id="year_stat" style="margin-top: 7px;">
            <option value=""></option>
          </select>
        </div>
        
        <input class="btn btn-inverse" type="button" id="graph" value="Graficar" style="margin-top: 7px; float:left; margin-left: 30px;">
      </div>
      
      <div class="well well-small span12" id="graph_area" style="height: 400px; margin-top: 0px; padding: 40px 10px 40px 10px;">
        <div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
      </div>
          
    </div>
      
  
  </div>
</div>
<!--end of main content-->

<script src="../../assets/js/statistics.js"></script>
