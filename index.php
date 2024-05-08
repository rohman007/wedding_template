<!DOCTYPE html>
<html>
<?php
require 'config.php';

$id_wedding = 1;
             
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
// $tanggal = "06 . 03 . 2030";
$tanggal = date_create($row['tgl_resepsi']);
$tanggal = date_format($tanggal,"d . m . Y");
// $tanggal_timer = "May 6, 2023";
$tanggal_timer = date_create($row['tgl_resepsi']);
$tanggal_timer = date_format($tanggal_timer,"M d, Y");
$lokasi_akad = $row['lokasi_akad'];
$tgl_akad = date_create($row['tgl_akad']);
$tgl_akad = date_format($tgl_akad,"D, d M Y");

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

$tgl_akad = strtr($tgl_akad, $hari);
$tgl_akad = strtr($tgl_akad, $bulan);
$jam_akad = $row['jam_akad'];
$alamat_akad = $row['alamat_akad'];
$link_akad = $row['link_akad'];

$lokasi_resepsi = $row['lokasi_resepsi'];
$tgl_resepsi = date_create($row['tgl_resepsi']);
$tgl_resepsi = date_format($tgl_resepsi,"D, d M Y");
$tgl_resepsi = strtr($tgl_resepsi, $hari);
$tgl_resepsi = strtr($tgl_resepsi, $bulan);
$jam_resepsi = $row['jam_resepsi'];
$alamat_resepsi = $row['alamat_resepsi'];
$link_resepsi = $row['link_resepsi'];
	



// $history = array (
//   array("16 Oktober 2022","Lamaran","Kami dipertemukan untuk pertama kalinya dalam suatu pertemuan keluarga dimana untuk mengikat suatu hubungan yang kami jalani untuk menuju kejenjang yang lebih serius"),
//   array("06 Mei 2023","Menikah","Kami memutuskan untuk saling berkomitmen hingga akhirnya menikah dan saling menerima kekurangan satu sama lain sebagai sepasang suami istri"),
// );

?>
<head>

<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="Undangan Pernikahan <?php echo $nama_wanita ?> & <?php echo $nama_pria ?>" />
<meta name="keywords" content="building,business,construction,cleaning,transport,workshop" />
<meta http-equiv="Permissions-Policy" content="interest-cohort=()">
<meta name="author" content="SelembarDaun" />

<!-- Facebook Meta Tags -->
<meta property="og:type" content="article" />
<meta property="og:url" content="https://selembardaun.com/cintya-ekky">
<meta property="og:title" content="Undangan Pernikahan <?php echo $nama_wanita ?> & <?php echo $nama_pria ?>">
<meta property="og:description" content="Undangan Pernikahan <?php echo $nama_wanita ?> & <?php echo $nama_pria ?>">
<meta property="og:image" content="https://selembardaun.com/cintya-ekky/images/share-foto2.jpg">
<meta property="og:type" content="website">

<!-- Twitter Meta Tags --> 
<meta property="twitter:domain" content="https://selembardaun.com/cintya-ekky">
<meta property="twitter:url" content="https://selembardaun.com/cintya-ekky">
<meta name="twitter:title" content="Undangan Pernikahan <?php echo $nama_wanita ?> & <?php echo $nama_pria ?>">
<meta name="twitter:description" content="Undangan Pernikahan <?php echo $nama_wanita ?> & <?php echo $nama_pria ?>">
<meta name="twitter:image" content="https://selembardaun.com/cintya-ekky/images/share-foto2.jpg">

<!-- Page Title -->
<title><?php echo $nama_wanita; ?> & <?php echo $nama_pria; ?></title>

<!-- Favicon and Touch Icons -->
<link href="<?php echo  $hostname ?>assets/images/favicon.png" rel="shortcut icon" type="image/png">

<!-- Google Font -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Arima:wght@100..700&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<!-- Stylesheet -->
<link href="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
" rel="stylesheet">
<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />
<link rel="stylesheet" href="css/magnific-popup.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css?v=<?php echo rand() ?>" rel="stylesheet" type="text/css">

