<?php
    //processing form

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $comments = $_POST['comments'];
        $password = $_POST['password'];

        if (isset($fname, $lname, $email, $gender, $age, $comments, $password)) {
            include('connection.php');
            
        }else {
            echo "please fill all values of the form";
        }
    }else {
        echo "no form has been submitted";
    }
?>