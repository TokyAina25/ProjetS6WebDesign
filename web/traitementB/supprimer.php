<?php
    include ('../fonctions/get_data.php');
    $id = $_GET['id'];
    echo $id;
    deletePieces($id);
    header('Location: ../tablesB.php'); 
?>