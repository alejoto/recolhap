<script type="text/javascript">

$(function () {
  var chart;
  var cosa = $("#dates")[0].value;
  //var near = dates.split(',');
  alert(cosa);
  
  $(document).ready(function() {
    chart = new Highcharts.Chart({
    
      chart: {
        renderTo: 'container'
      },
    
      title: {
        text: 'Combination chart'
      },
    
      xAxis: {
        categories: ['January', 'February', 'March', 'April', 'May',
                     'June', 'July', 'Agost', 'September', 'October',
                     'November', 'December' ]
      },
    
      tooltip: {
        formatter: function() {
          var s = "";  
          if (this.point.name) s = this.point.name +': '+ this.y +' fruits';
          else s = this.x  +': '+ this.y;
          return s;
        }
      },
    
      labels: {
        items: [{
          html: '',
          style: {
            left: '40px',
            top: '8px',
            color: 'black'
          }
        }]
      },
    
      series: [{
        type: 'column',
        name: 'Año: 2013',
        data: [3, 2, 1, 3, 4, 1, 2, 4, 5, 3, 0, 11]
      }, {
        type: 'spline',
        name: 'Seguimiento',
        data: [3, 2, 1, 3, 4, 1, 2, 4, 5, 3, 0, 11],
        marker: {
          lineWidth: 2,
          lineColor: Highcharts.getOptions().colors[4],
          fillColor: 'white'
        }
      }/*, {
        type: 'pie',
        name: 'Total consumption',
        data: 
          [
            { name: 'January', y: 13, color: Highcharts.getOptions().colors[0] }, 
            { name: 'February', y: 23, color: Highcharts.getOptions().colors[1] }, 
            { name: 'March', y: 19, color: Highcharts.getOptions().colors[2] }
          ],
          
        center: [100, 80],
        size: 100,
        showInLegend: false,
        dataLabels: { enabled: false }
      }*/] // series end
      
    }); // Highcharts end
  }); // document end
}); // function end

</script>

<div id="container" style="min-width: 400px; height: 400px; margin: 0 auto"></div>
