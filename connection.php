<?php
    #Connecting to Database
    $hostname = "localhost";
    $username = "admin";
    $password = 826848;
    $dbname = "myfirstdatabase";
    #Making the connection to MYSQL
    $error = mysqli_connect_error();
    $dbc = mysqli_connect($hostname, $username, $password, $dbname) OR die("Could not connect to database, ERROR: $error");
    #Set encoding
    mysqli_set_charset($dbc, "utf8");
    #Check it's work
    //echo("You are connect to $dbname Database");

?>