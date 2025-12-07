<?php
$title = "Jurusan Sistem Informasi";
require __DIR__ . '/partials/header.php';

// --- LOGIKA PHP (Form Contact) ---
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

<style>
    /* 1. Aktifkan native smooth scroll sebagai cadangan */
    html {
        scroll-behavior: smooth;
    }

    /* 2. Sembunyikan scrollbar tapi tetap bisa scroll */
    body::-webkit-scrollbar {
        display: none;
    }

    body {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>

<main class="w-full overflow-x-hidden bg-dark-bg text-text-light">

    <section id="hero-compact" class="h-screen w-full flex flex-col pt-20 pb-0 relative overflow-hidden">

        <div class="flex-none text-center px-4 z-10 animate-fade-down">
            <span
                class="px-3 py-1 rounded-full bg-white/5 border border-white/10 text-accent-secondary text-[10px] md:text-xs font-semibold tracking-wide uppercase inline-block mb-2">
                Fakultas Ilmu Komputer
            </span>
            <h1
                class="text-3xl md:text-5xl font-extrabold leading-tight tracking-tight bg-gradient-to-r from-blue-500 via-teal-500 to-accent-primary bg-clip-text text-transparent mb-1">
                SIEGA
            </h1>
            <p class="text-xs md:text-sm text-text-muted max-w-lg mx-auto">
                Menggabungkan teknologi, bisnis, dan analisis untuk membentuk pengubah digital masa depan.
            </p>
        </div>

        <div class="flex-1 w-full relative min-h-0">

            <button
                class="swiper-button-prev-custom absolute top-1/2 left-4 z-20 w-10 h-10 flex items-center justify-center rounded-full bg-black/40 border border-white/10 text-white hover:bg-accent-primary transition backdrop-blur-md">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button
                class="swiper-button-next-custom absolute top-1/2 right-4 z-20 w-10 h-10 flex items-center justify-center rounded-full bg-black/40 border border-white/10 text-white hover:bg-accent-primary transition backdrop-blur-md">
                <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <div class="swiper mySwiper w-full h-full border-t border-white/10">
                <div class="swiper-wrapper">
                    <div class="swiper-slide w-full h-full bg-black relative">
                        <iframe class="w-full h-full object-cover opacity-70"
                            src="https://www.youtube.com/embed/UhD8uukQgAM?autoplay=1&mute=1&loop=1&playlistUhD8uukQgAM&controls=0"
                            title="Video Profil" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <div class="absolute bottom-8 left-8 z-10 pointer-events-none">
                            <h2 class="text-2xl md:text-4xl font-bold text-white text-shadow-lg">SIEGA Podcast</h2>
                            <p class="text-gray-200 text-sm md:text-base">Kenali lingkungan belajar kami yang modern.
                            </p>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none">
                        </div>
                    </div>

                    <div class="swiper-slide w-full h-full relative bg-black">
                        <video class="w-full h-full object-cover" autoplay loop muted playsinline>
                            <source src="assets/video/konten-tiktok.mp4" type="video/mp4">
                        </video>

                        <div
                            class="absolute inset-0 bg-gradient-to-b from-black/20 via-transparent to-black/60 pointer-events-none">
                        </div>
                        <div class="absolute bottom-6 left-4 right-4 z-10 text-white">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="bg-black/50 p-1 rounded-full text-xs">🎵 TikTok</span>
                            </div>
                            <p class="font-bold text-lg leading-tight">Serunya kuliah di SIEGA! 🎓</p>
                        </div>
                    </div>

                    <div class="swiper-slide w-full h-full relative bg-dark-bg">
                        <div class="absolute inset-0 bg-cover bg-center blur-sm opacity-50"
                            style="background-image: url('assets/img/foto-ig.jpg');"></div>

                        <div class="relative z-10 w-full h-full flex items-center justify-center p-4">
                            <img src="assets/img/foto-ig.jpg"
                                class="max-h-full max-w-full rounded-lg shadow-2xl border border-white/10"
                                alt="Instagram Post">
                        </div>

                        <div
                            class="absolute top-4 right-4 z-20 text-white bg-gradient-to-tr from-yellow-500 via-red-500 to-purple-500 p-2 rounded-lg shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                            </svg>
                        </div>
                    </div>

                    <div class="swiper-slide w-full h-full relative">
                        <img src="https://images.unsplash.com/photo-1550751827-4bd374c3f58b?q=80&w=2070&auto=format&fit=crop"
                            class="w-full h-full object-cover">
                        <div class="absolute inset-0 bg-black/40"></div>
                        <div class="absolute bottom-8 left-8 z-10 pointer-events-none">
                            <h2 class="text-2xl md:text-4xl font-bold text-white text-shadow-lg">Laboratorium Canggih
                            </h2>
                            <p class="text-gray-200 text-sm md:text-base">Spesifikasi tinggi untuk AI & Game
                                Development.</p>
                        </div>
                    </div>

                    <div class="swiper-slide w-full h-full relative bg-dark-bg flex items-center justify-center">
                        <div
                            class="absolute inset-0 bg-[url('https://images.unsplash.com/photo-1523580494863-6f3031224c94?q=80&w=2070&auto=format&fit=crop')] bg-cover bg-center opacity-40">
                        </div>
                        <div
                            class="text-center p-6 relative z-10 bg-black/30 backdrop-blur-md rounded-2xl border border-white/10 max-w-md mx-4">
                            <span class="text-4xl md:text-5xl mb-4 block">🏆</span>
                            <h4 class="text-2xl md:text-3xl font-bold text-white">Juara Nasional</h4>
                            <p class="text-gray-200 mt-2 text-sm">Mahasiswa kami rutin menjuarai kompetisi Gemastik &
                                Hackathon.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>

    <section id="about" class="py-16 md:py-24 bg-dark-bg border-t border-white/5">
        <div class="max-w-6xl mx-auto px-4">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2 space-y-6" data-aos="fade-right">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-2">Tentang Kami</h2>
                        <div class="h-1 w-20 bg-accent-primary rounded-full"></div>
                    </div>
                    <p class="text-text-muted leading-relaxed text-justify">
                        Unika Soegijapranata mendapatkan ijin operasional program studi Sistem Informasi pada tahun 2013
                        dengan program konsentrasi Sistem Informasi dan Game Technology. Selanjutnya di tahun 2017,
                        dibuka program kuliah ganda Akuntansi+Sistem Informasi (AKSI) dan konsentrasi E-Commerce di
                        tahun 2018.
                    </p>
                    <p class="text-text-muted leading-relaxed text-justify">
                        Lulusan kami tidak hanya pandai coding, tapi juga mengerti strategi bisnis digital, menjadikan
                        mereka aset berharga bagi perusahaan multinasional maupun startup.
                    </p>
                    <div class="grid grid-cols-2 gap-4 mt-4">
                        <div class="p-4 bg-white/5 rounded-xl border border-white/10 text-center">
                            <span class="block text-2xl font-bold text-accent-secondary">A</span>
                            <span class="text-xs text-text-muted">Akreditasi Unggul</span>
                        </div>
                        <div class="p-4 bg-white/5 rounded-xl border border-white/10 text-center">
                            <span class="block text-2xl font-bold text-accent-secondary">95%</span>
                            <span class="text-xs text-text-muted">Kerja < 3 Bulan</span>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2 w-full" data-aos="fade-left">
                    <div class="bg-glass-bg p-8 rounded-2xl border border-white/10 relative shadow-2xl">
                        <h3 class="text-xl font-bold text-white mb-6 border-b border-white/10 pb-4">Visi</h3>
                        <ul class="space-y-4">
                            <li class="flex gap-4">
                                <p class="text-sm text-text-muted">Menjadi komunitas akademik yang unggul dalam
                                    pendidikan, penelitian dan pengabdian dengan dilandasi nilai-nilai Kristiani: cinta
                                    kasih, keadilan dan kejujuran</p>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <div
                                    class="w-8 h-8 rounded-full flex items-center justify-center text-accent-primary flex-shrink-0">
                                </div>
                            </li>
                        </ul>
                        <h3 class="text-xl font-bold text-white mb-6 border-b border-white/10 pb-4">Misi</h3>
                        <ul class="space-y-4">
                            <li class="flex gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-accent-primary/20 flex items-center justify-center text-accent-primary flex-shrink-0">
                                    1</div>
                                <p class="text-sm text-text-muted">Menyelenggarakan pendidikan yang berkualitas secara
                                    akademik dengan didukung pengembangan kepribadian yang utuh dan potensi
                                    kepemimpinan.</p>
                            </li>
                            <li class="flex gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-accent-secondary/20 flex items-center justify-center text-accent-secondary flex-shrink-0">
                                    2</div>
                                <p class="text-sm text-text-muted">Melakukan penelitian untuk pengembangan ilmu dan
                                    teknologi demi meningkatkan kesejahteraan manusia.</p>
                            </li>
                            <li class="flex gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-pink-500/20 flex items-center justify-center text-pink-400 flex-shrink-0">
                                    3</div>
                                <p class="text-sm text-text-muted">Melakukan pengabdian kepada masyarakat sebagai
                                    penerapan ilmu dan teknologi yang telah dikembangkan dalam penelitian dan
                                    kesejahteraan manusia.</p>
                            </li>
                            <li class="flex gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-accent-primary/20 flex items-center justify-center text-accent-primary flex-shrink-0">
                                    4</div>
                                <p class="text-sm text-text-muted">Memberikan perhatian dan mencari pemecahan terhadap
                                    berbagai masalah sosial budaya masyarakat melalui komunitas akademik.</p>
                            </li>
                            <li class="flex gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-accent-secondary/20 flex items-center justify-center text-accent-secondary flex-shrink-0">
                                    5</div>
                                <p class="text-sm text-text-muted">Mengembangkan jaringan Kerjasama dengan berbagai
                                    institusi pendidikan, penelitian dan pengabdian lokal, nasional dan internasional
                                    untuk meningkatkan kualitas pendidikan dan penelitian.</p>
                            </li>
                            <li class="flex gap-4">
                                <div
                                    class="w-8 h-8 rounded-full bg-pink-500/20 flex items-center justify-center text-pink-400 flex-shrink-0">
                                    6</div>
                                <p class="text-sm text-text-muted">Memperbaiki dan mengembangkan universitas secara
                                    terus menerus, sehingga dapat mendukung segala upaya untuk mencapai keunggulan.</p>
                            </li>
                            <li class="flex gap-4">
                                <p class="text-sm text-text-muted">Sistem Informasi adalah jembatan antara teknologi dan
                                    kebutuhan bisnis modern.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="curriculum" class="py-16 md:py-24 bg-black/20">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold accent-gradient-text mb-4">Konsentrasi Studi</h2>
            <p class="text-text-muted mb-12 max-w-2xl mx-auto">Program Studi Sistem Informasi di Unika Soegijapranata
                menawarkan beberapa konsentrasi yang dapat dipilih sesuai minat dan jalur karier. Berikut bidang-bidang
                yang akan Anda pelajari.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <div
                    class="group p-6 bg-glass-bg rounded-2xl border border-white/10 hover:border-accent-primary/50 transition duration-300 hover:-translate-y-2">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition">💻</div>
                    <h3 class="text-xl font-bold text-white mb-2">Sistem Informasi</h3>
                    <p class="text-sm text-text-muted mb-4">Analisis sistem, ERP, dan integrasi teknologi korporat.</p>
                    <ul class="text-left text-xs text-text-muted ml-5 list-disc space-y-1">
                        <li>Business Intelligence</li>
                        <li>Audit Sistem Informasi</li>
                        <li>Sistem Informasi Perusahaan</li>
                        <li>Manajemen Hubungan Pelanggan</li>
                        <li>Analisa dan Perancangan SI</li>
                    </ul>
                </div>
                <div
                    class="group p-6 bg-glass-bg rounded-2xl border border-white/10 hover:border-accent-secondary/50 transition duration-300 hover:-translate-y-2 relative overflow-hidden">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition">🛒</div>
                    <h3 class="text-xl font-bold text-white mb-2">E-Commerce</h3>
                    <p class="text-sm text-text-muted mb-4">Bisnis digital, startup teknologi, dan pemasaran online.</p>
                    <ul class="text-left text-xs text-text-muted ml-5 list-disc space-y-1">
                        <li>Digital Marketing</li>
                        <li>Hukum Cyber</li>
                        <li>Perilaku Konsumen</li>
                        <li>Teknologi Keuangan</li>
                        <li>Metaverse & E-Marketplace</li>
                    </ul>
                </div>
                <div
                    class="group p-6 bg-glass-bg rounded-2xl border border-white/10 hover:border-pink-500/50 transition duration-300 hover:-translate-y-2">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition">🎮</div>
                    <h3 class="text-xl font-bold text-white mb-2">Game Technology</h3>
                    <p class="text-sm text-text-muted mb-4">Pengembangan game, AI, dan teknologi interaktif.</p>
                    <ul class="text-left text-xs text-text-muted ml-5 list-disc space-y-1">
                        <li>Game Design & Development</li>
                        <li>AR / VR Implementation</li>
                        <li>Kecerdasan Buatan</li>
                        <li>Animasi 2D & 3D</li>
                        <li>Deteksi Gerak</li>
                    </ul>
                </div>
                <div class="group p-6 bg-glass-bg rounded-2xl border border-white/10 hover:border-yellow-400/50 transition duration-300 hover:-translate-y-2">
    <div class="text-4xl mb-4 group-hover:scale-110 transition">📊</div>
    <h3 class="text-xl font-bold text-white mb-2">AKSI (Akuntansi + SI)</h3>
    <p class="text-sm text-text-muted mb-4">Program ganda yang menggabungkan keahlian Akuntansi keuangan dengan teknologi sistem informasi modern.</p>
    <ul class="text-left text-xs text-text-muted ml-5 list-disc space-y-1">
        <li>Sistem Informasi Akuntansi (SIA)</li>
        <li>Komputerisasi Akuntansi & Perpajakan</li>
        <li>Audit Sistem Informasi Keuangan</li>
        <li>Analisis Data Keuangan Digital</li>
        <li>Manajemen Risiko Teknologi Finansial</li>
    </ul>
</div>
        </div>
        <p class="text-text-muted mb-12 max-w-2xl mx-auto">Mahasiswa dapat memilih konsentrasi sesuai minat baik
                Sistem Informasi , E-Commerce, Game Technology maupun AKSI sehingga lulusan siap menghadapi berbagai
                bidang industri TI, bisnis, dan kreatif.</p>
    </section>

    <section id="faculty" class="py-16 md:py-24 bg-dark-bg">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white text-center mb-10">Dosen & Staf Ahli</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="group bg-glass-bg border border-white/10 rounded-xl p-6 text-center hover:border-accent-primary/50 transition duration-300 hover:-translate-y-2">
                    <div class="w-48 h-48 mx-auto bg-white/5 p-2 rounded-lg border border-white/10 mb-6 group-hover:border-accent-primary/50 transition">
                        <img src="assets/img/dosen-ridwan.jpg" alt="Prof. Ridwan" class="w-full h-full object-cover rounded shadow-lg grayscale group-hover:grayscale-0 transition duration-500">
                    </div>
                    <h3 class="text-lg font-bold text-white mb-1 leading-tight">Prof. Dr. Ridwan Sanjaya, S.E., S.Kom., MS.IEC</h3>
                    <div class="h-0.5 w-12 bg-accent-primary mx-auto my-3"></div>
                    <p class="text-text-muted text-sm">Dekan Fakultas Ilmu Komputer / Guru Besar Sistem Informasi</p>
                </div>

                <div class="group bg-glass-bg border border-white/10 rounded-xl p-6 text-center hover:border-accent-secondary/50 transition duration-300 hover:-translate-y-2">
                    <div class="w-48 h-48 mx-auto bg-white/5 p-2 rounded-lg border border-white/10 mb-6 group-hover:border-accent-secondary/50 transition">
                        <img src="assets/img/dosen-bernadinus.jpg" alt="Dr. Bernadinus" class="w-full h-full object-cover rounded shadow-lg grayscale group-hover:grayscale-0 transition duration-500">
                    </div>
                    <h3 class="text-lg font-bold text-white mb-1 leading-tight">Dr. Bernadinus Harnadi, S.T., M.T.</h3>
                    <div class="h-0.5 w-12 bg-accent-secondary mx-auto my-3"></div>
                    <p class="text-text-muted text-sm">Wakil Dekan Fakultas Ilmu Komputer</p>
                </div>

                <div class="group bg-glass-bg border border-white/10 rounded-xl p-6 text-center hover:border-pink-500/50 transition duration-300 hover:-translate-y-2">
                    <div class="w-48 h-48 mx-auto bg-white/5 p-2 rounded-lg border border-white/10 mb-6 group-hover:border-pink-500/50 transition">
                        <img src="assets/img/dosen-albertus.jpg" alt="Dr. Albertus" class="w-full h-full object-cover rounded shadow-lg grayscale group-hover:grayscale-0 transition duration-500">
                    </div>
                    <h3 class="text-lg font-bold text-white mb-1 leading-tight">Dr. Albertus Dwiyoga Widiantoro, S.Kom., M.Kom.</h3>
                    <div class="h-0.5 w-12 bg-pink-500 mx-auto my-3"></div>
                    <p class="text-text-muted text-sm">Ketua Program Studi Sistem Informasi</p>
                </div>

            </div>

            <div class="text-center mt-12">
                <a href="dosen.php" class="inline-flex items-center gap-2 px-8 py-3 rounded-full border border-white/20 bg-white/5 text-white hover:bg-white/10 hover:border-accent-primary hover:scale-105 transition-all duration-300 group">
                    Lihat Seluruh Dosen & Staf
                    <span class="group-hover:translate-x-1 transition">&rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <section id="projects" class="py-16 md:py-24 bg-black/30 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-64 h-64 bg-accent-primary/10 rounded-full blur-3xl pointer-events-none">
        </div>
        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-2">Proyek Unggulan</h2>
                <p class="text-text-muted">Karya inovatif mahasiswa yang siap diterapkan di industri.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div
                    class="group bg-glass-bg border border-white/10 rounded-xl overflow-hidden hover:shadow-2xl hover:shadow-accent-primary/20 transition duration-300">
                    <div class="h-48 bg-gray-800 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?q=80&w=1000&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-80 group-hover:opacity-100">
                        <div
                            class="absolute top-3 right-3 px-2 py-1 bg-blue-600/90 backdrop-blur text-[10px] font-bold rounded text-white">
                            WEB APP</div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-white mb-2 group-hover:text-accent-primary transition">
                            E-Invitation Platform</h4>
                        <p class="text-sm text-text-muted mb-4 line-clamp-3">Platform undangan pernikahan digital
                            berbasis SAAS dengan fitur pembayaran gateway, manajemen tamu, dan QR Check-in.</p>
                        <div class="flex gap-2">
                            <span
                                class="px-2 py-1 bg-white/5 border border-white/10 rounded text-[10px] text-gray-300">Laravel</span>
                            <span
                                class="px-2 py-1 bg-white/5 border border-white/10 rounded text-[10px] text-gray-300">ReactJS</span>
                        </div>
                    </div>
                </div>
                <div
                    class="group bg-glass-bg border border-white/10 rounded-xl overflow-hidden hover:shadow-2xl hover:shadow-accent-secondary/20 transition duration-300">
                    <div class="h-48 bg-gray-800 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?q=80&w=1000&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-80 group-hover:opacity-100">
                        <div
                            class="absolute top-3 right-3 px-2 py-1 bg-green-600/90 backdrop-blur text-[10px] font-bold rounded text-white">
                            IOT & AI</div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-white mb-2 group-hover:text-accent-secondary transition">Smart
                            Farming AI</h4>
                        <p class="text-sm text-text-muted mb-4 line-clamp-3">Sistem monitoring tanaman hidroponik
                            menggunakan IoT dan Computer Vision untuk mendeteksi penyakit daun secara otomatis.</p>
                        <div class="flex gap-2">
                            <span
                                class="px-2 py-1 bg-white/5 border border-white/10 rounded text-[10px] text-gray-300">Python</span>
                            <span
                                class="px-2 py-1 bg-white/5 border border-white/10 rounded text-[10px] text-gray-300">TensorFlow</span>
                        </div>
                    </div>
                </div>
                <div
                    class="group bg-glass-bg border border-white/10 rounded-xl overflow-hidden hover:shadow-2xl hover:shadow-pink-500/20 transition duration-300">
                    <div class="h-48 bg-gray-800 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1592478411213-61535fdd861d?q=80&w=1000&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-80 group-hover:opacity-100">
                        <div
                            class="absolute top-3 right-3 px-2 py-1 bg-purple-600/90 backdrop-blur text-[10px] font-bold rounded text-white">
                            GAME DEV</div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold text-white mb-2 group-hover:text-pink-400 transition">Nusantara VR
                        </h4>
                        <p class="text-sm text-text-muted mb-4 line-clamp-3">Game edukasi sejarah berbasis Virtual
                            Reality (VR) yang mengajak pemain menjelajahi candi-candi di Indonesia secara imersif.</p>
                        <div class="flex gap-2">
                            <span
                                class="px-2 py-1 bg-white/5 border border-white/10 rounded text-[10px] text-gray-300">Unity
                                3D</span>
                            <span
                                class="px-2 py-1 bg-white/5 border border-white/10 rounded text-[10px] text-gray-300">C#</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-16 md:py-24 bg-dark-bg border-t border-white/5">
        <div class="max-w-2xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-extrabold text-white text-center mb-8">Hubungi Kami</h2>
            <div class="bg-glass-bg p-8 rounded-2xl border border-white/10 shadow-2xl">
                <?php if ($contact_result): ?>
                    <div
                        class="mb-4 p-3 bg-green-500/20 border border-green-500/30 text-green-300 text-sm rounded-lg text-center">
                        <?= $contact_result ?>
                    </div>
                <?php endif; ?>
                <form action="#contact" method="POST" class="space-y-5" onsubmit="return validateContactForm()">
                    <div>
                        <label class="block text-sm text-text-muted mb-1">Nama Lengkap</label>
                        <input type="text" id="cf-name" name="name" required
                            class="w-full px-4 py-3 rounded-lg bg-black/20 border border-white/10 text-white focus:outline-none focus:border-accent-primary focus:ring-1 focus:ring-accent-primary transition">
                    </div>
                    <div>
                        <label class="block text-sm text-text-muted mb-1">Email</label>
                        <input type="email" id="cf-email" name="email" required
                            class="w-full px-4 py-3 rounded-lg bg-black/20 border border-white/10 text-white focus:outline-none focus:border-accent-primary focus:ring-1 focus:ring-accent-primary transition">
                    </div>
                    <div>
                        <label class="block text-sm text-text-muted mb-1">Pesan</label>
                        <textarea id="cf-message" name="message" rows="4" required
                            class="w-full px-4 py-3 rounded-lg bg-black/20 border border-white/10 text-white focus:outline-none focus:border-accent-primary focus:ring-1 focus:ring-accent-primary transition"></textarea>
                    </div>
                    <button type="submit" name="contact_submit"
                        class="w-full py-3 rounded-xl font-bold text-white bg-gradient-to-r from-accent-primary to-accent-secondary hover:shadow-lg hover:shadow-accent-primary/25 transition transform hover:-translate-y-1">
                        Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </section>

    <?php
    require __DIR__ . '/partials/footer.php';
    ?>

</main>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
    // A. Inisialisasi AOS
    AOS.init({ duration: 800, once: true });

    // B. Inisialisasi LENIS (Smooth Scroll) - MENGEMBALIKAN FUNGSI SCROLL HALUS
    const lenis = new Lenis({
        duration: 1.2,
        easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
        smooth: true,
    });
    function raf(time) {
        lenis.raf(time);
        requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // Integrasi Lenis untuk Anchor Link (Scroll Halus saat klik menu)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            lenis.scrollTo(targetId, { offset: -20, duration: 1.5 });
        });
    });

    // C. Konfigurasi SWIPER (Hero Carousel)
    var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        effect: 'fade',
        fadeEffect: { crossFade: true },
        navigation: {
            nextEl: ".swiper-button-next-custom",
            prevEl: ".swiper-button-prev-custom",
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>