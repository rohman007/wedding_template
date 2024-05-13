<!DOCTYPE html>
<html lang="en">
<?php
require 'config.php';

$photo_pria = "man.png";
$photo_wanita = "woman.png";
$inisial_pria = "R";
$nama_pria = "Ramadhan";
$namalengkap_pria = "Ramadhan Arya";
$bpk_pria = "Muhammad Fadil";
$ibu_pria = "Maryati";
$inisial_wanita = "C";
$nama_wanita = "Citra";
$namalengkap_wanita = "Citra Ayu Anggreini";
$bpk_wanita = "Ahmad Fatoni";
$ibu_wanita = "Rokayah";

$hari = array(
	'Sun' => 'Minggu',
	'Mon' => 'Senin',
	'Tue' => 'Selasa',
	'Wed' => 'Rabu',
	'Thu' => 'Kamis',
	'Fri' => 'Jumat',
	'Sat' => 'Sabtu'
);

$bulan = array(
	'Jan' => 'Januari',
	'Feb' => 'Februari',
	'Mar' => 'Maret',
	'Apr' => 'April',
	'May' => 'Mei',
	'Jun' => 'Juni',
	'Jul' => 'Juli',
	'Aug' => 'Agustus',
	'Sep' => 'September',
	'Oct' => 'Oktober',
	'Nov' => 'November',
	'Dec' => 'Desember'
);
$countdown_akad = "10/01/2025";
$lokasi_akad = "Kediaman Mempelai Wanita";
$tgl_akad = "Sabtu, 10 Januari 2025";
$jam_akad = "Pukul 11.00 - selesai";
$alamat_akad = "Jl. Hasanuddin 1 No 1, Bandung";
$link_akad = "#";


$countdown_resepsi = "11/01/2025";
$lokasi_resepsi = "Hotel Hilton<br/>Ballroom Amethys IIA";
$tgl_resepsi = "Minggu, 11 Januari 2025";
$jam_resepsi = "Pukul 11.00 - selesai";
$alamat_resepsi = "Jl. Hasanuddin 1 No 1, Bandung";
$link_resepsi = "#";

$link_map ="https://maps.google.com";
$link_live ="#";
	
$story = array (
  array("story1.webp",'"First Sight"',"Pertemuan dimulai dari acara di kampus UI. Deta yang berasal dari Fakultas Ilmu keperawatan, dan Fandi berasal dari Fakultas Teknik. Keduanya dipertemukan dalam acara kepanitiaan Olimpiade UI 2019."),
  array("story2.webp",'"Memorable Date"',"Setelah acara kepanitiaan selesai, hubungan keduanya hanya terjalin sebatas saling follow akun Instagram. Namun di tahun ini, Fandi mulai melakukan pendekatan dengan menghubungi Deta secara intens."),
  array("story3.webp",'"Cute Relationship"',"Setelah lulus kuliah, percakapan via chat dari 2017 hingga 2019 berlangsung cukup intens, hingga akhirnya memutuskan untuk bersama berkomitmen di Bulan Januari 2021."),
  array("story4.webp",'I said "Yes"',"Hingga pada akhirnya Fandi menyatakan dan memantapkan hatinya untuk menjalin hubungan yang lebih serius dan melamar Deta pada 10 Oktober 2022."),
);

$link_filterIG = "https://instagram.com";

$rundown = array (
  array("09:00",'Persiapan<br/>Pengantin bersiap memasuki Ballroom'),
  array("09:30",'Memasuki Ruang Acara Pengantin memasuki Ballroom menuju pelaminan'),
  array("09:45",'Makan & Foto Bersama Para tamu undangan dipersilahkan makan dan dapat berfoto bersama di pelaminan'),
  array("11:00",'Beauty shoot Sesi foto pengantin dibimbing oleh Fotografer'),
  array("12:00",'Istirahat Ganti Kostum'),
  array("13:00",'Memasuki Ruangan Pengantin memasuki ruangan dengan kostum baru'),
  array("13:30",'Makan & Foto Bersama Para tamu undangan dipersilahkan makan dan dapat berfoto bersama di pelaminan'),
  array("16:00",' Acara Selesai'),
);
?>
<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Undangan Pernikahan <?php echo $nama_wanita ?> & <?php echo $nama_pria ?>" />
<meta name="author" content="SelembarDaun" />

<!-- Page Title -->
<title><?php echo $nama_wanita; ?> & <?php echo $nama_pria; ?></title>

<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Stylesheet -->
<link href="css/splide.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/animate.min.css" />
<link rel="stylesheet" href="css/magnific-popup.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css?v=<?php echo rand() ?>" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</head>
<body id="fullpage" oncontextmenu="return false;">
<div class="loading-screen" id="loading-screen">
  <div class="loading-bar">
    <div class="percentage" id="percentage">0%</div>
	<div class="bg-percentage animate__animated animate__pulse animate__slower"></div>
	For a better experience use Google Chrome and turn off Night/Dark Mode feature.
  </div>
</div>
<!--Music-->
<audio id="background-music" autoplay loop> 
	<source src="music.mp3"  type="audio/mp3"> 
