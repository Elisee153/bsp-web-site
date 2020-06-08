<?php
    ob_start();
?>
	<main id="main">
	<!-- ======= Breadcrumbs ======= -->
		<section id="breadcrumbs" class="breadcrumbs">
		<div class="container">

			<div class="d-flex justify-content-between align-items-center">
			<h2>About</h2>
			<ol>
				<li><a href="index.html">Home</a></li>
				<li>About</li>
			</ol>
			</div>

		</div>
		</section><!-- End Breadcrumbs -->
			<!-- Start course-mission Area -->
			<section class="course-mission-area pb-120 mt-4">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Bureau Salesien des Projets et developpement don bosco.</h1>
							</div>
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-6 accordion-left">

                            <!-- accordion 2 start-->
                            <dl class="accordion">
                                <dt>
                                    <a href="">Mission</a>
                                </dt>
                                <dd>
								Le Bureau salésien des projets est une structure de travail incluse dans l'ASBL "Œuvres de Don Bosco" de la Province Salésienne d'Afrique Centrale.
								Il est un organe technique au service de la Province, ses commissions et toutes les œuvres, pour l’aider dans sa mission d’encadrement des jeunes.

                                </dd>
                                <dt>
                                    <a href="">Fonctionnement</a>
                                </dt>
                                <dd>
								Sous la Gouvernance du Provincial et de son Conseil, le BSP fonctionne avec un Directeur (trice) et du personnel laïc local et international (sous forme de Volontaires de solidarité internationale), en coopération avec les Commissions de la Province.
                                </dd>
                                <dt>
                                    <a href="">Adresse</a>
                                </dt>
                                <dd>
								45 Kasavubu, Lubumbashi, Phone: +243 855 555 555, Email: contact@bp-salesien.
                                </dd>
                            </dl>
                            <!-- accordion 2 end-->
                        </div>
                        <div style='background-size:cover;background-image:url("public/img/DSC_0008.jpg")' class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                        	<div class="overlay overlay-bg"></div>
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="public/img/play.png" alt=""></a>
                        </div>
                    </div>
				</div>
			</section>
			<!-- End course-mission Area -->
	</main>
<?php
    $content = ob_get_clean();
    require_once 'includes/template.php';