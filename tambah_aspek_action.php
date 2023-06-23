<?php
include 'koneksi.php';

if (isset($_POST['simpan'])) {
	$aspek = stripslashes(strip_tags(htmlspecialchars($_POST['aspek'] ,ENT_QUOTES)));
	$prosentase = stripslashes(strip_tags(htmlspecialchars($_POST['prosentase'] ,ENT_QUOTES)));
	$bobot_core = stripslashes(strip_tags(htmlspecialchars($_POST['bobot_core'] ,ENT_QUOTES)));
	$bobot_secondary = stripslashes(strip_tags(htmlspecialchars($_POST['bobot_secondary'] ,ENT_QUOTES)));

	$query = "INSERT into pm_aspek (aspek, prosentase, bobot_core, bobot_secondary) VALUES (?, ?, ?, ?)";
    $aspek_penilaian = $koneksi->prepare($query);
    $aspek_penilaian->bind_param("ssss", $aspek, $prosentase, $bobot_core, $bobot_secondary);
    
    if ($aspek_penilaian->execute()) {
    	echo "<script>alert('Data Berhasil Disimpan');location='home.php?page=aspek';</script>";
    } else {
    	echo "<script>alert('Error');window.history.go(-1);</script>";
    }
}

$koneksi->close();
?>