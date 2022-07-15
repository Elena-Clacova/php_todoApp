<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My Calculator</title>
</head>
<body>
    <form action="calculator.php" method="POST">

        First number:<br><input type="number" step="0.1" name="num1"> <br>
        OP:<br><input type="text" name="op"> <br>
        Second number:<br><input type="number" step="0.1" name="num2"> <br>

        <input type="submit" value="Submit">
    </form>


<?php 
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $op = $_POST["op"];

     
  
    switch ($op)  {
        case "+":
            echo $num1 + $num2;
            break;
        case "-":
            echo $num1 - $num2;
            break;
        case "/":
            echo $num1 / $num2;
            break;
        case "*":
            echo $num1 * $num2;
            break;
        default:
          echo "invalid";
      } 
?>
 
</body>
</html>
