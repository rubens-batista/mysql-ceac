<?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myfirstdatabase";

    #making the connection to mysql
    $error = mysqli_connect_error();
    $dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("could not connect to database $error");

    #set encoding
    mysqli_set_charset($dbc, "utf8");

    echo "you are connected to $dbname Database ";


?>