<?php
// ================== VARIABEL ==================
$nama_lengkap = "Zhiskind Taraka Abrar";
$nama_panggilan = "Raka";
$agama = "Islam";
$tempat_lahir = "Semarang";
$tanggal_lahir = 18;
$bulan_lahir = 11;
$tahun_lahir = 2009;
$alamat = "Jl. Tlogomukti Barat I NO. 686,Tlogosari Kulon,Pedurungan,Semarang";
$gender = "Laki-laki";
$kewarganegaraan = "Indonesia";
$no_wa = "081229695456";
$email = "tarakaabrar@gmail.com";
$makanan_favorit = ["Nasi Goreng", "Mie Ayam", "Sate"];
$minuman_favorit = ["Es Teh", "Es Teh Leci", "Kopi"];
$hobi = ["Otak Atik Motor", "Baca Komik", "Masak"];
$motto = "Berjuanglah sekeras mungkin, karena dengan berjuang kamu tau betapa luasnya dunia yang belum kamu jelajahi";
$ig = "https://www.instagram.com/rakano_isit?igsh=aHM5ejFjc3N6N29v";

// ================== PERHITUNGAN ==================
$tahun_sekarang = date("Y");
$umur = $tahun_sekarang - $tahun_lahir;

$tahun_10_lagi = $tahun_sekarang + 10;
$umur_10_lagi = $umur + 10;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Biodata <?php echo $nama_panggilan; ?></title>

    <!-- ICON&STYLE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">

   
</head>

<body>
<div class="container">

<h1>BIODATA</h1>

<h3>Foto</h3>
<img src="foto gwa lagi.jpeg" alt="foto">

<p><b>Nama Lengkap:</b> <?php echo $nama_lengkap; ?></p>
<p><b>Nama Panggilan:</b> <?php echo $nama_panggilan; ?></p>
<p><b>Agama:</b> <?php echo $agama; ?></p>
<p><b>Tempat/Tanggal Lahir:</b> <?php echo "$tempat_lahir, $tanggal_lahir-$bulan_lahir-$tahun_lahir"; ?></p>
<p><b>Umur:</b> <?php echo $umur; ?> tahun</p>
<p><b>Gender:</b> <?php echo $gender; ?></p>
<p><b>Alamat:</b> <?php echo $alamat; ?></p>
<p><b>Kewarganegaraan:</b> <?php echo $kewarganegaraan; ?></p>
<p><b>No WA:</b> <?php echo $no_wa; ?></p>
<p><b>Email:</b> <?php echo $email; ?></p>
<a href="<?= $ig; ?>">Klik disini</a>

<hr>

<h3>Keinginan 10 Tahun Lagi</h3>
<p>
Hallo nama Saya <?php echo $nama_panggilan; ?>,
saat ini tahun <?php echo $tahun_sekarang; ?>,
Saya berumur <?php echo $umur; ?> tahun,
dan Saya berasal dari seorang anak kecil yang bermimpi menjadi orang yang sangat kaya dan membeli semua barang yang saya mau tanpa harus memikirkan harganya.
10 tahun lagi di tahun <?php echo $tahun_10_lagi; ?>,
di umur <?php echo $umur_10_lagi; ?> tahun
Saya ingin menjadi pengusaha kebun kopi yang menjual bahan kopi mentah dan memiliki usaha cafe juga dari hasil panen dan olahan kopi dari kebun kopi saya, kenapa saya memilih kebun kopi? karena harga kopi yang stabil serta peminatnya yang sangat banyak sehingga itu menjadi peluang masuk saya untuk membangun bisnis kebun kopi, dan juga hasil panen kopi saya bisa saya jual kepada perusahaan penjual kopi sachet seperti kapal api.</p>

<hr>
<hr>
<h3>Hobi</h3>
<ol>
<?php foreach($hobi as $hb){ ?>
<li><?php echo $hb; ?></li>
<?php } ?>
</ol>

<h3>Makanan Favorit</h3>
<ul type="square">
<?php foreach($makanan_favorit as $mkn){ ?>
<li><?php echo $mkn; ?></li>
<?php } ?>
</ul>

<h3>Minuman Favorit</h3>
<ol type="A">
<?php foreach($minuman_favorit as $mnm){ ?>
<li><?php echo $mnm; ?></li>
<?php } ?>
</ol>

<hr>
<h3>Skills</h3>
<p>HTML: 90%</p>
<input type="range" value="90">

<h3>Skills</h3>
<p>CSS: 70%</p>
<input type="range" value="70">

<h3>Skills</h3>
<p>PHP: 60%</p>
<input type="range" value="60">

<hr>

<h3>Riwayat Pendidikan</h3>
<table>
<th>Tingkat</th>
<th>Nama Sekolah</th>
<th>Tahun Mulai</th>
<th>Tahun Lulus</th>
</tr>

<tr>
<td>SD</td>
<td>SDN BUBAKAN 02 Semarang</td>
<td>2015</td>
<td>2021</td>
</tr>

<tr>
<td>SMP</td>
<td>SMPN 15 Semarang</td>
<td>2021</td>
<td>2024</td>
</tr>

<tr>
<td>SMK</td>
<td>SMK Negeri 8 Semarang</td>
<td>2025</td>
<td>-</td>
</tr>

</table>

<hr><hr>

<div class="motto">
<span><?php echo $motto; ?></span>
</div>

<br><br>

<a href="jadwal.php">Lihat Jadwal</a>

<br><br>
<a href="jadwal.piket.php">Lihat Jadwal piket</a>

</div>
</body>
</html>





