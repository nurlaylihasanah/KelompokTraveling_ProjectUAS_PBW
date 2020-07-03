<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  	<!-- Bootstrap CSS -->
	<link rel="icon" href="assets/img/travelling.jpg" sizes="32x32">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/fontawesome/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<link rel="stylesheet" type="text/css" href="assets/slick/slick.css">
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">

	<title>Travelingyuk!</title>
</head>
<body>
	<header class="fixed-top">
		<div class="align-middle">
			<div class="container">
        		<div class="row">
          			<div class="col-md-3 d-none d-sm-block">
            			<div class="logo">
              				<a href="index.php"><img src="assets/img/logo.png" class="img-fluid" alt="Logo"></a>
            			</div>
          			</div>
          			<div class="col-md-3">
            			<button class="btn btn-info form-header mt-2" data-toggle="modal" data-target="#searchModal">Mau Kemana?
            				<i class="fa fa-angle-down"></i>
            			</button>
          			</div>
          			<div class="col-md-6">
          				<nav class="navbar navbar-expand-sm navbar-light">
              				<a class="navbar-brand d-block d-sm-none" href="index.php">
            					<img src="assets/img/logo.png" width="190" class="img-fluid" alt="Logo">
              				</a>
              				<button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
              				<div class="collapse navbar-collapse" id="collapsibleNavId">
                				<ul class="navbar-nav ml-auto">
                  					<li class="nav-item d-block d-sm-none"><a class="nav-link" href="kuliner.php">Kuliner</a></li>
					                <li class="nav-item d-block d-sm-none"><a class="nav-link" href="obyekwisata.php">Objek Wisata</a></li>
					                <li class="nav-item d-block d-sm-none"><a class="nav-link" href="akomodasi.php">Akomodasi</a></li>
					                <li class="nav-item d-block d-sm-none"><a class="nav-link" href="galeri.php">Galeri</a></li>
					                <li class="nav-item d-block d-sm-none"><a class="nav-link" href="artikel.php">Artikel</a></li>
					                <li class="nav-item d-block d-sm-none"><a class="nav-link" href="itinerari.php">Itinerari</a></li>
					                <li class="nav-item d-block d-sm-none"><a class="nav-link" href="video.php">Video</a></li>
                				</ul>
              				</div>
            			</nav>
          			</div>
       			</div>
      		</div>
    	</div>
    	<div class="sub-header">
      		<div class="container">
        		<div class="row">
          			<div class="col-md-12">
          				<nav>
          					<ul class="sub-menu">
				                <li><a href="kuliner.php">Kuliner</a></li>
				                <li><a href="obyekwisata.php">Objek Wisata</a></li>
				                <li><a href="akomodasi.php">Akomodasi</a></li>
				                <li><a href="galeri.php">Galeri</a></li>
				                <li><a href="artikel.php">Artikel</a></li>
				                <li><a href="itinerari.php">Itinerari</a></li>
				                <li><a href="video.php">Video</a></li>
			              	</ul>
			            </nav>
          			</div>
        		</div>
      		</div>
    	</div>
  	</header>

  	<div class="main-content" id="app">
    	<div class="area-banner" data-src="assets/img/suramadu.jpg" style="background-size: 100%; height: 480px; margin-bottom: 180px; background-size: 100%; background-position: center; background-repeat:no-repeat; background-color: #c6c6c6">
    		<div class="container">
        		<div class="row">
          			<div class="col"></div>
          			<div class="col-md-6">
            			<h2 class="title-banner">MADURA</h2>
            			<p>Cari Destinasi Wisatamu di Madura Sekarang!</p>
            			<div class="text-center">
            				<button class="btn btn-info" data-toggle="modal" data-target="#searchModal">Mau Kemana?<i class="fa fa-angle-down"></i></button>
            			</div>
          			</div>
          			<div class="col"></div>
        		</div>
        		<div class="row">
          			<div class="col"></div>
          			<div class="col-md-8">
            			<div class="icon-menu">
              				<div class="row">
                				<div class="col-md-3">
                  					<a href="kuliner.php">
                  						<img src="assets/img/kuliner-menu.png" alt="Kuliner" class="no-lazy">
                  						<p>Kuliner</p>
                  					</a>
                  				</div>
                  				<div class="col-md-3">
                  					<a href="obyekwisata.php">
                  						<img src="assets/img/wisata-menu.png" alt="Objek Wisata" class="no-lazy">
                  						<p>Objek Wisata</p>
                  					</a>
                  				</div>
                  				<div class="col-md-3">
                  					<a href="akomodasi.php">
                  						<img src="assets/img/akomodasi-menu.png" alt="Akomodasi" class="no-lazy">
                  						<p>Akomodasi</p>
                  					</a>
				                </div>
				                <div class="col-md-3">
                  					<div class="dropdown">
                  						<button class="dropdown-toggle dropdown-btn" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  							<img src="assets/img/dots-menu.png" alt="Lainnya" class="no-lazy">
                  							<p>Lainnya</p>
                  						</button>
                  						<div class="dropdown-menu" aria-labelledby="dropdownMenu2">
						                    <a href="itinerari.php" class="dropdown-item">Itinerari</a>
						                    <a href="galeri.php" class="dropdown-item">Galeri</a>
						                    <a href="artikel.php" class="dropdown-item">Artikel</a>
						                    <a href="video.php" class="dropdown-item">Video</a>
						                </div>
                  					</div>
                				</div>
              				</div>
            			</div>
          			</div>
         			 <div class="col"></div>
        		</div>
      		</div>
    	</div>

    	<div class="container">
      		<div class="row section-slide">
        		<div class="col-md-9 col-12">
          			<h3 class="section-title">Artikel Terbaru</h3>
          			<p class="caption-title">Berita Terbaru Seputar Wisata di Madura</p>
		        </div>
		        <div class="col-md-3 col-12">
		          	<div class="mt-4 see-all"><a href="artikel.php">Lihat Semuanya</a></div>
		        </div>
		        <div class="col-md-12">
		          	<div class="s-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' style="display: none">
		            	<div class="slide-container">
		              		<a href="news1.php">
		              			<img class="img-fluid" src="assets/img/news/bupati-sumenep.jpg" alt="news1">
		              			<h5 class="s-img-title">Pemkab Sumenep Siapkan Ruangan Khusus di Gedung Islamic Center untuk Tangani Pasien Covid-19</h5>
		              			<span class="icon-blue"><i class="fa fa-clock"></i>Rabu, Maret 25, 2020</span>
		              		</a>
		            	</div>
			            <div class="slide-container">
			            	<a href="news2.php"><img class="img-fluid" src="assets/img/news/pantai-madura2jpg-rpcrv.jpg" alt="news2">
			            		<h5 class="s-img-title">8 Potret Kecantikan Pantai Sembilan di Sumenep, Madura</h5>
			            		<span class="icon-blue"><i class="fa fa-clock"></i>Rabu, Desember 11, 2017</span>
	              			</a>
			            </div>
			            <div class="slide-container">
			              	<a href="artikel-terbaik.php">
				                <img class="img-fluid" src="assets/img/news/giliyang.jpg" alt="news3">
				                <h5 class="s-img-title">Gili Iyang, Pulau di Sumenep dengan Kadar Oksigen Tertinggi di Indonesia</h5>
				                <span class="icon-blue"><i class="fa fa-clock"></i>Jumat, 2 Agustus, 2019</span>
			              	</a>
			            </div>
			            <div class="slide-container">
			              	<a href="news4.php">
				                <img class="img-fluid" src="assets/img/news/bebeksinjay.jpg" alt="news4">
				                <h5 class="s-img-title">Ke Madura, Belum Lengkap Kalau Gak Cobain Bebek Sinjay!</h5>
				                <span class="icon-blue"><i class="fa fa-clock"></i>Rabu, Juni 19, 2019</span>
			              	</a>
			            </div>
			            <div class="slide-container">
				            <a href="#">
				            	<img class="img-fluid" src="assets/img/news/bukit-tinggi-daramista.jpg" alt="news5">
				                <h5 class="s-img-title">Bukit Tinggi Daramista, Bukit Romantis Sumenep</h5>
				                <span class="icon-blue"><i class="fa fa-clock"></i>Sabtu, Oktober 27, 2018</span>
				            </a>
			            </div>
			            <div class="slide-container">
				            <a href="#">
				            	<img class="img-fluid" src="assets/img/news/kampoeng-wisata-toron-samalem.jpg" alt="news6">
				                <h5 class="s-img-title">Menikmati Suasana Wisata Negeri Sakura di Pamekasan Melalui Kampoeng Wisata Toron Samalem</h5>
				                <span class="icon-blue"><i class="fa fa-clock"></i>Senin, Januari 14, 2019</span>
				            </a>
			            </div>
			            <div class="slide-container">
			              	<a href="#">
			                	<img class="img-fluid" src="assets/img/news/amboina.jpg" alt="news7">
			                	<h5 class="s-img-title">Depot Legendaris Amboina Kota Bangkalan Tak Lekang Dimakan Jaman</h5>
			                	<span class="icon-blue"><i class="fa fa-clock"></i>Minggu, November 19, 2017</span>
			              	</a>
			            </div>
			            <div class="slide-container">
			              	<a href="#">
			                	<img class="img-fluid" src="assets/img/news/baddrut-tamam.jpg" alt="news8">
			                	<h5 class="s-img-title">Bupati Pamekasan Datangi Pusat Keramaian, Beri Imbauan Pencegahan Virus Corona dan Social Distancing</h5>
			                	<span class="icon-blue"><i class="fa fa-clock"></i>Senin, Maret 23, 2020</span>
			              	</a>
			            </div>
          			</div>
        		</div>
      		</div>
      		<div class="row section-slide">
        		<div class="col-md-9 col-12">
        			<h3 class="section-title">Video Wisata Populer</h3>
          			<p class="caption-title">Hello traveler! Ayo lihat video wisata popular di Madura sekarang!</p>
        		</div>
        		<div class="col-md-3 col-12">
          			<div class="text-right mt-4 see-all"><a href="video.php">Lihat Semuanya</a></div>
        		</div>
	        	<div class="col-md-6">
	          		<div class="v-player">
	            		<iframe width="100%" height="300" src="https://www.youtube.com/embed/VHOZDENB-Z4" frameborder="0" allowfullscreen>
	            		</iframe>
	          		</div>
	        	</div>
	        	<div class="col-md-6">
	          		<div class="v-player">
	            		<iframe width="100%" height="300" src="https://www.youtube.com/embed/vwOW4_I-0vc" frameborder="0" allowfullscreen>
	            		</iframe>
	          		</div>
	        	</div>
      		</div>
	      	<div class="row section-slide">
	        	<div class="col-md-9 col-12">
	          		<h3 class="section-title">Kuliner Populer</h3>
	          		<p class="caption-title">Ayo cobain kuliner di Madura!</p>
	        	</div>
	        	<div class="col-md-3 col-12">
	          		<div class="text-right mt-4 see-all"><a href="kuliner-terbaik.php">Lihat Semuanya</a></div>
	        	</div>
		        <div class="col-md-12">
		          	<div class="s-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' style="display: none">
		            	<div class="container">
		              		<a href="food.php">
		                		<img class="img-fluid" src="assets/img/warung-bebek-sinjay.jpg" alt="kuliner1">
		                		<h5 class="s-img-title">Warung Bebek Sinjay</h5>
		                		<div class="icon-blue"><i class="fa fa-map-marker-alt"></i>Bangkalan</div>
		                		<div class="mt-2">
		                  			<p style="color: orange">
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					             	    <i class="fas fa-star"></i>
		                  			</p>
		                		</div>
			                	<div class="clearfix distance-text mt-2">
			                		<i class="fa fa-map-marked-alt"></i> 14 Km dari posisimu
			                	</div>
			              	</a>
			            </div>
			            <div class="container">
			              	<a href="food2.php">
			               		<img class="img-fluid" src="assets/img/warung-asela.jpg" alt="kuliner2">
					            <h5 class="s-img-title">Warung Asela</h5>
				              	<div class="icon-blue"><i class="fa fa-map-marker-alt"></i>Sampang</div>
					            <div class="mt-2">
					              	<p style="color: orange">
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					             	    <i class="fas fa-star"></i>
		                  			</p>
		                		</div>
			                	<div class="clearfix distance-text mt-2"><i class="fa fa-map-marked-alt"></i> 73 Km dari posisimu</div>
			        		</a>
			            </div>
		            	<div class="container">
		              		<a href="food3.php">
		                		<img class="img-fluid" src="assets/img/kaldu-kokot.jpg" alt="kuliner3">
				                <h5 class="s-img-title">Kaldu Kokot 76 Khas Pamekasan</h5>
				                <div class="icon-blue"><i class="fa fa-map-marker-alt"></i>Pamekasan</div>
				                <div class="mt-2">
				                  	<p style="color: orange">
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
				                  	</p>
				                </div>
				                <div class="clearfix distance-text mt-2"><i class="fa fa-map-marked-alt"></i> 84 Km dari posisimu</div>
				            </a>
				        </div>
		            	<div class="container">
		              		<a href="food4.php">
				                <img class="img-fluid" src="assets/img/kaldu-sumenep.jpg" alt="kuliner4">
				                <h5 class="s-img-title">Warung Ibu Adnan Kaldu Kokot</h5>
				                <div class="icon-blue"><i class="fa fa-map-marker-alt"></i>Sumenep</div>
				                <div class="mt-2">
					                <p style="color: orange">
					                	<i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					                    <i class="fas fa-star"></i>
					                </p>
			                	</div>
			                	<div class="clearfix distance-text mt-2"><i class="fa fa-map-marked-alt"></i> 127 Km dari posisimu</div>
			              	</a>
			            </div>
          			</div>
        		</div>
    		</div>
		    <div class="row section-slide">
		        <div class="col-md-12">
		          	<div class="img-container">
		            	<img src="assets/img/news/giliyang.jpg" alt="artikel" class="img-fluid">
		            	<div class="after-img">
		              		<div class="container">
		                		<div class="row">
		                  			<div class="col-md-12">
		                  				<h3>Gili Iyang, Pulau di Sumenep dengan Kadar Oksigen Tertinggi di Indonesia</h3>
		                    			<a href="artikel-terbaik.php" class="btn btn-info">Selengkapnya</a>
		                  			</div>
		                  			<div class="col-md-4"></div>
		                		</div>
		              		</div>
		            	</div>
		          	</div>
		        </div>
		    </div> 
	      	<div class="row section-slide">
	        	<div class="col-md-9 col-12">
	          		<h3 class="section-title">Wisata di Madura</h3>
	          		<p class="caption-title">Hilangkan semua penatmu, mari bersatu dengan alam</p>
	        	</div>
	        	<div class="col-md-3 col-12">
	          		<div class="text-right mt-4 see-all"><a href="wisata-terbaik.php">Lihat Semuanya</a>
	          	</div>
	        </div>
	        <div class="col-md-12">
	          	<div class="s-slider" data-slick='{"slidesToShow": 4, "slidesToScroll": 4}' style="display: none">
	            	<div class="slide-container">
	              		<a href="wisata1.php">
	                		<img class="img-fluid" src="assets/img/wisata/danaubiru.jpg" alt="wisata1">
	                		<h5 class="s-img-title">Danau Biru Jaddih</h5>
	                		<span class="icon-blue"><i class="fa fa-map-marker-alt"></i>Bangkalan</span>
	                		<div class="mt-2">
	                  			<p style="color: orange">
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
	                  			</p>
	                		</div>
	                		<div class="clearfix distance-text mt-2">
	                			<i class="fa fa-map-marked-alt"></i> 9,5 Km dari posisimu
	                		</div>
	              		</a>
	            	</div>
	            	<div class="slide-container">
		              	<a href="#">
			                <img class="img-fluid" src="assets/img/wisata/air-terjun-toroan-sampang.jpg" alt="wisata2">
			                <h5 class="s-img-title">Air Terjun Toroan</h5>
			                <span class="icon-blue"><i class="fa fa-map-marker-alt"></i>Sampang</span>
			                <div class="mt-2">
				                <p style="color: orange">
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                </p>
		                	</div>
	                		<div class="clearfix distance-text mt-2">
	                			<i class="fa fa-map-marked-alt"></i> 72 Km dari posisimu
	                		</div>
	              		</a>
	            	</div>
		            <div class="slide-container">
			            <a href="#">
			                <img class="img-fluid" src="assets/img/wisata/pantai-jumiang.jpg" alt="wisata3">
			                <h5 class="s-img-title">Pantai Jumiang</h5>
			                <span class="icon-blue"><i class="fa fa-map-marker-alt"></i>Pamekasan</span>
			                <div class="mt-2">
				                <p style="color: orange">
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                </p>
			                </div>
			                <div class="clearfix distance-text mt-2">
			                	<i class="fa fa-map-marked-alt"></i> 92 Km dari posisimu
			                </div>
			            </a>
		            </div>
		            <div class="slide-container">
		              	<a href="#">
			                <img class="img-fluid" src="assets/img/wisata/pantai-sembilan-sumenep-madura-cantik.jpg" alt="">
			                <h5 class="s-img-title">Pantai Sembilan</h5>
			                <span class="icon-blue"><i class="fa fa-map-marker-alt"></i>Sumenep</span>
			                <div class="mt-2">
			                  	<p style="color: orange">
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
				                    <i class="fas fa-star"></i>
			                  	</p>
			                </div>
		                	<div class="clearfix distance-text mt-2">
		                		<i class="fa fa-map-marked-alt"></i> 133 Km dari posisimu
		                	</div>
		              	</a>
		            </div>
		        </div>
	        </div>
    	</div>
	    <div class="row section-slide">
	        <div class="col-md-12">
	          	<div class="img-container">
	            	<img src="assets/img/itinerary/IMG_20190616125411_6840.jpg" class="img-fluid">
	            	<div class="after-img">
	              		<div class="container">
	                		<div class="row">
	                  			<div class="col-md-12">
	                    			<h3>Goa Pote, Wisata Instagenic Bangkalan yang Tak Pernah Sepi Turis</h3>
	                    			<p> Apa yang terlintas di pikiran Teman Traveler ketika mendengar nama Kabupaten Bangkalan? Goa Pote? Jika memang begitu, kalian tak salah. Dalam beberapa tahun terakhir goa ini memang jadi objek wisata primadona di wilayah setempat. Pemandangan di sekitarnya sangat Instagramable, padahal hanya terbentuk dari bekas tambang kapur[…]</p>
	                    			<a href="itinerari-terbaik.php" class="btn btn-info">Selengkapnya</a>
	                  			</div>
	                  			<div class="col-md-4"></div>
	                		</div>
	              		</div>
	            	</div>
	          	</div>
	        </div>
	    </div>
	    <div class="row section-slide">
	        <div class="col-md-12">
		        <h3 class="section-title">Jelajahi Madura</h3>
		        <p class="caption-title">Pengalaman untuk melihat sisi baru Madura</p>
	        </div>
	        <div class="col-md-6">
	          	<a href="obyekwisata.php">
	            	<img src="assets/img/wisata/pantai9.jpeg" class="img-fluid ov-img" alt="obyekwisata">
	            	<div class="overlay-bg">
	              		<h3>Wisata</h3>
	              		<p>Madura</p>
	            	</div>
	          	</a>
	        </div>
	        <div class="col-md-6">
	          	<a href="kuliner.php">
	            	<img src="assets/img/kuliner/bebek-sinjay.jpg" class="img-fluid ov-img" alt="kuliner">
	            	<div class="overlay-bg">
	              		<h3>Kuliner</h3>
	              		<p>Madura</p>
	            	</div>
	          	</a>
	        </div>
	   	</div>
    </div>
    
    <div class="modal animated fadeInDown" id="searchModal" style="display: none;" aria-hidden="true">
	    <div class="modal-dialog modal-xl">
	        <div class="modal-content">
	          	<div class="modal-body">
	            	<div class="area-form-search">
	             		<div class="row">
	                		<div class="col-md-12">
	                  			<h5 class="mb-1 title">Ayo Traveling Sekarang!</h5>
	                  			<span class="text-color">Luangkanlah waktumu untuk berlibur!</span>
	                  			<hr>
	                		</div>
	                		<div class="col-md-5">
	                  			<div class="input-group">
	              					<input type="search" placeholder="Cari di Travelingyuk!" aria-label="Cari di Travelingyuk!" autocomplete="off" class="from-control any-search">
	                  			</div>
	                		</div>
	                		<div class="col-md-5">
	                  			<div class="input-group">
	                    			<input type="search" placeholder="Tulis Kota Tujuanmu" aria-label="Tulis Kota Tujuanmu" autocomplete="off" class="from-control">
	                  			</div>
	                		</div>
	              		</div>
	              		<div class="col-md-2">
	                		<button class="btn btn-info btn-block m-btn-cari">Cari</button>
	              		</div>
	            	</div>
	          	</div>
	        </div>
	    </div>
	</div>
  	</div>

	<?php include "tmp_footer.php";?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script type="text/javascript" src="assets/js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/bootstrap/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/jquery.lazy.js"></script>
    <script type="text/javascript">
    $(function () {
        $('#app img,#app .background-img,#app .area-banner').lazy({
            afterLoad: function (element) {
                let getClassName = element.attr('class');
                var img = element.css("background-image");
                if (getClassName === 'background-img') {
                    var gradient = "linear-gradient(180deg, rgba(255, 255, 255, 0) 0%,rgba(255, 255, 255, 1) 100%),";
                    element.css("background-image", gradient + img);
                }
                if (getClassName === 'area-banner') {
                    var gradient = "linear-gradient(0deg,rgba(0,0,0,0.3),rgba(0,0,0,0.3)),";
                    element.css("background-image", gradient + img);
                }
            },
            onError: function (element) {
                console.log('error loading ' + element.data('src'));
                element.attr("src", window.app.asset_url + 'images/no-image.png');
            }
        });
    });
    </script>

    <script type="text/javascript" src="assets/slick/slick.js"></script>
    <script type="text/javascript">
    $(function(){
      var header=$('.sub-header');
      var formHeader=$('.form-header');
      header.hide();
      formHeader.hide();
      $(window).scroll(function(){
        var scroll=$(this).scrollTop();
        if(scroll>500){header.fadeIn();formHeader.fadeIn();}
        else{header.fadeOut();formHeader.fadeOut();}
      });
      $('.s-slider,.h-slider',).on('init',function(slick){
        $('.s-slider,.h-slider').fadeIn(1000);}).slick({lazyLoad:'ondemand',
        infinite:false,responsive:[{breakpoint:1024,settings:{slidesToShow:2,slidesToScroll:2,infinite:true}},
        {breakpoint:600,settings:{slidesToShow:2,slidesToScroll:1}},{breakpoint:480,settings:{slidesToShow:1,slidesToScroll:1}}],
        nextArrow:`<button class="s-arrow-right  slick-next"><i class="fa fa-angle-right"></i></button>`,prevArrow:`<button class="s-arrow-left slick-prev"><i class="fa fa-angle-left"></i></button>`});});
    </script>
</body>
</html>