<?php
    function connectDB() {
        //MySQL credentials
        $servername = "localhost";
        $username = "hoteladmin";
        $password = "hotelpwd";

        //Create a connection
        $connection = new mysqli($servername, $username, $password);
        if($connection->connect_error) {
            //Connection failed -> kill process and throw exception
            die("Connection failed:  " . $connection->connect_error);
        }
        echo "Connected successfully.";

        //Return the connection
        return $connection;
    }

    function addToken($token, $expiry) {
        //connect to database
        $connection = connectDB();

        //Insert new value in token table - to be created in phpmyadmin
        $sql = "";
    }

    function validateUser($email, $password) {
        //connect to database
        $connection = connectDB();

        //Match email and password from users table.
        $sql = "";
    }

    function isTokenValid($token) {
        //connect to database
        $connection = connectDB();

        //Check if token exists in table and check expiry
        $sql = "";
    }

    function generateToken($email, $password) {
        if(validateUser($email, $password)) {
            //if user is validated

        }
        //format: date and time + expiry date and time (after 2 hours) + random generated uniqid.
        $current = date('YmdHis');
        $expiry = strtotime("+2 hours", $current);
        $token = uniqid($current . $expiry);
        echo '{"generatedToken": "' . $token . '",';
        echo '"expiry": "' . $expiry . '"}';

        addToken($token, $expiry);
    }
?>