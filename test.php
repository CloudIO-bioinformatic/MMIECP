<?php
$host = "localhost";
$port = "5432";
$db = "energy";
$user = "iect2019";
$password = "asd";

echo "conectandose<br>";
$conexion = new PDO('pgsql:host='.$host.';port='.$port.';dbname='.$db.';user='.$user.';password='.$password);


$consulta=$conexion->prepare("Select * from usuario where correo=:correo and clave=:clave");
//para poder hacer la consulta
$consulta->bindValue(':correo', 'claudio@claudio.cl');
$consulta->bindValue(':clave', 'asd');
//ejecutar la consulta
$consulta->execute();
//extraer los datos a variables
foreach ($consulta->fetchAll(PDO::FETCH_ASSOC) as $row){
  echo $row['nombre']."<br>";
}
?>