</audio>
<div id="wrapper" class="clearfix content">
<div>
	<div id="song-button" >
		<button class="pause-song" onclick="pause()" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72.719 104.978" class="w-4 h-4"><path d="M66.829 66.763a43.6 43.6 0 0 0 5.847-19.2 26.8 26.8 0 0 0-2.827-13.317c-3.319-6.8-9.021-10.62-14.529-14.311-4.111-2.754-8-5.354-10.741-9.069l-.491-.659c-1.623-2.181-3.457-4.652-3.747-6.727A4.083 4.083 0 0 0 36.059.007a4.027 4.027 0 0 0-3.755 4.022v71.957a23.362 23.362 0 0 0-12.116-3.312c-11.129 0-20.19 7.244-20.19 16.152s9.061 16.152 20.19 16.152 20.19-7.244 20.19-16.152V41.759a29.068 29.068 0 0 1 18.72 22.007 22.771 22.771 0 0 1-1.559 2.2 4.034 4.034 0 0 0 6.057 5.33 30.021 30.021 0 0 0 2.964-4.167 2.542 2.542 0 0 0 .266-.371Z"></path></svg></button>
		<button class="play-song" onclick="play()" type="button"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64.469 80.454" class="w-4 h-4"><path data-name="Path 1083" d="M22.412 69.248a11.207 11.207 0 0 1-11.206 11.206A11.207 11.207 0 0 1 0 69.248V11.206A11.207 11.207 0 0 1 11.206 0a11.207 11.207 0 0 1 11.206 11.206Z"></path><path data-name="Path 1084" d="M64.469 69.248a11.207 11.207 0 0 1-11.206 11.206 11.207 11.207 0 0 1-11.206-11.206V11.206A11.209 11.209 0 0 1 53.263 0a11.207 11.207 0 0 1 11.206 11.206Z"></path></svg></button>
	</div>

	<section id="cover" class="cover-section">
		<div class="position-absolute inset-0 w-100 h-100">
			<video autoplay="true" muted="muted" loop playsinline preload="metadata" class="object-fit-cover w-100 h-100 autoplay-video" style="opacity: 1;" id="cover-video">
				<source src="images/cover-bg.mp4" type="video/mp4">
			</video>
		</div>
		<div class="content-cover">    
			<div id="block-cover" >
				<div class="label-cover animate__animated animate__slower animate__fadeInDown">THE WEDDING OF</div>
				<div id="nama-catin" class="animate__animated animate__slower animate__fadeInDown">
					<span class="namapria"><?php echo $nama_pria; ?></span><br/>
					<span class="namawanita"><?php echo $nama_wanita; ?></span>
				</div>
			</div>
			<div id="kepada">
				<label class="animate__animated animate__slower animate__fadeInUp">Kepada Yth</label>
				<h3 class="namaundangan animate__animated animate__slower animate__fadeInUp">
					<?php
						if(isset($_GET['to'])){
							$kepada = str_replace("-", " ", $_GET['to']);
							echo $kepada;
						} else {
							echo "Bapak /Ibu Tamu Undangan";
						}
					?>
				</h3>
			</div>
			<button class="open-invitation btn btn-primary animate__animated animate__slower animate__fadeInUp" onclick="play()" type="button" id="fullscreenBtn">Buka Undangan</button>
		</div>
	</section>
	<div class="splide" id="vertical-slider">
        <div class="splide__track">
            <ul class="splide__list">
                <li class="splide__slide">
					<section id="cover" class="hero-section h-100 section">
						<div class="position-absolute inset-0 w-100 h-100">
							<video  autoplay="true" muted="muted" loop playsinline preload="metadata" class="object-fit-cover w-100 h-100 autoplay-video" style="opacity: 1;">
								<source src="images/cover-bg.mp4" type="video/mp4">
							</video>
						</div>
						<div class="content-cover">
							<div id="block-cover" >
								<div class="label-cover animatedDown animate__slower">THE WEDDING OF</div>
								<div id="nama-catin" class="animatedDown animate__slower">
									<span class="namapria"><?php echo $nama_pria; ?></span><br/>
									<span class="namawanita"><?php echo $nama_wanita; ?></span>
								</div>
							</div>
							<div id="kepada">
								<label class="animatedUp animate__slower">Kepada Yth</label>
								<h3 class="namaundangan animatedUp animate__slower">
									<?php
										if(isset($_GET['to'])){
											$kepada = str_replace("-", " ", $_GET['to']);
											echo $kepada;
										} else {
											echo "Bapak /Ibu Tamu Undangan";
										}
									?>
								</h3>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide">
					<section id="opening" class=" section">
						<div class="position-absolute inset-0 w-100 h-100">
							<video  muted="muted" loop playsinline preload="metadata" class="object-fit-cover w-100 h-100 autoplay-video" style="opacity: 1;" id="autoplayVideo">
								<source src="images/section2-bg.mp4" type="video/mp4">
							</video>
						</div>
						<div class="container position-relative">
							<div class="row text-opening">
								<div class="col-12">
									<h1 class="page-header animatedUp animate__slower">Assalamu'alaikum Wr.Wb.</h1>
								</div>
								<div class="col-12 animatedUp animate__slower">
									<p>Tanpa mengurangi rasa hormat, kami bermaksud mengundang Bapak/ Ibu/ Saudara/ I pada acara resepsi pernikahan kami.</p>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide">
					<section id="quran" class=" section">
						<div class="position-absolute inset-0 w-100 h-100">
							<video  autoplay="true" muted="muted" loop playsinline preload="metadata" class="object-fit-cover w-100 h-100 autoplay-video" style="opacity: 1;">
								<source src="images/section3-bg.mp4" type="video/mp4">
							</video>
						</div>
						<div class="container position-relative">
							<div class="row px-4">
								<div class="col-12">
									<h1 class="page-header animatedDown animate__slower">Q.S. Ar Rum: 21</h1>
								</div>
								<div class="col-12 animatedUp animate__slower">
									<p>Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang. Sungguh, pada yang demikian itu benar-benar terdapat tanda-tanda (kebesaran Allah) bagi kaum yang berpikir. </p>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide">
					<section id="couple" class="h-100 d-flex align-items-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section4-bg.png" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container">						
						<div class="section-content-couple">
							<div class="row">
								<div class="col-12 text-center">
									<div class="nama-lengakap-pengantin animatedDown animate__slower"  ><?php echo $namalengkap_wanita; ?></div>
									<div class="keluarga-block animatedDown animate__slower">
										<span>Putri dari</span>
										Bapak <?php echo $bpk_wanita; ?><br/>
										dan Ibu <?php echo $ibu_wanita; ?>
									</div>
									<a href="" class="ig-link mt-3 animatedDown animate__slower">
										<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
										citraayu777
									</a>
								</div>
							</div>
							<div class="row mt-4 mb-4">
								<div class="col-6">
								  <div class="image-mempelai animatedLeft animate__slower">
									<img src="images/memp1.jpg">
								  </div>
								</div>
								<div class="col-6">
								  <div class="image-mempelai animatedRight animate__slower">
									<img src="images/memp2.jpg">
								  </div>
								</div>
							</div>
							<div class="row">
								<div class="col-12 text-center">
									<div class="nama-lengakap-pengantin animatedUp animate__slower" ><?php echo $namalengkap_pria; ?></div>
									<div class="keluarga-block animatedUp animate__slower"  >
										<span>Putra dari</span>
										Bapak <?php echo $bpk_pria; ?><br/>
										dan Ibu <?php echo $ibu_pria; ?>
									</div>
									<a href="" class="ig-link mt-3 animatedUp animate__slower">
										<svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram " role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>
										ramahdanarya_
									</a>
								</div>
							</div>
						</div>
					  </div>
					</section>
				</li>
                <li class="splide__slide">
					<section id="event" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section5-bg.png" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container">
							<div class="section-content">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="content-event">
									<div class="list-event" >
										<h2 class="animatedRight animate__slower">Akad Nikah</h2>
										<p class="animatedRight animate__slower">
											<?php echo $tgl_akad ?><br/>
											<?php echo $jam_akad ?>
										</p>
										<p class="mt-3 mb-4 animatedRight animate__slower">
											<?php echo $lokasi_akad ?><br/>
											<?php echo $alamat_akad ?>
										</p>
										<div id="timer-akad" class="countdown animate__slower animatedZoom"></div>
										<a href="<?php echo $link_akad ?>" class="btn btn-primary animate__slower animatedUp" >Add to Calendar</a>
									</div>
								</div>
								</div>
							</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide">
					<section id="event" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section6-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container">
							<div class="section-content">
							<div class="row">
								<div class="col-xs-12 col-sm-12 col-md-12">
								<div class="content-event">
									<div class="list-event mt-1" >
										<h2 class="animatedZoom animate__slower">Resepsi</h2>
										<p class="animatedZoom animate__slower">
											<?php echo $tgl_resepsi ?><br/>
											<?php echo $jam_resepsi ?>
										</p>
										<p class="mt-3 mb-4 animatedZoom animate__slower">
											<?php echo $lokasi_resepsi ?><br/>
											<?php echo $alamat_resepsi ?>
										</p>
										<div id="timer-resepsi" class="countdown animate__slower animatedUp"></div>
										<a href="<?php echo $link_resepsi ?>" class="btn btn-primary animate__slower animatedUp" >Add to Calendar</a>
									</div>
								</div>
								</div>
							</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="lokasi" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section7-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative">
							<div class="row">
								<div class="col-12">
									<div class="list-event mt-1 text-center">
										<h2 class="animatedDown animate__slower">Lokasi Acara</h2>
										<p class="animatedDown animate__slower">
											<?php echo $alamat_resepsi ?>
										</p>
										<div class="embed-block animatedZoom animate__slower">
											<iframe width="820" height="560" id="gmap_canvas" src="https://maps.google.com/maps?q=3JGP%2B4F%20Cibangkong%2C%20Bandung%20City%2C%20West%20Java&z=18&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
										</div>
										<a href="<?php echo $link_map ?>" class="btn btn-primary mt-4 animate__slower animatedUp" >Petunjuk Lokasi</a>
									</div>
								</div>

							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="live" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section8-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative">
							<div class="row">
								<div class="col-12">
									<div class="list-event mt-1 text-center">
										<h2 class="animatedDown animate__slower mb-4">Lokasi Acara</h2>
										<p class="animatedDown animate__slower  w-75 mx-auto">
										Saksikan acara pernikahan kami secara virtual yang InshaAllah akan disiarkan langsung melalui akun instagram atau silahkan join melalui zoom berikut ini:
										</p>
										<div class="animatedUp animate__slower">
										<a href="<?php echo $link_live?>" class="btn btn-primary mt-3 mb-2 animate__slower animatedZoom" >Join Live Streaming</a>
										<p>
											Instagram: @rifgiajaah<br/>
											Zoom Meeting ID: 745413<br/>
											Password: RifgiTika<br/>
										</p>
										</div>
									</div>
								</div>

							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="gallery" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section9-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative">
							<div class="row">
								<div class="col-sm-12">
									<h1 class="page-title" >Galeri Foto</h1>
									<div class="foto-wrapper d-flex justify-content-center">
										<div class="small-photo animatedLeft animate__slower">
											<a class="test-popup-link"  href="foto/gallery1.webp"><img src="foto/gallery1.webp"></a>
											<a class="test-popup-link"  href="foto/gallery2.webp"><img src="foto/gallery2.webp"></a>
										</div>
										<div class="single ms-2 animatedRight animate__slower">
											<a class="test-popup-link"  href="foto/gallery3.webp"><img src="foto/gallery3.webp"></a>
										</div>
									</div>
									<div class="foto-wrapper d-flex justify-content-center">
										<div class="single me-2 animatedZoom animate__slower">
											<a class="test-popup-link"  href="foto/gallery4.webp"><img src="foto/gallery4.webp"></a>
										</div>
										<div class="small-photo">
											<a class="test-popup-link animatedZoom animate__slower"  href="foto/gallery5.webp"><img src="foto/gallery5.webp"></a>
											<a class="test-popup-link animatedZoom animate__slower"  href="foto/gallery6.webp"><img src="foto/gallery6.webp"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="gallery" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section10-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative">
							<div class="row">
								<div class="col-sm-12 px-4">
									<h1 class="page-title animatedDown animate__slower" >Our Video</h1>
									<div class="embed-block animatedZoom animate__slower">
										<iframe width="560" height="315" src="https://www.youtube.com/embed/IgASxoB58QU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
									<div class="w-75 mx-auto mt-4 text-center animatedUp animate__slower">
									Jika melangkah tingkat tertinggi beruntunglah yang tetap bertahan dan menjadikan cinta hanya ujian dan kesabaran sebagai penjaganya.
									</div>
								</div>
							</div>
						</div>
					</section>
				</li>
				
                <li class="splide__slide ">
					<section id="story" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section11-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative">
							<div class="row">
								<div class="col-sm-12 px-4 text-center">
									<h1 class="page-title animatedUp animate__slower" >Kisah Cinta</h1>
									<div class="w-75 mx-auto mt-4 text-center animatedZoom animate__slower">
										<p>I love you today, tomorrow, forever.<br/>
										I love you the most. I'm wearing<br/>
										the smile you gave me.</p>
										<p>
										The best things in life are<br/>
										better with you. </p>
									</div>
									<button type="button" class="btn btn-primary mt-3 animate__slower animatedUp toggleAutoplay" onclick="togglestory()">Lihat perjalanan cinta kami</button>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="extra-section" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section12-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative">
							<div class="row">
								<div class="col-sm-12 px-4 mt-5 text-center">
									<h2 class="page-title animatedZoom animate__slower mb-3" >Filter IG</h2>
									<div class="w-75 mx-auto mt-3 mb-3 text-center animatedUp animate__slower">
										Abadikan momen</br>
										istimewa kami dengan</br>
										Filter Instagram</br>
										yang disediakan
									</div>
									<a href="<?php echo $link_filterIG?>" class="btn btn-primary mt-3 mb-0 animate__slower animatedUp" >Coba Filter Kami</a>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="rundown" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section13-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative">
							<div class="row">
								<div class="col-sm-12 px-4">
									<h2 class="page-title animatedDown animate__slower mb-4 pb-2" >Rundown Acara</h2>
									<div class="w-75 mx-auto mt-3 mb-0 text-center animatedUp animate__slower">
										<?php
											foreach ($rundown as $item) {

												echo '
												<p class="mb-3 text-center">
													'.$item[0].' - '.$item[1].'
												</p>
												';
											}
										?>
									</div>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="doa" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section14-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative">
							<div class="row">
								<div class="col-sm-12 px-4">
									<h2 class="page-title animatedDown animate__slower mb-4 pb-2" >Doa untuk<br/>Pengantin</h2>
									<div class="w-75 px-4 mx-auto mt-3 mb-0 text-center animatedZoom animate__slower fw-semibold">
										<p class="mb-4">"Semoga Allah</br>
										memberkahi di waktu bahagia
										dan memberkahimu di waktu
										susah, dan mengumpulkan
										kalian berdua dalam
										kebaikan"</p>

										~ HR. Abu Daud ~
									</div>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="kolomucapan" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section15-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative">
							<div class="row justify-content-center"> 
								<div class="col-10">
									<h2 class="page-title animatedDown animate__slower mb-4 pb-2">Kirim Ucapan</h2>
									<div class="comment-list">
										<div id="block-comment" class="animatedZoom animate__slower">
											<div id="commentsContainer"></div>
										</div>
										<button type="button" class="btn btn-primary mt-3 animate__slower animatedUp w-100 py-2 rounded-2 toggleAutoplay" onclick="togglecomment()">Kirim Ucapan + RSVP</button>
									</div>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="kado" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section16-bg.webp" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative">
							<div class="row">
								<div class="col-sm-12 px-2 px-sm-4  text-center">
									<h2 class="page-title animatedDown animate__slower mb-4" >Kirim Hadiah</h2>
									<div class="w-75 mx-auto px-4 mb-0 text-center animatedZoom animate__slower">
										<p>Doa Restu Anda merupakan karunia yang sangat berarti bagi kami. </p>
										<p>Namun jika Anda ingin memberikan  hadiah kami sediakan fitur berikut:</p>
									</div>
									<button type="button" class="btn btn-primary mt-3 animate__slower animatedUp py-2 toggleAutoplay" onclick="toggleangpao()">Kirim Angpao</button><br/>
									<button type="button" class="btn btn-primary mt-3 animate__slower animatedUp py-2 toggleAutoplay" onclick="togglekado()">Kirim Kado</button>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="protokol" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section17-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative text-center w-75">
							<div class="row">
								<div class="col-sm-12 px-4 animatedDown animate__slower">
									<h2 class="page-title mb-3" >Protokol Kesehatan</h2>
									<div class="mb-4">
									Kami menghimbau Bapak/Ibu/Saudara/i </br>
									tamu undangan agar tetap memperhatikan
									protokol kesehatan.
									</div>
								</div>
								<div class="col-6 mb-4 pb-2 animatedLeft animate__slower">
									<img src="images/protokol1.webp" class="img-protokol">
									<div class="">Memakai masker</div>
								</div>
								<div class="col-6 mb-4 pb-2 animatedRight animate__slower">
									<img src="images/protokol2.webp" class="img-protokol">
									<div class="">Mencuci tangan</div>
								</div>
								<div class="col-6 mb-4 pb-2 animatedLeft animate__slower">
									<img src="images/protokol3.webp" class="img-protokol">
									<div class="">Menjaga jarak</div>
								</div>
								<div class="col-6 mb-4 pb-2 animatedRight animate__slower">
									<img src="images/protokol4.webp" class="img-protokol">
									<div class="">Mengurangi interkasi</div>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="contact" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100 top-0">
							<img src="images/section18-bg.jpg" class="w-100 h-100 object-fit-cover ">
						</div>
						<div class="container position-relative text-center w-75">
							<div class="row">
								<div class="col-sm-12 px-4 animatedDown animate__slower">
									<h2 class="page-title mb-3 animatedDown animate__slower" >Contact Person</h2>
									<div class="mb-4 animatedDown animate__slower">
									Hubungi contact person kami<br/>jika ada hal yang ingin ditanyakan
									</div>
								</div>
								<div class="col-12 mb-4 pb-2">
									<img src="images/contact1.webp" class="img-contact animatedLeft animate__slower">
									<div class="contactname animatedLeft animate__slower">Surya Artagraha, S.H. </div>
									<a href="https://wa.me/6289712345678" class="btn btn-primary mt-2 py-2 animatedLeft animate__slower">0897 1234 5678</a>
								</div>
								<div class="col-12 mb-0 pb-0">
									<img src="images/contact2.webp" class="img-contact animatedRight animate__slower">
									<div class="contactname animatedRight animate__slower">Susi Susanti Namira</div>
									<a href="https://wa.me/6289712345678" class="btn btn-primary mt-2 py-2 animatedRight animate__slower">0897 1234 5678</a>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide ">
					<section id="thankyou" class="h-100 d-flex align-items-center justify-content-center section">
						<div class="position-absolute inset-0 w-100 h-100">
							<video autoplay="true" muted="muted" loop playsinline preload="metadata" class="object-fit-cover w-100 h-100 autoplay-video" style="opacity: 1;" id="cover-video">
								<source src="images/section19-bg.mp4" type="video/mp4">
							</video>
						</div>
						<div class="container position-relative text-center w-75">
							<div class="row">
								<div class="col-12 px-4">
									<div class="mb-4 animatedDown animate__slower">
										Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/Ibu/Saudara/i, berkenan hadir dan memberikan doa restu kepada kedua mempelai.
									</div>
									<div class="animatedUp animate__slower">Hormat kami yang berbahagia.</div>
									<div id="nama-catin" class="animatedZoom animate__slower">
										<span class="namapria"><?php echo $nama_pria; ?></span> & 
										<span class="namawanita"><?php echo $nama_wanita; ?></span>
									</div>
									<img src="images/separator.webp" class="separator-img animatedZoom animate__slower">
									<div class="animatedZoom animate__slower">
										<div class="text-xs text-white">made with love</div>
										<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.033 32.059" class="mx-auto w-[40%]"><path data-name="Path 1" d="M9.286 31.456c5.817 0 9.286-2.521 9.286-6.722 0-4.8-4.4-5.537-8.015-6.14-2.607-.452-4.848-.819-4.848-2.65 0-1.508 1.336-2.413 3.577-2.413 2.37 0 3.706 1.228 3.706 3.383h5.02c0-4.244-3.253-6.722-8.726-6.722-5.494 0-8.747 2.327-8.747 6.184 0 4.675 4.244 5.386 7.778 5.947 2.693.452 5.085.862 5.085 3.016 0 1.7-1.508 2.693-4.115 2.693-2.693 0-4.266-1.336-4.266-3.62H0c0 4.437 3.426 7.044 9.286 7.044Zm27.858-13.854h-.086c0-4.654-2.736-7.412-7.282-7.412-5.128 0-8.144 3.943-8.144 10.622s3.016 10.622 8.144 10.622c4.568 0 7.282-2.779 7.282-7.455h.086v7.045h5.386V10.578h-5.386v7.024Zm-4.891 9.568c-3.253 0-5.171-2.37-5.171-6.356s1.918-6.4 5.171-6.4 5.171 2.607 5.171 6.4c0 3.747-1.917 6.356-5.171 6.356ZM60.672 10.6H49.425v-.086c3.253-.6 5.214-2.435 5.214-5.042V3.77h-5.386v6.851H46v3.706h2.93v10.557c0 4.158 2.564 6.593 6.916 6.593a11.256 11.256 0 0 0 4.438-.926v-3.986a5.831 5.831 0 0 1-2.736.646c-2.047 0-3.253-1.1-3.253-3.016v-9.846h6.355v-3.706Zm16.741 11.031c0 3.512-1.594 5.537-4.266 5.537-2.413 0-3.835-1.594-3.835-4.352V10.6h-5.387v12.453c0 5.257 2.607 8.381 7 8.381 4.029 0 6.4-2.844 6.4-7.627h.086v7.218H82.8V10.578h-5.388v11.053Z" fill="#fff"></path><path data-name="Path 2" d="M121.407 31.37V0h-5.386v31.37Zm14.91.409c6.679 0 10.622-3.943 10.622-10.622s-3.943-10.622-10.622-10.622-10.665 3.943-10.665 10.622 3.986 10.622 10.669 10.622Zm0-4.266c-3.253 0-5.171-2.37-5.171-6.356s1.917-6.4 5.171-6.4 5.171 2.413 5.171 6.4-1.918 6.356-5.167 6.356Zm23.183 3.512h-.086l-4.675-20.08h-5.752l5.386 20.446h10.148l5.343-20.446h-5.752Zm32.533-9.846c0-6.722-3.749-10.622-10.019-10.622-6.355 0-10.1 3.9-10.1 10.622 0 6.679 3.749 10.622 10.1 10.622 5.538 0 9.287-2.844 10.019-7.692h-5.212a4.6 4.6 0 0 1-4.8 3.62c-2.887 0-4.675-2.2-4.891-5.947h14.909Zm-10.019-6.593c2.693 0 4.438 1.961 4.762 5.386h-9.609c.366-3.425 2.111-5.386 4.847-5.386Z" fill="#fff"></path><path data-name="Path 3" d="M102.103 11.16c6.1-4.611 18.981-.086.431 19.822a3.388 3.388 0 0 1-4.956 0c-18.529-19.929-5.667-24.454.431-19.822a3.33 3.33 0 0 0 4.072 0Z" fill="red"></path></svg>
									</div>
									<div class="text-xs text-white animatedUp animate__slower">Music:</div>
									<div class="text-xs text-white animatedUp animate__slower">10000 Hours Dan Shay feat Justin Bieber</div>
								</div>
							</div>
						</div>
					</section>
				</li>
            </ul>
        </div>
    </div>
	
	<div id="kado-data" class="modal-kado d-none  position-absolute w-100 h-100 top-0 start-0 d-flex align-items-center justify-content-center">
		<button type="button" class="close-form toggleAutoplay" onclick="togglekado()"></button>
		<div class="wrapper-kado animate__animated" id="kado-wrapper">
			<button type="button" class="close-button toggleAutoplay" onclick="togglekado()">×</button>
			<h3 class="mb-4">Kirim Kado</h3>
			<div class="">Kirimkan kado ke alamat:</div>
			<div class="list-alamat mt-4" id="">
				<div id="alamat-copy">
					<p class="mb-1">Ramadhan Arya</p>
					<p class="mb-1">Alamat: Jl. Hasanuddin 1 No 1</p>
					<p>Bandung 44303</p>
				</div>
				<button class="btn btn-primary mt-3 py-2" onclick="copyAlamat()">Copy</button>
			</div>
		</div>
	</div>
	
	<div id="angpao-data" class="modal-kado d-none  position-absolute w-100 h-100 top-0 start-0 d-flex align-items-center justify-content-center">
		<button type="button" class="close-form toggleAutoplay" onclick="toggleangpao()"></button>
		<div class="wrapper-kado animate__animated" id="angpao-wrapper">
			<button type="button" class="close-button toggleAutoplay" onclick="toggleangpao()">×</button>
			<h3>Kirim Angpao</h3>
			<img src="images/qrcode.webp" class="qrcode mt-4 mb-4">
			<div class="list-bank mt-4">
				<img src="images/mandiri.png" class="bank-image">
				<div class="bank-number" id="bank1">1234 56678 9900</div>
				<div class="bank-name">Ramadhan Arya</div>
				<button class="btn btn-primary mt-3 py-2" onclick="copyBank1()">Copy</button>
			</div>
			<div class="list-bank mt-4">
				<img src="images/bni.png" class="bank-image">
				<div class="bank-number" id="bank2">1234 56678 9900</div>
				<div class="bank-name">Citra Ayu Anggreini</div>
				<button class="btn btn-primary mt-3 py-2" onclick="copyBank2()">Copy</button>
			</div>
		</div>
	</div>
	<div id="form-comment" class="d-none position-absolute w-100 h-100 top-0 start-0 d-flex align-items-center justify-content-center">
		<button type="button" class="close-form toggleAutoplay" onclick="togglecomment()"></button>
		<div id="formucapan" class="form-transparent form-text-white animate__animated" >
			<div class="row">
			<div class="col-sm-12">
				<h2>Kirim Ucapan</h2>
				<div class="form-group">
					<input type="text" placeholder="Nama" id="form_name" name="nama" required class="form-control">
				</div>
				<div class="form-group">
					<input type="text" placeholder="No WhatsApp" id="form_wa" name="no_wa" required class="form-control">
				</div>
				<div class="form-group">
					<select name="kehadiran" class="form-control" id="kehadiran" required>
						<option value="">Pilih Kehadiran</option>
						<option value="hadir">Hadir</option>
						<option value="tidak hadir">Tidak Hadir</option>
					</select>
				</div>
				<div class="form-group">
					<select name="qty" class="form-control" id="qty-input">
						<option value="">Jumlah Tamu</option>
						<option value="1">1 orang</option>
						<option value="2">2 orang</option>
						<option value="3">3 orang</option>
						<option value="4">4 orang</option>
					</select>
				</div>
				<div class="form-group">
					<textarea id="form_message" name="isi_komentar" class="form-control required" rows="2" placeholder="Pesan"></textarea>
				</div>
			</div>
			<input type="hidden" id="id_wedding" name="id_wedding" value="<?php echo $id_wedding;?>">
			<?php 
				if(isset($_GET['to'])){
					echo '<input type="hidden" id="to" name="to" value="'.$_GET['to'].'">';
				} else{}
			?>
			<div class="col-sm-12 text-center">
				<div class="form-group mb-0">
				<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
				<button type="submit" class="btn btn-primary w-100 py-2 rounded-2" id="submitButton">Kirim</button>
				</div>
			</div>
			</div>
		</div>
	</div>
	<div id="story-wrapper" class="story-wrapper position-absolute w-100 h-100 d-none text-center">
		<div class="close-story toggleAutoplay"></div>
		<button type="button" class="mfp-close toggleAutoplay" onclick="togglestory()">×</button>
		<div class="splide splide-story">
			<div class="splide__track">
			<ul class="splide__list">
				<?php
					$count = count($story);

					foreach ($story as $index => $item) {
						$navigation = '';
						// Tentukan teks navigasi
						if ($index == 0) {
							$navigation = 'Geser >>';
						} elseif ($index == $count - 1) {
							$navigation = '<< Geser';
						} else {
							$navigation = '<< Geser >>';
						}

						echo '
						<li class="splide__slide">
							<img src="images/'.$item[0].'">
							<div class="title-story">'.$item[1].'</div>
							<div class="desc-story">'.$item[2].'</div>
							<div class="swipe">'.$navigation.'</div>
						</li>
						';
					}
				?>
			</ul>
			</div>
		</div>
	</div>

	<!-- Horizontal Slider with 3 Columns and Centered -->
	<div id="pagination-slider" class="splide">
		<div class="splide__track">
		  <ul class="splide__list">
			<li class="splide__slide" data-splide-y="0">
				<svg height="512pt" viewBox="0 0 512 512.00025" width="512pt" xmlns="http://www.w3.org/2000/svg"  ><path d="m266 492c0 11.046875-8.953125 20-20 20h-226c-11.046875 0-20-8.953125-20-20v-275.332031c0-5.9375 2.636719-11.566407 7.195312-15.363281l236-196.667969c7.417969-6.183594 18.191407-6.183594 25.609376 0l236 196.667969c8.484374 7.070312 9.628906 19.679687 2.558593 28.167968-7.070312 8.484375-19.683593 9.628906-28.167969 2.558594l-223.195312-185.996094-216 180v245.964844h206c11.046875 0 20 8.953125 20 20zm214.339844-54.105469c-21.945313 26.457031-54.714844 50.679688-97.402344 72-5.628906 2.808594-12.246094 2.808594-17.875 0-42.6875-21.320312-75.457031-45.542969-97.398438-72-65.140624-78.527343-19.78125-165.195312 47.335938-165.195312 26.746094 0 46.421875 10.949219 59 21.226562 12.578125-10.277343 32.253906-21.226562 59-21.226562 67.246094 0 112.316406 86.859375 47.339844 165.195312zm-47.339844-125.195312c-27.667969 0-42.191406 20.742187-42.332031 20.949219-8.304688 12.527343-25.816407 11.761718-33.285157.082031-1.226562-1.722657-15.585937-21.03125-42.382812-21.03125-43.109375 0-80.136719 83.078125 59 156.8125 139.136719-73.734375 102.117188-156.8125 59-156.8125zm0 0"></path></svg>
				<div class="text-menu">Opening</div>
			</li>
			<li class="splide__slide" data-splide-y="1">
				<svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m344.984 152c27.57 0 50 22.43 50 50 0 11.046-8.954 20-20 20s-20-8.954-20-20c0-5.514-4.486-10-10-10s-10 4.486-10 10c0 11.046-8.954 20-20 20s-20-8.954-20-20c0-27.57 22.43-50 50-50zm-127 50c0-27.57-22.43-50-50-50s-50 22.43-50 50c0 11.046 8.954 20 20 20s20-8.954 20-20c0-5.514 4.486-10 10-10s10 4.486 10 10c0 11.046 8.954 20 20 20s20-8.954 20-20zm134-150.096c0-29.59 21.495-51.904 50-51.904 12.631 0 22.61 3.346 30.218 8 7.615-4.638 17.496-8 29.782-8 28.505 0 50 22.314 50 51.904 0 30.439-24.594 48.813-44.354 63.578-8.183 6.113-15.911 11.888-20.055 17.044-3.796 4.725-9.53 7.473-15.591 7.473s-11.795-2.749-15.591-7.473c-4.144-5.157-11.872-10.931-20.055-17.044-19.76-14.764-44.354-33.139-44.354-63.578zm40 0c0 10.393 14.385 21.141 28.296 31.534 3.915 2.925 7.884 5.89 11.704 8.975 3.82-3.085 7.789-6.05 11.704-8.975 13.911-10.394 28.296-21.141 28.296-31.534 0-7.677-3.552-11.904-10-11.904-7.779 0-10.962 3.311-11.999 4.805-2.867 7.592-9.751 11.881-17.922 12.059-8.021.158-14.974-5.24-18.259-12.521-.621-.978-3.373-4.343-11.82-4.343-6.448 0-10 4.228-10 11.904zm119.968 372c0 30.486-24.79 48.86-44.709 63.623-8.255 6.118-16.052 11.897-20.233 17.061-3.798 4.688-9.509 7.412-15.542 7.412s-11.744-2.724-15.542-7.412c-4.182-5.164-11.979-10.942-20.233-17.061-19.919-14.764-44.708-33.137-44.708-63.623 0-29.59 21.6-51.904 50.242-51.904 12.744 0 22.804 3.373 30.46 8.056 7.666-4.666 17.626-8.056 30.023-8.056 28.642 0 50.242 22.314 50.242 51.904zm-40 0c0-7.677-3.638-11.904-10.242-11.904-8.902 0-12.126 4.474-12.126 4.475-3.368 7.199-10.654 11.75-18.624 11.519-7.626-.193-14.447-4.703-17.634-11.574-.611-.966-3.407-4.419-12.1-4.419-6.604 0-10.242 4.228-10.242 11.904 0 10.345 14.502 21.093 28.526 31.487 4.001 2.966 8.057 5.972 11.957 9.104 3.9-3.131 7.957-6.138 11.957-9.104 14.026-10.395 28.528-21.143 28.528-31.488zm-355.676-45.377c-8.255 6.118-16.052 11.896-20.233 17.061-3.798 4.688-9.509 7.412-15.543 7.412s-11.744-2.724-15.542-7.412c-4.182-5.163-11.979-10.942-20.233-17.061-19.919-14.763-44.709-33.137-44.709-63.623 0-29.59 21.6-51.904 50.242-51.904 12.744 0 22.804 3.373 30.46 8.056 7.666-4.666 17.626-8.056 30.024-8.056 28.643 0 50.242 22.314 50.242 51.904 0 30.487-24.789 48.86-44.708 63.623zm4.708-63.623c0-7.677-3.638-11.904-10.242-11.904-7.96 0-11.21 3.352-12.269 4.862-2.878 7.566-9.742 11.828-17.894 12.007-8.003.177-14.933-5.216-18.232-12.468-.635-.99-3.45-4.401-12.089-4.401-6.604 0-10.242 4.228-10.242 11.904 0 10.345 14.502 21.093 28.527 31.487 4 2.966 8.057 5.973 11.957 9.104 3.9-3.132 7.956-6.138 11.957-9.104 14.025-10.394 28.527-21.142 28.527-31.487zm86.083 43.431c15.598 5.75 32.056 8.665 48.917 8.665 62.759 0 98.563-40.128 100.057-41.836 7.271-8.315 6.423-20.951-1.893-28.221-8.317-7.27-20.951-6.424-28.221 1.893-.246.282-25.856 28.164-69.943 28.164-12.125 0-23.929-2.085-35.083-6.196-10.36-3.818-21.862 1.483-25.683 11.849-3.82 10.363 1.485 21.862 11.849 25.682zm265.115-199.212c-10.426 3.649-15.919 15.059-12.27 25.485 8.01 22.882 12.071 46.902 12.071 71.392 0 19.817-2.746 39.507-8.162 58.521-3.025 10.623 3.134 21.688 13.757 24.714 1.831.521 3.675.77 5.488.77 8.71 0 16.721-5.734 19.226-14.526 6.431-22.579 9.691-45.955 9.691-69.479 0-29.001-4.817-57.467-14.317-84.608-3.649-10.425-15.056-15.919-25.484-12.269zm-451.479 69.481c1.338.271 2.669.4 3.983.4 9.321 0 17.665-6.553 19.582-16.042 20.253-100.221 109.293-172.962 211.716-172.962 25.288 0 34.957 2.206 37.941 3.154 10.527 3.345 21.771-2.475 25.119-13.001 3.346-10.527-2.475-21.773-13.002-25.119-10.656-3.388-27.03-5.034-50.058-5.034-59.439 0-117.354 20.831-163.079 58.657-45.112 37.319-76.31 89.305-87.844 146.382-2.188 10.826 4.815 21.377 15.642 23.565zm284.722 237.715c-16.102 3.77-32.736 5.681-49.441 5.681-45.297 0-88.651-13.862-125.377-40.089-8.989-6.421-21.48-4.338-27.898 4.652-6.42 8.989-4.337 21.479 4.652 27.898 43.549 31.101 94.941 47.539 148.623 47.539 19.771 0 39.472-2.266 58.559-6.733 10.755-2.518 17.433-13.277 14.915-24.032-2.519-10.757-13.279-17.431-24.033-14.916z"></path></svg>
				<div class="text-menu">Salam</div>
			</li>
			<li class="splide__slide" data-splide-y="2">
				<svg height="512pt" viewBox="0 0 512.001 512" width="512pt" xmlns="http://www.w3.org/2000/svg"  ><path d="m246.175781 324.335938c2.820313 2.441406 6.320313 3.664062 9.824219 3.664062s7.003906-1.222656 9.824219-3.664062c40.074219-34.730469 70.945312-54.96875 70.945312-89.636719 0-28.429688-21.035156-50.699219-47.886719-50.699219-14.34375 0-25.152343 6.1875-32.882812 14.207031-7.734375-8.019531-18.539062-14.207031-32.886719-14.207031-26.851562 0-47.882812 22.269531-47.882812 50.699219 0 34.597656 30.910156 54.9375 70.945312 89.636719zm-23.0625-110.335938c12.867188 0 18.042969 16.230469 18.441407 17.550781 1.726562 6.542969 7.589843 11.007813 14.355468 11.0625h.117188c6.738281 0 12.625-4.605469 14.425781-11.109375.050781-.175781 5.21875-17.503906 18.429687-17.503906 11.742188 0 17.886719 10.414062 17.886719 20.699219 0 17.042969-19.527343 32.03125-50.769531 58.546875-31.804688-26.988282-50.769531-41.609375-50.769531-58.546875 0-10.285157 6.144531-20.699219 17.882812-20.699219zm0 0"></path><path d="m512 256c0-.035156-.007812-.070312-.007812-.105469-.023438-4.476562-2.066407-8.546875-5.175782-11.238281l-85.816406-74.261719v-65.394531c0-8.285156-6.714844-15-15-15h-75.792969l-64.328125-56.289062c-5.65625-4.949219-14.101562-4.949219-19.757812 0l-64.328125 56.289062h-76.792969c-8.285156 0-15 6.714844-15 15v65.445312c-15.480469 13.542969-83.949219 73.445313-85.003906 74.390626-3.105469 2.78125-4.996094 6.824218-4.996094 11.164062v241c0 8.375 6.839844 14.992188 15.015625 14.992188h.074219 481.820312.078125c8.269531 0 15.011719-6.714844 15.011719-14.992188zm-482 25.789062c1.730469.992188 165.636719 94.199219 165.753906 94.265626l-165.753906 95.054687zm199.996094 109.210938h52.007812l158.6875 91h-369.382812zm86.25-14.945312 165.753906-94.265626v189.320313zm154.890625-122.601563-50.136719 28.515625v-71.898438zm-215.136719-188.519531 28.648438 25.066406h-57.296876zm135 55.066406v179.027344l-108.96875 61.972656h-52.0625l-109.96875-62.539062v-178.460938zm-301 161.398438-49.242188-28.003907 49.242188-43.085937zm0 0"></path><path d="m15 120h30c8.285156 0 15-6.714844 15-15s-6.714844-15-15-15h-30c-8.285156 0-15 6.714844-15 15s6.714844 15 15 15zm0 0"></path><path d="m105 60c8.285156 0 15-6.714844 15-15v-30c0-8.285156-6.714844-15-15-15s-15 6.714844-15 15v30c0 8.285156 6.714844 15 15 15zm0 0"></path><path d="m34.394531 55.609375c5.859375 5.855469 15.355469 5.855469 21.210938 0 5.859375-5.859375 5.859375-15.355469 0-21.214844l-30-30c-5.855469-5.855469-15.351563-5.855469-21.210938 0-5.859375 5.859375-5.859375 15.355469 0 21.214844zm0 0"></path></svg>
				<div class="text-menu">Quote</div>
			</li>
			<li class="splide__slide" data-splide-y="3">
				<svg id="Layer_1" enable-background="new 0 0 512.049 512.049" height="512" viewBox="0 0 512.049 512.049" width="512" xmlns="http://www.w3.org/2000/svg"  ><path d="m187.05 512.012c-11.046 0-20-8.954-20-20v-8c0-11.028-8.972-20-20-20h-16.985c-19.294 0-37.747-7.187-51.959-20.235-14.212-13.049-22.944-30.822-24.587-50.047l-4.004-46.852c-37.426-2.026-61.412-44.463-43.406-77.541 9.748-18.654 24.285-40.564 44.355-66.838 1.829-105.108 70.936-182.141 174.29-198.659 10.896-1.824 21.202 5.536 23.023 16.43 1.82 10.895-5.536 21.202-16.43 23.023-88.272 14.75-140.973 76.854-140.973 166.126 0 4.435-1.474 8.744-4.19 12.25-20.45 26.394-35.463 48.665-44.624 66.194-3.043 5.824-.711 10.847.433 12.735 1.168 1.929 4.613 6.414 11.357 6.414 18.758 0 34.108 14.094 35.705 32.784l4.318 50.527c1.642 19.205 17.416 33.688 36.691 33.688h16.985c33.084 0 60 26.916 60 60v8c.001 11.047-8.953 20.001-19.999 20.001zm249-20v-124c0-30.314 11.022-49.469 23.785-71.647 6.274-10.901 12.761-22.174 17.838-34.97 4.074-10.267-.946-21.893-11.213-25.967-10.266-4.074-21.893.946-25.966 11.213-17.792 40.984-44.264 64.905-44.444 121.371v124c0 11.046 8.954 20 20 20s20-8.954 20-20zm-44-277.072c-14.427 0-28.854-4.493-40.893-13.479-50.78-37.903-78.133-83.217-79.103-131.045-.501-61.992 75.293-93.537 119.294-50.591.235.229.47.46.702.692.232-.232.466-.463.702-.692 44.028-42.956 119.794-11.383 119.294 50.592-.97 47.828-28.323 93.142-79.103 131.044-12.039 8.986-26.466 13.479-40.893 13.479zm-80-145.117c1.005 44.162 34.817 78.523 63.033 99.583 9.989 7.457 23.944 7.457 33.934 0 28.215-21.06 62.027-55.421 63.032-99.583-1.45-39.129-58.497-39.691-60-.804 0 11.046-8.954 20-20 20s-20-8.954-20-20c-1.499-38.903-58.57-38.303-59.999.804z"></path></svg>
				<div class="text-menu">Mempelai</div>
			</li>
			<li class="splide__slide" data-splide-y="4">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"  ><g><g><g><path d="M492,352c11.046,0,20-8.954,20-20V120c0-44.112-35.888-80-80-80h-26V20c0-11.046-8.954-20-20-20
					c-11.046,0-20,8.954-20,20v20h-91V20c0-11.046-8.954-20-20-20s-20,8.954-20,20v20h-90V20c0-11.046-8.954-20-20-20
					s-20,8.954-20,20v20H80C35.888,40,0,75.888,0,120v312c0,44.112,35.888,80,80,80h352c44.112,0,80-35.888,80-80
					c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20c0,22.056-17.944,40-40,40H80c-22.056,0-40-17.944-40-40V120
					c0-22.056,17.944-40,40-40h25v20c0,11.046,8.954,20,20,20s20-8.954,20-20V80h90v20c0,11.046,8.954,20,20,20
					c11.046,0,20-8.954,20-20V80h91v20c0,11.046,8.954,20,20,20c11.046,0,20-8.954,20-20V80h26c22.056,0,40,17.944,40,40v212
					C472,343.046,480.954,352,492,352z"></path><path d="M314.5,192c-23.583,0-43.533,8.339-57.5,23.765C243.033,200.339,223.083,192,199.5,192
					c-44.906,0-77.5,34.173-77.5,81.256c0,49.211,41.248,80.083,77.639,107.32c16.642,12.456,32.36,24.22,41.759,35.938
					C245.194,421.246,250.934,424,257,424c6.066,0,11.806-2.754,15.601-7.486c9.4-11.718,25.117-23.483,41.759-35.938
					c36.392-27.237,77.64-58.109,77.64-107.32C392,226.173,359.406,192,314.5,192z M290.393,348.552
					c-11.899,8.906-23.379,17.498-33.393,26.599c-10.014-9.101-21.495-17.694-33.393-26.599C193.319,325.883,162,302.443,162,273.256
					C162,248.58,177.07,232,199.5,232c14.483,0,24.659,4.867,31.107,14.877c5.203,8.079,6.345,16.788,6.46,17.776
					c0.654,10.454,9.26,18.441,19.746,18.546c10.515,0.1,19.312-8.158,20.127-18.648c0.007-0.081,0.932-8.542,5.865-16.728
					C289.221,237.176,299.589,232,314.5,232c22.43,0,37.5,16.58,37.5,41.256C352,302.442,320.681,325.883,290.393,348.552z"></path></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
				<div class="text-menu">Acara</div>
			</li>
			<li class="splide__slide" data-splide-y="5">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve"  ><g><g><g><path d="M492,352c11.046,0,20-8.954,20-20V120c0-44.112-35.888-80-80-80h-26V20c0-11.046-8.954-20-20-20
				c-11.046,0-20,8.954-20,20v20h-91V20c0-11.046-8.954-20-20-20s-20,8.954-20,20v20h-90V20c0-11.046-8.954-20-20-20
				s-20,8.954-20,20v20H80C35.888,40,0,75.888,0,120v312c0,44.112,35.888,80,80,80h352c44.112,0,80-35.888,80-80
				c0-11.046-8.954-20-20-20c-11.046,0-20,8.954-20,20c0,22.056-17.944,40-40,40H80c-22.056,0-40-17.944-40-40V120
				c0-22.056,17.944-40,40-40h25v20c0,11.046,8.954,20,20,20s20-8.954,20-20V80h90v20c0,11.046,8.954,20,20,20
				c11.046,0,20-8.954,20-20V80h91v20c0,11.046,8.954,20,20,20c11.046,0,20-8.954,20-20V80h26c22.056,0,40,17.944,40,40v212
				C472,343.046,480.954,352,492,352z"></path><path d="M314.5,192c-23.583,0-43.533,8.339-57.5,23.765C243.033,200.339,223.083,192,199.5,192
				c-44.906,0-77.5,34.173-77.5,81.256c0,49.211,41.248,80.083,77.639,107.32c16.642,12.456,32.36,24.22,41.759,35.938
				C245.194,421.246,250.934,424,257,424c6.066,0,11.806-2.754,15.601-7.486c9.4-11.718,25.117-23.483,41.759-35.938
				c36.392-27.237,77.64-58.109,77.64-107.32C392,226.173,359.406,192,314.5,192z M290.393,348.552
				c-11.899,8.906-23.379,17.498-33.393,26.599c-10.014-9.101-21.495-17.694-33.393-26.599C193.319,325.883,162,302.443,162,273.256
				C162,248.58,177.07,232,199.5,232c14.483,0,24.659,4.867,31.107,14.877c5.203,8.079,6.345,16.788,6.46,17.776
				c0.654,10.454,9.26,18.441,19.746,18.546c10.515,0.1,19.312-8.158,20.127-18.648c0.007-0.081,0.932-8.542,5.865-16.728
				C289.221,237.176,299.589,232,314.5,232c22.43,0,37.5,16.58,37.5,41.256C352,302.442,320.681,325.883,290.393,348.552z"></path></g></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
				<div class="text-menu">Acara</div>
			</li>
			<li class="splide__slide" data-splide-y="6">
				<svg id="Capa_1" enable-background="new 0 0 512.238 512.238" height="512" viewBox="0 0 512.238 512.238" width="512" xmlns="http://www.w3.org/2000/svg"><path d="m368.591 48.319c-47.025 0-86.044 24.885-112.467 64.414-76.278-120.422-255.754-58.088-256 79.122-5.252 137.595 157.239 240.661 251.257 271.295 3.079 1.026 6.408 1.026 9.486 0 94.634-30.982 256.349-133.676 251.254-271.299.003-79.143-64.386-143.532-143.53-143.532zm-224.934 30c62.128 0 92.689 56.66 98.54 70.904 4.957 12.493 22.9 12.488 27.854 0 5.851-14.243 36.412-70.904 98.54-70.904 58.207 0 106.315 44.033 112.785 100.536-27.157 7.016-43.002 30.131-64.585 30.131-25.448 0-42.883-32.133-80.334-32.133-37.436 0-54.886 32.133-80.333 32.133s-42.897-32.133-80.333-32.133c-37.451 0-54.886 32.133-80.334 32.133-21.583 0-37.427-23.115-64.585-30.131 6.47-56.503 54.578-100.536 112.785-100.536zm224.366 296.053c-48.245 33.771-96.826 53.057-111.898 58.62-15.072-5.563-63.653-24.848-111.898-58.62-11.594-8.116-22.342-16.503-32.254-25.121 26.702-7.245 42.434-29.932 63.819-29.932 25.443 0 42.903 32.133 80.333 32.133s54.89-32.133 80.333-32.133c21.385 0 37.117 22.687 63.819 29.932-9.913 8.618-20.66 17.005-32.254 25.121zm63.608-56.413c-4.773 2.137-9.639 3.494-14.84 3.494-25.448 0-42.883-32.133-80.334-32.133-37.436 0-54.886 32.133-80.333 32.133s-42.897-32.133-80.333-32.133c-37.451 0-54.886 32.133-80.334 32.133-5.201 0-10.067-1.357-14.84-3.494-19.685-22.873-44.139-58.892-49.443-107.064 18.116 8.631 35.147 28.091 64.283 28.091 37.451 0 54.886-32.133 80.334-32.133 25.443 0 42.903 32.133 80.333 32.133s54.89-32.133 80.333-32.133c25.448 0 42.883 32.133 80.334 32.133 29.136 0 46.167-19.46 64.283-28.091-5.303 48.172-29.758 84.191-49.443 107.064z"></path></svg>
				<div class="text-menu">Map</div>
			</li>
			<li class="splide__slide" data-splide-y="7">
				<svg id="Capa_1" enable-background="new 0 0 512.419 512.419" height="512" viewBox="0 0 512.419 512.419" width="512" xmlns="http://www.w3.org/2000/svg"  ><g><path d="m105.945 256.206c0 82.74 67.314 150.055 150.055 150.055s150.055-67.314 150.055-150.055-67.315-150.055-150.055-150.055-150.055 67.315-150.055 150.055zm170.032-90.453c2.957 8.279 5.442 17.557 7.443 27.553h-54.84c2.002-9.996 4.487-19.274 7.443-27.553 7.701-21.564 16.34-29.601 19.977-29.601s12.276 8.036 19.977 29.601zm100.078 90.453c0 11.404-1.599 22.441-4.583 32.9h-53.636c.913-10.675 1.394-21.693 1.394-32.9s-.481-22.226-1.394-32.9h53.636c2.984 10.459 4.583 21.496 4.583 32.9zm-86.826 0c0 11.284-.516 22.314-1.498 32.9h-63.461c-.982-10.586-1.498-21.616-1.498-32.9 0-11.285.516-22.315 1.498-32.9h63.461c.982 10.585 1.498 21.616 1.498 32.9zm-33.229 120.055c-3.637 0-12.276-8.037-19.977-29.601-2.957-8.28-5.442-17.558-7.443-27.554h54.84c-2.002 9.996-4.487 19.274-7.443 27.554-7.701 21.564-16.34 29.601-19.977 29.601zm-120.055-120.055c0-11.404 1.599-22.441 4.583-32.9h53.636c-.913 10.675-1.394 21.693-1.394 32.9s.481 22.225 1.394 32.9h-53.636c-2.984-10.459-4.583-21.496-4.583-32.9zm76.33-111.81c-1.544 3.455-3.05 7.195-4.505 11.267-4.006 11.219-7.254 23.933-9.7 37.643h-44.286c13.602-22.022 34.113-39.343 58.491-48.91zm-58.49 174.71h44.286c2.446 13.71 5.693 26.424 9.7 37.643 1.454 4.073 2.961 7.812 4.505 11.267-24.379-9.566-44.89-26.888-58.491-48.91zm145.94 48.91c1.544-3.455 3.05-7.195 4.505-11.267 4.006-11.219 7.254-23.933 9.7-37.643h44.286c-13.602 22.022-34.113 39.344-58.491 48.91zm58.49-174.71h-44.286c-2.446-13.709-5.693-26.424-9.7-37.643-1.454-4.073-2.961-7.812-4.505-11.267 24.379 9.567 44.89 26.888 58.491 48.91z"></path><path d="m512.418 73.037c0-27.216-22.142-49.357-49.357-49.357-9.219 0-18.152 2.583-25.851 7.32-7.699-4.737-16.631-7.32-25.851-7.32-27.215 0-49.357 22.142-49.357 49.357-.578 31.074 30.95 59.895 75.208 86.511 6.196-3.712 12.028-7.404 17.492-11.081 17.904 32.94 27.298 69.802 27.298 107.739 0 60.367-23.508 117.121-66.194 159.806-42.686 42.686-99.439 66.194-159.806 66.194-33.642.426-67.746-8.396-98.463-21.96.035-.088-11.123 27.553-11.23 27.819 34.113 15.059 71.722 24.444 109.693 24.141 68.38 0 132.667-26.628 181.02-74.981 48.352-48.351 74.98-112.639 74.98-181.019 0-44.488-11.398-87.687-33.109-126.003 22.102-19.084 33.668-37.934 33.527-57.166zm-120.415 0c0-10.674 8.684-19.357 19.357-19.357 10.445-1.104 19.87 12.956 25.851 19.508 6.636-7.046 14.278-19.903 25.851-19.508 10.673 0 19.357 8.684 19.357 19.357 0 16.822-23.018 36.197-45.208 50.964-22.19-14.768-45.208-34.142-45.208-50.964z"></path><path d="m101.269 364.504c-9.219 0-18.152 2.583-25.851 7.32-5.321-3.274-11.233-5.518-17.42-6.592-18.351-33.267-27.998-70.67-27.998-109.026 0-60.367 23.508-117.12 66.194-159.806s99.439-66.194 159.806-66.194c29.386 0 57.965 5.552 84.942 16.501l11.282-27.798c-30.577-12.41-62.952-18.703-96.224-18.703-68.38 0-132.667 26.629-181.02 74.98-48.351 48.353-74.98 112.64-74.98 181.02 0 39.799 9.171 78.704 26.7 113.937-15.73 8.261-26.489 24.753-26.489 43.719-.578 31.074 30.95 59.895 75.208 86.511 49.042-29.381 75.42-57.51 75.208-86.511-.001-27.216-22.143-49.358-49.358-49.358zm-25.85 100.322c-22.19-14.768-45.208-34.142-45.208-50.964 0-10.674 8.684-19.357 19.357-19.357 10.445-1.104 19.87 12.956 25.851 19.508 6.636-7.046 14.278-19.903 25.851-19.508 10.673 0 19.357 8.684 19.357 19.357-.001 16.822-23.018 36.197-45.208 50.964z"></path></g></svg>
				<div class="text-menu">Live Streaming</div>
			</li>
			<li class="splide__slide" data-splide-y="8">
				<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"  ><g><path d="m467 151h-81.729l-17.562-35.125c-7.673-15.343-23.096-24.875-40.25-24.875h-142.918c-17.154 0-32.577 9.531-40.25 24.875l-17.561 35.125h-36.73v-15c0-8.284-6.716-15-15-15s-15 6.716-15 15v15h-15c-24.813 0-45 20.187-45 45v271c0 24.813 20.187 45 45 45h422c24.813 0 45-20.187 45-45v-271c0-24.813-20.187-45-45-45zm15 316c0 8.271-6.729 15-15 15h-422c-8.271 0-15-6.729-15-15v-271c0-8.271 6.729-15 15-15h91c5.682 0 10.875-3.21 13.417-8.292l21.708-43.416c2.558-5.115 7.699-8.292 13.417-8.292h142.918c5.718 0 10.859 3.177 13.417 8.292l21.708 43.417c2.54 5.081 7.733 8.291 13.415 8.291h91c8.271 0 15 6.729 15 15z"></path><circle cx="75" cy="226" r="15"></circle><path d="m256 181c-74.439 0-135 60.561-135 135 0 74.991 60.561 136 135 136s135-61.009 135-136c0-74.439-60.56-135-135-135zm0 241c-57.897 0-105-47.552-105-106 0-57.897 47.103-105 105-105s105 47.103 105 105c0 58.449-47.103 106-105 106z"></path><path d="m286.01 271.009c-12.917 0-22.8 4.866-30 11.274-7.2-6.407-17.083-11.274-30-11.274-25.233 0-45 18.968-45 43.182 0 25.505 21.218 41.003 50.584 62.452 4.927 3.599 10.022 7.321 15.416 11.366 2.667 2 5.833 3 9 3s6.333-1 9-3c5.394-4.045 10.489-7.767 15.416-11.366 29.366-21.449 50.584-36.947 50.584-62.452 0-24.214-19.766-43.182-45-43.182zm-23.278 81.409c-2.202 1.608-4.437 3.24-6.721 4.918-2.285-1.678-4.52-3.31-6.721-4.918-22.223-16.231-38.279-27.959-38.279-38.227 0-6.551 5.152-13.182 15-13.182 10.901 0 15.137 10.494 15.737 12.15 1.868 6.29 7.555 10.451 14.124 10.538 6.578.061 12.416-4.334 14.426-10.616.039-.121 3.999-12.072 15.714-12.072 9.848 0 15 6.631 15 13.182-.002 10.267-16.058 21.995-38.28 38.227z"></path><path d="m271 46v-31c0-8.284-6.716-15-15-15s-15 6.716-15 15v31c0 8.284 6.716 15 15 15s15-6.716 15-15z"></path><path d="m176.431 56.779c5.953-5.761 6.109-15.257.348-21.21l-30-31c-5.761-5.953-15.257-6.109-21.21-.348s-6.109 15.257-.348 21.21l30 31c5.763 5.955 15.259 6.108 21.21.348z"></path><path d="m356.779 56.432 30-31c5.761-5.953 5.605-15.449-.348-21.21-5.952-5.761-15.449-5.605-21.21.348l-30 31c-5.761 5.953-5.605 15.449.348 21.21 5.965 5.773 15.462 5.591 21.21-.348z"></path><path d="m437 211h-31c-8.284 0-15 6.716-15 15s6.716 15 15 15h31c8.284 0 15-6.716 15-15s-6.716-15-15-15z"></path></g></svg>
				<div class="text-menu">Galeri</div>
			</li>
			<li class="splide__slide" data-splide-y="9">
				<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg" ><g><path d="m477 0h-442c-19.299 0-35 15.701-35 35v442c0 19.299 15.701 35 35 35h442c19.299 0 35-15.701 35-35 0-8.554 0-432.631 0-442 0-19.299-15.701-35-35-35zm-284.2 422.82v59.18h-66.4v-59.18zm30 0h66.4v59.18h-66.4zm96.4 0h66.4v59.18h-66.4zm-289.2-30v-273.64h452v273.64zm289.2-303.64v-59.18h66.4v59.18zm-30 0h-66.4v-59.18h66.4zm-96.4 0h-66.4v-59.18h66.4zm289.2-54.18v54.18h-66.4v-59.18h61.4c2.757 0 5 2.243 5 5zm-452 0c0-2.757 2.243-5 5-5h61.4v59.18h-66.4zm0 442v-54.18h66.4v59.18h-61.4c-2.757 0-5-2.243-5-5zm452 0c0 2.757-2.243 5-5 5h-61.4v-59.18h66.4z"></path><path d="m304.904 158.833c-18.284-.495-36.039 6.538-48.904 19.878-12.075-12.521-28.89-19.901-47.167-19.901-49.934 0-76.224 58.374-44.562 96.149l76.309 91.035c8.046 9.598 22.806 9.584 30.839 0l76.31-91.036h.001c31.384-37.444 5.806-94.857-42.826-96.125zm19.834 76.854-68.738 82.003-68.737-82.002c-15.419-18.393-2.855-46.877 21.57-46.877 14.796 0 27.822 8.908 33.188 22.694 2.243 5.763 7.794 9.559 13.979 9.559s11.735-3.796 13.979-9.559c5.57-14.309 19.244-23.094 34.142-22.682 23.553.613 35.951 28.572 20.617 46.864z"></path></g></svg>
				<div class="text-menu">Video</div>
			</li>
			<li class="splide__slide" data-splide-y="10">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64"><g transform="translate(-161.07 -65.42)"><path d="M166.292,99.541a21.639,21.639,0,0,1,.056-28.257,16.783,16.783,0,0,1,25.491,0l1.232,1.369,1.232-1.369a16.78,16.78,0,0,1,25.487,0,21.628,21.628,0,0,1,.056,28.257L195.4,128.307a2.987,2.987,0,0,1-4.651,0Zm26.779,21.145L215.2,94.651l.066-.073a13.956,13.956,0,0,0,0-18.265,10.82,10.82,0,0,0-16.441,0L195.334,80.2a2.982,2.982,0,0,1-4.526,0l-3.5-3.884a10.817,10.817,0,0,0-16.438,0,13.955,13.955,0,0,0,0,18.265c.023.026.043.048.063.073Z" transform="translate(0)" fill="currentcolor" fill-rule="evenodd"></path></g></svg>
				<div class="text-menu">Love Story</div>
			</li>
			<li class="splide__slide" data-splide-y="11">
				<svg xmlns="http://www.w3.org/2000/svg" width="26.805" height="26.814" viewBox="0 0 26.805 26.814"  ><g id="Group_1521" data-name="Group 1521" transform="translate(-337 -1134)"><path id="link-alt" d="M13.9,18.25a1.341,1.341,0,0,1-.948-.393,6.589,6.589,0,0,1-.671-8.607,5.017,5.017,0,0,1,.67-.8l4.505-4.506a6.649,6.649,0,1,1,9.4,9.4L24.4,15.819a1.341,1.341,0,1,1-1.9-1.9l2.467-2.467a3.975,3.975,0,0,0,0-5.613,4.063,4.063,0,0,0-5.611,0l-4.5,4.505a2.8,2.8,0,0,0-.359.426,3.946,3.946,0,0,0,.359,5.186,1.341,1.341,0,0,1-.948,2.289Zm-.552,8.617,4.5-4.505a6.461,6.461,0,0,0,1.561-2.479,6.658,6.658,0,0,0-1.561-6.925,1.341,1.341,0,1,0-1.9,1.9,3.931,3.931,0,0,1,.924,4.156,3.815,3.815,0,0,1-.924,1.461l-4.5,4.505a4.063,4.063,0,0,1-5.611,0,3.975,3.975,0,0,1,0-5.613L8.311,16.9A1.341,1.341,0,1,0,6.422,15L3.955,17.463a6.649,6.649,0,1,0,9.4,9.4Z" transform="translate(334.993 1131.999)"></path></g></svg>
				<div class="text-menu">Extra Link</div>
			</li>
			<li class="splide__slide" data-splide-y="12">
				<svg id="Capa_1" enable-background="new 0 0 512.001 512.001" height="512" viewBox="0 0 512.001 512.001" width="512" xmlns="http://www.w3.org/2000/svg"  ><g><path d="m497.044.002c-.014 0-.029-.002-.044-.002h-60c-8.284 0-15 6.716-15 15s6.716 15 15 15h23.787l-36.643 36.643c-8.142-2.769-16.804-4.209-25.768-4.209-34.166 0-55.416 12.291-67.5 23.104-12.084-10.814-33.335-23.104-67.5-23.104-47.942 0-82.5 40.647-82.5 90.151 0 .02.001.04.001.06-2.431-.134-4.925-.212-7.501-.212-47.942 0-82.5 40.647-82.5 90.151 0 41.481 25.818 72.662 55.827 101.499l-16.915 16.917h-53.788c-3.979 0-7.794 1.581-10.606 4.394l-61 61c-4.29 4.29-5.573 10.742-3.252 16.347 2.322 5.604 7.791 9.259 13.858 9.259h45v45c0 6.067 3.654 11.537 9.26 13.858 5.605 2.322 12.057 1.038 16.347-3.252l61-61c2.813-2.813 4.393-6.628 4.393-10.606v-53.787l17.809-17.809c8.587 7.629 49.87 43.368 62.102 54.24 5.682 5.052 14.247 5.052 19.932 0 53.117-47.216 98.09-81.644 121.413-117.477 26.595-23.023 58.044-49.676 77.924-73.691 20.942-25.299 30.696-49.096 30.696-74.891 0-28.885-11.69-54.062-29.949-70.3l31.073-31.072v23.787c0 8.284 6.716 15 15 15s15-6.716 15-15v-59.995c.004-8.175-6.642-14.977-14.956-15.003zm-376.044 429.785-31 31v-23.787c0-8.284-6.716-15-15-15h-23.787l31-31h38.787zm119.876-42.368c-8.71-7.65-42.871-37.224-50.824-44.258l76.554-76.554c5.858-5.858 5.858-15.355 0-21.213-5.857-5.858-15.355-5.858-21.213 0l-77.512 77.512c-29.989-28.662-47.006-52.119-47.006-80.32 0-34.292 22.57-60.151 52.5-60.151 39.646 0 53.081 21.128 54.248 23.103 2.474 5.062 7.471 8.093 13.112 8.188.08.001.158.002.237.002 5.585 0 10.613-3.324 13.203-8.29.119-.23 13.142-23.002 54.199-23.002 29.93 0 52.5 25.859 52.5 60.151 0 14.014-4.202 26.856-12.109 39.747-26.059 35.512-25.808 32.984-107.889 105.085zm149.972-142.435c1.176-49.915-33.217-92.55-82.472-92.55-34.166 0-55.416 12.291-67.5 23.104-6.794-6.08-16.486-12.626-29.742-17.193-.157-1.895-.258-3.805-.258-5.76 0-34.292 22.57-60.151 52.5-60.151 39.643 0 53.079 21.125 54.248 23.103 2.473 5.062 7.47 8.093 13.112 8.188.08.001.158.002.237.002 5.585 0 10.613-3.324 13.203-8.29.119-.23 13.142-23.002 54.199-23.002 29.145 0 52.5 25.023 52.5 60.151.001 32.057-21.987 57.985-60.027 92.398z"></path></g></svg>
				<div class="text-menu">Rundown Acara</div>
			</li>
			<li class="splide__slide" data-splide-y="13">
				<svg id="Line_Expand" height="512" viewBox="0 0 32 32" width="512" xmlns="http://www.w3.org/2000/svg" data-name="Line Expand" class="mx-auto mb-1 h-[16px] w-[16px]" style="color: rgb(196, 153, 165);"><path d="m9.55 10.965a1 1 0 0 0 1.415-1.414l-1.414-1.415a1 1 0 1 0 -1.415 1.414z"></path><path d="m6.793 14.793h2a1 1 0 0 0 0-2h-2a1 1 0 1 0 0 2z"></path><path d="m13.793 9.793a1 1 0 0 0 1-1v-2a1 1 0 1 0 -2 0v2a1 1 0 0 0 1 1z"></path><path d="m31 13.313a3.973 3.973 0 0 0 -1.172-2.828l-.391-.39a3.895 3.895 0 0 0 -1.022-3.852l-.392-.392a3.9 3.9 0 0 0 -1.023-3.851l-.707-.707a1 1 0 0 0 -1.414 0l-7.779 7.778a3.976 3.976 0 0 0 -.45 5.1 5.687 5.687 0 0 0 -.572 1.9 5.67 5.67 0 0 0 -1.906.574 4.11 4.11 0 0 0 -5.1.449l-7.779 7.785a1 1 0 0 0 0 1.414l.707.707a3.893 3.893 0 0 0 3.852 1.023l.391.391a3.893 3.893 0 0 0 3.857 1.023l.39.391a4 4 0 0 0 5.657 0l2.136-2.136c.33.018.661.029.991.029a28.324 28.324 0 0 0 6.808-.943 1 1 0 0 0 .7-.7 27.2 27.2 0 0 0 .916-7.8l2.134-2.134a3.974 3.974 0 0 0 1.168-2.831zm-16.272 15.1a2.048 2.048 0 0 1 -2.829 0l.707-.707a1 1 0 1 0 -1.414-1.414l-.707.708a2.047 2.047 0 0 1 -2.828 0l2.121-2.121a1 1 0 1 0 -1.414-1.414l-2.121 2.121a2.048 2.048 0 0 1 -2.829 0l7.071-7.071a2.041 2.041 0 0 1 1.962-.486 5.614 5.614 0 0 0 .285 7.666 6.606 6.606 0 0 0 3.083 1.632zm10.262-3.422c-2.722.649-8.639 1.494-10.844-.71a3.666 3.666 0 0 1 0-5.185 3.588 3.588 0 0 1 2.571-1.055c.088 0 .178 0 .268.01a1.019 1.019 0 0 0 .774-.291 1 1 0 0 0 .291-.774 3.617 3.617 0 0 1 1.046-2.84 3.673 3.673 0 0 1 5.186 0c2.199 2.2 1.356 8.12.708 10.845zm3.424-10.263-1.093 1.093a6.625 6.625 0 0 0 -1.621-3.089 5.658 5.658 0 0 0 -7.678-.274 1.944 1.944 0 0 1 .5-1.973l7.071-7.071a2 2 0 0 1 0 2.828l-2.129 2.122a1 1 0 1 0 1.414 1.414l2.122-2.121a2 2 0 0 1 0 2.828l-.707.707a1 1 0 1 0 1.414 1.414l.707-.707a2 2 0 0 1 0 2.829z"></path></svg>
				<div class="text-menu">Doa</div>
			</li>
			<li class="splide__slide" data-splide-y="14">
				<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"  ><g><path d="m466 22c-24.813 0-45 20.187-45 45v110.49c-17.647-13.604-43.069-12.331-59.245 3.846l-87.066 87.071c-.003.003-.007.006-.01.009-7.385 7.385-13.638 15.6-18.68 24.431-5.042-8.831-11.295-17.046-18.68-24.431-.003-.003-.007-.006-.01-.009l-87.066-87.071c-16.176-16.177-41.597-17.45-59.245-3.846v-110.49c0-24.813-20.187-45-45-45s-44.998 20.187-44.998 45v163.795c0 26.85 9.466 52.995 26.654 73.621l73.346 88.015v29.569h-5c-8.284 0-15 6.716-15 15v60c0 8.284 6.716 15 15 15h320c8.284 0 15-6.716 15-15v-60c0-8.284-6.716-15-15-15h-5v-29.569l73.346-88.015c17.188-20.626 26.654-46.771 26.654-73.621v-163.795c0-24.813-20.187-45-45-45zm-225 460h-130v-30h130zm0-60h-110v-35c0-3.509-1.23-6.907-3.477-9.603l-76.822-92.187c-12.705-15.244-19.701-34.569-19.701-54.415v-163.795c0-8.271 6.729-15 15-15s15 6.729 15 15v121.3c0 20.033 7.802 38.868 21.968 53.033l63.848 63.847c5.857 5.857 15.355 5.857 21.213 0s5.858-15.355 0-21.213l-60.224-60.224c-5.841-5.859-5.837-15.343.016-21.195 5.857-5.857 15.354-5.856 21.211.001l87.066 87.07c.003.003.006.007.009.01 16.052 16.055 24.893 37.399 24.893 60.102zm160 60h-130v-30h130zm80-251.205c0 19.846-6.996 39.171-19.701 54.416l-76.822 92.187c-2.247 2.695-3.477 6.093-3.477 9.602v35h-110v-72.269c0-22.703 8.841-44.048 24.895-60.103.003-.003.006-.007.009-.01l87.066-87.07c5.857-5.857 15.353-5.858 21.211-.001 5.852 5.852 5.857 15.336.016 21.195l-60.224 60.224c-5.858 5.857-5.858 15.355 0 21.213 5.857 5.857 15.355 5.857 21.213 0l63.848-63.847c14.166-14.165 21.968-33 21.968-53.033v-121.299c0-8.271 6.729-15 15-15s15 6.729 15 15v163.795z"></path><path d="m245.393 195.577c5.858 5.858 15.355 5.858 21.213 0l85.252-85.252c25.205-25.205 25.205-66.216 0-91.421-25.205-25.205-66.216-25.205-91.421 0l-4.438 4.438-4.438-4.438c-25.204-25.204-66.215-25.204-91.42 0-25.205 25.205-25.205 66.216-.001 91.42zm-64.038-155.46c13.508-13.508 35.486-13.508 48.993 0l15.045 15.044c5.858 5.858 15.355 5.858 21.213 0l15.045-15.044c13.508-13.508 35.487-13.508 48.995 0s13.508 35.486 0 48.995l-74.646 74.645-74.646-74.646c-13.508-13.507-13.508-35.486.001-48.994z"></path></g></svg>
				<div class="text-menu">RSVP</div>
			</li>
			<li class="splide__slide" data-splide-y="15">
				<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"  ><g><path d="m191.048 203.939c29.102 20.787 57.834 33.196 59.043 33.714 3.773 1.617 8.044 1.617 11.817 0 41.052-17.083 124.493-69.806 121.556-126.255.525-65.013-76.353-102.842-127.464-62.911-87.417-61.885-199.129 65.778-64.952 155.452zm16.752-141.806c14.119 0 27.588 6.086 36.954 16.697 5.649 6.702 16.843 6.702 22.492 0 29.541-33.873 86.428-12.403 86.22 32.571 0 41.699-65.576 81.068-97.466 96.017-31.9-14.954-97.467-54.321-97.467-96.018 0-27.166 22.101-49.267 49.267-49.267z"></path><path d="m56.492 28.42 32.133 16.067c7.4 3.699 16.414.714 20.125-6.708 3.705-7.41.702-16.42-6.708-20.125l-32.133-16.067c-7.411-3.704-16.42-.702-20.125 6.708-3.705 7.409-.702 16.42 6.708 20.125z"></path><path d="m423.375 44.487 32.133-16.067c7.41-3.705 10.413-12.715 6.708-20.125s-12.714-10.412-20.125-6.708l-32.133 16.067c-7.41 3.705-10.413 12.715-6.708 20.125 3.711 7.421 12.726 10.406 20.125 6.708z"></path><path d="m88.625 194.38-32.133 16.067c-7.41 3.705-10.413 12.715-6.708 20.125s12.714 10.412 20.125 6.708l32.133-16.067c7.41-3.705 10.413-12.715 6.708-20.125-3.711-7.422-12.725-10.407-20.125-6.708z"></path><path d="m47.133 134.433h32.133c19.881-.738 19.866-29.269 0-30h-32.133c-19.88.738-19.865 29.269 0 30z"></path><path d="m409.958 221.213 32.133 16.067c7.411 3.704 16.42.702 20.125-6.708s.702-16.42-6.708-20.125l-32.133-16.067c-7.399-3.699-16.414-.714-20.125 6.708-3.705 7.409-.702 16.42 6.708 20.125z"></path><path d="m417.733 119.433c0 8.284 6.716 15 15 15h32.133c19.881-.738 19.866-29.269 0-30h-32.133c-8.284 0-15 6.716-15 15z"></path><path d="m507.606 341.794-64.266-64.267c-2.812-2.813-6.628-4.394-10.606-4.394h-353.467c-3.979 0-7.793 1.581-10.606 4.394l-64.267 64.267c-4.29 4.29-5.573 10.742-3.252 16.347 2.322 5.605 7.792 9.26 13.858 9.26h49.266v129.599c0 8.284 6.716 15 15 15h353.467c8.284 0 15-6.716 15-15v-129.6h49.267c6.067 0 11.536-3.655 13.858-9.26 2.321-5.604 1.038-12.056-3.252-16.346zm-89.873 140.206h-323.466v-114.6h323.467v114.6zm-366.52-144.6 34.267-34.267h341.041l34.267 34.267z"></path><path d="m336.333 447.733h32.134c19.881-.738 19.866-29.269 0-30h-32.134c-19.881.738-19.866 29.27 0 30z"></path></g></svg>
				<div class="text-menu">Gift</div>
			</li>
			<li class="splide__slide" data-splide-y="16">	
				<svg id="Layer_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"  ><path d="m38.8 262c.1.1.2.2.3.3l55 52c-11.4 18.1-9.3 42.4 6.5 58.2 9 9 20.7 13.5 32.4 13.7.4 12 5.2 23.9 14.4 33.1 9.1 9.1 21.2 14.2 34.1 14.4.2 12.4 5 24.6 14.4 34.1 18.3 19.1 51.3 19.1 69.7 0l29.9-29.9 6.7 6.7c19.4 19.4 51.1 19.4 70.5 0l.4-.4c9.4-9.4 14.2-21.6 14.6-34 12.9.1 25.7-4.8 35.5-14.6l.4-.4c9.3-9.3 14.5-21.6 14.6-34.8 12.6-.1 25.1-5 34.7-14.6l.4-.4c19.4-19.4 19.4-51.1 0-70.5l-5.1-5.1 2.6-2.6c124.7-135.5-60.7-320.7-196.1-196.1l-25.6 25.6-22.9-22.3c-51.8-51.5-135.8-51.5-187.4.1-51.7 51.7-51.7 135.8 0 187.5zm412.8 62.6c-7.8 7.8-20.4 7.8-28.1 0l-27.5-27.5c-7.7-7.4-7.7-20.7 0-28.1l.4-.4c7.4-7.7 20.7-7.7 28.1 0l27.5 27.5c7.8 7.8 7.8 20.4 0 28.1zm-77.9 49.8-45-45c-7.7-7.4-7.7-20.7 0-28.1l.4-.4c7.8-7.8 20.4-7.8 28.1 0l17.4 17.4 27.5 27.5c7.7 7.4 7.7 20.7 0 28.1l-.4.4c-7.6 7.8-20.2 7.8-28 .1zm-50.5 49-17.8-17.8c-7.7-7.4-7.7-20.7 0-28.1l.4-.4c7.8-7.8 20.4-7.8 28.1 0l17.8 17.8c7.8 7.8 7.8 20.4 0 28.1l-.4.4c-7.7 7.7-20.3 7.7-28.1 0zm-201.4-96 102.9-102.9c.5-.5 1.4-.5 1.9 0l16.6 16.6c20 20.9 56.1 20.9 76.1 0 21.1-20.2 20.8-56.8-.6-76.7l-48.1-46.7 25.3-25.3c42.4-42.4 111.3-42.4 153.7 0s42.4 111.3 0 153.7l-2.6 2.6-1.3-1.3c-18.6-19.3-52-19.3-70.5 0l-.4.4c-6 6-10.2 13.2-12.5 21-18.1-7.4-39.6-3.8-54.2 10.8l-.4.4c-17.2 16.5-19.4 45.3-5.3 64.3-6.4 2.4-12.5 6.2-17.7 11.4l-.4.4c-15.5 15-19.1 40.3-8.6 59.1l-31.3 31.3c-7.2 7.5-20.1 7.5-27.3 0-7.6-7.6-7.5-19.9.1-27.4l27.8-27.8c5.9-5.9 5.9-15.3 0-21.2s-15.3-5.9-21.2 0l-27.9 27.9c-7.2 7.5-20.1 7.5-27.3 0-7.5-7.5-7.5-19.7 0-27.3l28.1-28.1c5.9-5.9 5.9-15.3 0-21.2s-15.3-5.9-21.2 0c0 0-29.6 29.6-29.7 29.7-6.6 6.6-17.3 6.6-23.9 0-6.7-6.4-6.7-17.1-.1-23.7zm-61.8-231.6c40-40 105.2-40 145.2.2l92.6 90c4.6 4.5 7.2 10.5 7.3 16.9.2 21.3-25.6 32-40.7 17l-16.6-16.6c-11.7-12.2-32.6-12.2-44.3 0l-89 89-54.6-51.7c-39.9-39.9-39.9-104.9.1-144.8z"></path></svg>
				<div class="text-menu">Prokes</div>
			</li>
			<li class="splide__slide" data-splide-y="17">
				<svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1" viewBox="0 0 64 64" width="512" height="512"  ><path d="M45,46a2,2,0,0,1-2-2,10.959,10.959,0,0,0-8.365-10.678,2,2,0,0,1-.307-3.783,6,6,0,1,0-4.656,0,2,2,0,0,1-.307,3.783A10.959,10.959,0,0,0,21,44a2,2,0,0,1-4,0,14.955,14.955,0,0,1,7.729-13.128,10,10,0,1,1,14.542,0A14.955,14.955,0,0,1,47,44,2,2,0,0,1,45,46Z"></path><path d="M32,62A30,30,0,1,1,38.427,2.69,2,2,0,0,1,37.573,6.6a25.977,25.977,0,1,0,18.72,16.116,2,2,0,1,1,3.736-1.43A30.017,30.017,0,0,1,32,62Z"></path><path d="M50,23a2,2,0,0,1-1.07-.311,6.276,6.276,0,0,1-1.067-.861l-5.77-5.737a6.336,6.336,0,0,1-.865-1.058A6.979,6.979,0,0,1,42.1,6.07,7.108,7.108,0,0,1,50,4.613a7.085,7.085,0,0,1,8.75,10.455,6.37,6.37,0,0,1-.842,1.022l-5.772,5.739a6.273,6.273,0,0,1-1.066.86A2,2,0,0,1,50,23ZM47.108,8a3.1,3.1,0,0,0-2.2.911,3.02,3.02,0,0,0-.366,3.893,2.689,2.689,0,0,0,.367.452L50,18.313l5.087-5.058a2.387,2.387,0,0,0,.32-.384c.015-.022.03-.045.046-.067a3.018,3.018,0,0,0-.361-3.888,3.154,3.154,0,0,0-3.943-.375,2,2,0,0,1-2.3,0A3.021,3.021,0,0,0,47.108,8Z"></path></svg>
				<div class="text-menu">Contact Person</div>
			</li>
			<li class="splide__slide" data-splide-y="18">
				<svg id="Capa_1" enable-background="new 0 0 512 512" height="512" viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg"  ><g><path d="m479.05 223.622c13.45-11.918 21.95-29.303 21.95-48.644 0-35.843-29.159-65.004-65-65.004s-65 29.161-65 65.004c0 12.882 3.782 24.89 10.271 35.002h-5.271c-24.813 0-45-20.188-45-45.003v-3.788l35.903-35.906c28.621-28.622 28.621-75.194 0-103.816-28.621-28.624-75.19-28.622-103.81 0l-7.093 7.094-7.093-7.093c-28.62-28.622-75.189-28.624-103.81 0-28.621 28.622-28.621 75.194 0 103.816l35.903 35.905v3.788c0 24.815-20.187 45.003-45 45.003h-5.271c6.489-10.112 10.271-22.12 10.271-35.002 0-35.843-29.159-65.004-65-65.004s-65 29.161-65 65.004c0 19.342 8.5 36.727 21.95 48.645-19.302 13.584-31.95 36.016-31.95 61.362v212.014c0 8.285 6.716 15.001 15 15.001h100c8.284 0 15-6.716 15-15.001v-70.389c11.814-5.628 20-17.684 20-31.618v-95.83c22.53-2.49 43.937-10.589 62.623-23.789 16.979-11.995 30.784-27.518 40.632-45.505.577.068 1.159.113 1.746.113s1.168-.045 1.746-.113c9.848 17.988 23.653 33.51 40.632 45.505 18.685 13.2 40.092 21.298 62.623 23.789v95.83c0 13.935 8.186 25.99 20 31.618v70.389c0 8.285 6.716 15.001 15 15.001h100c8.284 0 15-6.716 15-15.001v-212.014c-.002-25.346-12.65-47.778-31.952-61.363zm-43.05-83.647c19.299 0 35 15.702 35 35.002s-15.701 35.002-35 35.002-35-15.702-35-35.002 15.701-35.002 35-35.002zm-360 0c19.299 0 35 15.702 35 35.002s-15.701 35.002-35 35.002-35-15.702-35-35.002 15.701-35.002 35-35.002zm25 342.023h-70v-52.003h70zm35-212.014c-8.284 0-15 6.716-15 15.001v110.007c0 2.757-2.243 5-5 5h-85v-115.007c0-24.815 20.187-45.003 45-45.003h60c33.447 0 61.841-22.013 71.481-52.31l22.938 22.94c-17.378 35.86-54.199 59.372-94.419 59.372zm120-76.218-89.69-89.697c-16.923-16.925-16.923-44.463 0-61.388 8.462-8.463 19.577-12.693 30.692-12.693s22.23 4.231 30.692 12.693l17.699 17.7c5.857 5.858 15.355 5.858 21.213 0l17.699-17.7c16.924-16.924 44.46-16.925 61.384 0 16.923 16.925 16.923 44.463 0 61.388zm225 288.232h-70v-52.003h70zm0-82.006h-85c-2.757 0-5-2.243-5-5v-110.007c0-8.285-6.716-15.001-15-15.001-40.22 0-77.041-23.512-94.42-59.372l22.938-22.94c9.64 30.297 38.035 52.31 71.481 52.31h60c24.813 0 45 20.188 45 45.003v115.007z"></path></g></svg>
				<div class="text-menu">Terima Kasih</div>
			</li>
		  </ul>
		</div>
	</div>


  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</div>
