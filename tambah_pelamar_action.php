<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
	$nama_pelamar = stripslashes(strip_tags(htmlspecialchars($_POST['nama_pelamar'] ,ENT_QUOTES)));
	$no_hp = stripslashes(strip_tags(htmlspecialchars($_POST['no_hp'] ,ENT_QUOTES)));
	$email = stripslashes(strip_tags(htmlspecialchars($_POST['email'] ,ENT_QUOTES)));
	

	$query = "INSERT into master_pelamar (nama_pelamar, no_hp, email) VALUES (?, ?, ?)";
    $pelamar = $koneksi->prepare($query);
    $pelamar->bind_param("sss", $nama_pelamar, $no_hp, $email);
    
    if ($pelamar->execute()) {
    	echo "<script>alert('Data Berhasil Disimpan');location='home.php?page=pelamar';</script>";
    } else {
    	echo "<script>alert('Error');window.history.go(-1);</script>";
    }
}

$koneksi->close();
?>