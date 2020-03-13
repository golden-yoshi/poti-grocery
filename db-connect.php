<?php   
    $hostname = "rerun";
    $username = "potiro";
    $password = "pcXZb(kL";
    $dbname = "poti";

    // Create connection
    $link = mysql_connect($hostname, $username, $password);
   
    // Check connection
    if (!$link) {
        die("Connection failed");
    } 

    // link to database
    mysql_select_db($dbname, $link);

?>