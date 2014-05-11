
<?php


$conn = mysql_connect("localhost","root","");
mysql_select_db("site",$conn);

if(!$conn)
{
echo "Not Connected";
}
?>