<?php
     function getConnection(){
        $servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "webdesign";
        $con = null;
        try{
            $con = new mysqli($servername, $username, $password, $dbname);
            if ($con->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        }catch(Exception $e){
            throw $e->getMessage();
        }
        return $con;
    }

?>