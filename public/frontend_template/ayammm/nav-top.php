<div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
			    			<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>

		<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	    	<a class="navbar-brand" href="index.php">
				<img src="images/ayam_logo.png" width="50px" alt="">&nbsp; Ayammmm</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<li class="<?php if ($page == "index.php"){echo "nav-item active";}else{echo "nav-item";}?>"><a href="index.php" class="nav-link">Beranda</a></li>
				<li class="<?php if ($page == "koleksi-ayam.php"){echo "nav-item active";}else{echo "nav-item";}?> dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Koleksi Ayam
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="koleksi-ayam.php?page=ayam-jantan">Ayam Jantan</a>
						<a class="dropdown-item" href="koleksi-ayam.php?page=ayam-betina">Ayam betina</a>
						<a class="dropdown-item" href="koleksi-ayam.php?page=anak-ayam">Anakan</a>
						<!-- <div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Menu 3</a> -->
					</div>
				</li>








				<li class="<?php if ($page == "about.php"){echo "nav-item active";}else{echo "nav-item";}?>"><a href="about.php" class="nav-link">Profil</a></li>
	          	<li class="<?php if ($page == "contact.php"){echo "nav-item active";}else{echo "nav-item";}?>"><a href="contact.php" class="nav-link">Kontak</a></li>
	        </ul>
	      </div>







	    </div>
	  </nav>