<?php


$file = "device1status.txt";
$handle = fopen($file,'w+');

$onstring = "OFF";
fwrite($handle,$onstring);
fclose($handle);

header("Location: ../");
?>