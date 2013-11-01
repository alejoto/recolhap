function hideshow1(main, second) {
  if (main.val() != "") {
    second.show("fast");
  }
  else {
    second.hide("fast");
  }
}


// Esta funcion no se esta utilizando, se puede refinar para permitir o no el ingreso de valores en campos de texto
function validate(evt) {
  var theEvent = evt || window.event;
  var key = theEvent.keyCode || theEvent.which;
  key = String.fromCharCode( key );
  
  var regex = /[0-9]|\./;
  if( !regex.test(key)) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }

}


function show_ifnoempty(one, two) {
  $(document).ready(function() {
    two.hide();
    one.keyup(function() {
      hideshow1(one, two)
    })
  })
}

function hide_if_empty(n_empty, hid_shw) {
  $(document).ready(function() {
    hid_shw.hide();
  })

  n_empty.change(function() {
    hideshow1(n_empty, hid_shw);
  })
}

$(document).ready(function() {
  $("#patientexist").hide();
  $("#enterpatient").hide();
  $("#docidnum").hide();
});


function enter_search (){
if ($("#idnumber").val()!="") {
    var doc=$("#docid").val();
    if (doc=="Cédula") {doc="cc"};
    if (doc=="Registro Civil") {doc="rc"};
    if (doc=="Tarjeta de Identidad") {doc="ti"};
    if (doc=="Cédula Extranjería") {doc="ce"};
    if (doc=="Pasaporte") {doc="ps"};
    var docidnum=doc+$("#idnumber").val();


    $.post("ajax_search_patient.php",{ doc:docidnum }, function(data) {
      $('#patientexist').html(data);
      
      if(data=='no') {
        $("#enterpatient").show("fast");
        $("#patientexist").hide("fast");
      }else{
        $("#enterpatient").hide("fast");
        $("#patientexist").show("fast");
      }/**/

    });
  }
  else{
    $("#patientexist").hide("fast");
    $("#enterpatient").hide("fast");
  }

    $("#docidnum").val(docidnum);

}



 $("#idnumber").keyup(function(e){
	if(e.keyCode == 13){
		 enter_search();
	}
});
 	$("#idnumber").blur(function() {
  	enter_search(); 
 	});

//coloring font according to answer
  $("#edit_patient").hide();
  $("#change_patient_btn").hide();
  $(document).ready(function(){
    if ($('#docid').val()=="") { $('#docid').css("color","#CECECE"); }
    $('#docid').change(function(){
      if ($('#docid').val()==""){ $('#docid').css("color","#CECECE"); }
      else{ $('#docid').css("color","#494949"); }
    });
  });


function tiprequired (reqfld) {
  $(document).ready(function() {
    reqfld.blur(function() {
      if (reqfld.val() == "") {
        reqfld.tooltip({
          title: 'Requerido',
          placement: 'right'
        });
        reqfld.tooltip('show');
        } else reqfld.tooltip('destroy');
      });
    });
  }

function show_ifnoempty(one, two) {
  $(document).ready(function() {
    two.hide();
  })

  one.keyup(function() {
    if (one.val()!="") {
      two.show("fast");
    }
    else {
      two.hide("fast");
    }
  })
}

function onlynumber(o_nb) {
  o_nb.keydown(function(event) {
    if (event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 45 || event.keyCode == 27 || event.keyCode == 13 || (event.keyCode == 65 && event.ctrlKey === true) || (event.keyCode >= 35 && event.keyCode <= 39)) {} else {
      if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105)) {
        event.preventDefault();
      }
    }
  });
}

function num_ranges(vale, maxi, mini) {
  $(document).ready(function() {
    onlynumber(vale);
    vale.blur(function() {
      if (vale.val() >maxi) {
        vale.popover('destroy');
        vale.popover({title:"Valor debe ser menor o igual a "+maxi,placement: 'right'});
        vale.popover('show');
        vale.focus();
      }
      else if (vale.val() < mini) {
        vale.popover('destroy');
        vale.popover({title:"Valor debe ser mayor o igual a "+mini,placement: 'right'})
        vale.popover('show');
        }/**/
      else vale.popover('destroy');
    });
  })
}

tiprequired ($("#day"));
tiprequired ($("#name"));
tiprequired ($("#surname"));
tiprequired ($("#gender"));
tiprequired ($("#citybth"));
tiprequired ($("#statebth"));
tiprequired ($("#countrybth"));

hmd_dateformat($("#year"), $("#month"), $("#day"));


up_cas($('#name'));
up_cas($('#surname'));
up_cas($('#citybth'));
up_cas($('#statebth'));
up_cas($('#countrybth'));

num_ranges($("#year"),2020,1913);


hide_if_empty($("#docid"), $("#idnumberctr"));

hide_show_savebutton([
   $('#name')
  ,$('#surname')
  ,$('#gender')
  ,$('#year')
  ,$('#month')
  ,$('#day')
  ,$('#citybth')
  ,$('#statebth')
  ,$('#countrybth')
  ],$('#group_save_patient'));
