<?php
    session_start();
    include ('../fonctions/get_data.php');
    $user = $_GET['user'];
    $mdp = $_GET['mdp'];
    $reponse = login($user,$mdp);
    if($reponse == 1){
        $_SESSION['user'] = $user;
        header('Location: ../home-design'); 
    }else{
        session_destroy();
    }
?>