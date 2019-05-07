<?php
	session_start();
    include ('fonctions/get_data.php');
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="assets/img/favicon.png" type="image/png">
        <base href="https://design-home-toky-v2.herokuapp.com">
        <title>Design de maison</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.css">
        <link rel="stylesheet" href="assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="assets/vendors/animate-css/animate.css">
        <link rel="stylesheet" href="assets/vendors/flaticon/flaticon.css">
        <!-- main css -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>
        
        <!--================Header Menu Area =================-->
		<?php
			include ('include/header.php');

			if(isset($_GET['pages']) && $_GET['pages']!=null){
				include ('include/content-'.$_GET['pages'].'.php');
			}else{
				include ('include/content-default.php');
			}

			include ('include/footer.php');
		?>
        <!--================End Footer Area =================-->
        
        
        
        
        
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="assets/js/jquery-3.2.1.min.js"></script>
        <script src="assets/js/popper.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/stellar.js"></script>
        <script src="assets/vendors/lightbox/simpleLightbox.min.js"></script>
        <script src="assets/vendors/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="assets/vendors/isotope/imagesloaded.pkgd.min.js"></script>
        <script src="assets/vendors/isotope/isotope-min.js"></script>
        <script src="assets/vendors/owl-carousel/owl.carousel.min.js"></script>
        <script src="assets/js/jquery.ajaxchimp.min.js"></script>
        <script src="assets/vendors/counter-up/jquery.waypoints.min.js"></script>
        <script src="assets/vendors/counter-up/jquery.counterup.min.js"></script>
        <script src="assets/js/mail-script.js"></script>
        <!--gmaps Js-->
        <script src="assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
        <script src="assets/js/gmaps.min.js"></script>
        <script src="assets/js/theme.js"></script>
    </body>
</html>