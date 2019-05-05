<?php

    function getConnection(){
        $servername = "sql7.freemysqlhosting.net:3306";
        $username = "sql7290683";
        $password = "JjrX6qeGsB";
        $dbname = "sql7290683";
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