<!-- end wrapper -->
<div id="result"></div>
<div class="swipe-text" id="swipeText"></div>
<!-- Footer Scripts -->
<script src="js/splide.min.js"></script>
<script src="js/jquery.magnific-popup.js"></script>

<script>
	$("#submitButton").click(function(){
		var name=$("#form_name").val();
		var wa=$("#form_wa").val();
		var kehadiran=$("#kehadiran").val();
		var qty=$("#qty-input").val();
		var message=$("#form_message").val();
		var id_wedding=<?php echo $id_wedding ?>;

		// Pengecekan jika name, wa, atau message kosong
		if(name.trim() === '' || wa.trim() === '' || message.trim() === '') {
			alert("Nama, No WhatsApaa, and Pesan wajib diisi!");
			return; // Menghentikan eksekusi fungsi jika ada yang kosong
		}
		
		// Jika qty kosong, atur nilai ke null
		if(qty.trim() === '') {
			qty = null;
		}
		
		$.ajax({
			url:'pro_tambah_komentar.php',
			method:'POST',
			data:{
				id_wedding:id_wedding,
				name:name,
				wa:wa,
				kehadiran:kehadiran,
				qty:qty,
				message:message
			},
			success:function(data){
				/* Alert the copied text */
				var overlay = document.createElement('div');
				overlay.classList.add('overlay');
				document.body.appendChild(overlay);

				var alertBox = document.createElement('div');
				alertBox.classList.add('custom-alert');
				alertBox.innerHTML = `
					<div class="check-icon"></div>
					<div>
					${data}
					</div>
				`;
				document.body.appendChild(alertBox);

				overlay.style.display = 'block';
				alertBox.style.display = 'block';

				setTimeout(function () {
					$('.custom-alert').addClass("active");
				}, 200);

				
				setTimeout(function () {
					$('.custom-alert').removeClass("active");
				}, 2800);
				
				// Close the custom alert box after 2 seconds
				setTimeout(function () {
					closeCustomAlert();
				}, 13000);

				// Mengosongkan nilai input setelah pengiriman berhasil
				$("#form_name").val("");
				$("#form_wa").val("");
				$("#kehadiran").val("");
				$("#qty-input").val("");
				$("#form_message").val("");
			},
			error: function(xhr, status, error) {
				alert("AJAX request failed: " + status + "\nError: " + error);
			}
		});
	});
	
     document.addEventListener('DOMContentLoaded', function () {
		
        var splide = new Splide('#vertical-slider', {
			type: false,
			interval: 6000, // Atur interval (dalam milidetik)
			speed: 700, // Atur kecepatan geser slide (dalam milidetik)
			direction: 'ttb', // Vertikal (Top to Bottom)
			height: 'calc(100vh - 60px)', // Tinggi slider
			autoplay: true,
			autoHeight: false, // Matikan penyesuaian tinggi otomatis
			arrows: false, // Matikan panah navigasi
			pagination: false, // Nonaktifkan paginasi
			drag: false, // Nonaktifkan kemampuan seret
		}).mount();
		
		var startX, startY, endX, endY;

		// Fungsi untuk menangani pergerakan mouse pada desktop
		function handleMouseDown(event) {
			startX = event.clientX;
			startY = event.clientY;
			// Tambah event listener untuk event mousemove dan mouseup
			document.addEventListener('mousemove', handleMouseMove);
			document.addEventListener('mouseup', handleMouseUp);
		}

		function handleMouseMove(event) {
			// Update posisi mouse saat mouse bergerak
			endX = event.clientX;
			endY = event.clientY;
		}

		function handleMouseUp(event) {
			// Hapus event listener untuk event mousemove dan mouseup
			document.removeEventListener('mousemove', handleMouseMove);
			document.removeEventListener('mouseup', handleMouseUp);
			detectSwipe();
		}

		// Fungsi untuk menangani pergerakan touch pada perangkat mobile
		function handleTouchStart(event) {
			var touch = event.touches[0]; // Mendapatkan informasi touch pertama
			startX = touch.clientX;
			startY = touch.clientY;
			// Tambah event listener untuk event touchmove dan touchend
			document.addEventListener('touchmove', handleTouchMove);
			document.addEventListener('touchend', handleTouchEnd);
		}

		function handleTouchMove(event) {
			var touch = event.touches[0]; // Mendapatkan informasi touch pertama
			// Update posisi touch saat touch bergerak
			endX = touch.clientX;
			endY = touch.clientY;
		}

		function handleTouchEnd(event) {
			// Hapus event listener untuk event touchmove dan touchend
			document.removeEventListener('touchmove', handleTouchMove);
			document.removeEventListener('touchend', handleTouchEnd);
			detectSwipe();
		}

		// Fungsi untuk mendeteksi arah swipe dan memindahkan slide
		function detectSwipe() {
			// Menghitung jarak horizontal dan vertikal antara titik awal dan akhir pergerakan
			var diffX = startX - endX;
			var diffY = startY - endY;

			// Mendapatkan tinggi (height) halaman web
			var pageHeight = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);

			// Jika pergerakan vertikal lebih besar daripada pergerakan horizontal
			if (Math.abs(diffX) < Math.abs(diffY)) {
				// Swipe ke atas
				if (diffY > 0 && pageHeight <= window.innerHeight) {
					// alert('Swipe ke atas, tinggi halaman hanya setinggi satu layar.'); // Tampilkan alert swipe ke atas
					var nextIndex = splide.index + 1; // Indeks slide berikutnya
					splide.go(nextIndex); // Pindah ke slide berikutnya
				}
				// Swipe ke bawah
				else if (diffY < 0 && pageHeight <= window.innerHeight) {
					// alert('Swipe ke bawah, tinggi halaman hanya setinggi satu layar.'); // Tampilkan alert swipe ke bawah
					var prevIndex = splide.index - 1; // Indeks slide sebelumnya
					splide.go(prevIndex); // Pindah ke slide sebelumnya
				}
			}
		}

		// Tambahkan event listener untuk mousedown dan touchstart pada elemen slider
		var splideElement = document.querySelector('.splide');
		splideElement.addEventListener('mousedown', handleMouseDown);
		splideElement.addEventListener('touchstart', handleTouchStart);

		

		var fullscreenBtn = document.getElementById("fullscreenBtn");

		fullscreenBtn.addEventListener('click', function () {
			if (splide.options.autoplay) {
				splide.options.autoplay = false; // Matikan autoplay jika sedang aktif
			} else {
				splide.options.autoplay = true; // Aktifkan autoplay jika sedang tidak aktif
			}
			
			splide.refresh(); // Perbarui tampilan Splide
		});

		var toggleButtons = document.querySelectorAll('.toggleAutoplay');

		// Mengaktifkan atau menonaktifkan autoplay ketika tombol "Toggle Autoplay" diklik
		toggleButtons.forEach(function(button) {
			button.addEventListener('click', function () {
			if (splide.is( 'playing' )) {
				splide.pause(); // Jeda autoplay jika sedang berjalan
			} else {
				splide.play(); // Lanjutkan autoplay jika sedang dijeda
			}
			});
		});


		var content = document.getElementById("fullpage");

		// fullscreen
		fullscreenBtn.addEventListener("click", function() {
			if (content.requestFullscreen) {
			content.requestFullscreen();
			} else if (content.mozRequestFullScreen) { /* Firefox */
			content.mozRequestFullScreen();
			} else if (content.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
			content.webkitRequestFullscreen();
			} else if (content.msRequestFullscreen) { /* IE/Edge */
			content.msRequestFullscreen();
			}
		});

		// Mengaktifkan atau menonaktifkan autoplay ketika tombol "Toggle Autoplay" diklik
		fullscreenBtn.addEventListener('click', function () {
			if (splide.options.autoplay) {
			splide.options.autoplay = false; // Matikan autoplay jika sedang aktif
			} else {
			splide.options.autoplay = true; // Aktifkan autoplay jika sedang tidak aktif
			}
			splide.refresh(); // Perbarui tampilan Splide
		});


		window.addEventListener('resize', function() {
			var windowHeight = window.innerHeight;
			var sliderHeight = windowHeight; // 60px dari 100vh
			document.getElementById('vertical-slider').style.height = 'calc(' + sliderHeight + 'px - 60px)';
			document.getElementById('wrapper').style.height = 'calc(' + sliderHeight + 'px - 0px)';
		});

		new Splide('.splide-story', {
			type: false,
			autoplay: false,
			interval: 3000,
            height: '100vh', // Tinggi slider
            arrows: false, // Matikan panah navigasi
			pauseOnHover: false,
            pagination: false // Matikan pagination bawaan
		}).mount();


		// Horizontal Slider with 3 Columns and Centered
		var paginationSlider = new Splide('#pagination-slider', {
			perPage: 3,
			pagination: false,
			focus: 'center',
			arrows: false, // Matikan panah navigasi
		}).mount();
		
		// Clickable Horizontal Slider
		var horizontalSlides = document.querySelectorAll('#pagination-slider .splide__slide');
			horizontalSlides.forEach(function(slide) {
			slide.addEventListener('click', function() {
			  var index = parseInt(this.getAttribute('data-splide-y'));
			  paginationSlider.go(index);
			});
		});

		// Synchronize sliders
		paginationSlider.sync(splide);
		
		var slideButton = document.getElementById('fullscreenBtn');
		slideButton.addEventListener('click', function () {
		  splide.go(1); // Menggeser ke slide kedua (indeks dimulai dari 0)
		});

		// Show hide qty orang comment form
		var kehadiran = document.getElementById('kehadiran');
		var qtyInput = document.getElementById('qty-input');

		kehadiran.addEventListener('change', function () {
			var selectedOption = kehadiran.value;

			// Konten yang sesuai dengan opsi yang dipilih ditampilkan
			if (selectedOption === 'hadir') {
				qtyInput.classList.remove('d-none');
			} else {
				qtyInput.classList.add('d-none');
			}
		});

		var videoContainer = document.getElementById('vertical-slider-slide02');
		var video = videoContainer.querySelector('video');
		var isPlaying = false; // Menyimpan status pemutaran video

		// Fungsi untuk memainkan video
		function playVideo() {
			if (!isPlaying) {
			video.play();
			isPlaying = true;
			}
		}

		// Fungsi untuk menghentikan video
		function pauseVideo() {
			if (isPlaying) {
			video.pause();
			video.currentTime = 0; // Mengatur currentTime ke 0 saat video tersembunyi
			isPlaying = false;
			}
		}

		// Membuat observer untuk memantau perubahan pada class parent
		var observer = new MutationObserver(function(mutations) {
			mutations.forEach(function(mutation) {
			if (mutation.type === 'attributes' && mutation.attributeName === 'class') {
				var currentClass = videoContainer.getAttribute('class');
				if (currentClass.includes('is-active')) {
				playVideo();
				} else {
				pauseVideo();
				}
			}
			});
		});

		// Mengawasi perubahan pada class parent
		observer.observe(videoContainer, { attributes: true });

		// Memastikan video dimulai atau dihentikan saat halaman dimuat
		if (videoContainer.classList.contains('is-active')) {
			playVideo();
		} else {
			pauseVideo();
		}


    });

	// loading screen
	document.addEventListener("DOMContentLoaded", function() {
	var percentageText = document.getElementById("percentage");
	var loadingScreen = document.getElementById("loading-screen");
	var content = document.getElementById("wrapper");

	var width = 0;
	var interval = setInterval(function() {
		if (width >= 100) {
		clearInterval(interval);
		loadingScreen.style.display = "none";
		content.style.display = "block";
		} else {
		width++;
		percentageText.textContent = width + "%";
		}
	}, 30);
	});


	function copyBank1() {
		/* Get the text from the div */
		var divText = document.getElementById("bank1").innerText;

		/* Create a temporary textarea element to hold the text */
		var tempTextArea = document.createElement("textarea");
		tempTextArea.value = divText;

		/* Append the textarea element to the body */
		document.body.appendChild(tempTextArea);

		/* Select the text inside the textarea */
		tempTextArea.select();
		tempTextArea.setSelectionRange(0, 99999); /* For mobile devices */

		/* Copy the text inside the textarea */
		document.execCommand("copy");

		/* Remove the temporary textarea */
		document.body.removeChild(tempTextArea);

		/* Alert the copied text */
		var overlay = document.createElement('div');
		overlay.classList.add('overlay');
		document.body.appendChild(overlay);

		var alertBox = document.createElement('div');
		alertBox.classList.add('custom-alert');
		alertBox.innerHTML = `
			<div class="check-icon"></div>
			<div>
			${divText} successfully copied to the clipboard!
			</div>
		`;
		document.body.appendChild(alertBox);

		overlay.style.display = 'block';
		alertBox.style.display = 'block';

		setTimeout(function () {
			$('.custom-alert').addClass("active");
		}, 200);

		
		setTimeout(function () {
			$('.custom-alert').removeClass("active");
		}, 2800);
		
		// Close the custom alert box after 2 seconds
		setTimeout(function () {
			closeCustomAlert();
		}, 13000);
	}
	function closeCustomAlert() {
      var overlay = document.querySelector('.overlay');
      var alertBox = document.querySelector('.custom-alert');

      overlay.style.display = 'none';
      alertBox.style.display = 'none';

      overlay.remove();
      alertBox.remove();
    }
	
	function copyBank2() {
		/* Get the text from the div */
		var divText = document.getElementById("bank2").innerText;

		/* Create a temporary textarea element to hold the text */
		var tempTextArea = document.createElement("textarea");
		tempTextArea.value = divText;

		/* Append the textarea element to the body */
		document.body.appendChild(tempTextArea);

		/* Select the text inside the textarea */
		tempTextArea.select();
		tempTextArea.setSelectionRange(0, 99999); /* For mobile devices */

		/* Copy the text inside the textarea */
		document.execCommand("copy");

		/* Remove the temporary textarea */
		document.body.removeChild(tempTextArea);

		/* Alert the copied text */
		/* Alert the copied text */
		var overlay = document.createElement('div');
		overlay.classList.add('overlay');
		document.body.appendChild(overlay);

		var alertBox = document.createElement('div');
		alertBox.classList.add('custom-alert');
		alertBox.innerHTML = `
			<div class="check-icon"></div>
			<div>
			${divText} successfully copied to the clipboard!
			</div>
		`;
		document.body.appendChild(alertBox);

		overlay.style.display = 'block';
		alertBox.style.display = 'block';

		setTimeout(function () {
			$('.custom-alert').addClass("active");
		}, 200);

		
		setTimeout(function () {
			$('.custom-alert').removeClass("active");
		}, 2800);
		
		// Close the custom alert box after 2 seconds
		setTimeout(function () {
			closeCustomAlert();
		}, 13000);
	}
	
	function copyAlamat() {
		/* Get the text from the div */
		var divText = document.getElementById("alamat-copy").innerText;

		/* Create a temporary textarea element to hold the text */
		var tempTextArea = document.createElement("textarea");
		tempTextArea.value = divText;

		/* Append the textarea element to the body */
		document.body.appendChild(tempTextArea);

		/* Select the text inside the textarea */
		tempTextArea.select();
		tempTextArea.setSelectionRange(0, 99999); /* For mobile devices */

		/* Copy the text inside the textarea */
		document.execCommand("copy");

		/* Remove the temporary textarea */
		document.body.removeChild(tempTextArea);

		/* Alert the copied text */
		/* Alert the copied text */
		var overlay = document.createElement('div');
		overlay.classList.add('overlay');
		document.body.appendChild(overlay);

		var alertBox = document.createElement('div');
		alertBox.classList.add('custom-alert');
		alertBox.innerHTML = `
			<div class="check-icon"></div>
			<div>
			${divText} successfully copied to the clipboard!
			</div>
		`;
		document.body.appendChild(alertBox);

		overlay.style.display = 'block';
		alertBox.style.display = 'block';

		setTimeout(function () {
			$('.custom-alert').addClass("active");
		}, 200);

		
		setTimeout(function () {
			$('.custom-alert').removeClass("active");
		}, 2800);
		
		// Close the custom alert box after 2 seconds
		setTimeout(function () {
			closeCustomAlert();
		}, 13000);
	}

	
	
	/*Play music ketika klik button*/
	var myaudio = document.getElementById("background-music");
	
	function play() { 
		return myaudio.play(); 
	};

	
	function pause() { 
		return myaudio.pause(); 
	};

	$(function() {
		$('.open-invitation').on('click', function(){
			$('body').addClass('active');
			$('.cover-section').addClass('active');
		});
		$('#song-button').on('click', function(){
			$('#song-button').toggleClass('active');
		});
	});
	
	
	
	// Set the date we're counting down to
	var countDownDate = new Date("<?php echo $countdown_resepsi; ?>").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	  // Get today's date and time
	  var now = new Date().getTime();

	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;

	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	  // Display the result in the element with id="timer-resepsi"
	  document.getElementById("timer-resepsi").innerHTML = "<span>" + days + "<label>Hari</label></span><span>" + hours + "<label>Jam</label></span><span>" + minutes + "<label>Menit</label></span><span>" + seconds + "<label>Detik</label></span>";

	  // If the count down is finished, write some text
	  if (distance < 0) {
		clearInterval(x);
		document.getElementById("timer-resepsi").innerHTML = "<span>0<label>Hari</label></span><span>0<label>Jam</label></span><span>0<label>Menit</label></span><span>0<label>Detik</label></span>";
	  }
	}, 1000);

	
	
	// Set the date we're counting down to
	var countDownDate = new Date("<?php echo $countdown_akad; ?>").getTime();

	// Update the count down every 1 second
	var x = setInterval(function() {

	  // Get today's date and time
	  var now = new Date().getTime();

	  // Find the distance between now and the count down date
	  var distance = countDownDate - now;

	  // Time calculations for days, hours, minutes and seconds
	  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
	  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
	  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
	  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

	  // Display the result in the element with id="timer-akad"
	  document.getElementById("timer-akad").innerHTML = "<span>" + days + "<label>Hari</label></span><span>" + hours + "<label>Jam</label></span><span>" + minutes + "<label>Menit</label></span><span>" + seconds + "<label>Detik</label></span>";

	  // If the count down is finished, write some text
	  if (distance < 0) {
		clearInterval(x);
		document.getElementById("timer-akad").innerHTML = "<span>0<label>Hari</label></span><span>0<label>Jam</label></span><span>0<label>Menit</label></span><span>0<label>Detik</label></span>";
	  }
	}, 1000);
	
	
	function togglestory() {
		var element = document.getElementById("story-wrapper");
		element.classList.toggle("d-none");
		element.classList.toggle("d-block");
	}	
	
	function togglecomment() {
		var element = document.getElementById("form-comment");
		var form = document.getElementById("formucapan");
		element.classList.toggle("d-none");
		element.classList.toggle("d-block");
		
		form.classList.toggle("animate__pulse");
	}
	
	function toggleangpao() {
		var element = document.getElementById("angpao-data");
		var wrapper = document.getElementById("angpao-wrapper");
		element.classList.toggle("d-none");
		element.classList.toggle("d-block");
		
		wrapper.classList.toggle("animate__pulse");
	}
	
	function togglekado() {
		var element = document.getElementById("kado-data");
		var wrapper = document.getElementById("kado-wrapper");
		element.classList.toggle("d-none");
		element.classList.toggle("d-block");
		
		wrapper.classList.toggle("animate__pulse");
	}

	$(document).ready(function() {
		function fetchData() {
			$.ajax({
				url: 'data_komentar.php', // Ubah sesuai dengan nama skrip PHP Anda
				method: 'GET', // Sesuaikan dengan metode HTTP yang digunakan oleh skrip PHP Anda
				success: function(data) {
					// Memperbarui konten HTML dengan data yang diperoleh dari server
					$('#commentsContainer').html(data);
				},
				error: function(xhr, status, error) {
					console.error('AJAX request failed:', error);
				}
			});
		}

		// Panggil fungsi fetchData saat halaman pertama kali dimuat
		fetchData();

		// Set interval untuk melakukan polling data setiap 5 detik
		setInterval(fetchData, 1000); // Ubah interval sesuai kebutuhan


		$('.foto-wrapper').magnificPopup({
		  delegate: 'a', // child items selector, by clicking on it popup will open
		  type: 'image',
		  gallery:{enabled:true}
		  // other options
		});
	
	});

	document.addEventListener('DOMContentLoaded', function() {
		const animatedUp = document.querySelectorAll('.animatedUp');
		const animatedDown = document.querySelectorAll('.animatedDown');
		const animatedRight = document.querySelectorAll('.animatedRight');
		const animatedLeft = document.querySelectorAll('.animatedLeft');
		const animatedZoom = document.querySelectorAll('.animatedZoom');

		const observerUp = new IntersectionObserver(entries => {
			entries.forEach(entry => {
			if (entry.intersectionRatio > 0) {
				// Ketika elemen muncul di layar
				entry.target.classList.add('animate__animated', 'animate__fadeInUp'); // Menambahkan kelas animate__animated dan animate__fadeInUp
			} else {
				// Ketika elemen tidak lagi terlihat
				entry.target.classList.remove('animate__animated', 'animate__fadeInUp');
			}
			});
		});

		// Mengamati setiap elemen dengan kelas 'animatedUp'
		animatedUp.forEach(box => {
			observerUp.observe(box);
		});
		
		
		const observerDown = new IntersectionObserver(entries => {
			entries.forEach(entry => {
			if (entry.intersectionRatio > 0) {
				// Ketika elemen muncul di layar
				entry.target.classList.add('animate__animated', 'animate__fadeInDown'); // Menambahkan kelas animate__animated dan animate__fadeInUp
			} else {
				// Ketika elemen tidak lagi terlihat
				entry.target.classList.remove('animate__animated', 'animate__fadeInDown');
			}
			});
		});

		// Mengamati setiap elemen dengan kelas 'animatedDown'
		animatedDown.forEach(box => {
			observerDown.observe(box);
		});
		
		
		const observerRight = new IntersectionObserver(entries => {
			entries.forEach(entry => {
			if (entry.intersectionRatio > 0) {
				// Ketika elemen muncul di layar
				entry.target.classList.add('animate__animated', 'animate__fadeInRight'); // Menambahkan kelas animate__animated dan animate__fadeInUp
			} else {
				// Ketika elemen tidak lagi terlihat
				entry.target.classList.remove('animate__animated', 'animate__fadeInRight');
			}
			});
		});

		// Mengamati setiap elemen dengan kelas 'animatedRight'
		animatedRight.forEach(box => {
			observerRight.observe(box);
		});
		
		
		const observerLeft = new IntersectionObserver(entries => {
			entries.forEach(entry => {
			if (entry.intersectionRatio > 0) {
				// Ketika elemen muncul di layar
				entry.target.classList.add('animate__animated', 'animate__fadeInLeft'); // Menambahkan kelas animate__animated dan animate__fadeInUp
			} else {
				// Ketika elemen tidak lagi terlihat
				entry.target.classList.remove('animate__animated', 'animate__fadeInLeft');
			}
			});
		});

		// Mengamati setiap elemen dengan kelas 'animatedLeft'
		animatedLeft.forEach(box => {
			observerLeft.observe(box);
		});


		const observerZoom = new IntersectionObserver(entries => {
		entries.forEach(entry => {
			if (entry.intersectionRatio > 0) {
			// Ketika elemen muncul di layar
			entry.target.classList.add('animate__animated', 'animate__zoomIn'); // Menambahkan kelas animate__animated dan animate__fadeInUp
			} else {
			// Ketika elemen tidak lagi terlihat
			entry.target.classList.remove('animate__animated', 'animate__zoomIn');
			}
		});
		});

		// Mengamati setiap elemen dengan kelas 'animatedZoom'
		animatedZoom.forEach(box => {
			observerZoom.observe(box);
		});
	});
	</script>


</body>

</html>