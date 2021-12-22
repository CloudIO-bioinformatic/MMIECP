<?php
//ssh nodo2 'perl hola.pl'
$ip = '10.42.0.108';
$user = 'fabian';
$pass = 'asdasd';
$connection = ssh2_connect($ip);
ssh2_auth_password($connection,$user,$pass);
$stream = ssh2_exec($connection,'cd Documents/hola/');
$stream = ssh2_exec($connection,'perl hola.pl');
stream_set_blocking ($stream, true);
$output = stream_get_contents($stream);
echo $output."<br>";
echo "finalizando";
?>
