<?php


$file = "device4status.txt";
$handle = fopen($file,'w+');

$onstring = "ON";
fwrite($handle,$onstring);
fclose($handle);


header("Location: ../");
?>