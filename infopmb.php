<?php
$title = "Info Pendaftaran Mahasiswa baru";
$simple_mode = true; // Menyembunyikan menu navbar sesuai request
require __DIR__ . '/partials/header.php';
$result = '';
$saved_data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['daftar'])) {
    $jurusan = trim($_POST['jurusan'] ?? '');
    $nama = trim($_POST['nama'] ?? '');
    $nik = trim($_POST['nik'] ?? '');
    $hp = trim($_POST['hp'] ?? '');
    $tempat_lahir = trim($_POST['tempat_lahir'] ?? '');
    $tanggal_lahir = $_POST['tanggal_lahir'] ?? '';


    $errors = [];
    if (empty($jurusan))
        $errors[] = "Jurusan harus dipilih";
    if (empty($nama))
        $errors[] = "Nama lengkap harus diisi";
    if (empty($nik))
        $errors[] = "NIK harus diisi";
    if (empty($hp))
        $errors[] = "No HP harus diisi";
    if (empty($tempat_lahir))
        $errors[] = "Tempat lahir harus diisi";
    if (empty($tanggal_lahir))
        $errors[] = "Tanggal lahir harus diisi";


    if (empty($errors)) {
        $data = [
            'waktu' => date('Y-m-d H:i:s'),
            'jurusan' => $jurusan,
            'nama' => $nama,
            'nik' => $nik,
            'hp' => $hp,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir

        ];

        $saved_data = $data;

        $entry = date('Y-m-d H:i:s') . " | " .
            $jurusan . " | " .
            $nama . " | " .
            $nik . " | " .
            $hp . " | " .
            $tempat_lahir . " | " .
            $tanggal_lahir . PHP_EOL;

        $file = __DIR__ . '/storage/pendaftaran.txt';
        file_put_contents($file, $entry, FILE_APPEND);

        $result = 'success';
    } else {
        $result = 'error';
        $error_list = $errors;
    }
}
?>


