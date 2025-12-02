<?php
require __DIR__ . '/header.php';


$contact_result = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
$name = trim(strip_tags($_POST['name'] ?? ''));
$email = trim(filter_var($_POST['email'] ?? '', FILTER_SANITIZE_EMAIL));
$message = trim(strip_tags($_POST['message'] ?? ''));


if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $message) {
$line = [date('Y-m-d H:i:s'), $name, $email, str_replace(["\r\n", "\n"], [' ', ' '], $message)];
$fp = fopen(__DIR__ . '/storage/messages.csv', 'a');
if ($fp) {
fputcsv($fp, $line);
fclose($fp);
$contact_result = 'Terima kasih — pesan Anda telah dikirim.';
} else {
$contact_result = 'Gagal menyimpan pesan. Cek permission folder storage/';
}
} else {
$contact_result = 'Harap isi semua bidang dengan benar.';
}
}
?>

<main class="container">
<section class="hero">
<div class="hero-left">
<h1>Jurusan Sistem Informasi</h1>
<p class="lead">Menggabungkan teknologi, bisnis, dan analisis untuk membentuk pengubah digital masa depan.</p>
<div class="cta-group">
<a href="#about" class="btn btn-primary">Pelajari Lebih Lanjut</a>
<a href="#curriculum" class="btn btn-ghost">Kurikulum</a>
</div>
</div>
<div class="hero-right">
<div class="card-glass">
<h3>Kenapa Pilih Sistem Informasi?</h3>
<ul>
<li>Kurikulum seimbang: teknis & manajerial</li>
<li>Kerjasama industri & magang</li>
<li>Laboratorium modern & proyek nyata</li>
</ul>
</div>
</div>
</section>


<section id="about" class="section split">
<div>
<h2>Tentang Jurusan</h2>
<p>Jurusan Sistem Informasi mempersiapkan mahasiswa untuk merancang, mengelola, dan mengevaluasi sistem informasi yang mendukung tujuan organisasi. Lulusan mampu berperan sebagai analis sistem, project manager, data analyst, dan pengembang solusi bisnis berbasis TI.</p>
</div>
<div>
<h3>Visi & Misi</h3>
<p><strong>Visi:</strong> Menjadi jurusan unggul dalam pendidikan sistem informasi yang inovatif dan beretika.</p>
<p><strong>Misi:</strong></p>
<?php require __DIR__ . '/footer.php'; ?>