<?php
    session_start();
    include ('../../fonctions/get_data.php');

    $user = $_GET['user'];
    $mdp = $_GET['mdp'];
    $reponse = login($user,$mdp);
    if($reponse == 1){
        $_SESSION['user'] = $user;
        header('Location: ../tables.php'); 
    }else{
        session_destroy();
        header('Location: ../index.php?error=login');        
    }

   
?>