<?php

    function getConnection(){
        $servername = "sql7.freemysqlhosting.net:3306";
        $username = "sql7290683";
        $password = "JjrX6qeGsB";
        $dbname = "sql7290683";
        /*$servername = "localhost";
        $username = "root";
        $password = "root";
        $dbname = "webdesign";*/
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

    function login($user,$mdp){
        $reponse = 0;
        $conn = getConnection();
        try{
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            $mdp = md5($mdp); 
            $sql = "SELECT * FROM utilisateur WHERE NOMUTILISATEUR='".$user."' and MDP='".$mdp."'";
            $result = $conn->query($sql);
            $reponse = $result->num_rows;
            $conn->close();
        }catch(Exception $e){
            throw $e->getMessage();
        }
        return $reponse;
    }

    function getAllPieces(){
        $response = null;
        $conn = getConnection();
        try{
            $sql = " SELECT * FROM pieces ";
            $result = $conn->query($sql);
            $response = $result;
            $conn->close();
        }catch(Exception $e){
            throw $e->getMessage();
        }
        return $response;
    }

    function getAllCategories(){
        $response = null;
        $conn = getConnection();
        try{
            $sql = " SELECT * FROM categoriepieces ";
            $result = $conn->query($sql);
            $response = $result;
            $conn->close();
        }catch(Exception $e){
            throw $e->getMessage();
        }
        return $response;
    }

    function getProduitsByCategorie($idcat){
        $response = null;
        $conn = getConnection();
        try{
            $sql = " SELECT * FROM pieces WHERE IDCATEGORIE=".$idcat;
            $result = $conn->query($sql);
            $response = $result;
            $conn->close();
        }catch(Exception $e){
            throw $e->getMessage();
        }
        return $response;
    }

    function getPiecesById($id){
        $response = null;
        $conn = getConnection();
        try{
            $sql = " SELECT * FROM PIECES WHERE IDPIECES=".$id;
            $result = $conn->query($sql);
            $response = $result;
            $conn->close();
        }catch(Exception $e){
            throw $e->getMessage();
        }
        return $response;
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