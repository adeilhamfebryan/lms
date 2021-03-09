<?php 
function slm($nama){
	return "Selamat datang, $nama!";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>eLeMeS</title>
	<link rel="icon" type="image/png" href="assets/images/eLeMeS.png">
	<link rel="stylesheet" type="text/css" href="assets/css/lms.css">
</head>
<body>
	<header>
		<div class="h-menu">
			<div class="h-menu-kiri">
				<a href="#"><img src="assets/images/eLeMeS.png"></a>
			</div>
			<div class="h-menu-kanan">
				<div class="dropdown">
					<button class="drop-btn">Untuk Siswa</button>
					<div class="drop-item">
						<a href="public/sch/siswa" target="blank">School</a>
						<a href="public/vid" target="blank">Video</a>
					</div>
				</div>
				<div class="dropdown">
					<button class="drop-btn">Untuk Guru</button>
					<div class="drop-item">
						<a href="public/sch/guru" target="blank">School</a>
					</div>
				</div>
				<a class="a-menu" href="public/blog">Blog</a>
			</div>
		</div>
		<div class="judul">
			<h1>eLeMeS</h1>
			<p>LMS nomor 1 antar galaxy</p>
		</div>
		<div class="heading">
			<img src="assets/images/cont.jpg">
			<h1><?= slm("Ade") ?></h1>
		</div>
	</header>
	<main>
		<div class="container">
			<div class="konten">
				<div class="isi-konten tengah">
					<h2>Tenaga kerja</h2>
					<img src="assets/images/cont2.jpg">
					<h3>Professional</h3>
					<p>LMS kami tentu saja dibekali dengan tenaga kerja professional dan programer tampan. <br><a href="#">Cek selengkapnya!</a></p>
				</div>
			</div>
		</div>
	</main>
	<footer>
		
	</footer>
</body>
</html>