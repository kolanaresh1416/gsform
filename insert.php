<?php
$name=$_POST['name'];
$mobileno=$_POST['mobileno'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$age=$_POST['age'];
$area=$_POST['area'];
$local=$_POST['local'];
$noofperson=implode("",$_POST['noofperson']);
$totalcost=$_POST['totalcost'];

$con=mysqli_connect("localhost:3306","root","","my_db");

$sql="insert into gsinfo(name,mobileno,email,gender,age,area,local,noofperson,totalcost) 
values('$name',$mobileno,'$email','$gender',$age,'$area','$local',$noofperson,$totalcost)";
$qry=mysqli_query($con,$sql);
if($qry)
{
header('location:Search.php?d=success');

}
else
{
echo mysql_error();

}

?>