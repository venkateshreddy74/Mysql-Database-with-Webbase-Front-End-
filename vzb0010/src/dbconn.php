<?php

    $server = "acadmysql.duc.auburn.edu";
    $user = "vzb0010";
    $pwd = "Burgula_74";
    $db =  "vzb0010db";

    $connection = mysql_connect($server,$user,$pwd);
    if(!$connection)
    {
        die('Could not connect: ' . mysql_error());
    }
    
    mysql_select_db($db);
?>


