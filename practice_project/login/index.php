<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My web</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="login.php" method="$_POST">
        <h2>Log In</h2>

        <label>Username:</label> 
        <input type="text" name="uname" placeholder="User name"> <br>

        <label>Password:</label> 
        <input type="text" name="password" placeholder="Password"><br>

        <button type="submit">Log in</button>
    </form>
</body>
</html>