<?php
    include 'fonctions/get_data.php';
    $nom = getNom('toky');
    
?>
<html>
    <head>
        <title>Mon Application</title>
    </head>
    <body>
        <h3><?php echo $nom; ?></h3>
    </body>    
</html>