<?php
    $idcat = $_GET['idCategorie'];
    $nompiece = $_GET['nomCategorie'];
	$listes = getProduitsByCategorie($idcat);
?>


 <!--================Home Banner Area =================-->
 <section class="banner_area">
	<div class="banner_inner d-flex align-items-center">
		<div class="overlay bg-parallax" data-stellar-ratio="0.9" data-stellar-vertical-offset="0" data-background=""></div>
		<div class="container">
			<div class="banner_content text-center">
				<h2>Design-Pieces de maison</h2>
				<div class="page_link">
					<a href="index.html">Accueil</a>
					<a href="contact.html">Design-Pieces de maison</a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="furniture_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Pieces de <?php echo $nompiece; ?></h2>        			
        		</div>
        		<div class="furniture_inner row">
				<?php
					if($listes->num_rows > 0) {
                        while($row = $listes->fetch_assoc()) {
				?>
        			<div class="col-lg-4">
        				<div class="furniture_item">
        					<img class="img-fluid" src="assets/img/pieces/<?php echo $row['IDPIECES']; ?>.jpg" alt="">
        					<a href="fiches/<?php echo $row['IDPIECES']; ?>/fiches-de-produit"><h4><?php echo $row['NOMPIECES']; ?></h4></a>
							<p><?php echo $row['DESCRIPTIONS']; ?></p>
							<?php
								if(isset($_SESSION['user'])){
							?>
							<strong>Liens vers le produit </strong><a href="www.amazon.fr"><h5>www.amazon/<?php echo $row['IDPIECES']; ?>.com</h5></a>
							<?php
							}
							?>			
        				</div>
					</div>
                <?php
                        } 
				    }
				?>	        			
        		</div>
        	</div>
        </section>
</section>