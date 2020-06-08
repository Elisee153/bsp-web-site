<?php
    ob_start();
?>
           <!-- ======= Breadcrumbs ======= -->
		<section id="breadcrumbs" class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
				<h2>Galerie</h2>
				<ol>
					<li><a href="index.html">Home</a></li>
					<li>Galerie</li>
				</ol>
				</div>

			</div>
		</section><!-- End Breadcrumbs -->

			<!-- Start gallery Area -->
			<section class="gallery-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-7">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg" style="background:rgba(255,255,255,0.5)"></div>
									<div class="relative">
										<img class="img-fluid" src="public/img/gallery/DSC_0001.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-5">
							<a href="#" class="img-gal">
								<div class="single-imgs relative" >
									<div class="overlay overlay-bg" style="background:rgba(255,255,255,0.5)"></div>
									<div class="relative">
										<img class="img-fluid" src="public/img/gallery/DSC_0009.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg" style="background:rgba(255,255,255,0.5)"></div>
									<div class="relative">
										<img class="img-fluid" src="public/img/gallery/DSC_0028.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg" style="background:rgba(255,255,255,0.5)"></div>
									<div class="relative">
										<img class="img-fluid" src="public/img/gallery/DSC_0019.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-4">
							<a href="#"  class="img-gal">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg" style="background:rgba(255,255,255,0.5)"></div>
									<div class="relative">
										<img class="img-fluid" src="public/img/gallery/IMG_0099.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
						<div class="col-lg-5">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg" style="background:rgba(255,255,255,0.5)"></div>
									<div class="relative">
										<img class="img-fluid" src="public/img/gallery/DSC_0004.jpg" alt="">
									</div>
								</div>
							 </a>
						</div>
						<div class="col-lg-7">
							<a href="#" class="img-gal">
								<div class="single-imgs relative">
									<div class="overlay overlay-bg" style="background:rgba(255,255,255,0.5)"></div>
									<div  class="relative">
										<img class="img-fluid" src="public/img/gallery/DSC_0002.jpg" alt="">
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>
			<!-- End gallery Area -->
<?php
$content = ob_get_clean();
require_once 'includes/template.php';
