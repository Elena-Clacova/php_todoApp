<?php 

if (isset($_POST["uname"]) && (isset($_POST["password"]))) {
    $uname = validate($_POST["uname"]);
    $pass = validate($_POST["password"]);
} else {
    header("Location:index.php");
    exit();
}

function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>