<main class="min-h-screen pt-24 pb-20 
    bg-light-bg text-light-text 
    dark:bg-dark-bg dark:text-dark-text transition-colors duration-300">

    <div class="max-w-3xl mx-auto px-4">
        
        <div class="text-center mb-12" data-aos="fade-down">
            <h1 class="text-3xl md:text-5xl font-extrabold 
                bg-gradient-to-r from-blue-500 via-teal-400 to-accent-primary
                bg-clip-text text-transparent mb-4">
                Form Pendaftaran
            </h1>
            <p class="text-text-muted dark:text-dark-muted">
                Bergabunglah menjadi bagian dari inovator masa depan SIEGA.
            </p>
        </div>

        <div class="p-8 md:p-10 rounded-2xl border border-gray-300/40 dark:border-white/10 
            bg-white/60 dark:bg-black/20 backdrop-blur-md shadow-2xl transition-colors"
            data-aos="fade-up">
        
            <?php if ($result == 'success' && !empty($saved_data)): ?>
                <div class="text-center space-y-6">
                    <div class="p-4 bg-green-500/20 border border-green-500/30 text-green-700 dark:text-green-300 rounded-xl">
                        <h3 class="text-xl font-bold mb-1">✅ Pendaftaran Berhasil!</h3>
                        <p class="text-sm">Data Anda telah berhasil kami terima.</p>
                    </div>
                    
                    <div class="text-left bg-white/50 dark:bg-white/5 p-6 rounded-xl border border-gray-200 dark:border-white/10">
                        <h4 class="text-lg font-bold mb-4 border-b border-gray-300 dark:border-white/10 pb-2">Preview Data</h4>
                        
                        <div class="grid grid-cols-1 gap-y-3 text-sm">
                            <div class="grid grid-cols-3 gap-4">
                                <span class="text-text-muted dark:text-dark-muted">Jurusan</span>
                                <span class="col-span-2 font-medium"><?= htmlspecialchars($saved_data['jurusan']) ?></span>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <span class="text-text-muted dark:text-dark-muted">Nama</span>
                                <span class="col-span-2 font-medium"><?= htmlspecialchars($saved_data['nama']) ?></span>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <span class="text-text-muted dark:text-dark-muted">NIK</span>
                                <span class="col-span-2 font-medium"><?= htmlspecialchars($saved_data['nik']) ?></span>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <span class="text-text-muted dark:text-dark-muted">No HP</span>
                                <span class="col-span-2 font-medium"><?= htmlspecialchars($saved_data['hp']) ?></span>
                            </div>
                            <div class="grid grid-cols-3 gap-4">
                                <span class="text-text-muted dark:text-dark-muted">TTL</span>
                                <span class="col-span-2 font-medium"><?= htmlspecialchars($saved_data['tempat_lahir']) ?>, <?= htmlspecialchars($saved_data['tanggal_lahir']) ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center pt-4">
                        <a href="<?= $_SERVER['PHP_SELF'] ?>" 
                           class="px-6 py-3 rounded-xl font-bold text-white bg-accent-primary hover:bg-accent-secondary transition shadow-lg hover:shadow-accent-primary/25">
                            Daftar Lagi
                        </a>
                        <a href="index.php" 
                           class="px-6 py-3 rounded-xl font-bold border border-gray-300 dark:border-white/20 hover:bg-gray-100 dark:hover:bg-white/10 transition">
                            Kembali ke Beranda
                        </a>
                    </div>
                </div>

            <?php else: ?>
                <?php if ($result == 'error'): ?>
                    <div class="mb-6 p-4 bg-red-500/20 border border-red-500/30 text-red-600 dark:text-red-300 rounded-xl">
                        <h3 class="font-bold mb-2">❌ Terdapat Kesalahan Input</h3>
                        <ul class="list-disc pl-5 text-sm space-y-1">
                            <?php foreach ($error_list as $error): ?>
                                <li><?= $error ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="" class="space-y-6">
                    
                    <?php 
                        $inputClass = "w-full px-4 py-3 rounded-xl bg-white/70 dark:bg-white/5 border border-gray-300/40 dark:border-white/10 text-light-text dark:text-dark-text placeholder-gray-400 dark:placeholder-gray-500 focus:outline-none focus:border-accent-primary focus:ring-1 focus:ring-accent-primary transition";
                        $labelClass = "block text-sm font-medium text-text-muted dark:text-dark-muted mb-2";
                    ?>

                    <div>
                        <label class="block text-sm font-medium text-text-muted dark:text-dark-muted mb-2">Pilih Jurusan <span class="text-red-500">*</span></label>
                        <select name="jurusan" required class="<?= $inputClass ?> appearance-none cursor-pointer">
                            <option value="" class="dark:bg-dark-bg">-- Pilih Program Studi --</option>
                            <option value="S1 Business Information Systems" class="dark:bg-dark-bg">S1 Business Information Systems (Sistem Informasi Bisnis)</option>
                            <option value="S1 Game Technology" class="dark:bg-dark-bg">S1 Game Technology (Teknologi Game)</option>
                            <option value="S1 E-commerce" class="dark:bg-dark-bg">S1 E-commerce</option>
                            <option value="S1 Akuntansi + SI" class="dark:bg-dark-bg">S1 Akuntansi + S1 Sistem Informasi (Double Degree)</option>
                        </select>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="<?= $labelClass ?>">Nama Lengkap <span class="text-red-500">*</span></label>
                            <input type="text" name="nama" required placeholder="Nama sesuai KTP"
                                   class="<?= $inputClass ?>"
                                   value="<?= isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>">
                        </div>
                        
                        <div>
                            <label class="<?= $labelClass ?>">NIK <span class="text-red-500">*</span></label>
                            <input type="number" name="nik" required placeholder="16 digit NIK"
                                   class="<?= $inputClass ?>"
                                   value="<?= isset($_POST['nik']) ? htmlspecialchars($_POST['nik']) : '' ?>">
                        </div>
                    </div>

                    <div>
                        <label class="<?= $labelClass ?>">Nomor HP / WhatsApp <span class="text-red-500">*</span></label>
                        <input type="tel" name="hp" required placeholder="08xxxxxxxxxx"
                               class="<?= $inputClass ?>"
                               value="<?= isset($_POST['hp']) ? htmlspecialchars($_POST['hp']) : '' ?>">
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="<?= $labelClass ?>">Tempat Lahir <span class="text-red-500">*</span></label>
                            <input type="text" name="tempat_lahir" required placeholder="Kota kelahiran"
                                   class="<?= $inputClass ?>"
                                   value="<?= isset($_POST['tempat_lahir']) ? htmlspecialchars($_POST['tempat_lahir']) : '' ?>">
                        </div>
                        
                        <div>
                            <label class="<?= $labelClass ?>">Tanggal Lahir <span class="text-red-500">*</span></label>
                            <input type="date" name="tanggal_lahir" required 
                                   class="<?= $inputClass ?> dark:[color-scheme:dark]"
                                   value="<?= isset($_POST['tanggal_lahir']) ? htmlspecialchars($_POST['tanggal_lahir']) : '' ?>">
                        </div>
                    </div>

                    <div class="pt-4">
                        <button type="submit" name="daftar" 
                            class="w-full py-4 rounded-xl font-bold text-white bg-gradient-to-r from-accent-primary to-accent-secondary hover:shadow-lg hover:shadow-accent-primary/25 transition transform hover:-translate-y-1">
                            DAFTAR SEKARANG
                        </button>
                    </div>
                    
                    <p class="text-center text-xs text-text-muted dark:text-dark-muted mt-4">
                        Pastikan data yang Anda masukkan sudah benar sebelum mengirim.
                    </p>
                </form>
            <?php endif; ?>
        </div>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const firstInput = document.querySelector('input, select');
        if (firstInput) firstInput.focus();
    });
</script>

<?php
require __DIR__ . '/partials/footer.php';
?>