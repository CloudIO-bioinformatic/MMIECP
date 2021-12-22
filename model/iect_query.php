<?php
require_once("../lib/comun.php");
require("../lib/PHPMailer/PHPMailerAutoload.php");
session_start();
if (isset($_REQUEST['accion'])) {
  switch ($_REQUEST['accion']) {
    case 1:
      $conn = conectarBD();
      enviarsolicitudnuevaCuenta ($conn);
      break;
    case 2:
      $conn = conectarBD();
      insertarJob ($conn);
      break;
    case 3:
      reiniciarBucardo ();
      break;
    case 4:
      $conn = conectarBD();
      monitorizacion($conn);
      break;
    case 5:
      $conn = conectarBD();
      monitorizacion_msg($conn);
      break;

  }
}
function reiniciarBucardo (){
  $reinicio=shell_exec('echo "asd" | sudo -S bucardo restart 2>&1');
  echo json_encode(array("success"=>$res["success"], "msg"=>"se reinicio bucardo"));
}
function enviarsolicitudnuevaCuenta ($conn) {
  //datos de la cuenta nuevaCuenta
 $nombre=$_REQUEST['nombre'];
 $apellido=$_REQUEST['apellido'];
 $correo=$_REQUEST['correo_solicitud'];
 $institucion=$_REQUEST['institucion'];
 $pais=$_REQUEST['pais'];

 //se junta todo
 $body = "<h3>Hola Fabian, este correo proviene desde Register a new account en el servicio Interaction Energy Calculation Tool</h3><br>"
 ."Sus datos son los siguientes:<br>"
 ."Nombres: " . $nombre."<br>"
 ."Apellidos: " . $apellido."<br>"
 ."Correo: " . $correo."<br>"
 ."Institución: " . $institucion."<br>"
 ."País: " . $pais."<br><br>"
 ."<h2><b>No responda este mensaje, es un mensaje automático y no es necesario responder.</b></h2>";
 //Crear instancia
 $mail = new PHPMailer(true);
 $mail -> CharSet = "UTF-8";
 //definir que usaremos SMTP y las configuraciones por defecto
 $mail->isSMTP();
 $mail->isHTML(true);
 //$mail->Host = 'smtp.office365.com';
 $mail->Host = 'smtp.gmail.com';
 $mail->Port = '587';
 $mail->SMTPSecure = 'tls';
 $mail->SMTPAuth   = true;
 //datos para iniciar sesion smtp
 $mail->Username   = 'claudio.quev92@gmail.com';
 $mail->Password   = 'peskapo12';
 //datos de quien lo envia, en este caso un BOT de las practicas
 $mail->setFrom('claudio.quev92@gmail.com', 'Interaction Energy Calculation Tool new account');
 $mail->addAddress('fabian.avila@umayor.cl', 'Fabian Avila');
 //Definimos el tema del email
 $mail->Subject = 'Interaction Energy Calculation Tool new account';
 $mail->Body  = $body;
 //La funcion altbody es para cuando se envia texto plano en caso de que no acepte un html maqueteado;
 $mail->AltBody =$body;
 //Enviamos el correo
 $mail->send();

 echo json_encode(array("success"=>$res["success"], "msg"=>"se envio","respuesta"=>$nombre));
}

