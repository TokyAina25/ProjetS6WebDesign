<?php

    function getConnection(){
        $servername = "localhost";
        $username = "id9514124_webdesign";
        $password = "321Tkn@12";
        $dbname = "id9514124_webdesign";
        $con = null;
        try{
            $con = new mysqli($servername, $username, $password, $dbname);
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