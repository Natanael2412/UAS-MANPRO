<?php
$title = "Jurusan Sistem Informasi";


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

<main class="max-w-7xl mx-auto px-4">
    <section class="min-h-screen pt-24 pb-12 flex flex-col md:grid md:grid-cols-12 gap-8 items-center justify-center">
        <div class="md:col-span-7 space-y-4">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold mt-0 brand-gradient leading-tight">Jurusan Sistem Informasi</h1>
            <p class="text-lg md:text-xl text-text-muted max-w-xl">Menggabungkan teknologi, bisnis, dan analisis untuk membentuk pengubah digital masa depan.</p>
            <div class="flex space-x-4 pt-4">
                <a href="#about" class="px-5 py-3 rounded-xl font-semibold no-underline text-white bg-gradient-to-r from-accent-primary to-accent-secondary shadow-lg shadow-accent-primary/30 transition duration-250 transform hover:-translate-y-1 hover:shadow-xl hover:shadow-accent-primary/50">Pelajari Lebih Lanjut</a>
                <a href="#curriculum" class="px-5 py-3 rounded-xl font-semibold no-underline text-text-light border border-white/10 bg-transparent transition duration-250 hover:bg-white/5">Kurikulum</a>
            </div>
        </div>
        <div class="md:col-span-5 w-full">
            <div class="p-6 bg-glass-bg backdrop-blur-lg rounded-2xl border border-white/10 glass-shadow">
                <h3 class="text-2xl font-bold mb-3 text-white">Kenapa Pilih Sistem Informasi?</h3>
                <ul class="list-disc list-inside space-y-2 text-text-muted">
                    <li>Kurikulum seimbang: teknis & manajerial</li>
                    <li>Kerjasama industri & magang</li>
                    <li>Laboratorium modern & proyek nyata</li>
                </ul>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 md:py-24">
        <div class="max-w-4xl mx-auto p-6 md:p-8 bg-glass-bg backdrop-blur-xl rounded-2xl glass-shadow border border-white/10 text-text-light">
            <h1 class="text-3xl md:text-4xl font-extrabold mb-6 accent-gradient-text">Tentang Program Studi Sistem Informasi Unika Soegijapranata Semarang</h1>

            <div class="text-base md:text-lg text-text-muted space-y-5">
                <p>Unika Soegijapranata mendapatkan ijin operasional program studi Sistem Informasi pada tahun 2013 dengan program konsentrasi Sistem Informasi dan Game Technology. Selanjutnya di tahun 2017, dibuka program kuliah ganda Akuntansi+Sistem Informasi (AKSI) dan konsentrasi E-Commerce di tahun 2018.</p>

                <h2 class="text-xl md:text-2xl font-bold pt-4 text-white">Visi</h2>
                <p>Menjadi komunitas akademik yang unggul dalam pendidikan, penelitian dan pengabdian dengan dilandasi nilai-nilai Kristiani: cinta kasih, keadilan dan kejujuran</p>

                <h2 class="text-xl md:text-2xl font-bold pt-4 text-white">Misi</h2>
                <ul class="ml-5 space-y-2">
                    <li class="p-3 bg-white/5 border-l-4 border-accent-primary rounded-lg transition duration-250 hover:border-accent-secondary hover:bg-white/10">Menyelenggarakan pendidikan yang berkualitas secara akademik dengan didukung pengembangan kepribadian yang utuh dan potensi kepemimpinan.</li>
                    <li class="p-3 bg-white/5 border-l-4 border-accent-primary rounded-lg transition duration-250 hover:border-accent-secondary hover:bg-white/10">Melakukan penelitian untuk pengembangan ilmu dan teknologi demi meningkatkan kesejahteraan manusia.</li>
                    <li class="p-3 bg-white/5 border-l-4 border-accent-primary rounded-lg transition duration-250 hover:border-accent-secondary hover:bg-white/10">Melakukan pengabdian kepada masyarakat sebagai penerapan ilmu dan teknologi yang telah dikembangkan dalam penelitian dan kesejahteraan manusia.</li>
                    <li class="p-3 bg-white/5 border-l-4 border-accent-primary rounded-lg transition duration-250 hover:border-accent-secondary hover:bg-white/10">Memberikan perhatian dan mencari pemecahan terhadap berbagai masalah sosial budaya masyarakat melalui komunitas akademik.</li>
                    <li class="p-3 bg-white/5 border-l-4 border-accent-primary rounded-lg transition duration-250 hover:border-accent-secondary hover:bg-white/10">Mengembangkan jaringan Kerjasama dengan berbagai institusi pendidikan, penelitian dan pengabdian lokal, nasional dan internasional untuk meningkatkan kualitas pendidikan dan penelitian.</li>
                    <li class="p-3 bg-white/5 border-l-4 border-accent-primary rounded-lg transition duration-250 hover:border-accent-secondary hover:bg-white/10">Memperbaiki dan mengembangkan universitas secara terus menerus, sehingga dapat mendukung segala upaya untuk mencapai keunggulan.</li>
                </ul>

                <div class="mt-8 p-5 bg-gradient-to-t from-accent-primary/15 to-accent-secondary/10 border-l-4 border-accent-secondary rounded-xl text-base md:text-lg italic text-white/90">
                    "Sistem Informasi adalah jembatan antara teknologi dan kebutuhan bisnis modern."
                </div>
            </div>
        </div>
    </section>

    <section id="curriculum" class="py-16 md:py-24">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-extrabold text-center mb-4 accent-gradient-text">Kurikulum & Konsentrasi – Sistem Informasi</h1>
            <p class="text-center max-w-3xl mx-auto mb-10 text-base md:text-xl text-text-muted">
                Program Studi Sistem Informasi di Unika Soegijapranata menawarkan beberapa konsentrasi yang dapat dipilih sesuai minat dan jalur karier. Berikut bidang-bidang yang akan Anda pelajari:
            </p>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow border border-white/10 transition duration-300 hover:bg-white/10 hover:transform hover:-translate-y-1">
                    <h3 class="text-xl font-bold mb-3 text-white">Konsentrasi: Sistem Informasi (Core SI)</h3>
                    <ul class="list-disc ml-5 space-y-1 text-text-muted">
                        <li>Manajemen Hubungan Pelanggan (CRM)</li>
                        <li>Sistem Informasi Perusahaan (CIS)</li>
                        <li>Kecerdasan Bisnis (Business Intelligence)</li>
                        <li>Teknologi Baru & Inovasi SI</li>
                        <li>Analisa dan Perancangan SI</li>
                        <li>Perencanaan Sumber Daya Perusahaan (ERP)</li>
                        <li>Audit Sistem Informasi</li>
                        <li>Teknologi Immersive</li>
                    </ul>
                </div>

                <div class="p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow border border-white/10 transition duration-300 hover:bg-white/10 hover:transform hover:-translate-y-1">
                    <h3 class="text-xl font-bold mb-3 text-white">Konsentrasi: E-Commerce</h3>
                    <ul class="list-disc ml-5 space-y-1 text-text-muted">
                        <li>Hukum Cyber (Cyber Law)</li>
                        <li>Manajemen Hubungan Pelanggan</li>
                        <li>Perilaku Konsumen</li>
                        <li>Perdagangan Internasional</li>
                        <li>Teknologi Keuangan (FinTech)</li>
                        <li>Pemasaran Digital & Media Baru</li>
                        <li>Keamanan Data</li>
                        <li>Metaverse & E-Marketplace</li>
                    </ul>
                </div>

                <div class="p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow border border-white/10 transition duration-300 hover:bg-white/10 hover:transform hover:-translate-y-1">
                    <h3 class="text-xl font-bold mb-3 text-white">Konsentrasi: Game Technology</h3>
                    <ul class="list-disc ml-5 space-y-1 text-text-muted">
                        <li>Animasi 2D & 3D</li>
                        <li>Game Nirkabel</li>
                        <li>Kecerdasan Buatan (AI untuk Game)</li>
                        <li>Antarmuka Game</li>
                        <li>Teknologi Game</li>
                        <li>Pengembangan Game Online</li>
                        <li>Deteksi Gerak</li>
                        <li>Augmented Reality & Virtual Reality</li>
                    </ul>
                </div>
            </div>

            <div class="mt-8 p-5 bg-gradient-to-r from-accent-primary/20 to-accent-secondary/15 border-l-4 border-accent-secondary rounded-xl text-lg font-medium text-white/90">
                Mahasiswa dapat memilih konsentrasi sesuai minat — baik Sistem Informasi tradisional, E-Commerce, maupun Teknologi Game — sehingga lulusan siap menghadapi berbagai bidang industri TI, bisnis, dan kreatif.
            </div>
        </div>
    </section>

    <section id="faculty" class="py-16 md:py-24">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-extrabold text-center mb-4 accent-gradient-text">Dosen & Staf Akademik SIEGA</h1>

            <p class="text-center max-w-3xl mx-auto mb-10 text-base md:text-xl text-text-muted">
                Berikut adalah beberapa nama dosen dan staf pengajar di Program Studi Sistem Informasi (SIEGA) — meliputi pimpinan program studi, laboratorium, dan dosen tetap.
            </p>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow transition duration-300 hover:bg-white/10">
                    <h3 class="text-lg font-bold text-white">Prof. Dr. Ridwan Sanjaya, S.E., S.Kom., MS.IEC</h3>
                    <p class="text-text-muted mt-2"><strong>Jabatan:</strong> Dekan Fakultas Ilmu Komputer / Guru Besar Sistem Informasi</p>
                </div>

                <div class="text-center p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow transition duration-300 hover:bg-white/10">
                    <h3 class="text-lg font-bold text-white">Dr. Bernadinus Harnadi, S.T., M.T.</h3>
                    <p class="text-text-muted mt-2"><strong>Jabatan:</strong> Wakil Dekan Fakultas Ilmu Komputer</p>
                </div>

                <div class="text-center p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow transition duration-300 hover:bg-white/10">
                    <h3 class="text-lg font-bold text-white">Dr. Albertus Dwiyoga Widiantoro, S.Kom., M.Kom.</h3>
                    <p class="text-text-muted mt-2"><strong>Jabatan:</strong> Ketua Program Studi Sistem Informasi</p>
                </div>
                
                <div class="text-center p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow transition duration-300 hover:bg-white/10">
                    <h3 class="text-lg font-bold text-white">Andre Kurniawan Pamudji, S.Kom., M.Ling.</h3>
                    <p class="text-text-muted mt-2"><strong>Jabatan:</strong> Sekretaris Program Studi Sistem Informasi</p>
                </div>

                <div class="text-center p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow transition duration-300 hover:bg-white/10">
                    <h3 class="text-lg font-bold text-white">Stephani Inggrit Swastini, S.Kom., MBA</h3>
                    <p class="text-text-muted mt-2"><strong>Jabatan:</strong> Kepala Laboratorium Sistem Informasi</p>
                </div>

                <div class="text-center p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow transition duration-300 hover:bg-white/10">
                    <h3 class="text-lg font-bold text-white">Agus Cahyo Nugroho, S.Kom., M.T.</h3>
                    <p class="text-text-muted mt-2"><strong>Jabatan:</strong> Dosen Sistem Informasi</p>
                </div>
            </div>

            <div class="mt-8 p-5 bg-gradient-to-r from-accent-primary/20 to-accent-secondary/15 border-l-4 border-accent-secondary rounded-xl text-lg font-medium text-white/90">
                Selain nama-nama di atas, masih ada staf akademik dan dosen lain termasuk: V. Eng Yennylawati, S.Kom., M.Kom.; Hinu Indrawardhana, M.Ars; Agustina Alam Anggitasari, S.E., M.M.; serta dosen-dosen lain yang mendukung penyelenggaraan SIEGA.
            </div>
        </div>
    </section>
    
    <section id="projects" class="py-16 md:py-24">
        <h1 class="text-3xl md:text-4xl font-extrabold text-center mb-4 accent-gradient-text">Proyek Unggulan Mahasiswa</h1>
        <p class="text-center max-w-3xl mx-auto mb-10 text-base md:text-xl text-text-muted">
            Portofolio proyek nyata yang dikembangkan oleh mahasiswa Sistem Informasi, menunjukkan aplikasi praktis dari kurikulum.
        </p>
        <div class="max-w-5xl mx-auto text-center p-10 bg-white/5 rounded-xl border border-white/10 text-text-muted">
            <p class="text-xl">Konten proyek akan ditampilkan di sini.</p>
        </div>
    </section>

    <section id="contact" class="py-16 md:py-24">
        <h1 class="text-3xl md:text-4xl font-extrabold text-center mb-4 accent-gradient-text">Hubungi Kami</h1>
        <div class="max-w-2xl mx-auto">
            <?php if ($contact_result) : ?>
                <p class="text-center p-3 mb-4 rounded-lg bg-green-500/20 text-green-300"><?= $contact_result ?></p>
            <?php endif; ?>
            <form action="#contact" method="POST" class="space-y-4" onsubmit="return validateContactForm()">
                <div>
                    <label for="name" class="block mb-1 text-text-muted">Nama:</label>
                    <input type="text" id="cf-name" name="name" required class="w-full p-3 rounded-lg border border-white/10 bg-white/5 text-text-light focus:border-accent-primary focus:outline-none focus:ring-4 focus:ring-accent-primary/20 transition duration-200">
                </div>
                <div>
                    <label for="email" class="block mb-1 text-text-muted">Email:</label>
                    <input type="email" id="cf-email" name="email" required class="w-full p-3 rounded-lg border border-white/10 bg-white/5 text-text-light focus:border-accent-primary focus:outline-none focus:ring-4 focus:ring-accent-primary/20 transition duration-200">
                </div>
                <div>
                    <label for="message" class="block mb-1 text-text-muted">Pesan:</label>
                    <textarea id="cf-message" name="message" rows="5" required class="w-full p-3 rounded-lg border border-white/10 bg-white/5 text-text-light focus:border-accent-primary focus:outline-none focus:ring-4 focus:ring-accent-primary/20 transition duration-200"></textarea>
                </div>
                <button type="submit" name="contact_submit" class="w-full px-5 py-3 rounded-xl font-semibold text-white bg-gradient-to-r from-accent-primary to-accent-secondary shadow-lg shadow-accent-primary/30 transition duration-250 transform hover:-translate-y-1 hover:shadow-xl hover:shadow-accent-primary/50">Kirim Pesan</button>
            </form>
        </div>
    </section>
</main>

<?php
require __DIR__ . '/partials/footer.php';
?>