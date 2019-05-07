<?php
    include ('../../fonctions/get_data.php');

    $categorie = $_POST['categorie'];
    $nom = $_POST['nom'];
    $desc = $_POST['desc'];
    $notes = $_POST['notes'];
    $nouveau = $_POST['nouveau'];
    $matiere = $_POST['matiere'];
    insertPieces($categorie,$nom,$desc,$notes,$nouveau,$matiere);
    header('Location: ../tables.php'); 
?>