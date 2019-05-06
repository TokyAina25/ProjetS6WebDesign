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
								<p>If you are looking at blank cassettes on the web, you may be very confused at the difference in price. You may see some for as low as $.17 each.</p>
								<a class="banner_btn" href="assets/#">Get Started</a>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="home_right_box">
								<div class="home_item">
									<a href="index.php?pages=produits&idCategorie=1&nomCategorie=Salon"  ><i title="Salon" class="flaticon-sofa"></i></a>
								</div>
								<div class="home_item">
								<a href="index.php?pages=produits&idCategorie=2&nomCategorie=Chambre"  ><i title="Chambre" class="flaticon-bed"></i></a>
								</div>
								<div class="home_item">
								<a href="index.php?pages=produits&idCategorie=5&nomCategorie=Bureau"  ><i title="Bureau" class="flaticon-computer"></i></a>
								</div>
								<div class="home_item">
								<a href="index.php?pages=produits&idCategorie=6&nomCategorie=Salle de bain"  ><i title="Salle de bain" class="flaticon-mirror"></i></a>
								</div>
								<div class="home_item">
								<a href="index.php?pages=produits&idCategorie=4&nomCategorie=Dressing"  ><i title="Dressing" class="flaticon-closet"></i></a>
								</div>
								<div class="home_item">
								<a href="index.php?pages=produits&idCategorie=3&nomCategorie=Cuisine"  ><i title="Cuisine" class="flaticon-kitchen"></i></a>
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
        					<a href="index.php?pages=fiches&idPiece=<?php echo $row['IDPIECES']; ?>"><h4><?php echo $row['NOMPIECES']; ?></h4></a>
        					<p><?php echo $row['DESCRIPTIONS']; ?></p>
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
        <section class="our_blog_area p_120">
        	<div class="container">
        		<div class="main_title">
        			<h2>Des pieces maison complet</h2>
        			<p>Salon complet, Salle à manger complet, ...</p>
        		</div>
        		<div class="blog_inner row">
        			<div class="col-lg-4">
        				<div class="o_blog_item">
        					<div class="blog_img">
        						<img class="img-fluid" src="assets/img/our-blog/our-blog-1.jpg" alt="">
        					</div>
        					<div class="blog_text">
        						<div class="blog_cat">
        							<a class="active" href="assets/#">Travel</a>
        							<a href="assets/#">Life style</a>
        						</div>
        						<a href="assets/#"><h4>Low Cost Advertising</h4></a>
        						<p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you A farmer.</p>
        						<a class="date" href="assets/#">31st January, 2018</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="o_blog_item">
        					<div class="blog_img">
        						<img class="img-fluid" src="assets/img/our-blog/our-blog-2.jpg" alt="">
        					</div>
        					<div class="blog_text">
        						<div class="blog_cat">
        							<a class="active" href="assets/#">Travel</a>
        							<a href="assets/#">Life style</a>
        						</div>
        						<a href="assets/#"><h4>Low Cost Advertising</h4></a>
        						<p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you A farmer.</p>
        						<a class="date" href="assets/#">31st January, 2018</a>
        					</div>
        				</div>
        			</div>
        			<div class="col-lg-4">
        				<div class="o_blog_item">
        					<div class="blog_img">
        						<img class="img-fluid" src="assets/img/our-blog/our-blog-3.jpg" alt="">
        					</div>
        					<div class="blog_text">
        						<div class="blog_cat">
        							<a class="active" href="assets/#">Travel</a>
        							<a href="assets/#">Life style</a>
        						</div>
        						<a href="assets/#"><h4>Low Cost Advertising</h4></a>
        						<p>Acres of Diamonds… you’ve read the famous story, or at least had it related to you A farmer.</p>
        						<a class="date" href="assets/#">31st January, 2018</a>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
</section>