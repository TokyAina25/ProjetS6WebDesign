<?php
    session_start();
    include ('fonctions/get_data.php');
    if(!isset($_SESSION['user'])){
        header('Location: indexB.php'); 
    }
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
    <title>Tables</title>

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
        <aside class="menu-sidebar d-none d-lg-block">
                <div class="logo">
                    <a href="assets/back/assetsB/#">
                        <img src="assets/back/assetsB/images/icon/logo.png" alt="Cool Admin" />
                    </a>
                </div>
                <div class="menu-sidebar__content js-scrollbar1">
                    <nav class="navbar-sidebar">
                        <ul class="list-unstyled navbar__list">                                               
                            <li class="has-sub">
                                <a class="js-arrow" href="#">
                                    <i class="fas fa-table"></i>Tables</a>
                                <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                    <li>
                                        <a href="tablesB.php?pages=objets">Objets</a>
                                    </li>
                                   
                                </ul>
                            </li>
                        </ul>
                    </nav>
                </div>
            </aside>


    <?php include('includeB/header.php'); ?>

            <!-- MAIN CONTENT-->
            <div class="page-container">
            <div class="main-content">
               
                        <div class="row">
                           <?php
                            if(isset($_GET['pages']) && $_GET['pages']!=null){
                                include ('includeB/content-'.$_GET['pages'].'.php');
                            }else{
                                include ('includeB/content-default.php');
                            }
            
                           ?>
                       <?php include('includeB/footer.php'); ?>
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
