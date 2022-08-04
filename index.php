
<!doctype html>
<html>
<head>
<title>New</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"><link rel="stylesheet" type="text/css" href="css/new.css">
<style>
.form {
	height:940px;
	background-color:white;
	border:2px solid #000;
}
.table {padding:20px;}
	
.header {
	background-color:#E4E4E4;
	height:50px;
	border-bottom:1px solid #000;
	border-top:1px solid #000;
}
.col-md-12 {
	margin-top:20px;
}
a {
	color:white;
	text-decoration:none;
	list-style:none;
}
a:hover {
		text-decoration:none;
	list-style:none;
	color:green;
}
.btn-success {
    color: #fff;
    background-color: #5cb85c;
    border-color: #4cae4c;
    padding: 15px 71px;
}
	
</style>
</head>
<body>
<form action="insert.php" method="post">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div class="col-md-3"></div>
<div class="col-md-12">
<div class="form">

<div class="logo" style="text-align:center;"><img src="logo (1).png"></div>
<div class="header">

<h1 style="margin-top:3px; float:left;">New</h1>
<a href="Search.php"><h2 style="float:right; margin:6px 15px;color: #0c0901;">Search</h2></a>
</div>

<div class="col-md-12">
<label>Name</label>
<input type="text" class="form-control" placeholder="Enter Your Name" name="name" required="required">
</div>
<div class="col-md-12">
<label>Mobile</label>
<input type="number" class="form-control" placeholder="Enter Mobile Number" name="mobileno">
</div>
<div class="col-md-12">
<label>Email</label>
<input type="Email" class="form-control" placeholder="abc@gmail.com" name="email">
</div>
<div class="col-md-12">
<label>Male/Female</label>
<input type="text" class="form-control" placeholder="m/f" name="gender">
</div>
<div class="col-md-12">
<label>Age</label>
<input type="number" class="form-control" placeholder="age" name="age">
</div>
<div class="col-md-12">
<label>Area</label>
<textarea  class="form-control" placeholder="area" name="area"></textarea>
</div>
<div class="col-md-12">
<label>Local</label>
<textarea  class="form-control" placeholder="local" name="local"></textarea> 
</div>
<div class="col-md-12">
<label>No of Persons</label>
<select class="form-control" name="noofperson[]">
<option selected="selected" value=""></option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
</select>
</div>
<div class="col-md-12">
<label>Total Cost</label>
<input type="text" class="form-control" placeholder="Cost" name="totalcost">
</div>
<div class="col-md-12" style="margin-top:10px;">
           <div class="col-md-4">
	   
	       </div>
           <div class="col-md-4" style="text-align:center;">
                 <button class="btn btn-success">Save</button>
           </div>

           <div class="col-md-4"></div>
</div>

</div>
<div class="col-md-12" style="margin-top:3px;">
<div class="col-md-4"></div>
<!--
<div class="col-md-4" style="text-align:center;">
<button class="btn btn-primary">Print</button></div>
-->
<div class="col-md-4"></div>
</div>






</div>
</div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</form>
</body>


<?php

if(isset($_GET['d']))
{
mysql_connect("localhost:3306","root","");
mysql_select_db("gsform");
$sql="select *from gsinfo";
$qry=mysql_query($sql);
echo "<table class='table table-striped' border=1 style='background-color:lightblue;' >";
while($result=mysql_fetch_array($qry))
{
echo "<tr style='color:ted;'>";
echo "<td>".$result[0]."</td>";
echo "<td>".$result[1]."</td>";
echo "<td>".$result[2]."</td>";
echo "<td>".$result[3]."</td>";
echo "<td>".$result[4]."</td>";
echo "<td>".$result[5]."</td>";
echo "<td>".$result[6]."</td>";
echo "<td>".$result[7]."</td>";
echo "<td>".$result[8]."</td>";
echo "<td>".$result[9]."</td>";
echo "</tr>";

}
echo "</table";

}
?>


</html>








