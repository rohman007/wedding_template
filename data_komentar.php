<?php
// Load file koneksi.php
include "config.php";

// Query untuk mengambil data dari database
$sql = mysqli_query($conn, "SELECT * FROM komentar WHERE id_wedding = $id_wedding ORDER BY id DESC") or die(mysqli_error($conn));

function initial($nama) {
    // Memisahkan teks menjadi array kata-kata
    $kata_kata = explode(' ', trim($nama));
    
    // Mengambil dua kata pertama
    $kata_pertama = isset($kata_kata[0]) ? $kata_kata[0] : '';
    $kata_kedua = isset($kata_kata[1]) ? $kata_kata[1] : '';
    
    // Mengambil karakter pertama dari masing-masing kata
    $karakter_pertama1 = substr($kata_pertama, 0, 1);
    $karakter_pertama2 = substr($kata_kedua, 0, 1);
    
    return $karakter_pertama1 . $karakter_pertama2;
}

// Memulai buffer untuk menangkap output HTML
ob_start();

while ($row = mysqli_fetch_assoc($sql)) {
    $hadir = $row['kehadiran'];
    if ($hadir == "hadir") {
        $hadir = "<span class='kehadiran hadir'><span class='check-icon'></span> Hadir</span>";
    } else {
        $hadir = "<span class='kehadiran'><span class='close-icon'></span> Tidak Hadir</span>";
    }

    $nama = $row['nama'];
?>
    <div class="list-comment d-flex align-items-center">
        <div class="initial"><?php echo initial($nama); ?></div>
        <div>
            <div class="title-comment"><b><?php echo $row['nama']; ?></b><?php echo $hadir; ?></div>
            <div class="content-comment"><p><?php echo $row['isi_komentar']; ?></p></div>
        </div>
    </div>
<?php
}

// Mengambil output HTML yang ditangkap di buffer
$html_output = ob_get_clean();

// Mengembalikan output HTML untuk ditampilkan melalui AJAX
echo $html_output;
?>
