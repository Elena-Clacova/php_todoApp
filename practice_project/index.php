<?php
    $servername = "localhost";
    $username = "root";
    $password = "16112020";
    $db = "webapps_practice";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);
    
    // /Check connection
    // if ($conn->connect_error) {
    //   die("Connection failed: " . $conn->connect_error);
    // }
    // echo "Connected successfully";

    // Perform query
 
    if ($result = $conn -> query("SELECT * FROM testUsers")) {
        while ($row = $result -> fetch_assoc()) {
            printf ("%s (%s)\n", $row["name"], $row["password"]);
        }
        // Free result set
        $result -> free_result();
    }
    
?>