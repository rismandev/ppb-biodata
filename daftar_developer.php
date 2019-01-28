<?php
include 'koneksi.php';

$risman = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='101614994'");
$erna = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='101614976'");
$dian = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='101614973'");

$dev1 = mysqli_fetch_array($risman);
$dev2 = mysqli_fetch_array($erna);
$dev3 = mysqli_fetch_array($dian);

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Daftar Developer</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"/>
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.min.js"></script>
</head>
<body>
<div data-role="page" id="daftar_mhs"data-add-back-btn="true">
	<div data-role="header">
		<h1>Daftar Developer</h1>
	</div><!-- /header -->
	<div data-role="content">
		<div class="choice_list">
			<h2>Pilih Mahasiswa</h2>
			<ul data-role="listview" data-inset="true" data-filter="true">
			<li><a href="siswa.php?id=<?= $dev1['id_siswa']; ?>" data-transition="slidedown">
				<img src="image/<?= $dev1['foto']; ?>">
				<h2><?= $dev1['nama']; ?></h2>
				</a>
			</li>
			<li><a href="siswa.php?id=<?= $dev2['id_siswa']; ?>" data-transition="slidedown">
				<img src="image/<?= $dev2['foto']; ?>">
				<h2><?= $dev2['nama']; ?></h2>
				</a>
			</li>
			<li><a href="siswa.php?id=<?= $dev3['id_siswa']; ?>" data-transition="slidedown">
				<img src="image/<?= $dev3['foto']; ?>">
				<h2><?= $dev3['nama']; ?></h2>
				</a>
			</li>
			</ul>
		</div>
	</div>
	<div data-role="footer">
	    <h1>Created By Risman</h1>
	</div>
</div>
</body>
</html>