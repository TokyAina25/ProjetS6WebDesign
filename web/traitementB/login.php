<?php
    session_start();
    include ('../fonctions/get_data.php');

    $user = $_GET['user'];
    $mdp = $_GET['mdp'];
    $reponse = login($user,$mdp);
    if($reponse == 1){
        $_SESSION['user'] = $user;
        header('Location: ../tablesB.php'); 
    }else{
        session_destroy();
        header('Location: ../indexB.php?error=login');        
    }

   
?>