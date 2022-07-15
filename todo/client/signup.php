<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Signup</title>
</head>
<body>
<form onsubmit="return false;">
        <h2>Signup</h2>

        <label>Username:</label> 
        <input type="text" id="newuname" placeholder="User name"> <br>

        <label>Password:</label> 
        <input type="text" id="newpassword" placeholder="Password"><br>
        <button type="submit" onclick="
        doSingup(
            document.getElementById('newuname').value,
            document.getElementById('newpassword').value
        )">Signup</button>
        <a href="/todo/client/login.php" id='singup' type="submit">log in</a>
    </form>
</body>
</html>

<script>

function doSingup(username, password) {
    var http = new XMLHttpRequest();
    var url = 'http://localhost:8080/todo/server/App.php/signup?username=' + username + '&password=' + password;
    http.open('GET', url, true);
    http.onreadystatechange = function(){
        if(http.readyState == 4 && http.status == 200) {
            let json = JSON.parse(http.response);
            if (json.success) {
                window.location.href = '/todo/client/login.php';
            } else {
                alert();
            }
        }
    }
    http.send(null);

}
</script>
