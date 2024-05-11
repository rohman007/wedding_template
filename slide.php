<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Vertical Swipe-Only Slider with Swiper.js</title>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<style>
  /* Style untuk kontainer slider */
  .swiper-container {
    width: 100%;
    height: 100vh; /* Mengatur tinggi slider sesuai tinggi layar */
  }

  /* Style untuk slide */
  .swiper-slide {
    background-size: cover;
    background-position: center;
    display: flex;
    justify-content: center;
    align-items: center;
    color: #fff;
    font-size: 3rem;
  }
</style>
</head>
<body>

<div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide" style="background-image: url('https://via.placeholder.com/800x600?text=Slide+1');">
      Slide 1
    </div>
    <div class="swiper-slide" style="background-image: url('https://via.placeholder.com/800x600?text=Slide+2');">
      Slide 2
    </div>
    <div class="swiper-slide" style="background-image: url('https://via.placeholder.com/800x600?text=Slide+3');">
      Slide 3
    </div>
  </div>
</div>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  new Swiper('.swiper-container', {
    direction: 'vertical', // Mengatur arah slider menjadi vertikal
    loop: true, // Mengaktifkan looping slider
    autoplay: {
      delay: 5000, // Delay antara setiap slide (dalam milidetik)
      disableOnInteraction: false, // Tidak menghentikan autoplay saat interaksi pengguna
    },
    pagination: {
      el: '.swiper-pagination', // Menyertakan pagination
      clickable: true, // Memungkinkan navigasi slide dengan klik
    },
    // Menonaktifkan drag tetapi memungkinkan swipe vertikal
    allowTouchMove: true,
    simulateTouch: true,
    touchRatio: 1,
    touchAngle: 45,
    grabCursor: false,
    // Mengatur deteksi swipe untuk arah vertikal saja
    threshold: 50,
    touchStartPreventDefault: false,
    touchMoveStopPropagation: true,
    touchStartForcePreventDefault: true,
    touchMoveOpposite: true,
    iOSEdgeSwipeThreshold: 50,
  });
});
</script>

</body>
</html>
