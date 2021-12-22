<?php
	require_once("../lib/comun.php");
	$mensajeOk=false;
	$mensajeError='El sistema no se encuentra disponible';
	$conexion=conectarBD();
	if(isset($_POST['correo'],$_POST['clave'])):
		if($_POST['correo']!=""):
			if($_POST['clave']!=""):
				$correo=$_POST['correo'];
				$clave=$_POST['clave'];
				//$clave_encriptada=encriptar($contrasena);
				$consulta=$conexion->prepare("Select * from usuario where correo=:correo and clave=:clave");
				//para poder hacer la consulta
				$consulta->bindValue(':correo', $correo);
				$consulta->bindValue(':clave', $clave);
				//ejecutar la consulta
				$consulta->execute();
				//extraer los datos a variables
				foreach ($consulta->fetchAll(PDO::FETCH_ASSOC) as $row){
					$id_usuario = $row['id_usuario'];
					$nombre = $row['nombre'];
					$apellido = $row['apellido'];
					$correo = $row['correo'];
					$institucion = $row['institucion'];
					$pais = $row['pais'];
				}
				if($nombre):
					$mensajeOk=true;
					session_start();
					$_SESSION['id_usuario']=$id_usuario;
					$_SESSION['nombre']=$nombre;
					$_SESSION['apellido']=$apellido;
					$_SESSION['correo']=$correo;
					$_SESSION['institucion']=$institucion;
					$_SESSION['pais']=$pais;
					$_SESSION['existe']='t';
					$mensajeError='Se ha iniciado correctamente la sesión.';
				else:
					$mensajeError='Usuario o contraseña incorrecta.';
				endif;
			else:
				$mensajeError='Contraseña incorrecta.';
			endif;
		else:
			$mensajeError='Usuario no existe.';
		endif;
	else:
		$mensajeError='Todos los datos son requeridos.';
	endif;
	$salidaJson=array('respuesta' => $mensajeOk, 'mensaje' =>$mensajeError,'nombre' => $nombre,'apellido' => $apellido, 'correo' => $correo, 'clave' => $clave);
	echo json_encode($salidaJson);
?>
