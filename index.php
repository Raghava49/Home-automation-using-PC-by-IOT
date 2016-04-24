<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Automation</title>

<script type="text/javascript">
	

</script>


<link href="styles.css" rel="stylesheet" type="text/css">
<style type="text/css">
body {
	background-color: #0092C7;
}
</style>
</head>

<body>
<header class="hdd" id="hd">
  <blockquote>
    <p>WEB BASED HOME AUTOMATION</p>
  </blockquote>
</header>
<div class="div1">	<p></p>	<p></p>
<header id="divice1"> &nbsp;DEVICE 1  <a href="devices/device1on.php" class="button1">ON</a> <a href="devices/device1off.php" class="buttn2">OFF</a>  <a class="ack1"><?php include("devices/device1status.php"); ?></a> </header>	
<p></p>
<header id="divice2"> &nbsp;DEVICE 2  <a href="devices/device2on.php" class="button3">ON</a> <a href="devices/device2off.php" class="button4">OFF</a> <a class="ack2"><?php include("devices/device2status.php"); ?></a> </header>	
<p></p>
<header id="divice3"> &nbsp;DEVICE 3  <a href="devices/device3on.php" class="button5">ON</a> <a href="devices/device3off.php" class="button6">OFF</a> <a class="ack3"><?php include("devices/device3status.php"); ?></a> </header>	
<p></p>
<header id="divice4"> &nbsp;DEVICE 4  <a href="devices/device4on.php" class="button7">ON</a> <a href="devices/device4off.php" class="button8">OFF</a> <a class="ack4"><?php include("devices/device4status.php"); ?></a> </header> 
<p></p> 
</div>
<div align="right"></div>
</body>
</html>
