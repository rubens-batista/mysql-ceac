<?php
    #processing form
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $fname = $_POST["name"];
        $lname = $_POST["last"];
        $email = $_POST["email"];
        $gender = $_POST["gender"];
        $comments = $_POST["comments"];
        $pass = $_POST["pass"];
        if(isset($fname, $lname, $email, $gender, $comments, $pass)){
            include('connection.php');
        }else {
            echo "Please fill all values of the form";
        }
    }else {
        echo "No form has been submitted";
    }
?>