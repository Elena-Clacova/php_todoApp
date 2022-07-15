<?php 
    require 'Constants.php';

    class Connection {
        private static $conn = null;

        function _construct() {
            Connection::getConnection();
        }

        private static function getConnection() {
            if (!isset(self::$conn)){
                self::$conn = new mysqli(
                    Constants::DB_HOST,
                    Constants::DB_USERNAME,
                    Constants::DB_PASSWORD,
                    Constants::DB_NAME
                );
            }
            return self::$conn;
        }

        /**
         * Returns an associative array of query rezult or error
         * @param stirng $query         String representation of a query
         * @param array $values         Array of values to be inserted in prepared query
         * @return array/string 
         */
        public static function executeQuery($query, $values) {
            $stmt = self::getConnection()->prepare($query);
            $types = str_repeat('s', count($values)); //types
            $stmt->bind_param($types, ...$values); // bind array at once
            $stmt->execute();
            if ($result = $stmt->get_result()) {
                return $result->fetch_all();
            }
            return "Error, check SQL query";

        }
    }
?>