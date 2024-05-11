<?php
// Load file koneksi.php
include "config.php";
if(isset($_POST['name']) && isset($_POST['wa']) && isset($_POST['kehadiran']) && isset($_POST['message'])) {

	$id_wedding = $_POST['id_wedding'];
	$name = $_POST['name'];
	$wa = $_POST['wa'];
	$to = $_POST['to'];
	$qty = $_POST['qty'] ? $_POST['qty'] : null;
	$message = $_POST['message'];
	$kehadiran = $_POST['kehadiran'];

	// Menyimpan data ke dalam database
	$query = "INSERT INTO komentar (id_wedding, nama, no_wa, isi_komentar, kehadiran, qty) 
              VALUES ('$id_wedding', '$name', '$wa', '$message', '$kehadiran', " . ($qty !== null ? "'$qty'" : "NULL") . ")";
	$result = mysqli_query($conn, $query);

	// Menampilkan pesan berdasarkan hasil penyimpanan data
	if($result) {
		echo "Terima Kasih Atas Ucapannya!";
	} else {
		echo "Failed to insert data!";
	}
} else {
    echo "Incomplete data received!";
}

?>