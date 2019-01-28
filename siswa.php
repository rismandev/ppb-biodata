<?php

include 'koneksi.php';

$id_siswa = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id_siswa=$id_siswa");

$siswa = mysqli_fetch_array($query);

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Siswa XII RPLB</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"/>
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.min.js"></script>
</head>
<body>
	<div data-role="page" id="mhs1" data-add-back-btn="true">
		<div data-role="header">
		<h1>Detail Siswa</h1>
	</div><!-- /header-->
	<div data-role="content">
		<div class="ui-grid-a" id="info_penting">
		<div class="ui-block-a">
		<h1><?= $siswa['nama']; ?></h1>
		<p><strong>NIS : <?= $siswa['nis']; ?></strong></p>
		<p>Prestasi</p>
		<ul>
			<li><?= $siswa['prestasi_1']; ?></li>
			<li><?= $siswa['prestasi_2']; ?></li>
		</ul>
		<h3>Alamat Rumah:</h3>
		<p><?= $siswa['alamat_rumah']; ?></p>
		<h3>Alamat Ortu:</h3>
		<p><?= $siswa['alamat_ortu']; ?></p>
	</div>
	<div class="ui-block-b">
		<p><img src="image/<?= $siswa['foto']; ?>" alt="foto abid" style="width: 90%;" /></p>
		<p><a href="<?= $siswa['link']; ?>" rel="external" data-role="button" style="width: 90%;">Blog Siswa</a></p>
	</div>
</div>
<div id="kontak">
<a href="<?= $siswa['maps'];?>"
data-role="button" data-icon="maps">Alamat Rumah</a>
<a href="tel:<?= $siswa['no_telepon']; ?>" data-role="button" data-icon="tel">Telpon Siswa
</a>
</div>
</div><!-- /content -->
	<div data-role="footer">
	    <h1>Created By Risman</h1>
	</div>
</body><!-- /page -->
</body>
</html>