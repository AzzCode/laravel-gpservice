<!-- /*
* Bootstrap 5
* Template Name: Grand Prix Services
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{ asset('gpservice') }}/assets/css/bootstrap.min.css" rel="stylesheet">
		<link href="{{ asset('gpservice') }}/assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{ asset('gpservice') }}/assets/css/tiny-slider.css" rel="stylesheet">
		<link href="{{ asset('gpservice') }}/assets/css/style.css" rel="stylesheet">
		<title>Grand Prix Services</title>
	
		<style>
			@font-face /*perintah untuk memanggil font eksternal*/
			{
			  font-family: 'MotoGP'; /*memberikan nama bebas untuk font*/
			  src: url('font/MotoGP-Display-Bold.ttf');/*memanggil file font eksternalnya di folder nexa*/
			}
		   
			h1,h2,h3,h6
			{
			  font-family: 'MotoGP';
			}
			h4
			{
				font-family: 'MotoGP';
				color: black;
				
			}
		  </style>

	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				<a class="navbar-brand" href="index.html"><h2>Grand Prix Services</h2><span></span></a>

				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item active">
							<a class="nav-link" href="{{ asset('gpservice') }}/assets/index.html"><h6>Home</h6></a>
						</li>
						<li><a class="nav-link" href="{{ asset('gpservice') }}/assets/shop.html"><h6>Shop</h6></a></li>
						<li><a class="nav-link" href="{{ asset('gpservice') }}/assets/about.html"><h6>About us</h6></a></li>
						<li><a class="nav-link" href="{{ asset('gpservice') }}/assets/testimonial.html"><h6>Testimonials</h6></a></li>
						<li><a class="nav-link" href="{{ asset('gpservice') }}/assets/contact.html"><h6>Contact us</h6></a></li>
						<li><a class="nav-link" href="login"><h6>Register</h6></a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						<li><a class="nav-link" href="{{ asset('gpservice') }}/assets/cart.html"><img src="{{ asset('gpservice') }}/assets/images/cart.svg"></a></li>
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->
		<video id="background-video" autoplay loop muted poster="{{ asset('gpservice') }}/assets/images\trailermotogp.mp4"> 
			<source src="{{ asset('gpservice') }}/assets/images\trailermotogp.mp4" type="video/mp4"> 
		</video>
		<!-- Start Hero Section -->
			<div class="hero">
				<div class="container">
					<div class="row justify-content-between">
						<div class="col-lg-5">
							<div class="intro-excerpt">
								<h1>MotoGP Game Services</h1>
								<p class="mb-4">This is a website that provides services to improve user experience for MotoGP 22, 23, 24 Ver gamers. We provide fast, safe and affordable service. Make sure you have access to the game first by downloading it via the button below.</p>
								
								<div class="dropdown">
									<button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown">
									  Install MotoGP
									</button>
									<ul class="dropdown-menu">
									  <li><a class="dropdown-item" href="https://store.steampowered.com/app/1710580/MotoGP22/">MotoGP 22</a></li>
									  <li><a class="dropdown-item" href="https://store.steampowered.com/app/2100160/MotoGP23/">MotoGP 23</a></li>
									  <li><a class="dropdown-item" href="https://store.steampowered.com/app/2581700/MotoGP24/">MotoGP 24</a></li>
									</ul>
								  </div>

							</div>
						</div>

						<div class="col-lg-7">
							<div class="hero-img-wrap">
								<img src="{{ asset('gpservice') }}/assets/images/bannermoto.png" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		<!-- End Hero Section -->

		<!-- Start Product Section -->
		<div class="product-section">
			<div class="container">
				<div class="row">

					<!-- Start Column 1 -->
					<div class="col-md-12 col-lg-3 mb-5 mb-lg-0">
						<h2 class="mb-4 section-title">About MotoGP</h2>
						<p class="mb-4">The latest edition of MotoGP continues to impress with its attention to detail and realistic gameplay mechanics. From stunning graphics to precise bike handling, every aspect of the game feels intuitive and intense. Whether you're an experienced racer or new to the series, MotoGP offers an exciting experience that mirrors the excitement of professional motorcycle racing.</p>
					</div> 
					<!-- End Column 1 -->

					<!-- Start Column 2 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item">
							<img src="{{ asset('gpservice') }}/assets/images/MotoGP.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">MotoGP</h3>  
							<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#myModal">Read More</button>

							  <div class="modal fade" id="myModal">
								<div class="modal-dialog">
								  <div class="modal-content">
							  
									<!-- Modal Header -->
									<div class="modal-header">
									  <h4 class="modal-title">MotoGP</h4>
									  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
									</div>
							  
									<!-- Modal body -->
									<div class="modal-body">
									  <p class="text-black">Kejuaraan Dunia MotoGP atau kerap disebut sebagai MotoGP saja atau nama resminya FIM MotoGP World Championship adalah kelas utama dari seri balapan Grand Prix Sepeda Motor.
										Adapun untuk kelas MotoGP yang kita kenal saat ini awal mulanya berakar dari perubahan regulasi untuk kelas 500cc di musim 2002 yang sering disebut juga sebagai tahun transisi.
										Musim 2002 menjadi periode terakhir mesin dua langkah diperlombakan dalam kompetisi kelas premier.
										Sepanjang tahun 2002 sampai 2006 untuk pertama kalinya pabrikan diizinkan untuk memperbesar kapasitas total mesin khusus untuk mesin 4 tak menjadi maksimum 990 cc, dan berubah menjadi 800 cc di musim 2007.
										Pabrikan juga diberi kebebasan untuk memilih jumlah silinder yang digunakan antara tiga sampai enam dengan batas berat tertentu.
										Dengan dibolehkannya sepeda motor 4 tak berkubikasi mesin besar tersebut, kelas GP500 diubah namanya menjadi MotoGP.
										Seluruh tim pabrikan seperti Yamaha, Honda, dan Suzuki masing-masing memilih untuk berkompetisi menggunakan mesin empat langkah terbarunya.
										Praktis hanya tim satelit saja yang masih berkompetisi menggunakan mesin 500 cc dua langkah dan itupun dengan penampilan yang sangat kedodoran.
										Sejak musim 2012, kapasitas mesin sepeda motor kembali dinaikan menjadi maksimal 1000cc.
										Antara tahun 1949 dan 2001 kelas 500cc adalah kelas paling tinggi dalam balapan GP Motor.
										Pabrikan yang berlaga di kelas ini sebenarnya ada empat merek yang seluruhnya dari Jepang yaitu Honda, Yamaha, Suzuki dan Kawasaki.
										Dalam konsultasi yang erat dengan FIM, akhirnya diputuskan untuk membuat kelas empat tak di mana mesinnya dibatasi maksimal 990 cc.
										Pada tahun 2002, mesin MotoGP empat tak pertama bersaing bersama dengan mesin dua tak 500cc keluar pada musim 500cc terakhir.
										Musim MotoGP pertama yang lengkap adalah tahun berikutnya.
										Satu-satunya trek yang dilibatkan sejak awal balap GP Motor pada tahun 1949 adalah Sirkuit Assen di Belanda Valentino Rossi yang mengendarai motor dengan nomor #46, menjadi juara dunia pertama di kelas ini pada musim 2002 dan mengulanginya dalam tiga musim berikutnya.
										Pembalap Belanda Jurgen van den Goorbergh melaju pada musim 2002 dengan membawa Honda 500cc dua tak namun tak mampu bersaing melawan motor-motor empat tak.
										Ia membuat comeback kecil pada tahun 2005 di kelas ini dengan menggantikan Makoto Tamada yang cedera.
										Daijiro Kato meninggal dunia akibat kecelakaan fatal saat Grand Prix Jepang 2003 di Sirkuit Suzuka yang menjadi kecelakaan fatal pertama di ajang MotoGP.
										Pada musim 2003, terjadi kecelakaan fatal yang menewaskan pembalap Daijiro Kato dengan nomor #74 pada seri pembuka Grand Prix Jepang 2003 di Sirkuit Suzuka, Jepang, yang membuat Kato merenggut nyawa sehingga pihak MotoGP tidak memakai lagi Sirkuit Suzuka setelah kematian Kato, dan digantikan oleh Twin Ring Motegi, penyelenggara sebelumnya Grand Prix Pasifik akan menjadi Grand Prix Jepang pada tahun berikutnya.
										Pada musim 2007 kapasitas silinder maksimal diturunkan menjadi 800cc.
										Marco Simoncelli meninggal dunia akibat kecelakaan fatal saat Grand Prix Malaysia 2011 di Sirkuit Internasional Sepang yang menjadi kecelakaan fatal kedua di ajang MotoGP.
										Pada musim 2011, terjadi lagi kecelakaan fatal di Sirkuit Internasional Sepang, Malaysia menimpa pembalap Marco Simoncelli dengan nomor #58 pada Grand Prix Malaysia 2011.
										Simoncelli terlibat kecelakaan fatal dengan Colin Edwards dan rekan senegara Simoncelli, yaitu Valentino Rossi saat berada di posisi keempat pada putaran kedua.
										Edwards juga terjatuh namun hanya mengalami patah tulang bahu, sementara Simoncelli terbaring diam di lintasan sesaat setelah kecelakaan dengan helmnya terlepas dalam insiden itu.
										MotoGP lantas mengembalikan kapasitas mesin menjadi ke 1000cc pada tahun 2012.
										Tahun 2012, juga meningkatkan keselamatan pembalap setelah kematian Simoncelli, baju pembalap dilengkapi dengan Kantung udara (Airbag) untuk mencegah jenis kecelakaan fatal yang dialami Simoncelli.</p>
									</div>
							  
									<!-- Modal footer -->
									<div class="modal-footer">
									  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
									</div>
							  
								  </div>
								</div>
							  </div>
						</a>
					</div> 
					<!-- End Column 2 -->
					
					<!-- Start Column 3 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item">
							<img src="{{ asset('gpservice') }}/assets/images/Moto2.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Moto2</h3>
							<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#myModal1">Read More</button>

							  <div class="modal fade" id="myModal1">
								<div class="modal-dialog">
								  <div class="modal-content">
							  
									<!-- Modal Header -->
									<div class="modal-header">
									  <h4 class="modal-title">Moto2</h4>
									  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
									</div>
							  
									<!-- Modal body -->
									<div class="modal-body">
									  <p class="text-black">Kejuaraan Dunia Moto2 (atau biasa disebut Moto2 saja atau nama resminya FIM Moto2 World Championship) merupakan sebuah seri atau kelas dari Grand Prix Sepeda Motor.
										Kelas ini merupakan kelas menengah dalam tangga kejuaraan GP Motor.
										Perubahan nama itu diperlukan karena peraturan baru tentang kapasitas mesin yang tidak lagi terbatas pada 250 cm³ serta kebijakan memakai pemasok mesin dari satu merek pabrikan saja.
										Selain itu alasan FIM mengubah regulasi kelas 250cc adalah untuk menjamin komitmen ekonomis yang lebih rendah dari seluruh tim peserta karena sebelumnya kelas 250cc hampir mirip dengan kelas 500cc atau MotoGP dengan pabrikan yang bebas mengembangkan sepeda motor.
										Tidak seperti apa yang terjadi dengan MotoGP, transisi ke kelas baru segera dilaksanakan di musim 2010 meski sebenarnya bagi tim-tim yang belum siap saat itu masih diperbolehkan memakai motor 250cc dua tak yang diamanatkan regulasi lama.
										Balapan pertama Moto2 dilombakan di Qatar 2010 dan dimenangkan oleh Shoya Tomizawa yang mengendarai sepeda motor Suter.</p>
									</div>
							  
									<!-- Modal footer -->
									<div class="modal-footer">
									  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
									</div>
							  
								  </div>
								</div>
							  </div>
						</a>
					</div>
					<!-- End Column 3 -->

					<!-- Start Column 4 -->
					<div class="col-12 col-md-4 col-lg-3 mb-5 mb-md-0">
						<a class="product-item">
							<img src="{{ asset('gpservice') }}/assets/images/Moto3.jpg" class="img-fluid product-thumbnail">
							<h3 class="product-title">Moto3</h3>
							<button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#myModal2">Read More</button>

							  <div class="modal fade" id="myModal2">
								<div class="modal-dialog">
								  <div class="modal-content">
							  
									<!-- Modal Header -->
									<div class="modal-header">
									  <h4 class="modal-title">Moto3</h4>
									  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
									</div>
							  
									<!-- Modal body -->
									<div class="modal-body">
									  <p class="text-black">Kejuaraan Dunia Moto3 (atau biasa disebut Moto3 saja atau nama resminya FIM Moto3 World Championship) merupakan sebuah seri atau kelas dari Grand Prix Sepeda Motor.
										Kelas ini merupakan kelas paling dasar dalam tangga kejuaraan di ajang GP Motor sebelum menapak naik ke kelas Moto2 dan nantinya ke kelas MotoGP.
										Spesifikasi motor Pabrikan: Bervariasi Konfigurasi mesin: Satu silinder Kapasitas mesin: 250 cc (15 cu in) Combustion: 4 langkah Valve-train: DOHC, four-valves per cylinder Bahan bakar: Total unleaded 98 octane (sejak 2016) Fuel delivery: Injeksi bahan bakar Aspirasi: Aspirasi normal (normally aspirated) Tenaga: > 55 bhp (41 kW) Rasio tenaga ke berat: ~0.</p>
									</div>
							  
									<!-- Modal footer -->
									<div class="modal-footer">
									  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
									</div>
							  
								  </div>
								</div>
							  </div>
						</a>
					</div>
					<!-- End Column 4 -->

				</div>
			</div>
		</div>
		<!-- End Product Section -->

		<!-- Start Why Choose Us Section -->
		<div class="why-choose-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-6">
						<h2 class="section-title">Why Choose Us</h2>
						<p></p>

						<div class="row my-5">
							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('gpservice') }}/assets/images/truck.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Fast &amp; Trusted</h3>
									<p>Our service ensures that you get fast, safe and of course reliable service in working on your account.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('gpservice') }}/assets/images/bag.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Easy to Shop</h3>
									<p>We ensure that users can easily order services for this MotoGP game.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('gpservice') }}/assets/images/support.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>24/7 Support</h3>
									<p>Our service provides support for customers to get directions in using our services.</p>
								</div>
							</div>

							<div class="col-6 col-md-6">
								<div class="feature">
									<div class="icon">
										<img src="{{ asset('gpservice') }}/assets/images/return.svg" alt="Image" class="imf-fluid">
									</div>
									<h3>Affordable</h3>
									<p>You can get a professional playing experience by using our services, of course at an affordable price.</p>
								</div>
							</div>
						</div>
					</div>

					<div class="col-lg-5">
						<div class="img-wrap">
							<img src="{{ asset('gpservice') }}/assets/images/Marc.jpg	" alt="Image" class="img-fluid">
						</div>
					</div>

				</div>
			</div>
		</div>
		<!-- End Why Choose Us Section -->

		<!-- Start We Help Section -->
		<div class="we-help-section">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-lg-7 mb-5 mb-lg-0">
						<div class="imgs-grid">
							<div class="grid grid-1"><img src="{{ asset('gpservice') }}/assets/images/img-grid-1.png" alt="Untree.co"></div>
							<div class="grid grid-2"><img src="{{ asset('gpservice') }}/assets/images/img-grid-2.png" alt="Untree.co"></div>
							<div class="grid grid-3"><img src="{{ asset('gpservice') }}/assets/images/img-grid-3.png" alt="Untree.co"></div>
						</div>
					</div>
					<div class="col-lg-5 ps-lg-5">
						<h2 class="section-title mb-4">We Help You Achieve the Best Career</h2>
						<p>By using our services, you can fulfill your expectations of becoming a MotoGP racing gamer.</p>

						<ul class="list-unstyled custom-list my-4">
							<li>Finish your MotoGP career.</li>
							<li>Finish your Moto2 career.</li>
							<li>Finish your Moto3 career.</li>
							<li>Get a good record in completing time trials in multiplayer mode.</li>
						</ul>
						<p><a href="{{ asset('gpservice') }}/assets/contact.html" class="btn">Contact Us</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- End We Help Section -->

		<!-- Start Popular Product -->
		<div class="popular-product">
			<div class="container">
				<div class="row">
					<div class="text-center">
						<h2>Official MotoGP Sponsor</h2>
					</div>
					<div class="col-6 col-md-6 col-lg-12 mb-4 mb-lg-0">
						<div class="product-item-sm d-flex">
							<div class="thumbnail">
								<img src="{{ asset('gpservice') }}/assets/images/s1.png" alt="Image" class="img-fluid">
							</div>
							<div class="thumbnail">
								<img src="{{ asset('gpservice') }}/assets/images/s2.png" alt="Image" class="img-fluid">
							</div>
							<div class="thumbnail">
								<img src="{{ asset('gpservice') }}/assets/images/s3.png" alt="Image" class="img-fluid">
							</div>
							<div class="thumbnail">
								<img src="{{ asset('gpservice') }}/assets/images/s4.png" alt="Image" class="img-fluid">
							</div>
							<div class="thumbnail">
								<img src="{{ asset('gpservice') }}/assets/images/s5.png" alt="Image" class="img-fluid">
							</div>
							<div class="thumbnail">
								<img src="{{ asset('gpservice') }}/assets/images/s6.png" alt="Image" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Popular Product -->

		<!-- Start Footer Section -->
		<footer class="footer-section">
			<div class="container relative">

				

				<div class="row">
					<div class="col-lg-8">
						<div class="subscription-form">
							<h3 class="d-flex align-items-center"><span class="me-1"><img src="{{ asset('gpservice') }}/assets/images/envelope-outline.svg" alt="Image" class="img-fluid"></span><span>Subscribe to Grand Prix Services</span></h3>

							<form action="#" class="row g-3">
								<div class="col-auto">
									<input type="text" class="form-control" id="yname" placeholder="Enter your name">
								</div>
								<div class="col-auto">
									<input type="email" class="form-control" id="yemail" placeholder="Enter your email">
								</div>
								<div class="col-auto">
									<button class="btn btn-primary">
										<span class="fa fa-paper-plane" onclick="sendSubs()"></span>
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>

				<div class="row g-5 mb-5">
					<div class="col-lg-4">
						<div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo"><h2>Grand Prix Services</h2><span></span></a></div>
						<p class="mb-4">This is a website that provides services to improve user experience for MotoGP 22, 23, 24 Ver gamers. We provide fast, safe and affordable service. Make sure you have access to the game first by downloading it via the button below.</p>

						<div class="sofa-img">
							<img src="{{ asset('gpservice') }}/assets/images/sofa.png" alt="Image" class="img-fluid">
						</div>

					</div>

					<div class="col-lg-8">
						<div class="row links-wrap">
							<div class="col-6 col-sm-6 col-md-3">
								<ul class="list-unstyled">
									<li><a href="{{ asset('gpservice') }}/assets/about.html">About us</a></li>
									<li><a href="{{ asset('gpservice') }}/assets/testimonial.html">Testimonials</a></li>
									<li><a href="{{ asset('gpservice') }}/assets/contact.html">Contact us</a></li>
								</ul>
							</div>
						</div>
					</div>

				</div>

				<div class="border-top copyright">
					<div class="row pt-4">
						<div class="col-lg-6">
							<p class="mb-2 text-center text-lg-start">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> Distributed By <a hreff="https://themewagon.com">ThemeWagon</a>  <!-- License information: https://untree.co/license/ --></p>
						</div>

						<div class="col-lg-6 text-center text-lg-end">
							<ul class="list-unstyled d-inline-flex ms-auto">
								
							</ul>
						</div>
					</div>
				</div>

			</div>
		</footer>
		<!-- End Footer Section -->	


		<script src="{{ asset('gpservice') }}/assets/js/bootstrap.bundle.min.js"></script>
		<script src="{{ asset('gpservice') }}/assets/js/tiny-slider.js"></script>
		<script src="{{ asset('gpservice') }}/assets/js/custom.js"></script>
	</body>

</html>
