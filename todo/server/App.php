<?php
    require 'Connection.php';

    // var_dump(Connection::executeQuery("SELECT * FROM Userss"));

    $error = null;
    switch ($_SERVER['PATH_INFO']) {
        case "/login" : 
            if (
                $_SERVER['REQUEST_METHOD'] == 'GET' &&
                isset($_GET['username']) &&
                isset($_GET['password'])
                ) {
                $data["success"] = checkLogin($_GET['username'], $_GET['password']);
                header('Content-Type: application/json; charset=utf-8');
                echo (json_encode($data));
            } else {
                echo "Wrong method or missing params";
            }
            break;

        case "/signup" : 
             if (
                $_SERVER['REQUEST_METHOD'] == 'GET' &&
                isset($_GET['username']) &&
                isset($_GET['password'])
                ) {
                $data["success"] = addUser($_GET['username'], $_GET['password']);
                $data["error"] = $error;
                header('Content-Type: application/json; charset=utf-8');
                echo (json_encode($data));
                }
            break;

        default : http_response_code(404);  echo "No such endpoint"; break;
    }

    /**
     * Checks if the users is registerd
     * @param string $username      Username
     * @param string $password      Password of the same user
     * 
     * @return bool                 Returns `true` if login is valid or `false` otherwise
     */
    function checkLogin($username, $password) {
        // TODO: Check if the user with such a username and password exists
        $query = "SELECT * FROM Users WHERE user_name = ? AND password = ?";
        $result = Connection::executeQuery($query, [$username, $password]);
        if (is_array($result)) {
            if (count($result) != 0) {
                return true;
            }
        }

        return false;
    }


    function addUser($newuname, $newpass) {
        $addQuery ="INSERT INTO Users (user_name,password) VALUES (?,?)";

       if (checkLogin($newuname, $newpass)) {
            global $error;
            $error = 'this username exist, change username or log in';
            return false;
       } else {
            Connection::executeQuery($addQuery, [$newuname, $newpass]);
            return true;
       }
    }
?>



