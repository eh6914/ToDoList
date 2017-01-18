<?php
    $server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "todo";

    mysql_connect($server, $db_user, $db_pass) or die("Could not connect to server!");
    mysql_select_db($db_name) or die("Could not connect to database!");
?>