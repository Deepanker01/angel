   <?php
require "conn.php"

    //Table name
    //
    $fet= mysql_query("SELECT * from org");
    $json = array();
    while($r=mysql_fetch_array($fet)){
    $json[] = $r;
    }
    //Display the JSOn data
    echo $json_data = json_encode($json);
    ?>