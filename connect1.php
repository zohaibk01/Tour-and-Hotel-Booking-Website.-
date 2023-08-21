<?php

$host= "localhost" ;
$password = "" ;
$username = "root" ;
$database = "zarak" ;

$conn = mysql_connect($host, $username, $password, $database)

if (!$conn) 
    {
echo "Connection Succeful"

    }

    else{

        echo "Connection Failed".mysqli_connect_error();
    }