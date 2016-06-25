<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport"content="width=device-width, initial-scale=1"/>
	<link type="text/css"rel="stylesheet"href="css/bootstrap.min.css"/>
	<link type="text/css"rel="stylesheet"href="smartcore.css"/>
</head>
<body>
<div>
	<?php
include 'header.php';


?>
</div>
<div class="container">
<div class="row">
<div class="col-sm-9">

<div class="carousel slide"id="carousel">
	<ul class="carousel-indicators">
	<li data-slide-to="0"id="#img1"class="active"></li>
	<li data-slide-to="1"id="#img2"></li>
	<li data-slide-to="2"id="#img3"></li>
	<li data-slide-to="3"id="#img4"></li>
	<li data-slide-to="4"id="#1mg5"></li>	
	</ul><!--End of carousel indicators-->
	<div class="carousel-inner"style="max-height: 550px;">
	<div class="item active"id="img1">
		<img src="img/pn1.png"class="btn btn-block"/>
	</div><!--end of carousel item-->
	
	<div class="item"id="img2">
		<img src="img/lp3.jpg"class="btn btn-block"/>
	</div><!--end of carousel item-->
	
	<div class="item"id="img3">
		<img src="img/lp13.jpg"class="btn btn-block"/>
	</div><!--end of carousel item-->
	
	<div class="item"id="img5">
		<img src="img/lp10.jpg"class="btn btn-block"/>
	</div><!--end of carousel item-->
	
	<div class="item"id="img6">
		<img src="img/ds12.jpg"class="btn btn-block"/>
	</div><!--end of carousel item-->
		
	</div><!--end of carousel inner-->
	
	<a href="#carousel"data-slide="prev"class="left carousel-control"><span class="icon-prev"></span></a>
	<a href="#carousel"data-slide="next"class="right carousel-control"><span class="icon-next"></span></a>
		
	</div><!--End of carousel-->
	 
</div><!--End of col-->
<div class="col-sm-3">
<ul class="nav nav-tabs"style="border: 2px solid black;">
	<li class="active"><a href="#tab1"data-toggle="tab">NOTICES</a></li>
	<li><a href="#tab2"data-toggle="tab">EVENTS</a></li>
</ul>
<div class="tab-content">
<div class="tab-pane active list-group"id="tab1">
<li class="list-group-item-heading"style="list-style-type: none;font-weight: bold;font-size:17px;">Buy a laptop at discout of <span class="badge"style="background-color: red;color:white;font-size: 17px;">30%</span></li>
<li class="list-group-item">
	Offer! Offer! Offer! Availlable for Toshiba laptops.
	We Are glad to inform you that we have acquired new toshiba 
	laptops which are sold at a discout of 30%. Come one come all.
	The offer will last for only Three days.
</li>
<li class="list-group-item-heading"style="list-style-type: none;font-weight: bold;font-size:17px;">Description</li
<li>
	<ul class="list-group-item">
		<li>500GB Hard Disk</li>
		<li>4GB RAM</li>
		<li>Speed 2.3GH</li>
		<li>processor Core i3</li>
	</ul>
</li>
<li class="list-group-item-heading"style="list-style-type: none;font-weight: bold;font-size:17px;">Price</li>
<ul class="list-group-item">
	<li>Original price &nbsp;<span class="badge"style="background-color: red;font-size: 20px;">48,0000</span></li>
	<hr>
	<li>Selling price &nbsp; &nbsp;<span class="badge"style="background-color: red;font-size: 20px;">  28,0000</span></li>
</ul>

	
</div><!--End of tab pane-->
<div class="tab-pane list-group"id="tab2">
<h3>PROMOTION</h3>
<li class="list-group-item">
    <p>
	On 22<sup>rd</sup> May we will be having a promotion 
	at Moi University Main Campus. All Students are welcomed to 
	attend. We will be offering training on some of the services 
	that we offer but we will also provide random gifts for those who
	will be there.
	</p>
	<p>
	Those who will attend will be awarded a certificate by just paying sh.100
	bob.	
	</p>
</li>
<h3>TECHNOLOGY CLINIC</h3>
<li class="list-group-item">
	On 30<sup>th</sup> May also we will be having a technology
	clinic at Eldoret Town near Nakumatt Supermarket. The services 
	will be provided free of charge. Just come with your laptop or mobile device.
</li>
</div><!--end of tab pane-->
</div><!--End of tabbable-->
	
</div><!--End of col-->
</div><!--End of row-->
	<?php

include 'footer.php';

?>

</div><!--End of container-->
<script type="text/javascript"src="jquery-1.11.1.min.js"></script>
<script type="text/javascript"src="js/bootstrap.min.js"></script>
<script type="text/javascript"src="smartcore.js"></script>
</body>
</html>