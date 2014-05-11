<?php

require "conn.php";

$res = mysql_query("SELECT * from maindb");

while($row = mysql_fetch_array($res))
{

$worker = $row['worker'];
$hirer = $row['hirer'];
$cat = $row['cat'];

?>


<html>
<form action = "#">
<table border = "1">
<th> NAME </th>
<th> HIRED BY </th>
<th> CATEOGARY </th>
<th> NOTIFY </th>

<tr>
	<td> <?php echo $worker; ?> </td>
	<td> <?php echo $hirer; ?> </td>
	<td> <?php echo $cat; ?> </td>
	<td> <input type = "checkbox">
</tr>


</table>

<input type ="submit">
<?php
}
?>
</html>