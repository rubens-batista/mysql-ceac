<?php
    #Obtendo os valores
    $fname = $_POST['name'];
    $lname = $_POST['last'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $comments = $_POST['comments'];
    $password = $_POST['pass'];
    #Verifica se há um metodo request no formulário 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        #validação para verificar se nenhum está faltando
        if(!empty($fname) && !empty($lname) && !empty($email) && !empty($gender) && !empty($age) && !empty($comments) && !empty($password)){ 
            include('connection.php');
            mysqli_query($dbc, "INSERT INTO users(first_name, last_name, email, gender, age, comments, password) VALUES('$fname', '$lname', '$email', '$gender', '$age', '$comments', '$password')");
            
            $registered = mysqli_affected_rows($dbc);
            echo "$registered row is affected, everything worked fine!"; 
        }else{
            echo '<p style="color: red;">ERROR: you left some values in blank!</p>';
        }
    }else{
        echo '<strong>Please complete the form...</strong>';
    }
?>