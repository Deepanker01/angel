
<html>
<head>
<style>
 table { 
color: #333;
font-family: Helvetica, Arial, sans-serif;
width: 640px; 
border-collapse: 
collapse; border-spacing: 0; 
}

td, th { 
border: 1px solid transparent; /* No more visible border */
height: 30px; 
transition: all 0.3s;  /* Simple transition for hover effect */
}

th {
background: #DFDFDF;  /* Darken header a bit */
font-weight: bold;
}

td {
background: #FAFAFA;
text-align: center;
}

/* Cells in even rows (2,4,6...) are one color */ 
tr:nth-child(even) td { background: #F1F1F1; }   

/* Cells in odd rows (1,3,5...) are another (excludes header cells)  */ 
tr:nth-child(odd) td { background: #FEFEFE; }  

tr td:hover { background: #666; color: #FFF; } /* Hover cell effect! */
 
</style>
</head>

</html>
<?php

$q = $_GET['q'];

require "conn.php";

$sql="SELECT * FROM user where loc1 LIKE '%$q%' or loc2 LIKE '%$q%' " ;
$result = mysql_query($sql);



	if($result === FALSE) {
	    die(mysql_error()); // TODO: better error handling
	}
while($row = mysql_fetch_array($result))
  {
 echo "<div style='float:left;color:#ffffff;background-color:#3366cc;width:600px;'><br>";
/*if(isset($row['name'])*/ echo "Name:" . $row['name'] . "<br>";
/*if(isset($row['reg'])*/  echo "age:" . $row['age'] . "&nbsp &nbsp&nbsp&nbsp &nbsp &nbsp&nbsp&nbsp&nbsp     ";
/*if(isset($row['from']) */ echo "Phone:" . $row['phone'] . "<br>";
/*if(isset($row['to'])*/  echo "Languages:" . $row['languages'] . "<br>";
/*if(isset($row['hours'])*/  echo "Location 1:     " . $row['loc1'] . "&nbsp &nbsp &nbsp &nbsp    &nbsp &nbsp &nbsp &nbsp&nbsp&nbsp  ";
/*if(isset($row['place'])*/  echo "Location 2: " . $row['loc2'] . "<br>";
/*if(isset($row['purpose'])*/
/*if(isset($row['date'])*/  echo "Category" . $row['cat'] . "<br>";
 
  echo "Ratings: ".$row['rating']."&nbsp &nbsp".$row['total']."  "."Reviews";
///*if(isset($row['out'])*/   echo "<td>" . $row['out'] . "</td>";
///*if(isset($row['in'])*/    echo "<td>" . $row['in'] . "</td>";
  /*if ($row['av']=='1')

  echo "<td>" . "Available" . "</td>";
else
  echo "<td>" . "Not Available" . "</td>";
  }
  */
echo "<hr height=20px style='color:white';background-color:white;padding:5px;>";
  echo "</div>";

  }



?>
