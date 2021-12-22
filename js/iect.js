$(function() {

  //modalLogin();
});
function login(){
  $("#modal-login").show();
  console.log('abriendo');
}
function closelogin(){
  $("#modal-login").hide();
  console.log('cerrando');
}
function logout(){
  window.location='../model/deslogin.php';
}

function nuevaCuenta(){
  $("#modal-nuevacuenta").show();
  //console.log('abriendo');
}
function closenuevaCuenta(){
  $("#modal-nuevacuenta").hide();
  //console.log('cerrando');
}
function resetForm(){
  document.getElementById("form-iect").reset();
}
function enviarsolicitudnuevaCuenta(){
  $("#modal-nuevacuenta").hide();
  val = validarnuevaCuenta();
  if (val == false) return false;
  var form = $("#form-nuevacuenta").serialize();
  //console.log("form: "+form);
  //extraer el user name del secretario
  $.ajax({
      url: '../model/iect_query.php?accion=1',
      dataType: 'json',
      data: form,
      type: 'POST',
      async: true,
      success: function(response){
        swal('Atention', 'The request has been sent to the administrator with the information'+
        'that you filled in the form, please be patient and wait for the result of the request that will be sent to you by mail.', 'success');
        }
   });
}

function agregarJob(){
  val = validarJob();
  if (val == false) return false;
  //console.log("entra al agregarJob");
  var form = $("#form-iect").serialize();
  //console.log("form: "+form);
  //reiniciar bucardo
  $.post("../model/iect_query.php?accion=3", function(response) {
    //crear job
    $.ajax({
      url: '../model/iect_query.php?accion=2',
      data: form,
      type: 'POST',
      dataType: 'json',
      async: true,
      success: function(response) {
        //console.log("respuesta?: " + response.msg);
        if (response.success) {
          //var data = response.data;
         //console.log("se ha guardado correctamente en la bd");
        } else {
          swal('Error', response.msg[2], 'error');
        }
      }, error: function(jqXHR, textStatus, errorThrown ) {
        swal('Error', textStatus + " " + errorThrown, 'error');
      }
    });
  }, 'json');
$("#container-formulario").hide();
console.log("p number= "+$('#p_number').val().trim());
var p_number = $('#p_number').val().trim();
monitorizacion(p_number);
}

function monitorizacion_msg(){
  $.post("../model/iect_query.php?accion=5", function(response) {
    $("#titulo-monitorizacion").html(response.data[0]['msg']);
    if(response.data[0]['msg']=="Creating conformations with gp-pro"){
      $("#barra-total").css("width","1%");
      $("#porcentaje_barra").html("1%");
    }
    if(response.data[0]['msg']=="Transforming PDB to MOP input files"){
      $("#barra-total").css("width","20%");
      $("#porcentaje_barra").html("20%");
    }
    if(response.data[0]['msg']=="Adding MOPAC2016 keywords in MOP files"){
      $("#barra-total").css("width","24%");
      $("#porcentaje_barra").html("24%");
    }
    if(response.data[0]['msg']=="Checking keywords syntax in MOP files"){
      $("#barra-total").css("width","25%");
      $("#porcentaje_barra").html("25%");
    }
    if(response.data[0]['msg']=="Performing optimizations with MOPAC2016"){
      $("#barra-total").css("width","91%");
      $("#porcentaje_barra").html("91%");
    }
    if(response.data[0]['msg']=="Analyzing data and generating results"){
      $("#barra-total").css("width","98%");
      $("#porcentaje_barra").html("98%");
    }
    if(response.data[0]['msg']=="Ending the program"){
      $("#barra-total").css("width","100%");
      $("#porcentaje_barra").html("100%");
      $("#loader").hide();
      $("#container-monitorizacion").hide();
      resultados();
    }

  }, 'json');
}
function resultados (){
  console.log("resultados!!!");
}
function use_cpu(){
  //$("#barritas-progreso").html("");
  $.post("../model/iect_query.php?accion=4", function(response) {
    //console.log("entro a use_cpu");
    $("#p1").html(response.data[0]["p1"]);
    $("#p2").html(response.data[0]["p2"]);
    $("#p3").html(response.data[0]["p3"]);
    $("#p4").html(response.data[0]["p4"]);
    $("#p5").html(response.data[0]["p5"]);
    $("#p6").html(response.data[0]["p6"]);
    $("#p7").html(response.data[0]["p7"]);
    $("#p8").html(response.data[0]["p8"]);
    $("#p9").html(response.data[0]["p9"]);
    $("#p10").html(response.data[0]["p10"]);
    $("#p11").html(response.data[0]["p11"]);
    $("#p12").html(response.data[0]["p12"]);
    $("#p13").html(response.data[0]["p13"]);
    $("#p14").html(response.data[0]["p14"]);
  }, 'json');
}

