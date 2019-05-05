<?php
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