<?php
    #Obtendo os valores
    $fname = $_POST['name'];
    $lname = $_POST['last'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $comments = $_POST['comments'];
    $pass = $_POST['pass'];
    #Verifica se há um metodo request no formulário 
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        #validação para verificar se nenhum está faltando
        if(!empty($fname) && !empty($lname) && !empty($email) && !empty($gender) && !empty($age) && !empty($comments) && !empty($pass)){ 
            include('connection.php');
            
            mysqli_query($dbc, "INSERT INTO users(first_name, last_name, email, gender, age, comments, pass) VALUES('$fname', '$lname', '$email', '$gender', '$age', '$comments', '$pass')");

            $registered = mysqli_affected_rows();
            echo "<br>$registered row is affected, everything worked fine!"; 
        }else{
            echo '<p style="color: red;">ERROR: you left some values in blank!</p>';
        }
    }else{
        echo '<strong>Please complete the form...</strong>';
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database-Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Database-Form</h1>
    <section class="container">
        <form action="userform.php" method="post">
            <p>First Name: <input type="text" name="name" size="20"  maxlength="50"></p>
            <p>Last Name: <input type="text" name="last" size="20"  maxlength="50"></p>
            <p>Email: <input type="email" name="email" size="20" maxlength="50"></p>
            <p>
                Gender: <input type="radio" name="gender" value="Male"> Male
                <input type="radio" name="gender" value="Female"> Female
            </p>
            <p>
                Age: <select name="age">
                    <option value="0-29">Under 30</option>
                    <option value="30-60">Between 30 and 60</option>
                    <option value="60+">Over 60</option>
                </select>
            </p>
            <p>Comments:<br><textarea name="comments" cols="40" rows="3" maxlength="200"></textarea></p>
            <p>Password: <input type="password" name="pass" size="20"  maxlength="50"></p>
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>