function insertarJob($conn){
  $id_usuario = $_SESSION['id_usuario'];
  //$state = $_REQUEST['state'];//revisar estado!!
  $today = date("Y-m-d");
  $job_date = $today;
  $process_name = $_POST["job_name"];
  $pdb1_monomer = $_REQUEST["pdb_monomer"];
  $pdb2_drug = $_REQUEST["pdb_drug"];
  $gc_monomer = $_REQUEST["gc_monomer"];
  $gc_drug = $_REQUEST["gc_drug"];
  $sampling_size = $_REQUEST["sampling_size"];
  if (strcmp("custom",$sampling_size)===0){
    $sampling_size_final = $_REQUEST["sampling_size_custom"];
  }else{
    $sampling_size_final = $_REQUEST["sampling_size"];
  }

  $parametric_method = $_REQUEST["parametric_method"];
  $bond_system = "BONDS";
  $monomer_charge = $_REQUEST["monomer_charge"];
  $drug_charge = $_REQUEST["drug_charge"];
  $complex_charge = $_REQUEST["system_charge"];
  $monomer_multiplicity = $_REQUEST["monomer_multiplicity"];
  $drug_multiplicity = $_REQUEST["drug_multiplicity"];
  $complex_multiplicity = $_REQUEST["system_multiplicity"];
  $elements = "O	1.4
              C 1.7
              S	1.85
              N	1.5
              P	1.9
              Cl  1.75
              H	1.2
              He	1.4
              Li	1.82
              Be	1.9
              B	1.8
              F	1.47
              Ne	1.54
              Na	2.27
              Mg	1.73
              Al	2.1
              Si	2.1
              Ar	1.88
              K	2.75
              Ca	2.4
              Sc	2.3
              Ti	2.15
              V	2.05
              Cr	2.0
              Mn	2.05
              Fe	2.0
              Co	2.0
              Ni	1.63
              Cu	1.4
              Zn	1.39
              Ga	1.87
              Ge	2.1
              As	1.85
              Se	1.9
              Br	1.85
              Kr	2.02
              Rb	2.9
              Sr	2.3
              Y	2.4
              Zr	2.3
              Nb	1.45
              Mo	2.1
              Tc	2.05
              Ru	1.3
              Rh	2.0
              Pd	1.63
              Ag	1.72
              Cd	1.58
              In	1.93
              Sn	2.17
              Sb	2.2
              Te	1.35
              I	1.98
              Xe	2.16
              Cs	3.0
              Ba	2.7
              Hf	2.25
              Ta	2.2
              W	1.35
              Re	1.35
              Os	2.0
              Ir	2.0
              Pt	1.75
              Au	1.66
              Hg	1.55
              Tl	1.96
              Pb	2.02
              Bi	2.3
              La	1.87
              Ce	1.81
              Pr	1.82
              Nd	1.81
              Pm	1.83
              Sm	1.8
              Eu	1.8
              Gd	1.8
              Tb	1.77
              Dy	1.78
              Ho	1.76
              Er	1.76
              Tm	1.76
              Yb	1.76
              Lu	1.74";
  $processors_number = $_REQUEST["p_number"];
  $outputs_number = $_REQUEST["o_number"];
  $evaluation_algorithm = $_REQUEST["algorithm"];
  $interaction_energy_type = $_REQUEST["value_energy"];

    $sql = "insert into job(id_usuario,state, job_date,process_name,pdb1_monomer,pdb2_drug,gc_monomer,gc_drug,sampling_size,parametric_method,bond_system,
    monomer_charge,drug_charge,complex_charge,monomer_multiplicity,drug_multiplicity,complex_multiplicity,elements,processors_number,outputs_number,
    evaluation_algorithm,interaction_energy_type)values(:id_usuario,:state, :job_date,:process_name,:pdb1_monomer,:pdb2_drug,:gc_monomer,:gc_drug,:sampling_size,
    :parametric_method,:bond_system,:monomer_charge,:drug_charge,:complex_charge,:monomer_multiplicity,:drug_multiplicity,:complex_multiplicity,:elements,
    :processors_number,:outputs_number,:evaluation_algorithm,:interaction_energy_type);";
    $stmt = $conn->prepare($sql);
    $stmt->bindValue(':id_usuario', $id_usuario);
    $stmt->bindValue(':state',0);
    $stmt->bindValue(':job_date',$job_date);
    $stmt->bindValue(':process_name',$process_name);
    $stmt->bindValue(':pdb1_monomer',$pdb1_monomer);
    $stmt->bindValue(':pdb2_drug',$pdb2_drug);
    $stmt->bindValue(':gc_monomer',$gc_monomer);
    $stmt->bindValue(':gc_drug',$gc_drug);
    $stmt->bindValue(':sampling_size',$sampling_size_final);
    //$stmt->bindValue(':sampling_size',1000);
    $stmt->bindValue(':parametric_method',$parametric_method);
    $stmt->bindValue(':bond_system',$bond_system);
    $stmt->bindValue(':monomer_charge',$monomer_charge);
    $stmt->bindValue(':drug_charge',$drug_charge);
    $stmt->bindValue(':complex_charge',$complex_charge);
    $stmt->bindValue(':monomer_multiplicity',$monomer_multiplicity);
    $stmt->bindValue(':drug_multiplicity',$drug_multiplicity);
    $stmt->bindValue(':complex_multiplicity',$complex_multiplicity);
    $stmt->bindValue(':elements',$elements);
    $stmt->bindValue(':processors_number',$processors_number);
    $stmt->bindValue(':outputs_number',$outputs_number);
    $stmt->bindValue(':evaluation_algorithm',$evaluation_algorithm);
    $stmt->bindValue(':interaction_energy_type',$interaction_energy_type);
    $res = ejecutarSQL($stmt);
    echo json_encode(array("success"=>$res["success"], "msg"=>$res["msg"], "data"=>$res["data"]));
}
function monitorizacion($conn){
  $sql="select p1,p2,p3,p4,p5,p6,p7,p8,p9,p10,p11,p12,p13,p14 from machine;";
  $stmt = $conn->prepare($sql);
  $res = ejecutarSQL($stmt);
  echo json_encode(array("success"=>$res["success"], "msg"=>$res["msg"], "data"=>$res["data"]));
}
function monitorizacion_msg($conn){
  $sql="select msg from machine;";
  $stmt = $conn->prepare($sql);
  $res = ejecutarSQL($stmt);
  echo json_encode(array("success"=>$res["success"], "msg"=>$res["msg"], "data"=>$res["data"]));
}
?>
