<!DOCTYPE html>
<html>
<head>
<title>Wellcome To My App</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="jquery.mobile-1.2.0.min.css" />
<script src="jquery-1.8.2.min.js"></script>
<script src="jquery.mobile-1.2.0.min.js"></script>
</head>
<body>
	<div data-role="page" id="home">
	<div data-role="header">
		<h1>Applikasi Data</h1>
	</div><!-- /header -->
	<div data-role="content">
	<div class="choice_list">
	<h2> Pilih Kategori</h2>
	<ul data-role="listview" data-inset="true">
	<li><a href="daftar_siswa.php" data-transition="slidedown"><h3>XII RPLB 2019</h3></a></li>
	<li><a href="daftar_developer.php" data-transition="slidedown"><h3>Developer</h3></a></li>
	</ul>
	</div>
	</div>
	<div data-role="footer">
	    <h1>Created By Risman</h1>
	</div>
	</div><!-- /page -->
</body>
</html>