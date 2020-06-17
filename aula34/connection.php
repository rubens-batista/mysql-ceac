<?php
    $hostname = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "myfirstdatabase";

    //making the connection to mysql

    $dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("Could not connect to database, ERROR:".mysqli_connect_error());

    //set encoding

    mysqli_set_charset($dbc, "utf8");

    echo "you are connect to $dbname";
?>