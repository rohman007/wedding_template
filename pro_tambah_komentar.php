<?php
// Load file koneksi.php
include "config.php";

if(isset($_POST['submit'])){
	$id_wedding = $_POST['id_wedding'];
	$nama = $_POST['nama'];
	$no_wa = $_POST['no_wa'];
	$to = $_POST['to'];
	$qty = $_POST['qty'];
	$isi_komentar = $_POST['isi_komentar'];
	$kehadiran = $_POST['kehadiran'];
	$query2=mysqli_query($conn,"INSERT INTO komentar VALUES (NULL,'".$id_wedding."','".$nama."','".$no_wa."','".$isi_komentar."','".$kehadiran."','".$qty."')") or die(mysqli_error($conn));
	if($to != ""){
		echo '<script language="javascript">alert("Terima Kasih Atas Ucapannya!"); document.location="index.php?to='.$to.'#thankyou";</script>'; die();
	} else {
		echo '<script language="javascript">alert("Terima Kasih Atas Ucapannya!"); document.location="index.php#thankyou";</script>'; die();
	}
}
else{
    echo '<script language="javascript">alert("Ups! Terjadi Error, Silahkan Kontak Admin"); document.location="index.php#formucapan";</script>'; die();
}

?>