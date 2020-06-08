<?php
    ob_start();
?>
	<!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(public/img/slide/slide-1.jpg);">
                    <div class="container">
                        <div class="carousel-content animated fadeInUp text-center">
                        <h1>Bureau Salesien des Projets et developpement <span>don bosco</span></h1>
                        <p></p>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(public/img/slide/slide-2.jpg);">
                    <div class="container">
                        <div class="carousel-content animated fadeInUp text-center">
                            <h1>Bureau Salesien des Projets</h1>
                            <p>Education accessible à tous</p>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(public/img/slide/slide-3.jpg);">
                    <div class="container">
                        <div class="carousel-content animated fadeInUp text-center">
                            <h1>Bureau Salesien des Projets</h1>
                            <p>Oeuvrant pour la jeunesse</p>
                        </div>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        </div>
    </section><!-- End Hero -->

	<main id="main">
		<!-- ======= Cta Section ======= -->
		<section id="cta" class="cta">
			<div class="container">

				<div class="row">
					<div class="col-lg-9 text-center text-lg-left">
						<h3><span>Présentation</span></h3>
						<p> 
							Le bureau salésien des projets est une structure de travail 
							incluse dans l'ASBL "Œuvres de Don Bosco" de la 
							Province Salésienne d'Afrique Centrale.</p>
					</div>
				
				</div>

			</div>
		</section><!-- End Cta Section -->
		<!-- ======= Services Section ======= -->
		<section id="services" class="services">
			<div class="container">

				<div class="section-title" data-aos="fade-up">
					<h2>Nous investissons dans plusieurs <strong>domaines</strong></h2>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="icon-box" data-aos="fade-up">
						<div class="icon"><i class="icofont-computer"></i></div>
						<h4 class="title"><a href="#">Education</a></h4>
						<p class="description">
							Ecoles primaires, secondaires et supérieures construits dans le cadre de l'éducation
						</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
						<div class="icon"><i class="icofont-chart-bar-graph"></i></div>
						<h4 class="title"><a href="#">Agriculture</a></h4>
						<p class="description">
							Plantations dans differents fermes des produits bio dans toute la province (AFC)
						</p>
						</div>
					</div>
					<div class="col-lg-4 col-md-6">
						<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
						<div class="icon"><i class="icofont-earth"></i></div>
						<h4 class="title"><a href="#">Elevage</a></h4>
						<p class="description">
							Elevage dans un espace naturel des annimaux et pisciculture dans nos concessions
						</p>
						</div>
					</div>
				</div>

			</div>
		</section>
		<!-- End Services Section -->
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
<?php $content = ob_get_clean();
    require_once 'includes/template.php';