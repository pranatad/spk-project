<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
	$id_aspek = stripslashes(strip_tags(htmlspecialchars($_POST['id_aspek'] ,ENT_QUOTES)));
	$faktor = stripslashes(strip_tags(htmlspecialchars($_POST['faktor'] ,ENT_QUOTES)));
	$target = stripslashes(strip_tags(htmlspecialchars($_POST['target'] ,ENT_QUOTES)));
	$type = stripslashes(strip_tags(htmlspecialchars($_POST['type'] ,ENT_QUOTES)));

	$query = "INSERT into pm_faktor (id_aspek, faktor, target, type) VALUES (?, ?, ?, ?)";
    $kriteria = $koneksi->prepare($query);
    $kriteria->bind_param("ssss", $id_aspek, $faktor, $target, $type);
    
    if ($kriteria->execute()) {
    	echo "<script>alert('Data Berhasil Disimpan');location='home.php?page=kriteria';</script>";
    } else {
    	echo "<script>alert('Error');window.history.go(-1);</script>";
    }
}

$koneksi->close();
?>