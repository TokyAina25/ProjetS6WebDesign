<?php
    include ('fonctions/get_data.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <base href="https://design-home-toky-v2.herokuapp.com/">

    <!-- Title Page-->
    <title>Login back office</title>

    <!-- Fontfaces CSS-->
    <link href="assets/back/assetsB/css/font-face.css" rel="stylesheet" media="all">
    <link href="assets/back/assetsB/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="assets/back/assetsB/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="assets/back/assetsB/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="assets/back/assetsB/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="assets/back/assetsB/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="assets/back/assetsB/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="assets/back/assetsB/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="assets/back/assetsB/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="assets/back/assetsB/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="assets/back/assetsB/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="assets/back/assetsB/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/back/assetsB/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="assets/back/assetsB/#">
                                <img src="assets/back/assetsB/images/icon/logo.png" alt="CoolAdmin">
                            </a>
                        </div>
                        <div class="login-form">
                            <form action="traitementB/login.php" method="get">
                                <?php
                                    if(isset($_GET['error'])){
                                        echo "<center><h4 style='color:red;'><strong>login incorrect</strong></h4></center>";
                                    }
                                ?>
                                <div class="form-group">
                                    <label>Nom</label>
                                    <input class="au-input au-input--full" type="text" name="user" placeholder="Utilisateur">
                                </div>
                                <div class="form-group">
                                    <label>Mot de passe</label>
                                    <input class="au-input au-input--full" type="password" name="mdp" placeholder="Saisir le mot de passe">
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Me rapeller
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">Connecter</button>                            
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="assets/back/assetsB/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="assets/back/assetsB/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="assets/back/assetsB/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="assets/back/assetsB/vendor/slick/slick.min.js">
    </script>
    <script src="assets/back/assetsB/vendor/wow/wow.min.js"></script>
    <script src="assets/back/assetsB/vendor/animsition/animsition.min.js"></script>
    <script src="assets/back/assetsB/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="assets/back/assetsB/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="assets/back/assetsB/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="assets/back/assetsB/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="assets/back/assetsB/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/back/assetsB/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="assets/back/assetsB/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="assets/back/assetsB/js/main.js"></script>

</body>

</html>
<!-- end document-->