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

        if (!empty($fname) && !empty($lname) && !empty($email) && !empty($gender) && !empty($age) && !empty($comments) && !empty($password)) {
            include('connection.php');

            mysqli_query($dbc, "INSERT INTO users(first_name, last_name, email, gender, age, comments, password) VALUES('$fname', '$lname', '$email', '$gender', '$age', '$comments', '$password')");

            $registered = mysqli_affected_rows();

            echo "$registered row is affected, everything worked fine!";
            
        }else {
            echo "ERROR: please complete all fields!";
        }
    }else {
        echo "please fill all values of the form";
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
            <p>First Name: <input type="text" name="fname" size="20"  maxlength="50"></p>
            <p>Last Name: <input type="text" name="lname" size="20"  maxlength="50"></p>
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
            <p>Password: <input type="password" name="password" size="20"  maxlength="50"></p>
            <button type="submit">Submit</button>
        </form>
    </section>
</body>
</html>