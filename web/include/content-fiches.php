<?php
	$idPieces = $_GET['idPiece'];
	$response = getPiecesById($idPieces);
	$response = $response->fetch_assoc();
?>
<section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content text-center">
				<h2>Fiche de produits</h2>
				<div class="page_link">
					<a href="index.html">Accueil</a>
					<a href="contact.html">Fiche produit</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="portfolio_details_area p_120">
        	<div class="container">
        		<div class="portfolio_details_inner">
					<div class="row">
						<div class="col-md-6">
							<div class="left_img">
								<img class="img-fluid" src="assets/img/pieces/<?php echo $response['IDPIECES']; ?>.jpg" alt="">
							</div>
						</div>
						<div class="col-md-6">
							<div class="portfolio_right_text">
								<h4><?php echo $response['NOMPIECES']; ?></h4>
								<p><?php echo $response['DESCRIPTIONS']; ?></p>
								<ul class="list">
									<li><span>Rating</span>: <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></li>
									<li><span>Client</span>:  colorlib</li>
									<li><span>Website</span>:  colorlib.com</li>
									<li><span>Completed</span>:  17 Aug 2018</li>
								</ul>
								<?php
								if(isset($_SESSION['user'])){
							?>
							<strong>Liens vers le produit </strong><a href="www.amazon.fr"><h5>www.amazon/<?php echo $response['IDPIECES']; ?>.com</h5></a>
							<?php
							}
							?>			
							</div>
							
						</div>
					</div>
        		</div>
        	</div>
        </section>