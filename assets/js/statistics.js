var chart;

// +++++ GRAPHIC FUNCTIONS: COMBO, SPLINE AND PIE +++++
function combo( all_content, graph_dates ){  
  var x_axis = all_content[0],
      tooltip_label = all_content[1],
      style_v = { left: '60px', top: '-30px', color: 'black' },
      title_name = all_content[2];
  
  var graph_values = graph_dates.split(','),
      pie_dates = new Array(),
      tot = 0;  
      
  for(var i=0; i<graph_values.length; i++){
    graph_values[i] = +graph_values[i];
    pie_dates[i] = { name: x_axis[i], y: graph_values[i], color: Highcharts.getOptions().colors[1+i%5] };
    tot += graph_values[i];
  }
  
  var html_v = 'Total: ' + tot;
      
  chart = new Highcharts.Chart({
  
    chart: { renderTo: 'container' },
    title: { text: title_name },
    xAxis: { categories: x_axis },
    tooltip: {
      formatter: function() {
        var s = (this.point.name)? this.point.name: this.x,
            p = '<br>Porcentaje: '+parseInt((this.y*100.0)/tot) + '%';
        s += ': '+this.y+' '+tooltip_label + p;
        return s;
      }
    },
    labels: { items: [{ html: html_v, style: style_v }] },

    series: [{
      type: 'column',
      name: 'Total: ' + tot,
      data: graph_values
    }, {
      type: 'spline',
      name: 'Seguimiento',
      data: graph_values,
      marker: {
        lineWidth: 2,
        lineColor: Highcharts.getOptions().colors[4],
        fillColor: 'white'
      }
    }, {
      type: 'pie',
      name: title_name,    
      data: pie_dates,
      center: [80, 40],
      size: 100,
      showInLegend: false,
      dataLabels: { enabled: false }
    }] // series end
    
  }); // Highcharts end
}

function spline(all_content, graph_dates){
  
  var title_name = all_content[0],
      splines = graph_dates.split('?'),
      graph_values = new Array();

  for( var j=0; j<4; j++){
    graph_values[j] = splines[j].split(',');
    for(var i=0; i<graph_values[j].length; i++){
      graph_values[j][i] = +graph_values[j][i];
    }
  }

  chart = new Highcharts.Chart({

    chart: { renderTo: 'container' },
    title: { text: title_name },
    //xAxis: { categories: x_axis },
    tooltip: {
      formatter: function() {
        var m = this.x + 1;
        var s = this.y +' Pacientes <br> Mes: ' + m;
        return s;
      }
    },

    series: [{
      type: 'spline',
      name: 'i',
      data: graph_values[0],
      marker: {
        symbol: 'square'
      }
    }, {
      type: 'spline',
      name: 'ii',
      data: graph_values[1],
      marker: {
        symbol: 'square'
      }
    }, {
      type: 'spline',
      name: 'iii',
      data: graph_values[2],
      marker: {
        symbol: 'square'
      }
    }, {
      type: 'spline',
      name: 'iv',
      data: graph_values[3],
      marker: {
        symbol: 'square'
      }
    }] // series end

  }); // Highcharts end
}

function pie( all_content, graph_dates ){
  var x_axis = all_content[0],
      tooltip_label = all_content[1],
      style_v = { left: '60px', top: '200px', color: 'black', fontSize: '30px' },
      title_name = all_content[2];
  
  var graph_values = graph_dates.split(','),
      pie_dates = new Array(),
      tot = 0;  
      
  for(var i=0; i<graph_values.length; i++){
    graph_values[i] = +graph_values[i];
    pie_dates[i] = { name: x_axis[i], y: graph_values[i], color: Highcharts.getOptions().colors[1+i%5] };
    tot += graph_values[i];
  }
  
  var html_v = 'Total: ' + tot;
      
  chart = new Highcharts.Chart({
  
    chart: { renderTo: 'container' },
    title: { text: title_name },
    xAxis: { categories: x_axis },
    tooltip: {
      formatter: function() {
        var s = (this.point.name)? this.point.name: this.x,
            p = '<br>Porcentaje: '+parseInt((this.y*100.0)/tot) + '%';
        s += ': '+this.y+' '+tooltip_label + p;
        return s;
      }
    },
    labels: { items: [{ html: html_v, style: style_v }] },

    series: [{
      type: 'pie',
      name: title_name,    
      data: pie_dates,
      center: [450, 180],
      size: 300,
      showInLegend: false,
      dataLabels: { enabled: false }
    }] // series end
    
  }); // Highcharts end
}
// +++++ END OF GRAPHIC FUNCTIONS +++++

