<?php
$result  = shell_exec('echo "asd" | sudo -S bucardo restart 2>&1');
echo $result;
?>
