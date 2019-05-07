<?php
	$listes = getAllPieces();
?>
<section class="home_banner_area">
            <div class="banner_inner">
				<div class="container">
					<div class="row">
						<div class="col-lg-8">
							<div class="banner_content">
								<h2>Le concept de l'Home-Design<br />a votre porté</h2>
								<p>Connecter vous pour voir les liens de nos produits</p>
								<a class="banner_btn" href="#">Commencer</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="home_right_box">
								<div class="home_item">
									<a href="produits/1/Salon"  ><i title="Salon" class="flaticon-sofa"></i></a>
								</div>
								<div class="home_item">
								<a href="produits/2/Chambre"  ><i title="Chambre" class="flaticon-bed"></i></a>
								</div>
								<div class="home_item">
								<a href="produits/5/Bureau"  ><i title="Bureau" class="flaticon-computer"></i></a>
								</div>
								<div class="home_item">
								<a href="produits/6/Salle de bain"  ><i title="Salle de bain" class="flaticon-mirror"></i></a>
								</div>
								<div class="home_item">
								<a href="produits/4/Dressing"  ><i title="Dressing" class="flaticon-closet"></i></a>
								</div>
								<div class="home_item">
								<a href="produits/3/Cuisine"  ><i title="Cuisine" class="flaticon-kitchen"></i></a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
</section>

    <section class="furniture_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Plus populaire</h2>
        			<p>Décorer vous meme votre maison avec un decors de <strong>Design</strong> professionel.</p>
        		</div>
        		<div class="furniture_inner row">
				
				<?php
					if($listes->num_rows > 0) {
                        while($row = $listes->fetch_assoc()) {
				?>
        			<div class="col-lg-4">
        				<div class="furniture_item">
        					<img class="img-fluid" src="assets/img/pieces/<?php echo $row['IDPIECES']; ?>.jpg" alt="">
        					<a href="fiches/<?php echo $row['IDPIECES']; ?>"><h4><?php echo $row['NOMPIECES']; ?></h4></a>
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
       
        <section class="impress_area p_120">
        	<div class="container">
        		<div class="impress_inner text-center">
					<h2>Regarder la <br />qualité et la confortabilité de nos <strong>home-design</strong></h2>
					<p>Découvrez les plus belles meubles adaptées a votre maison et metter en oeuvre votre créativité.</p>
        		</div>
        	</div>
        </section>
        <!--================End Impress Area =================-->
        
        <!--================Our Blog Area =================-->