function monitorizacion(p_number){
  $("#container-monitorizacion").show();
  var monitor=setInterval(monitorizacion_msg,1000);
  var cpu=setInterval(use_cpu,3000);
}

function validarJob () {
  if ($('#job_name').val().trim().length==0) {
    swal('Atention', "The job name is required", 'info');
    return false;
  }
  if ($('#pdb_monomer').val().trim().length==0) {
    swal('Atention', "The PDB 1 text is required", 'info');
    return false;
  }
  if ($('#pdb_drug').val().trim().length==0) {
    swal('Atention', "The PDB 2 text is required", 'info');
    return false;
  }
  if ($('#gc_monomer').val().trim().length==0) {
    swal('Atention', "Geometrical center molecule 1 is required", 'info');
    return false;
  }
  if ($('#gc_drug').val().trim().length==0) {
    swal('Atention', "Geometrical center molecule 2 is required", 'info');
    return false;
  }
  if ($('input[name="parametric_method"]:checked').length == 0) {
      swal('Atention', "Parametric method is required", 'info');
      return false;
  }
  if ($('input[name="sampling_size"]:checked').length == 0) {
      swal('Atention', "Sampling size is required", 'info');
      return false;
  }
  //debe ser numero
  if ($('#monomer_charge').val().trim().length==0) {
    swal('Atention', "Molecule 1 charge is required", 'info');
    return false;
  }
  //debe ser numero
  if ($('#drug_charge').val().trim().length==0) {
    swal('Atention', "Molecule 2 charge is required", 'info');
    return false;
  }
  //debe ser numero
  if ($('#system_charge').val().trim().length==0) {
    swal('Atention', "System charge is required", 'info');
    return false;
  }

  if (isNaN($('#monomer_charge').val())==true) {
      swal('Atention', "Molecule 1 charge must be a number", 'info');
  }
  if (isNaN($('#drug_charge').val())==true) {
      swal('Atention', "Molecule 2 charge must be a number", 'info');
      return false;
  }
  if (isNaN($('#system_charge').val())==true) {
      swal('Atention', "System charge must be a number", 'info');
      return false;
  }
  if ($('input[name="monomer_multiplicity"]:checked').length == 0) {
      swal('Atention', "Molecule 1 multiplicity is required", 'info');
      return false;
  }
  if ($('input[name="drug_multiplicity"]:checked').length == 0) {
      swal('Atention', "Molecule 2 multiplicity is required", 'info');
      return false;
  }
  if ($('input[name="system_multiplicity"]:checked').length == 0) {
      swal('Atention', "System multiplicity is required", 'info');
      return false;
  }
  //debe ser numero
  if ($('#p_number').val().trim().length==0) {
    swal('Atention', "Processors number is required", 'info');
    return false;
  }

  if (isNaN($('#p_number').val())==true) {
      swal('Atention', "Processors number must be a number", 'info');
  }
  //debe ser numero
  if ($('#o_number').val().trim().length==0) {
    swal('Atention', "Outputs number is required", 'info');
    return false;
  }
  if (isNaN($('#o_number').val())==true) {
      swal('Atention', "Outputs number must be a number between 1-16", 'info');
      return false;
  }

  if ($('input[name="algorithm"]:checked').length == 0) {
      swal('Atention', "Algorithm is required", 'info');
      return false;
  }
  if ($('input[name="value_energy"]:checked').length == 0) {
      swal('Atention', "Value energy calculation is required", 'info');
      return false;
  }

}
function validarnuevaCuenta () {
  if ($('#nombre').val().trim().length==0) {
    swal('Atention', "The name is required", 'info');
    return false;
  }
  if ($('#apellido').val().trim().length==0) {
    swal('Atention', "The surname is required", 'info');
    return false;
  }
  if ($('#correo_solicitud').val().trim().length==0) {
    swal('Atention', "The mail is required", 'info');
    return false;
  }
  if ($('#institucion').val().trim().length==0) {
    swal('Atention', "The institution is required", 'info');
    return false;
  }
  if ($('#pais').val().trim().length==0) {
    swal('Atention', "The country is required", 'info');
    return false;
  }
}