// Set the general graphic information: axis x, result names and title
function content(info_type){
  var content_v = new Array();
  
  if(info_type == "pacientes"){
    content_v[0] = ['January', 'February', 'March', 'April', 'May',
                    'June', 'July', 'Agost', 'September', 'October',
                    'November', 'December' ];
    content_v[1] = "Pacientes";
    content_v[2] = "Pacientes registrados por fecha";
  }else if(info_type == "primer"){
    content_v[0] = ['1', '2', '3', '4', '6','6', '7', '8', '9', '10','11', '12' ];
    content_v[1] = "Diagnosticos";
    content_v[2] = "Primer diagnostico por periodo";
  }else if(info_type == "genero"){
    content_v[0] = ['Hombres', 'Mujeres'];
    content_v[1] = "Pacientes";
    content_v[2] = "Distribucion por genero";
  }else if(info_type == "edades"){
    content_v[0] = ['0-10','11-20','21-30','31-40','41-50','51-60','61-70','71-80'];
    content_v[1] = "Pacientes";
    content_v[2] = "Distribucion por Edad";
  }else if(info_type == "afroamerican"){
    content_v[0] = ['Pacientes no afroamericanos','Pacientes afromericanos'];
    content_v[1] = "Pacientes";
    content_v[2] = "Raza afroamericana";
  }else if(info_type == "funcional"){
    content_v[0] = ['Asimptotico','Disnea Parcial','Disnea total','Disnea de reposo'];
    content_v[1] = "Pacientes";
    content_v[2] = "Clase funcional";
  }else if(info_type == "funcional_tiempo"){
    content_v[0] = "Clase funcional en el tiempo";    
  }
  return content_v;
}

$("#graph").click(function(){
  var info_type = $("#info_type")[0].value,
      year_option = $("#year_stat")[0].value,
      graph_name;

  if(info_type==""){
    alert("Seleccione datos a graficar");
    return ;
  }
  
  // Set type of graphic for select options
  if( info_type == "pacientes" || info_type == "primer" ) graph_name = combo;
  else if( info_type == "funcional_tiempo") graph_name = spline;
  else graph_name = pie;
    
  $.post( "../statistics/query.php" ,{ info:info_type, y_opt:year_option }, function(data) {
    // Call set grpahic with its paremeters
    graph_name( content(info_type), data );
  });

});

// Set the value for dependent select for year data
$(document).ready( function(){
  $('#year_stat').hide();
  $('#year_opt').hide();
  
  $('#info_type').on('change', function() {  

    var opt2 = "";    
    var opt3 = "";    
    var opt1 = "<option value='1'>1</option><option value='2'>2</option><option value='3'>3</option>";
    for(var i=2013;i<2016;++i) opt2 += "<option value='"+i+"'>"+i+"</option>";
    for(var i=2010;i<2013;++i) opt3 += "<option value='"+i+"'>"+i+"</option>";
    
    if( this.value=="pacientes" ){ 
      $('#year_opt').show();
      $('#year_stat').show().html(opt2);
    }else if( this.value=="primer" ){ 
      $('#year_opt').show();
      $('#year_stat').show().html(opt3);
    }else if( this.value=="funcional_tiempo" ){ 
      $('#year_opt').show();
      $('#year_stat').show().html(opt1);
    }else{
      $('#year_opt').hide();
      $('#year_stat').hide();
    }
  });
});