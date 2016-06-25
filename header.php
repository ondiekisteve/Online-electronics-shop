<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport"content="width=device-width, initial-scale=1"/>
	<link type="text/css"rel="stylesheet"href="css/bootstrap.min.css"/>
	<link type="text/css"rel="stylesheet"href="smartcore.css"/>
</head>
<body>
<div class="container">
<div id="top">
	<?php
	
	$date=date("l, jS, F, Y");
	echo "<b style='padding:10px;'>$date</b>";
	?>
</div><!--End of top-->
<div class="jumbotron">
<div class="col-sm-3">
<h2 style="margin: -30px;padding: -30px;font-family: impact;color: green;font-weight: bold;">SMARTCORE COMPUTER SHOP</h2>
</div><!--End of col-->
<div class="col-sm-9">
<table style="margin-top: -50px;"class="table">
	<tr>
		<td><img src="img/pn1.png"height="80px"></td>
		<td><img src="img/lp13.jpg"height="80px"></td>
		<td><img src="img/lp12.jpg"height="80px"></td>
		<td><img src="img/lp10.jpg"height="80px"></td>
		<td><img src="img/lp4.jpg"height="80px"></td>
		<td><img src="img/lp3.jpg"height="80px"></td>
	</tr>
</table>
</div><!--End of col-->
	
</div><!--End of jumbotron-->
<div class="navbar">
<ul class="nav navbar-nav navbar-inverse nav-tabs-justified"style="width: 100%;">
<li class="active"><a href="index.php"style="border-right: 3px solid white;">HOME</a></li>
<li style="border-right: 3px solid white;"><a href="desktops.php">DESKTOPS</a></li>
<li style="border-right: 3px solid white;"><a href="laptops.php">LAPTOPS</a></li>
<li style="border-right: 3px solid white;"><a href="#">ACCESSORIES</a></li>
<li style="border-right: 3px solid white;"><a href="disks.php">PORTABLE DISKS</a></li>
<li style="border-right: 3px solid white;"><a href="printers.php">PRINTERS</a></li>
<li style="border-right: 3px solid white;"><a href="#">SERVICES</a></li>
<li style="border-right: 3px solid white;"><a href="#">ABOUT US</a></li>
<li><a href="#">CONTACT US</a></li>
	
</ul><!--End of navbar-->
	
</div><!--End of navbar-->
	
</div><!--End of container-->

</body>
</html>