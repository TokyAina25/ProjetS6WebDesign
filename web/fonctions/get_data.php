<?php

    function getConnection(){
        $servername = "localhost";
        $username = "id9514124_webdesign";
        $password = "321Tkn@123";
        $dbname = "id9514124_webdesign";
        $con = null;
        try{
            $con = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
        }catch(Exception $e){
            throw $e->getMessage();
        }
        return $con;
    }

    function getNom($nom){
        $response = null;
        try{
            $response = md5($nom);
        }catch(Exception $e){
            throw $e->getMessage();
        }
        return $response;
    }
?>