<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
$status = file_get_contents("device1status.txt" , "r");
echo $status;
?>
</body>
</html>
