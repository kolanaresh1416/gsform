<?php
if(isset($_POST['sub']))
{
$mobile=$_POST['mobile'];
$con=mysqli_connect("localhost:3306","root","","");
$sql="select *from gsinfo where mobileno=$mobile";
$qry=mysqli_query($con,$sql);
echo "<table class='table table-stripped' border=1 style='background-color:#ecc763;'>
<tr style='color:red;' >
<th >sno</th><th>name</th><th>mobileno</th><th>email</th><th>gender</th>
<th>age</th><th>area</th><th>local</th><th>no of person</th><th>tcost</th><th>printout</th></tr>";
while($result=mysqli_fetch_array($qry))
{
echo "<tr>";
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
?>
<td><button Onclick='myFunction()' class="btn btn-success">print</button>
</td>
<script>
function myFunction() {
    window.print();
}
</script>
<?php
echo "</tr>";

}
echo "</table";
}

?>