<?php


$file = "device1status.txt";
$handle = fopen($file,'w+');

$onstring = "ON";
fwrite($handle,$onstring);
fclose($handle);


header("Location: ../");
?>