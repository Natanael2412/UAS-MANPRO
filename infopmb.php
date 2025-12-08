<?php
$title = "Info Pendaftaran Mahasiswa baru";
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
    if (empty($jurusan)) $errors[] = "Jurusan harus dipilih";
    if (empty($nama)) $errors[] = "Nama lengkap harus diisi";
    if (empty($nik)) $errors[] = "NIK harus diisi";
    if (empty($hp)) $errors[] = "No HP harus diisi";
    if (empty($tempat_lahir)) $errors[] = "Tempat lahir harus diisi";
    if (empty($tanggal_lahir)) $errors[] = "Tanggal lahir harus diisi";

    
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

<style>
    .simple-form {
        max-width: 600px;
        margin: 0 auto;
        background: rgba(255, 255, 255, 0.05);
        padding: 30px;
        border-radius: 15px;
        border: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .form-group {
        margin-bottom: 20px;
    }
    
    .form-label {
        display: block;
        color: #e2e8f0;
        margin-bottom: 8px;
        font-weight: 500;
    }
    
    .form-input {
        width: 100%;
        padding: 12px 15px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        color: white;
        font-size: 16px;
    }
    
    .form-input:focus {
        outline: none;
        border-color: var(--accent-primary);
        box-shadow: 0 0 0 3px rgba(var(--accent-primary-rgb), 0.2);
    }
    
    .select-input {
        width: 100%;
        padding: 12px 15px;
        background: rgba(255, 255, 255, 0.08);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 8px;
        color: white;
        font-size: 16px;
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='white' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 15px center;
        background-size: 12px;
        color: white !important;
        background-color: #1e293b !important;
    }

    .select-input option {
        background-color: #1e293b;
        color: white;
    }
        
    .submit-btn {
        width: 100%;
        padding: 15px;
        background: var(--accent-primary);
        color: white;
        border: none;
        border-radius: 8px;
        font-size: 18px;
        font-weight: bold;
        cursor: pointer;
        transition: background 0.3s;
    }
    
    .submit-btn:hover {
        background: var(--accent-secondary);
    }
    
    .success-box {
        background: rgba(34, 197, 94, 0.1);
        border: 1px solid rgba(34, 197, 94, 0.3);
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
    }
    
    .error-box {
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.3);
        padding: 20px;
        border-radius: 10px;
        margin-bottom: 20px;
    }
    
    .data-preview {
        background: rgba(255, 255, 255, 0.05);
        padding: 20px;
        border-radius: 10px;
        margin-top: 20px;
    }
    
    .data-row {
        display: flex;
        margin-bottom: 10px;
        padding-bottom: 10px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .data-label {
        width: 150px;
        color: #94a3b8;
    }
    
    .data-value {
        flex: 1;
        color: white;
        font-weight: 500;
    }
</style>


<main class="w-full bg-dark-bg text-text-light min-h-screen py-10">
    <div class="container mx-auto px-4">
        <div class="text-center mb-10">
            <h1 class="text-3xl font-bold text-white mb-3">Form Pendaftaran Mahasiswa Baru</h1>
            <p class="text-gray-400">Isi data diri dengan benar</p>
        </div>
        
        <?php if ($result == 'success' && !empty($saved_data)): ?>
            <div class="simple-form">
                <div class="success-box">
                    <h3 class="text-xl font-bold text-green-400 mb-3">✅ Pendaftaran Berhasil!</h3>
                    <p>Data Anda telah berhasil disimpan.</p>
                </div>
                
                <div class="data-preview">
                    <h4 class="text-lg font-bold text-white mb-4">Data Pendaftaran:</h4>
                    <div class="data-row">
                        <div class="data-label">Jurusan</div>
                        <div class="data-value"><?= htmlspecialchars($saved_data['jurusan']) ?></div>
                    </div>
                    <div class="data-row">
                        <div class="data-label">Nama Lengkap</div>
                        <div class="data-value"><?= htmlspecialchars($saved_data['nama']) ?></div>
                    </div>
                    <div class="data-row">
                        <div class="data-label">NIK</div>
                        <div class="data-value"><?= htmlspecialchars($saved_data['nik']) ?></div>
                    </div>
                                        <div class="data-row">
                        <div class="data-label">No HP</div>
                        <div class="data-value"><?= htmlspecialchars($saved_data['hp']) ?></div>
                    </div>
                    <div class="data-row">
                        <div class="data-label">Tempat, Tanggal Lahir</div>
                        <div class="data-value"><?= htmlspecialchars($saved_data['tempat_lahir']) ?>, <?= htmlspecialchars($saved_data['tanggal_lahir']) ?></div>
                    </div>
                    <div class="data-row">
                        <div class="data-label">Waktu Pendaftaran</div>
                        <div class="data-value"><?= htmlspecialchars($saved_data['waktu']) ?></div>
                    </div>
                </div>
                
                <div class="mt-6 flex gap-3">
                    <a href="<?= $_SERVER['PHP_SELF'] ?>" class="submit-btn text-center">Daftar Lagi</a>
                    <a href="infopmb.php" class="submit-btn text-center bg-gray-600 hover:bg-gray-700">Kembali</a>
                </div>
            </div>
        <?php else: ?>
            <div class="simple-form">
                <?php if ($result == 'error'): ?>
                    <div class="error-box">
                        <h3 class="text-xl font-bold text-red-400 mb-2">❌ Terdapat Kesalahan</h3>
                        <ul class="list-disc pl-5">
                            <?php foreach ($error_list as $error): ?>
                                <li class="text-red-300"><?= $error ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                <?php endif; ?>
                
                <form method="POST" action="">
                    <div class="form-group">
                        <label class="form-label">Pilih Jurusan *</label>
                        <select name="jurusan" required class="select-input">
                            <option value="">-- Pilih Jurusan --</option>
                            <option value="S1 Business Information Systems (Sistem Informasi Bisnis)">S1 Business Information Systems (Sistem Informasi Bisnis)</option>
                            <option value="S1 Game Technology (Teknologi Game)">S1 Game Technology (Teknologi Game)</option>
                            <option value="S1 E-commerce">S1 E-commerce</option>
                            <option value="S1 Akuntansi + S1 Sistem Informasi (Double Degree)">S1 Akuntansi + S1 Sistem Informasi (Double Degree)</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label class="form-label">Nama Lengkap *</label>
                        <input type="text" 
                               name="nama" 
                               required 
                               class="form-input" 
                               placeholder="Masukkan nama lengkap"
                               value="<?= isset($_POST['nama']) ? htmlspecialchars($_POST['nama']) : '' ?>">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">NIK *</label>
                        <input type="text" 
                               name="nik" 
                               required 
                               class="form-input" 
                               placeholder="Masukkan NIK"
                               value="<?= isset($_POST['nik']) ? htmlspecialchars($_POST['nik']) : '' ?>">
                    </div>
                    
                                        <div class="form-group">
                        <label class="form-label">Tempat Lahir *</label>
                        <input type="text" 
                               name="tempat_lahir" 
                               required 
                               class="form-input" 
                               placeholder="Kota tempat lahir"
                               value="<?= isset($_POST['tempat_lahir']) ? htmlspecialchars($_POST['tempat_lahir']) : '' ?>">
                    </div>
                    
                    <div class="form-group">
                        <label class="form-label">Tanggal Lahir *</label>
                        <input type="date" 
                               name="tanggal_lahir" 
                               required 
                               class="form-input"
                               value="<?= isset($_POST['tanggal_lahir']) ? htmlspecialchars($_POST['tanggal_lahir']) : '' ?>">
                    </div>

                    <div class="form-group">
                        <button type="submit" name="daftar" class="submit-btn">
                            DAFTAR SEKARANG
                        </button>
                    </div>
                    
                    <div class="text-center text-gray-400 text-sm mt-4">
                        * Wajib diisi
                    </div>
                </form>
            </div>
        <?php endif; ?>
    </div>
</main>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const firstInput = document.querySelector('input, select');
        if (firstInput) firstInput.focus();
    });
</script>

    <?php
    require __DIR__ . '/partials/footer.php';
    ?>