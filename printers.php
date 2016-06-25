<?php
$connect=mysql_connect("localhost","root","")or die("We did not connect to the database");
mysql_select_db("smartcore",$connect)or die("We did not select the database");
if(isset($_POST['submit']))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$email=$_POST['email'];
	$pno=$_POST['pno'];
	$pname=$_POST['pname'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	$town=$_POST['town'];
	
	
	$sql="INSERT INTO printers(fname,lname,email,pno,pname,price,quantity,town)VALUES('$fname','$lname','$email','$pno','$pname','$price','$quantity','$town')";
	
	if(mysql_query($sql,$connect))
	{
		echo "<center><button style='background-color:green;color:white;font-weight:bold;font-size:20px;'>The transaction was successful</button><center>";
	}
	else
	{
		echo "Error occured in Reserving\n";
	}
}










?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport"content="width=device-width, initial-scale=1"/>
	<link type="text/css"rel="stylesheet"href="css/bootstrap.min.css"/>
	<link type="text/css"rel="stylesheet"href="smartcore.css"/>
</head>
<body>
<?php
include 'header.php';

?>
<div class="container"style="margin-top: -20px;">
<div class="panel">
<div class="panel-heading">
<button class="btn btn-success btn-block"><h2 style="text-align: center;font-family: algerian;font-weight: bold;">PRINTERS</h2></button>	
	
</div><!--End of panel-heading-->
<div class="panel-body">
<div class="row">
	<div class="col-md-3">
	<div class="thumbnail">
	<img src="img/pr11.jpg"class="btn btn-block">
	<div class="caption">
		<button type="button"style="border-radius: 6px;background-color: red;color: white;font-size: 20px;">Sh.41,000</button>
	</div><!--End of caption-->
	</div><!--End of thumbnail-->
	</div><!--End of cols-->
	
	<div class="col-md-3">
	<div class="thumbnail">
	<img src="img/pr.jpg"class="btn btn-block">
	<div class="caption">
		<button type="button"style="border-radius: 6px;background-color: red;color: white;font-size: 20px;">Sh.40,000</button>
	</div><!--End of caption-->
	</div><!--End of thumbnail-->
	</div><!--End of cols-->
	
	<div class="col-md-3">
	<div class="thumbnail">
	<img src="img/pr1.jpg"class="btn btn-block">
	<div class="caption">
		<button type="button"style="border-radius: 6px;background-color: red;color: white;font-size: 20px;">Sh.48,000</button>
	</div><!--End of caption-->
	</div><!--End of thumbnail-->
	</div><!--End of cols-->
	
	<div class="col-md-3">
	<div class="thumbnail">
	<img src="img/pr2.jpg"class="btn btn-block">
	<div class="caption">
		<button type="button"style="border-radius: 6px;background-color: red;color: white;font-size: 20px;">Sh.37,000</button>
	</div><!--End of caption-->
	</div><!--End of thumbnail-->
	</div><!--End of cols-->
	</div><!--End of row-->
	
	<div class="row">
	<div class="col-md-3">
	<div class="thumbnail">
	<img src="img/pr24.jpg"class="btn btn-block">
	<div class="caption">
		<button type="button"style="border-radius: 6px;background-color: red;color: white;font-size: 20px;">Sh.44,000</button>
	</div><!--End of caption-->
	</div><!--End of thumbnail-->
	</div><!--End of cols-->
	
	<div class="col-md-3">
	<div class="thumbnail">
	<img src="img/pr6.jpg"class="btn btn-block">
	<div class="caption">
		<button type="button"style="border-radius: 6px;background-color: red;color: white;font-size: 20px;">Sh.36,000</button>
	</div><!--End of caption-->
	
	</div><!--End of thumbnail-->
	</div><!--End of cols-->
	
	<div class="col-md-3">
	<div class="thumbnail">
	<img src="img/pr25.gif"class="btn btn-block">
	<div class="caption">
		<button type="button"style="border-radius: 6px;background-color: red;color: white;font-size: 20px;">Sh.52,000</button>
	</div><!--End of caption-->
	</div><!--End of thumbnail-->
	</div><!--End of cols-->
	
	<div class="col-md-3">
	<div class="thumbnail">
	<img src="img/pr8.jpg"class="btn btn-block">
	<div class="caption">
		<button type="button"style="border-radius: 6px;background-color: red;color: white;font-size: 20px;">Sh.38,000</button>
	</div><!--End of caption-->
	</div><!--End of thumbnail-->
	</div><!--End of cols-->
	</div><!--End of row-->
	<div class="row">
	<div class="col-sm-6">
	<h3 style="text-align: center;">Buy A Product</h3>
	<form method="POST"action="printers.php">
		<table class="table">
		<tr>
			<td>First Name</td>
			<td><input type="text"name="fname"class="form-control"placeholder="Enter First Name.."/></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type="text"name="lname"class="form-control"placeholder="Enter First Name.."/></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="email"name="email"class="form-control"placeholder="Enter First Name.."/></td>
		</tr>
		<tr>
			<td>Phone Number</td>
			<td><input type="tel"name="pno"class="form-control"placeholder="Enter First Name.."/></td>
		</tr>
		<tr>
			<td>Product Name</td>
			<td><input type="text"name="pname"class="form-control"placeholder="Enter First Name.."/></td>
		</tr>
		<tr>
			<td>Price</td>
			<td><input type="text"name="price"class="form-control"placeholder="Enter First Name.."/></td>
		</tr>
		<tr>
			<td>Quantity</td>
			<td><input type="number"name="quantity"class="form-control"placeholder="Enter First Name.."/></td>
		</tr>
		<tr>
			<td>Nearest Town</td>
			<td><input type="text"name="town"class="form-control"placeholder="Enter First Name.."/></td>
		</tr>
		<tr>
			<td><input type="submit"name="submit"value="submit"class="btn btn-success btn-lg"/></td>
			<td><input type="reset"name="reset"value="Cancel"class="btn btn-danger btn-lg pull-right"/></td>
		</tr>
			
		</table>
	</form>
		
	</div><!--End of col-->
	<div class="col-sm-6">
	<ul class="list-group"style="margin-top: 50px;">
	<li class="list-group-item"style="font-size: 18px;">
	<p>
	 If you want to buy a product just fill the form on the left
	 and you will be directed how to receive your product. The payment 
	 will be made when the product will be delivered to you.
	</p>
	<p>
     Dont forget to provide your nearest town because thats your the 
     product will be delivered to.
	</p>
		
	</li>
		
	</ul>
	<ul class="list-group">
	<li class="list-group-item">
		<h3>Promotion</h3>
		<b class="badge"style="background-color: red;color:white;font-size: 20px;">Buy 5 get 1 Free</b>
	</li>
		
	</ul>
		
	</div><!--End of col-->
		
	</div><!--End of row-->
	
</div><!--End of panel-body-->
	
</div><!--End of panel-->
<?php

include 'footer.php';

?>
	
</div><!--End of container-->

</body>
</html>