<?php

$mobileno=$_POST['mobileno'];
mysql_connect("localhost:3306","root","");
mysql_select_db("gsform");
$sql="select *from gsinfo where mobileno=$mobileno";
$qry=mysql_query($sql);
echo "<table border=1>";
while($result=mysql_fetch_array($qry))
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

echo "</tr>";

}
echo "</table";

?>