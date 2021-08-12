<?php 
require_once "modul/modul.php"; 
getErrorLogin();
?>

<!DOCTYPE html>
<html lang="eng">
<head>
	<title>Sistem Informasi Perpustakaan</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="plugin/bootstrap-4.5.3-dist/css/bootstrap.min.css">
  	<script src="plugin/jquery-3.5.1.min.js"></script>
  	<script src="plugin/popper-1.16.0.min.js"></script>
  	<script src="plugin/bootstrap-4.5.3-dist/js/bootstrap.min.js"></script>
</head>

<body style="background-color:#343A40;">
	<!-- HEADER -->
	<div class="jumbotron bg-dark text-white" style="margin-top:0">
		<h1>Perpustakkan Umum</h1>
		<p>Jl. Lembah Abang No 11, Telp: (021)55555555</p>
	</div>

	<!-- INFO -->
	<div class="container-fluid p-2 bg-danger text-white">
		Vocational School Graduate Academy | VSGA 
		<div style="float:right">Hai <?php echo$_SESSION['sesi']; ?></div>
	</div>

	<!--- MENU RESPONSIVE -->
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
		<!-- brand -->
		<a class="navbar-brand" href="#">
			<img src="images/logo-perpustakaan3.png" width="50px" height="55px" />
		</a>

		<!-- TAMPIL DATA KOTAK  -->
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuapp">
			<span class="navbar-toggler-icon"></span>
		</button>
		
		<!-- MEMBUAT MENU  -->
		<div class="collapse navbar-collapse" id="menuapp">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="index.php?p=beranda">Beranda</a>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Data MASTER</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="index.php?p=anggota">Data Anggota</a>
						<a class="dropdown-item" href="index.php?p=buku">Data Buku</a>
					</div>
				</li>

				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">Data Transaksi</a>

					<div class="dropdown-menu">
						<a class="dropdown-item" href="index.php?p=peminjaman">Transaksi Peminjaman</a>
						<a class="dropdown-item" href="index.php?p=pengembalian">Transaksi Pengembalian</a>
					</div>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="index.php?p=laporan">Laporan Transaksi</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="logout.php">Logout</a>
				</li>
			</ul>
		</div>
	</nav>

	<div class="container-fluid p-0 bg-white">
		<?php
			if (isset($_GET['p'])) {
				getPage ($_GET['p']);	
			}else{
				getPage ('beranda');
			}
		?>
	</div>

	<div class="container-fluid p- bg-dark text-white">
		<p><h5>Sistem Informasi Perpustakaan (sipus) | Praktikum </h5></p>
		<p><h6><small>
		Kasus asli dari Kominfo & Panitia VSGA <br />
		Modifikasi oleh Stendy B. Sakur (Politeknik Negeri Nusa Utara) <br />
		Logmodif: menggunakan Bootsrap sederhana dan Mengubah Teknik Pemrograman dengan menggunakan konsep Subrutin / modular</small></h6></p>
	</div>
</body>
</html>