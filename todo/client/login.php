<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Log in</title>
</head>
<body>
    <form onsubmit="return false;">
        <h2>Log In</h2>

        <label>Username:</label> 
        <input type="text" id="uname" placeholder="User name"> <br>

        <label>Password:</label> 
        <input type="text" id="password" placeholder="Password"><br>
        <button type="submit" onclick="
        doLogin(
            document.getElementById('uname').value,
            document.getElementById('password').value
        )">Log in</button>
        <a href="/todo/client/signup.php" id='singup' type="submit">Signup</a>
    </form>
</body>
</html>

<script>

function doLogin(username, password) {
    var http = new XMLHttpRequest();
    var url = 'http://localhost:8080/todo/server/App.php/login?username=' + username + '&password=' + password;
    http.open('GET', url, true);
    console.log('OPEN');
    http.onreadystatechange = function(){
        if(http.readyState == 4 && http.status == 200) {
            console.log(http.response);
            let json = JSON.parse(http.response);
            if (json.success) {
                console.log('success');
                //TODO: redirect to home page and set session key
                window.location.href = '/todo/client/home.php';
                localStorage.setItem('loggedIn',true);
            } else {
                alert('Wrong username or password');
            }
        }
    }
    http.send(null);

}
</script>