<?php
$title = "Jurusan Sistem Informasi";
require __DIR__ . '/partials/header.php';


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
        <div class="md:col-span-7 space-y-4" data-aos="fade-right">
            <h1 class="text-4xl md:text-6xl font-extrabold leading-tight mb-4 bg-gradient-to-r from-blue-300 to-teal-300 bg-clip-text text-transparent">Jurusan Sistem Informasi</h1>
            <p class="text-lg md:text-xl text-text-muted max-w-xl">Menggabungkan teknologi, bisnis, dan analisis untuk membentuk pengubah digital masa depan.</p>
            <div class="flex space-x-4 pt-4" data-aos="fade-right" data-aos-delay="200">
                <a href="#about" class="px-5 py-3 rounded-xl font-semibold no-underline text-white bg-gradient-to-r from-accent-primary to-accent-secondary shadow-lg shadow-accent-primary/30 transition duration-250 transform hover:-translate-y-1 hover:shadow-xl hover:shadow-accent-primary/50">Pelajari Lebih Lanjut</a>
                <a href="#curriculum" class="px-5 py-3 rounded-xl font-semibold no-underline text-text-light border border-white/10 bg-transparent transition duration-250 hover:bg-white/5">Kurikulum</a>
            </div>
        </div>
        <div class="md:col-span-5 w-full" data-aos="fade-left" data-aos-delay="400">
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

    <section class="py-10 relative overflow-hidden" data-aos="fade-up">
        <div class="max-w-7xl mx-auto px-4 relative group">
            
            <h3 class="text-white/80 font-bold mb-6 text-xl pl-2 border-l-4 border-accent-secondary">
                Spotlight Kegiatan & Fasilitas
            </h3>

            <button class="swiper-button-prev-custom absolute top-1/2 left-0 -translate-y-1/2 z-10 w-12 h-12 flex items-center justify-center rounded-full bg-dark-bg/80 border border-white/10 text-white shadow-lg hover:bg-accent-primary transition opacity-0 group-hover:opacity-100 -ml-4 md:-ml-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7"/></svg>
            </button>
            <button class="swiper-button-next-custom absolute top-1/2 right-0 -translate-y-1/2 z-10 w-12 h-12 flex items-center justify-center rounded-full bg-dark-bg/80 border border-white/10 text-white shadow-lg hover:bg-accent-primary transition opacity-0 group-hover:opacity-100 -mr-4 md:-mr-6">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7"/></svg>
            </button>

            <div class="swiper mySwiper w-full h-full pb-12">
                <div class="swiper-wrapper">
                    
                    <div class="swiper-slide h-auto">
                        <div class="h-64 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md p-6 flex flex-col justify-end hover:bg-white/10 transition duration-300 group cursor-grab active:cursor-grabbing">
                            <div class="absolute top-4 right-4 p-3 bg-accent-primary/20 rounded-full text-accent-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20"/><path d="m19 9-5 5-4-4-3 3"/></svg>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-2">Laboratorium AI</h4>
                            <p class="text-text-muted text-sm">Fasilitas komputer spesifikasi tinggi untuk riset Deep Learning.</p>
                        </div>
                    </div>

                    <div class="swiper-slide h-auto">
                        <div class="h-64 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md p-6 flex flex-col justify-end hover:bg-white/10 transition duration-300 cursor-grab active:cursor-grabbing">
                            <div class="absolute top-4 right-4 p-3 bg-accent-secondary/20 rounded-full text-accent-secondary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="20" height="14" x="2" y="3" rx="2"/><line x1="8" x2="16" y1="21" y2="21"/><line x1="12" x2="12" y1="17" y2="21"/></svg>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-2">Magang Industri</h4>
                            <p class="text-text-muted text-sm">Kerjasama dengan 50+ perusahaan teknologi top nasional.</p>
                        </div>
                    </div>

                    <div class="swiper-slide h-auto">
                        <div class="h-64 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md p-6 flex flex-col justify-end hover:bg-white/10 transition duration-300 cursor-grab active:cursor-grabbing">
                            <div class="absolute top-4 right-4 p-3 bg-yellow-500/20 rounded-full text-yellow-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="8" r="7"/><polyline points="8.21 13.89 7 23 12 20 17 23 15.79 13.88"/></svg>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-2">Juara Kompetisi</h4>
                            <p class="text-text-muted text-sm">Mahasiswa kami rutin menjuarai Hackathon & Gemastik.</p>
                        </div>
                    </div>

                     <div class="swiper-slide h-auto">
                        <div class="h-64 rounded-2xl bg-white/5 border border-white/10 backdrop-blur-md p-6 flex flex-col justify-end hover:bg-white/10 transition duration-300 cursor-grab active:cursor-grabbing">
                            <div class="absolute top-4 right-4 p-3 bg-pink-500/20 rounded-full text-pink-400">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10"/></svg>
                            </div>
                            <h4 class="text-xl font-bold text-white mb-2">Sertifikasi Global</h4>
                            <p class="text-text-muted text-sm">Lulusan dibekali sertifikasi Oracle, Microsoft, dan Cisco.</p>
                        </div>
                    </div>
                    
                </div>
                
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <section id="about" class="py-16 md:py-24" data-aos="fade-up">
        <div class="max-w-4xl mx-auto p-6 md:p-8 bg-glass-bg backdrop-blur-xl rounded-2xl glass-shadow border border-white/10 text-text-light">
            <h1 class="text-3xl md:text-4xl font-extrabold mb-6 accent-gradient-text">Tentang Program Studi Sistem Informasi Unika Soegijapranata Semarang</h1>

            <div class="text-base md:text-lg text-text-muted space-y-5">
                <p>Unika Soegijapranata mendapatkan ijin operasional program studi Sistem Informasi pada tahun 2013 dengan program konsentrasi Sistem Informasi dan Game Technology. Selanjutnya di tahun 2017, dibuka program kuliah ganda Akuntansi+Sistem Informasi (AKSI) dan konsentrasi E-Commerce di tahun 2018.</p>

                <h2 class="text-xl md:text-2xl font-bold pt-4 text-white">Visi</h2>
                <p>Menjadi komunitas akademik yang unggul dalam pendidikan, penelitian dan pengabdian dengan dilandasi nilai-nilai Kristiani: cinta kasih, keadilan dan kejujuran</p>

                <h2 class="text-xl md:text-2xl font-bold pt-4 text-white">Misi</h2>
                <ul class="ml-5 space-y-2">
                    <li class="p-3 bg-white/5 border-l-4 border-accent-primary rounded-lg transition duration-250 hover:border-accent-secondary hover:bg-white/10" data-aos="fade-up" data-aos-delay="100">Menyelenggarakan pendidikan yang berkualitas secara akademik dengan didukung pengembangan kepribadian yang utuh dan potensi kepemimpinan.</li>
                    <li class="p-3 bg-white/5 border-l-4 border-accent-primary rounded-lg transition duration-250 hover:border-accent-secondary hover:bg-white/10" data-aos="fade-up" data-aos-delay="200">Melakukan penelitian untuk pengembangan ilmu dan teknologi demi meningkatkan kesejahteraan manusia.</li>
                    <li class="p-3 bg-white/5 border-l-4 border-accent-primary rounded-lg transition duration-250 hover:border-accent-secondary hover:bg-white/10" data-aos="fade-up" data-aos-delay="300">Melakukan pengabdian kepada masyarakat sebagai penerapan ilmu dan teknologi yang telah dikembangkan dalam penelitian dan kesejahteraan manusia.</li>
                </ul>

                <div class="mt-8 p-5 bg-gradient-to-t from-accent-primary/15 to-accent-secondary/10 border-l-4 border-accent-secondary rounded-xl text-base md:text-lg italic text-white/90">
                    "Sistem Informasi adalah jembatan antara teknologi dan kebutuhan bisnis modern."
                </div>
            </div>
        </div>
    </section>

    <section id="curriculum" class="py-16 md:py-24" data-aos="fade-up">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-extrabold text-center mb-4 accent-gradient-text">Kurikulum & Konsentrasi – Sistem Informasi</h1>
            <p class="text-center max-w-3xl mx-auto mb-10 text-base md:text-xl text-text-muted">
                Program Studi Sistem Informasi di Unika Soegijapranata menawarkan beberapa konsentrasi yang dapat dipilih sesuai minat dan jalur karier. Berikut bidang-bidang yang akan Anda pelajari:
            </p>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow border border-white/10 transition duration-300 hover:bg-white/10 hover:transform hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="100">
                    <h3 class="text-xl font-bold mb-3 text-white">Konsentrasi: Sistem Informasi (Core SI)</h3>
                    <ul class="list-disc ml-5 space-y-1 text-text-muted">
                        <li>Manajemen Hubungan Pelanggan (CRM)</li>
                        <li>Sistem Informasi Perusahaan (CIS)</li>
                        <li>Kecerdasan Bisnis (Business Intelligence)</li>
                        <li>Teknologi Baru & Inovasi SI</li>
                    </ul>
                </div>

                <div class="p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow border border-white/10 transition duration-300 hover:bg-white/10 hover:transform hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="300">
                    <h3 class="text-xl font-bold mb-3 text-white">Konsentrasi: E-Commerce</h3>
                    <ul class="list-disc ml-5 space-y-1 text-text-muted">
                        <li>Hukum Cyber (Cyber Law)</li>
                        <li>Manajemen Hubungan Pelanggan</li>
                        <li>Perilaku Konsumen</li>
                        <li>Perdagangan Internasional</li>
                    </ul>
                </div>

                <div class="p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow border border-white/10 transition duration-300 hover:bg-white/10 hover:transform hover:-translate-y-1" data-aos="zoom-in" data-aos-delay="500">
                    <h3 class="text-xl font-bold mb-3 text-white">Konsentrasi: Game Technology</h3>
                    <ul class="list-disc ml-5 space-y-1 text-text-muted">
                        <li>Animasi 2D & 3D</li>
                        <li>Game Nirkabel</li>
                        <li>Kecerdasan Buatan (AI untuk Game)</li>
                        <li>Antarmuka Game</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="faculty" class="py-16 md:py-24" data-aos="fade-up">
        <div class="max-w-5xl mx-auto px-4">
            <h1 class="text-3xl md:text-4xl font-extrabold text-center mb-4 accent-gradient-text">Dosen & Staf Akademik SIEGA</h1>
            <p class="text-center max-w-3xl mx-auto mb-10 text-base md:text-xl text-text-muted">
                Berikut adalah beberapa nama dosen dan staf pengajar di Program Studi Sistem Informasi (SIEGA).
            </p>

            <div class="grid md:grid-cols-3 gap-6">
                <div class="text-center p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow transition duration-300 hover:bg-white/10" data-aos="fade-up" data-aos-delay="100">
                    <h3 class="text-lg font-bold text-white">Prof. Dr. Ridwan Sanjaya</h3>
                    <p class="text-text-muted mt-2"><strong>Jabatan:</strong> Dekan Fakultas Ilmu Komputer</p>
                </div>

                <div class="text-center p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow transition duration-300 hover:bg-white/10" data-aos="fade-up" data-aos-delay="300">
                    <h3 class="text-lg font-bold text-white">Dr. Bernadinus Harnadi</h3>
                    <p class="text-text-muted mt-2"><strong>Jabatan:</strong> Wakil Dekan Fakultas Ilmu Komputer</p>
                </div>

                <div class="text-center p-5 bg-white/5 rounded-2xl backdrop-blur-md glass-shadow transition duration-300 hover:bg-white/10" data-aos="fade-up" data-aos-delay="500">
                    <h3 class="text-lg font-bold text-white">Dr. Albertus Dwiyoga Widiantoro</h3>
                    <p class="text-text-muted mt-2"><strong>Jabatan:</strong> Ketua Program Studi Sistem Informasi</p>
                </div>
            </div>
        </div>
    </section>
    
    <section id="projects" class="py-16 md:py-24" data-aos="fade-up">
        <h1 class="text-3xl md:text-4xl font-extrabold text-center mb-4 accent-gradient-text">Proyek Unggulan Mahasiswa</h1>
        <p class="text-center max-w-3xl mx-auto mb-10 text-base md:text-xl text-text-muted">
            Portofolio proyek nyata yang dikembangkan oleh mahasiswa Sistem Informasi.
        </p>
        <div class="max-w-5xl mx-auto text-center p-10 bg-white/5 rounded-xl border border-white/10 text-text-muted">
            <p class="text-xl">Konten proyek akan ditampilkan di sini.</p>
        </div>
    </section>

    <section id="contact" class="py-16 md:py-24" data-aos="fade-up">
        <h1 class="text-3xl md:text-4xl font-extrabold text-center mb-4 accent-gradient-text">Hubungi Kami</h1>
        <div class="max-w-2xl mx-auto">
            <?php if ($contact_result) : ?>
                <p class="text-center p-3 mb-4 rounded-lg bg-green-500/20 text-green-300"><?= $contact_result ?></p>
            <?php endif; ?>
            <form action="#contact" method="POST" class="space-y-4" onsubmit="return validateContactForm()">
                <div data-aos="fade-up" data-aos-delay="100">
                    <label for="name" class="block mb-1 text-text-muted">Nama:</label>
                    <input type="text" id="cf-name" name="name" required class="w-full p-3 rounded-lg border border-white/10 bg-white/5 text-text-light focus:border-accent-primary focus:outline-none focus:ring-4 focus:ring-accent-primary/20 transition duration-200">
                </div>
                <div data-aos="fade-up" data-aos-delay="200">
                    <label for="email" class="block mb-1 text-text-muted">Email:</label>
                    <input type="email" id="cf-email" name="email" required class="w-full p-3 rounded-lg border border-white/10 bg-white/5 text-text-light focus:border-accent-primary focus:outline-none focus:ring-4 focus:ring-accent-primary/20 transition duration-200">
                </div>
                <div data-aos="fade-up" data-aos-delay="300">
                    <label for="message" class="block mb-1 text-text-muted">Pesan:</label>
                    <textarea id="cf-message" name="message" rows="5" required class="w-full p-3 rounded-lg border border-white/10 bg-white/5 text-text-light focus:border-accent-primary focus:outline-none focus:ring-4 focus:ring-accent-primary/20 transition duration-200"></textarea>
                </div>
                <button type="submit" name="contact_submit" class="w-full px-5 py-3 rounded-xl font-semibold text-white bg-gradient-to-r from-accent-primary to-accent-secondary shadow-lg shadow-accent-primary/30 transition duration-250 transform hover:-translate-y-1 hover:shadow-xl hover:shadow-accent-primary/50" data-aos="fade-up" data-aos-delay="400">Kirim Pesan</button>
            </form>
        </div>
    </section>
</main>

<?php
require __DIR__ . '/partials/footer.php';
?>