 <?php    
    $listes = getAllCategories();
 ?>
 <!--================Header Menu Area =================-->
        <header class="header_area">
           	<div class="top_menu">
           		<div class="container">
           			<div class="top_inner">
           				<div class="float-left">
           					<a href="assets/#">Visit Us</a>
           					<a href="assets/#">Online Support</a>
           				</div>
           				<div class="float-right">
           					<ul class="list header_socila">
           						<li><a href="assets/#"><i class="fa fa-facebook"></i></a></li>
           						<li><a href="assets/#"><i class="fa fa-twitter"></i></a></li>
           						<li><a href="assets/#"><i class="fa fa-dribbble"></i></a></li>
           						<li><a href="assets/#"><i class="fa fa-behance"></i></a></li>
           					</ul>
           				</div>
           			</div>
           		</div>
           	</div>
            <div class="main_menu" id="mainNav">
            	<nav class="navbar navbar-expand-lg navbar-light">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<a class="navbar-brand logo_h" href="assets/index.html"><img src="assets/img/logo.png" alt=""><img src="assets/img/logo-2.png" alt=""></a>
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
							<ul class="nav navbar-nav menu_nav ml-auto">
								<li class="nav-item active"><a class="nav-link" href="/">Accueil</a></li> 
								<li class="nav-item submenu dropdown">
									<a href="assets/#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Categories</a>
									<ul class="dropdown-menu">
                                        <?php
                                            if($listes->num_rows > 0) {
                                                while($row = $listes->fetch_assoc()) {
                                        ?>
											<li class="nav-item"><a class="nav-link" href="produits/<?php echo $row['IDCATEGORIE']; ?>/<?php echo $row['NOMCATEGORIE']; ?>"><?php echo $row['NOMCATEGORIE']; ?></a></li>
                                         <?php 
                                                }
                                            } 
                                        ?>
									</ul>
								</li> 
								<?php
									
									if(isset($_SESSION['user'])){
                                        $user = $_SESSION['user'];
								?>
										<li class="nav-item"><a class="nav-link" href="traitement/deconnection.php"><?php echo $user; ?>/Deconnection</a></li>
								<?php
									}else{
								?>
										<li class="nav-item"><a class="nav-link" href="index.php?pages=login">Login</a></li>
								<?php
									}    
								?>	
							</ul>
						</div> 
					</div>
            	</nav>
            </div>
        </header>
        <!--================Header Menu Area =================-->
        
        <!--================Home Banner Area =================-->
       