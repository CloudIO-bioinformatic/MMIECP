$(document).ready(function(){
	$("#Iniciar").click(function(){
		var correo=$('#correo').val();
		var clave=$("#clave").val();
		//console.log(Usuario,Contrasena);
		console.log("correo: ",correo,"clave: ",clave);
		$.ajax({
			type:"POST",
			dataType:'json',
			url:'../model/login.php',
			data:{correo:correo,clave:clave},
			success:function(response){
				//console.log(user_name,contrasena,response.director,response.admin, response.secretario, response.nombres);
				console.log("respuesta: ",response);
				if(response.respuesta==true){

					$("#mensaje").html(response.mensaje);
					window.location='../vista/iect_sign_in.php';
				}else{
					$("#mensaje").html(response.mensaje);
				}
			},error:function(){
				alert('Error general en el sistema');
			}
		});
	});
});
