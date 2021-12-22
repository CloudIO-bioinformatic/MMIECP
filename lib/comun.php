<?php
conectarBD();

function conectarBD () {
  $host = "localhost";
  $port = "5432";
  $db = "energy";
  $user = "iect2019";
  $password = "asd";

  // conectar a la base de datos
  try {
    $conn = new PDO('pgsql:host='.$host.';port='.$port.';dbname='.$db.';user='.$user.';password='.$password);
    return $conn;


  } catch (PDOException $e) {
    //echo $e->getMessage();

    return false;
  }

}

function ejecutarSQL ($stmt) {
  $res = array();
  $res["success"] = false;
  $res["msg"] = "Error SQL";
  $res["data"] = null;

  try {
    if ($stmt->execute()) {
      $res["data"] = $stmt->fetchAll(PDO::FETCH_ASSOC);
      $res["msg"] = "éxito";
      $res["success"] = true;
    } else {
      //http://php.net/manual/en/pdostatement.errorinfo.php
      $res["msg"] = $stmt->errorInfo();
      //$res["msg"] = "Error SQL";
    }

  } catch (PDOException $e) {
    $res["msg"] = $e->getMessage();
  }

  return $res;
}

?>
