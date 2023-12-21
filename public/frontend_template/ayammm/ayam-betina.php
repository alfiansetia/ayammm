<section class="hero-wrap hero-wrap-2" style="background-image: url('images/ayam_wall.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs mb-2">
                <span class="mr-2"><a href="index.php">Beranda <i class="ion-ios-arrow-forward">|</i></a></span>
                <span class="mr-2"><a href="gallery.php">Gallery Ayam <i class="ion-ios-arrow-forward">|</i></a></span>
                <span>Ayam Betina<i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-0 bread">Ayam Betina</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row">


          <?php $get = $connect->query("SELECT * FROM ayam_betina"); ?>
          <?php while($pecah = $get->fetch_assoc()){?>

            <div class="col-md-6 col-lg-3 ftco-animate">
						<div class="staff">
							<div class="img-wrap d-flex align-items-stretch">
								<div class="img align-self-stretch" style="background-image: url(images/ayam_betina/<?= $pecah['foto_ayam_betina']; ?>);"></div>
							</div>
							<div class="text pt-3 px-3 pb-4 text-center">
								<h3><?= $pecah['nama_ayam_betina']; ?></h3>
								<span class="position mb-2">Ayam Betina</span>
								<div class="faded">
									<p>I am an ambitious workaholic, but apart from that, pretty simple person.</p>
                                    <p><a href="#" class="btn btn-success">Lihat Selengkapnya</a></p>
									<ul class="ftco-social text-center">
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-google"></span></a></li>
		                <li class="ftco-animate"><a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"></span></a></li>
		              </ul>
	              </div>
							</div>
						</div>
					</div>

          <?php } ?>
 



        </div>
        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
			</div>
		</section>