<!-- external javascripts -->
<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>
<body id="fullpage">
<div class="loading-screen" id="loading-screen">
  <div class="loading-bar">
    <div class="percentage" id="percentage">0%</div>
	<div class="bg-percentage animate__animated animate__pulse animate__slower"></div>
	For a better experience use Google Chrome and turn off Night/Dark Mode feature.
  </div>
</div>
<!--Music-->
<audio id="background-music" autoplay loop> 
	<source src="https://be.satu.love/musics/music_1677558595587kq9sr6o.mp3"  type="audio/mp3"> 
</audio>
<div id="wrapper" class="clearfix content">
<div>
	<div id="song-button" >
		<button class="pause-song" onclick="pause()" type="button"><i class="glyphicon glyphicon-volume-up"></i></button>
		<button class="play-song" onclick="play()" type="button"><i class="glyphicon glyphicon-volume-off"></i></button>
	</div>
	<section id="cover">
		<div class="position-absolute inset-0 w-100 h-100">
			<video autoplay loop playsinline preload="metadata" class="object-fit-cover w-100 h-100" style="opacity: 1;">
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
					<section id="cover" class="hero-section">
						<div class="position-absolute inset-0 w-100 h-100">
							<video autoplay loop playsinline preload="metadata" class="object-fit-cover w-100 h-100" style="opacity: 1;">
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
					<section id="opening">
						<div class="position-absolute inset-0 w-100 h-100">
							<video autoplay loop playsinline preload="metadata" class="object-fit-cover w-100 h-100" style="opacity: 1;">
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
					<section id="quran">
						<div class="position-absolute inset-0 w-100 h-100">
							<video autoplay loop playsinline preload="metadata" class="object-fit-cover w-100 h-100" style="opacity: 1;">
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
					<section id="couple" class="h-100 d-flex align-items-center">
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
					<section id="event">
					  <div class="container">
						<div class="section-content">
						  <div class="row">
							<div class="col-xs-12 col-sm-12 col-md-12">
							  <p class="text-center text-event" >Dengan penuh rasa syukur dan disertai <br/>ridho dan rahmat Allah SWT <br/><span>kami bermaksud menyelenggarakan tasyakuran</span></p>
							  <div class="content-event">
								<div class="list-event" >
									<h2>Akad Nikah</h2>
									<p style="margin-top: 4px;justify-content: center;margin-bottom: 23px;"></p>
									<p>
										<?php echo $tgl_akad ?><br/>
										<?php echo $jam_akad ?>
									</p>
									<h3>Lokasi</h3>
									<p>
										<?php echo $lokasi_akad ?><br/>
										<?php echo $alamat_akad ?>
									</p>
									<a href="<?php echo $link_akad ?>" target="_blank" class="btn btn-primary" role="button" >
									<i aria-hidden="true" class="glyphicon glyphicon-map-marker"></i> Google Map
									</a>
								</div>
								<div class="list-event" >
									<h2>Resepsi</h2>
									<p>
										<?php echo $tgl_resepsi ?><br/>
										<?php echo $jam_resepsi ?>
									</p>
									<h3>Lokasi</h3>
									<p>
										<?php echo $lokasi_resepsi ?><br/>
										<?php echo $alamat_resepsi ?>
									</p>
									<a href="<?php echo $link_resepsi ?>" target="_blank" class="btn btn-primary" role="button" >
									<i aria-hidden="true" class="glyphicon glyphicon-map-marker"></i> Google Map
									</a>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					  </div>
					</section>
				</li>
                <li class="splide__slide">
					<section id="countdown">
						<div class="container">
							<h1 class="page-header"  >Menuju Hari Bahagia</h1>
							<p id="demo"></p>
							<a href="https://calendar.google.com/calendar/u/0/r/eventedit?text=The+Wedding+of+Cintya+%26+Ekky&details=%3Cp%3ETerima+Kasih+telah+membarikan+doa+dan+restu+dalam+acara+pernikahan+kami%3C/p%3E&dates=20231202T100000I/20231202T170000I" target="_blank" class="btn btn-primary" role="button">
							<i aria-hidden="true" class="glyphicon glyphicon-calendar"></i> Simpan Tanggal
							</a>
						</div>
					</section>
				</li>
                <li class="splide__slide">
					<section id="gallery" class="divider ">
						<div class="container">
							<div class="row">
								<div class="col-sm-12">
									<h1 class="page-title" >Galeri Foto</h1>
									<div class="parent-container">
										<a class="test-popup-link"  href="foto/gallery1.webp"><img src="foto/gallery1.webp"></a>
										<a class="test-popup-link"  href="foto/gallery2.webp"><img src="foto/gallery2.webp"></a>
										<a class="test-popup-link"  href="foto/gallery3.webp"><img src="foto/gallery3.webp"></a>
										<a class="test-popup-link"  href="foto/gallery4.webp"><img src="foto/gallery4.webp"></a>
										<a class="test-popup-link"  href="foto/gallery5.webp"><img src="foto/gallery5.webp"></a>
										<a class="test-popup-link"  href="foto/gallery6.webp"><img src="foto/gallery6.webp"></a>
									</div>
									
									<div class="iframe-video" >
										<iframe width="560" height="315" src="https://www.youtube.com/embed/IgASxoB58QU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									</div>
								</div>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide">
					<section id="kolomucapan" class="divider overflow-visible">
					  <div class="container pb-100">
						<div class="parent-container">
							<a class="test-popup-link "  href="foto/foto3.png"><img src="foto/foto3.png"></a>
							<a class="test-popup-link "  href="foto/foto4.png"><img src="foto/foto4.png"></a>
							<a class="test-popup-link "  href="foto/foto5.png"><img src="foto/foto5.png"></a>
							<a class="test-popup-link "  href="foto/foto6.png"><img src="foto/foto6.png"></a>
						</div>
						<div class="row" data-margin-top="-154px"> 
							<div class="section-content"  >
								<div class="">
									<form id="formucapan" class="form-transparent form-text-white" method="post" action="pro_tambah_komentar.php" enctype="multipart/form-data">
									  <div class="row">
										<div class="col-sm-12"><h1 class="page-header" >Wedding Wish</h1></div>
										<div class="col-sm-6">
										  <div class="form-group">
											<label>Nama</label>
											<input type="text" placeholder="Masukkan Nama" id="form_name" name="nama" required="" class="form-control">
										  </div>
										</div>
										<div class="col-sm-6">
										  <div class="form-group">
											<label>Konfirmasi Kehadiran</label>
											<select name="kehadiran" class="form-control">
												<option value="hadir">Hadir</option>
												<option value="tidak hadir">Tidak Hadir</option>
											</select>
										  </div>
										</div>
										<input type="hidden" id="id_wedding" name="id_wedding" value="<?php echo $id_wedding;?>">
										<?php 
											if(isset($_GET['to'])){
												echo '<input type="hidden" id="to" name="to" value="'.$_GET['to'].'">';
											} else{}
										?>
										<div class="col-sm-12">
										  <div class="form-group">
											<label>Pesan/Doa</label>
											<textarea id="form_message" name="isi_komentar" class="form-control required" rows="5" placeholder="Masukkan Ucapan"></textarea>
										  </div>
										</div>
										<div class="col-sm-12 text-center">
										  <div class="form-group mb-0">
											<input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden" value="">
											<button type="submit" name="submit" class="btn btn-primary"><i aria-hidden="true" class="glyphicon glyphicon-send"></i>  Kirim Ucapan</button>
										  </div>
										</div>
									  </div>
									</form>
								
								</div>
						  
								<div class="footer-top">
									<div class="icon-box iconbox-bg bg-dark-transparent iconbox-theme-colored text-center text-white pt-0 pl-0 pr-0">
										<div id="block-comment" >
										<?php
										$sql=mysqli_query($conn,"SELECT * FROM komentar WHERE id_wedding = $id_wedding ORDER BY id DESC") or die(mysqli_error($conn));
											
										while ($row=$sql->fetch_array()){
										$hadir = $row['kehadiran'];
										// echo $hadir;
										if($hadir=="hadir"){
											$hadir = "<span class='kehadiran hadir'><span class='check-icon'></span> Hadir</span>";
										}else{
											$hadir = "<span class='kehadiran'><span class='close-icon'></span> Tidak Hadir</span>";
										}
										  ?>
											<div class="list-comment">
												<div class="title-comment"><b><?php echo $row['nama'];?></b><?php echo $hadir ;?></div>
												<div class="content-comment"><p><?php echo $row['f'];?></p></div>
											</div>
										   
										<?php } ?>
										</div>
									</div>
								</div>
							</div>
						  </div>
						  
						</div>
						
					</section>
					</li>
                <li class="splide__slide">
					<section id="closing">
						<div class="container">
							<div class="row">
								<div class="col-sm-6 col-sm-push-3 text-center" >
									<p>Merupakan suatu kehormatan dan kebahagiaan kami atas kehadiran Bapak/Ibu/Saudara/i berkenan hadir untuk memberikan Doa Restu</p> 
									<p>Wassalamualaikum Warahmatullahi Wabarakatuh</p>
								</div>
								<div class="col-sm-12 text-center">
								<div id="nama-catin"  >
									<span class="namawanita"><?php echo $nama_wanita; ?></span><br/>
									<span class="separator">&amp;</span> 
									<span class="namapria"><?php echo $nama_pria; ?></span>
								</div>
								</div>
							</div>
						</div>
					</section>
				</li>
            </ul>
        </div>
    </div>

    <div class="pagination-container ">
        <div class="splide" id="pagination-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="custom-pagination-item" data-splide-page="0">1</li>
                    <li class="custom-pagination-item" data-splide-page="1">2</li>
                    <li class="custom-pagination-item" data-splide-page="2">3</li>
                    <li class="custom-pagination-item" data-splide-page="3">4</li>
                    <li class="custom-pagination-item" data-splide-page="4">5</li>
                </ul>
            </div>
        </div>
    </div>


  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
