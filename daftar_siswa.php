<?php
include 'koneksi.php';

$sql = mysqli_query($koneksi, "SELECT * FROM siswa ORDER BY nama ASC");


?>

<!DOCTYPE HTML>
<html>
<head>
	<title>Daftar Siswa</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="jquery.mobile-1.2.0.min.css"/>
	<script src="jquery-1.8.2.min.js"></script>
	<script src="jquery.mobile-1.2.0.min.js"></script>
</head>
<body>
<div data-role="page" id="daftar_mhs"data-add-back-btn="true">
	<div data-role="header">
		<h1>Daftar Siswa XII RPLB 2019</h1>
	</div><!-- /header -->
	<div data-role="content">
		<div class="choice_list">
			<h2>Pilih Siswa</h2>
			<ul data-role="listview" data-inset="true" data-filter="true">
			<?php foreach ($sql as $siswa): ?>
			<li><a href="siswa.php?id=<?= $siswa['id_siswa']; ?>" data-transition="slidedown">
				<img src="image/<?= $siswa['foto']; ?>">
				<h2><?= $siswa['nama']; ?></h2>
				</a>
			</li>
			<?php endforeach; ?>
			</ul>
		</div>
	</div>
	<div data-role="footer">
	    <h1>Created By Risman</h1>
	</div>
</div>
</body>
</html>