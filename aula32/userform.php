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
        <form action="connection.php" method="post">
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