<!DOCTYPE html>
<html>
<?php
require 'config.php';

$id_wedding = 1;
             
$photo_pria = "man.png";
$photo_wanita = "woman.png";
$inisial_pria = "E";
$nama_pria = "Ekky";
$namalengkap_pria = "Ekky Arya";
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
	<div class="bg-percentage animate__animated animate__pulse"></div>
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
					<section id="big-banner">
						<div class="content-cover">
							<div id="block-cover" >
								<div id="nama-catin"  >
									<span class="namawanita"><?php echo $nama_wanita; ?></span><br/>
									<span class="separator">&amp;</span> 
									<span class="namapria"><?php echo $nama_pria; ?></span> 
								</div>
								<h3 class="date-cover"><img src="css/tanggal.png"></h3>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide">
					<section id="opening">
						<div class="ornamen-kanan" ><img class="" src="images/ornamen-kanan.png"></div>
						<div class="ornamen-kiri" ><img class="" src="images/ornamen-kiri.png"></div>
						<div class="container" >
							<div class="row">
								<div class="col-sm-12"><img class="bismillah" src="images/bismillah.png"></div>
							</div>
							<div class="row text-opening">
								<div class="col-md-3 col-xs-12">
									<h1 class="page-header" >Dua Insan <br/>yang Bersatu</h1>
								</div>
								<div class="col-md-6 col-xs-12" >
									<p>Kisah cinta kami dimulai pada suatu hari, dan sekarang, kami bersiap untuk memulai babak baru dalam hidup kami. Kami sangat bersemangat untuk berbagi momen indah ini bersama Anda.</p>
								</div>
							</div>
							<div class="row photo-gallery">
								<div class="col-sm-6" ><img class="" src="images/foto1.png"></div>
								<div class="col-sm-6" ><img class="" src="images/foto2.jpg"></div>
							</div>
							
							<div class="block-surat" >
								<p>Dan di antara tanda-tanda (kebesaran)-Nya ialah Dia menciptakan pasangan-pasangan untukmu dari jenismu sendiri, agar kamu cenderung dan merasa tenteram kepadanya, dan Dia menjadikan di antaramu rasa kasih dan sayang</p>
								<h4>Ar-Rum Ayat 21</h4>
							</div>
						</div>
					</section>
				</li>
                <li class="splide__slide">
					<section id="couple">
					  <div class="container">
						<div class="section-title">
						  <div class="row">
							<div class="col-md-12 text-center">
							  <h1 class="page-header" >Mempelai</h1>
							</div>
						  </div>
						</div>
						
						<div class="section-content-couple">
							<div class="row">
							  <div class="col-sm-6">
								  <div class="row">
									<div class="col-xs-8 col-sm-7" >
									  <div class="best-people">
										<img src="images/memp1.png">
									  </div>
									</div>
									<div class="col-xs-12">
										<div class="nama-lengakap-pengantin"  ><?php echo $namalengkap_wanita; ?></div>
										<div class="keluarga-block"  >
											<span>Putri dari</span><br/>
											Bapak <?php echo $bpk_wanita; ?><br/>
											& Ibu <?php echo $ibu_wanita; ?>
										</div>
									</div>
								  </div>
							  </div>
								<img class="dan-image" src="images/dan.png" >
							  <div class="col-sm-6">
								  <div class="row">
									<div class="col-xs-8 col-sm-7" >
									  <div class="best-people text-left">
										<img src="images/memp2.png">
									  </div>
									</div>
									<div class="col-xs-12">
										<div class="nama-lengakap-pengantin"  ><?php echo $namalengkap_pria; ?></div>
										<div class="keluarga-block"  >
											<span>Putra dari</span><br/>
											Bapak <?php echo $bpk_pria; ?><br/>
											& Ibu <?php echo $ibu_pria; ?>
										</div>
									</div>
								  </div>
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
                <li class="splide__slide">Slide 5</li>
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
        var verticalSplide = new Splide('#vertical-slider', {
            type: false,
            direction: 'ttb', // Vertikal (Top to Bottom)
            height: '100vh', // Tinggi slider
            autoHeight: false, // Matikan penyesuaian tinggi otomatis
            arrows: false, // Matikan panah navigasi
            pagination: false // Matikan pagination bawaan
        }).mount();

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

        var customPagination = paginationSplide.Components.Elements.list;

        verticalSplide.on('mounted', function () {
            setActivePaginationItem(0); // Atur slide pertama sebagai aktif secara default
        });

        verticalSplide.on('moved', function (newIndex) {
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
                verticalSplide.go(index);
            }
        });
    });


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
	document.addEventListener("DOMContentLoaded", function() {
		var fullscreenBtn = document.getElementById("fullscreenBtn");
		var content = document.getElementById("fullpage");

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
	});
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
</script>


</body>

</html>