</div>
<!-- end wrapper -->

<!-- Footer Scripts -->
<script src="
https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
"></script>
<script src="js/jquery.magnific-popup.js"></script>

<script>

     document.addEventListener('DOMContentLoaded', function () {
        var splide = new Splide('#vertical-slider', {
            type: false,
			interval : 5000, // Atur interval (dalam milidetik)
			speed : 1000, // Atur kecepatan geser slide (dalam milidetik)
            direction: 'ttb', // Vertikal (Top to Bottom)
            height: '100vh', // Tinggi slider
            autoHeight: false, // Matikan penyesuaian tinggi otomatis
            arrows: false, // Matikan panah navigasi
            pagination: false // Matikan pagination bawaan
        }).mount();

		var manualScroll = false; // Menyimpan status scroll manual

		// Mendengarkan peristiwa scroll
		window.addEventListener('scroll', function() {
		  manualScroll = true; // Mengatur status scroll manual menjadi true
		  splide.options.autoplay = false; // Menonaktifkan autoplay setelah scroll manual
		});

		// Mendengarkan peristiwa setelah slide berpindah
		splide.on('moved', function() {
		  // Jika tidak ada scroll manual, maka autoplay diaktifkan kembali
		  if (!manualScroll) {
			splide.options.autoplay = true;
		  }
		  manualScroll = false; // Mengatur status scroll manual menjadi false setelah slide berpindah
		});
		
        var paginationSplide = new Splide('#pagination-slider', {
            direction: 'ltr', // Horizontal (Left to Right)
            height: 'auto', // Tinggi slider
            autoHeight: false, // Matikan penyesuaian tinggi otomatis
            arrows: false, // Matikan panah navigasi
            pagination: false, // Matikan pagination bawaan
            focus: 'center', // Fokuskan pada slide tengah saat di-geser
            perPage: 1, // Menampilkan 3 slide per halaman
            drag: true, // Aktifkan fungsi drag
            gap: 10 // Jarak antar slide
        }).mount();
		
		var slideButton = document.getElementById('fullscreenBtn');
		slideButton.addEventListener('click', function () {
		  splide.go(1); // Menggeser ke slide kedua (indeks dimulai dari 0)
		});

        var customPagination = paginationSplide.Components.Elements.list;

        splide.on('mounted', function () {
            setActivePaginationItem(0); // Atur slide pertama sebagai aktif secara default
        });

        splide.on('moved', function (newIndex) {
            setActivePaginationItem(newIndex);
        });

        function setActivePaginationItem(index) {
            var paginationItems = customPagination.querySelectorAll('.custom-pagination-item');
            paginationItems.forEach(function (item) {
                item.classList.remove('active');
            });
            paginationItems[index].classList.add('active');

            // Scroll to active pagination item
            paginationSplide.go(index);
        }

        customPagination.addEventListener('click', function (event) {
            if (event.target && event.target.classList.contains('custom-pagination-item')) {
                var index = parseInt(event.target.getAttribute('data-splide-page'));
                splide.go(index);
            }
        });
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
			$('#cover').addClass('active');
		});
		$('#song-button').on('click', function(){
			$('#song-button').toggleClass('active');
		});
	});
	
	// Fullscreen
	// document.addEventListener("DOMContentLoaded", function() {
		// var fullscreenBtn = document.getElementById("fullscreenBtn");
		// var content = document.getElementById("fullpage");

		// fullscreenBtn.addEventListener("click", function() {
			// if (content.requestFullscreen) {
			// content.requestFullscreen();
			// } else if (content.mozRequestFullScreen) { /* Firefox */
			// content.mozRequestFullScreen();
			// } else if (content.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
			// content.webkitRequestFullscreen();
			// } else if (content.msRequestFullscreen) { /* IE/Edge */
			// content.msRequestFullscreen();
			// }
		// });
	// });
	
	
	// Set the date we're counting down to
	var countDownDate = new Date("<?php echo $tanggal_timer; ?>").getTime();

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

	  // Display the result in the element with id="demo"
	  document.getElementById("demo").innerHTML = "<span>" + days + "<label>Hari</label></span><span>" + hours + "<label>Jam</label></span><span>" + minutes + "<label>Menit</label></span>";

	  // If the count down is finished, write some text
	  if (distance < 0) {
		clearInterval(x);
		document.getElementById("demo").innerHTML = "<span>0<label>Day(s)</label></span><span>0<label>Hour(s)</label></span><span>0<label>Minute(s)</label></span>";
	  }
	}, 1000);
	
	

	$(document).ready(function() {
		$('.parent-container').magnificPopup({
		  delegate: 'a', // child items selector, by clicking on it popup will open
		  type: 'image',
		  gallery:{enabled:true}
		  // other options
		});
		
		// $('#cover').css({'height':($(window).height()) + 'px'});
		// $('#big-banner').css({'height':($(window).height()) + 'px'});
	});
	
	document.addEventListener('DOMContentLoaded', function() {
		const animatedBoxes = document.querySelectorAll('.animated');

		const observer = new IntersectionObserver(entries => {
		  entries.forEach(entry => {
			if (entry.intersectionRatio > 0) {
			  // Ketika elemen muncul di layar
			  entry.target.classList.add('animate__animated'); // Menambahkan kelas animate__animated
			} else {
			  // Ketika elemen tidak lagi terlihat
			  entry.target.classList.remove('animate__animated');
			}
		  });
		});

		// Mengamati setiap elemen dengan kelas 'box'
		animatedBoxes.forEach(box => {
		  observer.observe(box);
		});
	});
	  document.addEventListener('DOMContentLoaded', function() {
		const animatedUp = document.querySelectorAll('.animatedUp');
		const animatedDown = document.querySelectorAll('.animatedDown');
		const animatedRight = document.querySelectorAll('.animatedRight');
		const animatedLeft = document.querySelectorAll('.animatedLeft');

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
	  });
</script>


</body>

</html>