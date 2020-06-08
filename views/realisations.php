<?php
    ob_start();
?> 
	<main id="main">
		<!-- ======= Breadcrumbs ======= -->
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>Realisations</h2>
					<ol>
						<li><a href="index.html">Home</a></li>
						<li>Realisations</li>
					</ol>
				</div>

			</div>
		</section><!-- End Breadcrumbs -->           
		<!-- ======= Portfolio Section ======= -->
		<section id="portfolio" class="portfolio">
			<div class="container">

				<div class="section-title" data-aos="fade-up">
				<h2>Nos <strong>Réalisations</strong></h2>
				<div class="row" data-aos="fade-up">
					<div class="col-lg-12 d-flex justify-content-center">
						<ul id="portfolio-flters">
						<li data-filter="*" class="filter-active">Toutes</li>
						<li data-filter=".filter-app">Education</li>
						<li data-filter=".filter-card">Agriculture</li>
						<li data-filter=".filter-web">Elevage</li>
						</ul>
					</div>
				</div>

				<div class="row portfolio-container" data-aos="fade-up">

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<img src="public/img/r2.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Ecole Technique</h4>
							<p>l’Institut Technique Salama, la Maison SAFINA, l’École Supérieure d’Informatique, la chapelle Saint Jean Bosco et l’Oratorio</p>
							<a href="public/img/r2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-web">
						<img src="public/img/its.jpeg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Elevage</h4>
							<p>Elevage des porcs dans la ferme de Jacaranda</p>
							<a href="public/img/its.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<img src="public/img/cur2.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Universités de téologie et philosophie</h4>
							<p>Maison de formation post noviciat avec un institut superieur de philosophie Saint Jean Bosco Kansebula ou sont former les confreres en philosphie</p>
							<a href="public/img/cur2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="App 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-card">
						<img src="public/img/r7.jpg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Agriculture</h4>
							<p>Ferme Jacaranda avec un centre de formation argricole</p>
							<a href="public/img/portfolio/r7.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Card 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<img src="public/img/imara1.jpeg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Ecole primaire et secondaire Imara</h4>
							<p>Ecole primaire, secondaire et Création d’une école supérieure en son sein (ECOPO)</p>
							<a href="public/img/cur2.jpg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 2"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 portfolio-item filter-app">
						<img src="public/img/imara1.jpeg" class="img-fluid" alt="">
						<div class="portfolio-info">
							<h4>Ecoles Goma-Ngangi ITIG</h4>
							<p>Centre de formation professionnelle, internat, ecole prinaire et une chapelle</p>
							<a href="public/img/imara1.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="App 3"><i class="bx bx-plus"></i></a>
							<a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
						</div>
					</div>
				</div>

			</div>
		</section><!-- End Portfolio Section -->
	</main>
<?php
$content = ob_get_clean();
require_once 'includes/template.php';
