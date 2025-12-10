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

    /* Tambahkan ini di bagian <style> index.php Anda */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    .no-scrollbar {
        -ms-overflow-style: none;
        /* IE and Edge */
        scrollbar-width: none;
        /* Firefox */
    }
</style>

<main class="w-full overflow-x-hidden bg-dark-bg text-text-light">

    <section id="hero-compact" class="min-h-screen w-full flex flex-col pt-16 pb-20 relative overflow-hidden bg-light-bg text-light-text 
    dark:bg-dark-bg dark:text-dark-text">

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

        <div class="w-full max-w-4xl mx-auto mt-6 mb-8 px-4 relative z-20" data-aos="zoom-in">
            <div
                class="relative w-full aspect-[21/9] rounded-2xl overflow-hidden border border-white/10 shadow-neon group">
                <video
                    class="w-full h-full object-cover opacity-80 group-hover:opacity-100 group-hover:scale-105 transition duration-700 ease-in-out"
                    autoplay loop muted playsinline>
                    <source src="assets/video/Banner-siega.mp4" type="video/mp4">
                    Browser Anda tidak mendukung tag video.
                </video>

                <div
                    class="absolute inset-0 bg-[url('https://media.giphy.com/media/media/LdLqD6I3rJ6jm/giphy.gif')] opacity-5 pointer-events-none mix-blend-overlay">
                </div>
                <div
                    class="absolute inset-0 bg-gradient-to-t from-dark-bg/80 via-transparent to-transparent pointer-events-none">
                </div>
            </div>
        </div>

        <div class="w-full relative z-10 mt-6 mb-16">

            <button
                class="swiper-button-prev-custom absolute top-1/2 left-4 z-20 w-8 h-8 flex items-center justify-center rounded-full bg-black/40 border border-white/10 text-white hover:bg-accent-primary transition backdrop-blur-md">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M15 19l-7-7 7-7" />
                </svg>
            </button>
            <button
                class="swiper-button-next-custom absolute top-1/2 right-4 z-20 w-8 h-8 flex items-center justify-center rounded-full bg-black/40 border border-white/10 text-white hover:bg-accent-primary transition backdrop-blur-md">
                <svg width="20" height="20" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M9 5l7 7-7 7" />
                </svg>
            </button>

            <div class="swiper mySwiper w-full h-full border-t border-white/10">
                <div class="swiper-wrapper">
                    <div
                        class="swiper-slide w-[65%] md:w-[45%] lg:w-[32%] aspect-[5/6] rounded-2xl overflow-hidden border border-white/10 shadow-xl relative group bg-black">
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

                    <div
                        class="swiper-slide w-[65%] md:w-[45%] lg:w-[32%] aspect-[5/6] rounded-2xl overflow-hidden border border-white/10 shadow-xl relative group bg-black">
                        <iframe class="w-full h-full object-cover opacity-70"
                            src="https://www.youtube.com/embed/i6XhsvWYHws?si=tpMaJ-XNj5WDj3Bw" title="Video Profil"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <div class="absolute bottom-5 left-5 z-20 pointer-events-none">
                            <h2 class="text-xl md:text-3xl font-bold text-white text-shadow-lg">SIEGA Metaverse Podcast
                            </h2>
                            <p class="text-gray-200 text-sm md:text-base">Kenali lingkungan belajar kami yang modern.
                            </p>
                        </div>
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent pointer-events-none">
                        </div>
                    </div>

                    <div
                        class="swiper-slide w-[65%] md:w-[45%] lg:w-[32%] aspect-[5/6] rounded-2xl overflow-hidden border border-white/10 shadow-xl relative group bg-black">
                        <div
                            class="w-full h-full flex items-center justify-center bg-black overflow-y-auto no-scrollbar">

                            <blockquote class="tiktok-embed"
                                cite="https://www.tiktok.com/@siega_unika/video/7570711511581199634"
                                data-video-id="7570711511581199634" style="max-width: 605px; min-width: 325px;">
                                <section>
                                    <a target="_blank" title="@siega_unika"
                                        href="https://www.tiktok.com/@siega_unika?refer=embed"></a>
                                </section>
                            </blockquote>
                            <script async src="https://www.tiktok.com/embed.js"></script>
                        </div>

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent pointer-events-none">
                        </div>
                        <div class="absolute bottom-5 left-5 z-20 pointer-events-none">
                            <p class="text-xl md:text-3xl font-bold text-white leading-tight">Brian - Google Student
                                Ambassador</p>
                        </div>
                    </div>

                    <div
                        class="swiper-slide w-[65%] md:w-[45%] lg:w-[32%] aspect-[5/6] rounded-2xl overflow-hidden border border-white/10 shadow-xl relative group bg-black">
                        <div
                            class="w-full h-full flex items-center justify-center bg-black overflow-y-auto no-scrollbar">

                            <blockquote class="tiktok-embed"
                                cite="https://www.tiktok.com/@hmpssi_unika/video/7331587570457005318"
                                data-video-id="7331587570457005318" style="max-width: 605px;min-width: 325px;">
                                <section> <a target="_blank" title="@hmpssi_unika"
                                        href="https://www.tiktok.com/@hmpssi_unika?refer=embed"></a> <a title="fyp"
                                        target="_blank" href="https://www.tiktok.com/tag/fyp?refer=embed">#fyp</a>
                                </section>
                            </blockquote>
                            <script async src="https://www.tiktok.com/embed.js"></script>
                        </div>

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent pointer-events-none">
                        </div>
                        <div class="absolute bottom-5 left-5 z-20 pointer-events-none">
                            <p class="text-xl md:text-3xl font-bold text-white leading-tight">HMPSSI - Yakin ga join
                                SIEGA?</p>
                        </div>
                    </div>

                    <div
                        class="swiper-slide w-[65%] md:w-[45%] lg:w-[32%] aspect-[5/6] rounded-2xl overflow-hidden border border-white/10 shadow-xl relative group bg-black">
                        <div
                            class="w-full h-full overflow-y-auto no-scrollbar flex justify-center items-start pt-0 md:pt-2">

                            <blockquote class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/DCjuGBPytNv/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14">
                                <div>
                                    <a href="https://www.instagram.com/reel/DCjuGBPytNv/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        target="_blank">
                                    </a>
                                    <p
                                        style="color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                        <a href="https://www.instagram.com/reel/DCjuGBPytNv/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            target="_blank">Sebuah kiriman dibagikan oleh Himpunan Mahasiswa Program
                                            Studi Sistem Informasi SCU (@hmpssi.scu)</a>
                                    </p>
                                </div>
                            </blockquote>
                            <script async src="//www.instagram.com/embed.js"></script>

                        </div>

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent pointer-events-none">
                        </div>
                        <div class="absolute bottom-6 left-6 z-20 pointer-events-none">
                            <p class="text-xl md:text-3xl font-bold text-white leading-tight">HMPSSI - Kegiatan DIES
                                Natalis</p>
                        </div>
                    </div>

                    <div
                        class="swiper-slide w-[65%] md:w-[45%] lg:w-[32%] aspect-[5/6] rounded-2xl overflow-hidden border border-white/10 shadow-xl relative group bg-black">
                        <div
                            class="w-full h-full overflow-y-auto no-scrollbar flex justify-center items-start pt-0 md:pt-2">

                            <blockquote class="instagram-media"
                                data-instgrm-permalink="https://www.instagram.com/reel/DRw1dWvDx09/?utm_source=ig_embed&amp;utm_campaign=loading"
                                data-instgrm-version="14"
                                style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                                <div style="padding:16px;"> <a
                                        href="https://www.instagram.com/reel/DRw1dWvDx09/?utm_source=ig_embed&amp;utm_campaign=loading"
                                        style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                        target="_blank">
                                        <div style=" display: flex; flex-direction: row; align-items: center;">
                                            <div
                                                style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                            </div>
                                            <div
                                                style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                                </div>
                                            </div>
                                        </div>
                                        <div style="padding: 19% 0;"></div>
                                        <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                                width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                                xmlns="https://www.w3.org/2000/svg"
                                                xmlns:xlink="https://www.w3.org/1999/xlink">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                        <g>
                                                            <path
                                                                d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                            </path>
                                                        </g>
                                                    </g>
                                                </g>
                                            </svg></div>
                                        <div style="padding-top: 8px;">
                                            <div
                                                style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                                Lihat postingan ini di Instagram</div>
                                        </div>
                                        <div style="padding: 12.5% 0;"></div>
                                        <div
                                            style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                            <div>
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                                </div>
                                                <div
                                                    style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                                </div>
                                                <div
                                                    style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                                </div>
                                            </div>
                                            <div style="margin-left: 8px;">
                                                <div
                                                    style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                                </div>
                                                <div
                                                    style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                                </div>
                                            </div>
                                            <div style="margin-left: auto;">
                                                <div
                                                    style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                                </div>
                                                <div
                                                    style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                                </div>
                                                <div
                                                    style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                                </div>
                                            </div>
                                        </div>
                                        <div
                                            style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                            </div>
                                            <div
                                                style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                            </div>
                                        </div>
                                    </a>
                                    <p
                                        style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                                        <a href="https://www.instagram.com/reel/DRw1dWvDx09/?utm_source=ig_embed&amp;utm_campaign=loading"
                                            style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;"
                                            target="_blank">Sebuah kiriman dibagikan oleh Soegijapranata Catholic
                                            University (SCU) (@unika.soegijapranata)</a>
                                    </p>
                                </div>
                            </blockquote>
                            <script async src="//www.instagram.com/embed.js"></script>
                            <script async src="//www.instagram.com/embed.js"></script>

                        </div>

                        <div
                            class="absolute inset-0 bg-gradient-to-t from-black/90 via-transparent to-transparent pointer-events-none">
                        </div>
                        <div class="absolute bottom-6 left-6 z-20 pointer-events-none">
                            <p class="text-xl md:text-3xl font-bold text-white leading-tight">SIEGA - Intelligent
                                Accounting System</p>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>

    </section>

    <section id="about" class="py-16 md:py-24  bg-light-bg-2 text-light-text dark:bg-dark-bg-2 dark:text-dark-text">
        <div
            class="absolute top-0 left-0 w-full h-8 bg-gradient-to-t from-[#0F172A] to-transparent pointer-events-none">
        </div>
        <div class="max-w-5xl mx-auto px-6">
            <div class="flex flex-col md:flex-row gap-12 items-center">
                <div class="md:w-1/2 space-y-6" data-aos="fade-right">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-extrabold mb-6">Tentang Kami</h2>
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
                        <div class="p-4 
                            bg-blue-100/30 border border-blue-300/40
                            dark:bg-blue-400/10 dark:border-blue-200/20
                            rounded-xl text-center transition-colors duration-300 backdrop-blur-sm">
                            <span
                                class="block text-2xl font-bold text-accent-secondary dark:text-accent-primary">A</span>
                            <span class="text-xs text-text-muted">Akreditasi Unggul</span>
                        </div>
                        <div class="p-4 
                            bg-blue-100/30 border border-blue-300/40
                            dark:bg-blue-400/10 dark:border-blue-200/20
                            rounded-xl text-center transition-colors duration-300 backdrop-blur-sm">
                            <span
                                class="block text-2xl font-bold text-accent-secondary dark:text-accent-primary">95%</span>
                            <span class="text-xs text-text-muted">Kerja < 3 Bulan</span>
                        </div>
                    </div>
                </div>

                <div class="md:w-1/2 w-full" data-aos="fade-left">
                    <div class="bg-glass-bg p-8 rounded-2xl border border-white/10 relative shadow-2xl">
                        <h3 class="text-xl font-bold mb-6 border-b border-white/10 pb-4">Visi</h3>
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
                        <h3 class="text-xl font-bold mb-6 border-b border-white/10 pb-4">Misi</h3>
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

    <section id="curriculum"
        class="py-16 md:py-24 bg-light-bg dark:bg-dark-bg-2 text-light-text dark:text-dark-text transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4 text-center">
            <h2 class="text-3xl md:text-4xl font-extrabold accent-gradient-text mb-4">Konsentrasi Studi</h2>
            <p class="text-text-muted mb-12 max-w-2xl mx-auto">Program Studi Sistem Informasi di Unika Soegijapranata
                menawarkan beberapa konsentrasi yang dapat dipilih sesuai minat dan jalur karier. Berikut bidang-bidang
                yang akan Anda pelajari.</p>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-12">
                <div
                    class="group p-6 bg-glass-bg rounded-2xl border border-gray-300/50 dark:border-white/10 transition duration-300 hover:-translate-y-2 hover:border-yellow-400/50 dark:hover:border-yellow-400/50 ">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition">💻</div>
                    <h3 class="text-xl font-bold mb-2">Sistem Informasi</h3>
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
                    class="group p-6 bg-glass-bg rounded-2xl border border-gray-300/50 dark:border-white/10 transition duration-300 hover:-translate-y-2 hover:border-yellow-400/50 dark:hover:border-yellow-400/50 ">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition">🛒</div>
                    <h3 class="text-xl font-bold mb-2">E-Commerce</h3>
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
                    class="group p-6 bg-glass-bg rounded-2xl border border-gray-300/50 dark:border-white/10 transition duration-300 hover:-translate-y-2 hover:border-yellow-400/50 dark:hover:border-yellow-400/50 ">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition">🎮</div>
                    <h3 class="text-xl font-bold mb-2">Game Technology</h3>
                    <p class="text-sm text-text-muted mb-4">Pengembangan game, AI, dan teknologi interaktif.</p>
                    <ul class="text-left text-xs text-text-muted ml-5 list-disc space-y-1">
                        <li>Game Design & Development</li>
                        <li>AR / VR Implementation</li>
                        <li>Kecerdasan Buatan</li>
                        <li>Animasi 2D & 3D</li>
                        <li>Deteksi Gerak</li>
                    </ul>
                </div>
                <div
                    class="group p-6 bg-glass-bg rounded-2xl border border-gray-300/50 dark:border-white/10 transition duration-300 hover:-translate-y-2 hover:border-yellow-400/50 dark:hover:border-yellow-400/50 ">
                    <div class="text-4xl mb-4 group-hover:scale-110 transition">📊</div>
                    <h3 class="text-xl font-bold mb-2">AKSI (Akuntansi + SI)</h3>
                    <p class="text-sm text-text-muted mb-4">Program ganda yang menggabungkan keahlian Akuntansi keuangan
                        dengan teknologi sistem informasi modern.</p>
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

    <section id="faculty" class="py-16 md:py-24 bg-light-bg-2 dark:bg-dark-bg 
           text-light-text dark:text-dark-text transition-colors duration-300">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-10">Dosen & Staf Ahli</h2>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <div
                    class="group bg-glass-bg rounded-xl p-6 text-center border border-gray-400/50 dark:border-white/10 transition duration-300 hover:-translate-y-2 hover:border-accent-secondary/50 dark:hover:border-accent-secondary/50">
                    <div
                        class="w-48 h-48 mx-auto bg-white/50 dark:bg-white/5 p-2 rounded-lg border border-gray-400/40 dark:border-white/10 mb-6 transition group-hover:border-accent-secondary/50 dark:group-hover:border-accent-secondary/50">
                        <img src="assets/img/dosen-ridwan.jpg" alt="Prof. Ridwan"
                            class="w-full h-full object-cover rounded shadow-lg grayscale group-hover:grayscale-0 transition duration-500">
                    </div>
                    <h3 class="text-lg font-bold mb-1 leading-tight">Prof. Dr. Ridwan Sanjaya, S.E., S.Kom.,
                        MS.IEC</h3>
                    <div class="h-0.5 w-12 bg-accent-primary mx-auto my-3"></div>
                    <p class="text-text-muted text-sm">Dekan Fakultas Ilmu Komputer / Guru Besar Sistem Informasi</p>
                </div>

                <div
                    class="group bg-glass-bg rounded-xl p-6 text-center border border-gray-400/50 dark:border-white/10 transition duration-300 hover:-translate-y-2 hover:border-accent-secondary/50 dark:hover:border-accent-secondary/50">
                    <div
                        class="w-48 h-48 mx-auto bg-white/50 dark:bg-white/5 p-2 rounded-lg border border-gray-400/40 dark:border-white/10 mb-6 transition group-hover:border-accent-secondary/50 dark:group-hover:border-accent-secondary/50">
                        <img src="assets/img/dosen-bernadinus.jpg" alt="Dr. Bernadinus"
                            class="w-full h-full object-cover rounded shadow-lg grayscale group-hover:grayscale-0 transition duration-500">
                    </div>
                    <h3 class="text-lg font-bold mb-1 leading-tight">Dr. Bernadinus Harnadi, S.T., M.T.</h3>
                    <div class="h-0.5 w-12 bg-accent-secondary mx-auto my-3"></div>
                    <p class="text-text-muted text-sm">Wakil Dekan Fakultas Ilmu Komputer</p>
                </div>

                <div
                    class="group bg-glass-bg rounded-xl p-6 text-center border border-gray-400/50 dark:border-white/10 transition duration-300 hover:-translate-y-2 hover:border-accent-secondary/50 dark:hover:border-accent-secondary/50">
                    <div
                        class="w-48 h-48 mx-auto bg-white/50 dark:bg-white/5 p-2 rounded-lg border border-gray-400/40 dark:border-white/10 mb-6 transition group-hover:border-accent-secondary/50 dark:group-hover:border-accent-secondary/50">
                        <img src="assets/img/dosen-albertus.jpg" alt="Dr. Albertus"
                            class="w-full h-full object-cover rounded shadow-lg grayscale group-hover:grayscale-0 transition duration-500">
                    </div>
                    <h3 class="text-lg font-bold mb-1 leading-tight">Dr. Albertus Dwiyoga Widiantoro, S.Kom.,
                        M.Kom.</h3>
                    <div class="h-0.5 w-12 bg-pink-500 mx-auto my-3"></div>
                    <p class="text-text-muted text-sm">Ketua Program Studi Sistem Informasi</p>
                </div>

            </div>

            <div class="text-center mt-12">
                <a href="dosen.php"
                    class="inline-flex items-center gap-2 px-8 py-3 rounded-full border border-gray-400/50 dark:border-white/20 bg-white/40 dark:bg-white/5 hover:bg-white/60 
                    dark:hover:bg-white/10 hover:border-accent-primary dark:hover:border-accent-primary hover:scale-105 transition-all duration-300 group">
                    Lihat Seluruh Dosen & Staf
                    <span class="group-hover:translate-x-1 transition">&rarr;</span>
                </a>
            </div>
        </div>
    </section>

    <section id="projects"
        class="py-16 md:py-24 bg-light-bg-2 dark:bg-black/30 text-light-text dark:text-dark-text relative overflow-hidden transition-colors duration-300">
        <div class="absolute top-0 right-0 w-64 h-64 bg-accent-primary/10 rounded-full blur-3xl pointer-events-none">
        </div>
        <div class="max-w-6xl mx-auto px-4 relative z-10">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-extrabold mb-2">Proyek Unggulan</h2>
                <p class="text-text-muted">Karya inovatif mahasiswa yang siap diterapkan di industri.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <a href="https://siega.id/2024/11/30/mahasiswa-siega-raih-juara-2-gelar-inovasi-teknologi-kota-semarang/" 
                        target="_blank" 
                        class="block no-underline hover:no-underline">
                    <div
                        class="group bg-glass-bg rounded-xl overflow-hidden border border-gray-400/50 dark:border-white/10 transition duration-300 hover:shadow-2xl hover:shadow-blue-500/20 dark:hover:shadow-blue-500/30">
                        <div class="h-48 bg-gray-800 relative overflow-hidden">
                            <img src="https://raw.githubusercontent.com/Natanael2412/UAS-MANPRO/main/assets/img/proyekunggulan.png"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-80 group-hover:opacity-100">
                            <div
                                class="absolute top-3 right-3 px-2 py-1 bg-blue-600/90 backdrop-blur text-[10px] font-bold rounded">
                                Prestasi</div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-bold mb-2 group-hover:text-accent-primary transition">
                                Inovasi Teknologi Kota Semarang</h4>
                            <p class="text-sm text-text-muted mb-4 line-clamp-3">Proyek mata kuliah Kota Cerdas yang dibuat oleh mahasiswa SIEGA 2022, 
                                yaitu Evan, Tania, Audrey, Renza, Unya, Adit, Farrel, Garry, Suryo, dan Rey, berhasil meraih juara 2 tingkat perguruan 
                                tinggi se-Kota Semarang dalam Gelar Inovasi Teknologi Informasi dan Komunikasi.</p>
                            <div class="flex gap-2">
                                <span
                                    class="px-2 py-1 bg-white/40 dark:bg-white/5 border border-gray-300/50 
                                    dark:border-white/10 rounded text-[10px] text-black-700 dark:text-gray-300transition-colors duration-300">Kota Cerdas</span>
                                <span
                                    class="px-2 py-1 bg-white/40 dark:bg-white/5 border border-gray-300/50 
                                    dark:border-white/10 rounded text-[10px] text-black-700 dark:text-gray-300transition-colors duration-300">Juara</span>
                            </div>
                        </div>
                    </div>
                </a>
                <div
                    class="group bg-glass-bg rounded-xl overflow-hidden border border-gray-400/50 dark:border-white/10 transition duration-300 hover:shadow-2xl hover:shadow-blue-500/20 dark:hover:shadow-blue-500/30">
                    <div class="h-48 bg-gray-800 relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1555949963-aa79dcee981c?q=80&w=1000&auto=format&fit=crop"
                            class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-80 group-hover:opacity-100">
                        <div
                            class="absolute top-3 right-3 px-2 py-1 bg-green-600/90 backdrop-blur text-[10px] font-bold rounded">
                            GIT & GITHUB</div>
                    </div>
                    <div class="p-6">
                        <h4 class="text-lg font-bold mb-2 group-hover:text-accent-secondary transition">Manajemen Proyek</h4>
                        <p class="text-sm text-text-muted mb-4 line-clamp-3">Pembuatan website untuk SIEGA dalam kelompok menggunakan GIT & GITHUB</p>
                        <div class="flex gap-2">
                            <span
                                class="px-2 py-1 bg-white/40 dark:bg-white/5 border border-gray-300/50 
                                dark:border-white/10 rounded text-[10px] text-black-700 dark:text-gray-300transition-colors duration-300">Manpro</span>
                            <span
                                class="px-2 py-1 bg-white/40 dark:bg-white/5 border border-gray-300/50 
                                dark:border-white/10 rounded text-[10px] text-black-700 dark:text-gray-300transition-colors duration-300">2025</span>
                        </div>
                    </div>
                </div>
                <a href="https://www.kompas.tv/regional/486764/mahasiswa-di-semarang-ciptakan-vr-game-peduli-lingkungan" 
                        target="_blank" 
                        class="block no-underline hover:no-underline">
                    <div
                        class="group bg-glass-bg rounded-xl overflow-hidden border border-gray-400/50 dark:border-white/10 transition duration-300 hover:shadow-2xl hover:shadow-pink-500/20 dark:hover:shadow-pink-500/30">
                        <div class="h-48 bg-gray-800 relative overflow-hidden">
                            <img src="https://raw.githubusercontent.com/Natanael2412/UAS-MANPRO/main/assets/img/proyekunggulan2.png"
                                class="w-full h-full object-cover group-hover:scale-110 transition duration-500 opacity-80 group-hover:opacity-100">
                            <div
                                class="absolute top-3 right-3 px-2 py-1 bg-purple-600/90 backdrop-blur text-[10px] font-bold rounded">
                                VR Game</div>
                        </div>
                        <div class="p-6">
                            <h4 class="text-lg font-bold mb-2 group-hover:text-pink-400 transition">VR Game Peduli Lingkungan
                            </h4>
                            <p class="text-sm text-text-muted mb-4 line-clamp-3">Teknologi Virtual Reality atau VR yang dirancang Yohanes Stanley,
                                mahasiswa game technology Unika Soegijapranata Semarang berisi game tentang lingkungan.</p>
                            <div class="flex gap-2">
                                <span
                                    class="px-2 py-1 bg-white/40 dark:bg-white/5 border border-gray-300/50 
                                    dark:border-white/10 rounded text-[10px] text-black-700 dark:text-gray-300transition-colors duration-300">Game tech
                                    VR</span>
                                <span
                                    class="px-2 py-1 bg-white/40 dark:bg-white/5 border border-gray-300/50 
                                    dark:border-white/10 rounded text-[10px] text-black-700 dark:text-gray-300transition-colors duration-300">Lingkungan</span>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <section id="contact"
        class="py-16 md:py-24 bg-light-bg dark:bg-dark-bg border-t border-gray-300/30 dark:border-white/5 transition-colors">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-3xl md:text-4xl font-extrabold text-center mb-12">Hubungi Kami</h2>

            <div class="bg-glass-bg rounded-2xl border border-white/10 shadow-2xl overflow-hidden">
                <div class="grid grid-cols-1 md:grid-cols-2">

                    <div class="p-8 md:p-10 space-y-8">

                        <div class="w-full h-64 rounded-xl overflow-hidden border border-white/10 shadow-lg">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3959.877664176531!2d110.40064657618629!3d-7.023663392978041!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e708bab00d3e8e7%3A0xbcd9046f4a49cf15!2sSIEGA%20Unika%20Soegijapranata!5e0!3m2!1sen!2sid!4v1765123280822!5m2!1sen!2sid"
                                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>

                        <div class="space-y-6 text-sm text-text-muted">

                            <div class="flex items-start gap-4">
                                <div
                                    class="p-2 rounded-lg bg-white/50 dark:bg-white/5 border border-gray-300/30 dark:border-white/10 text-accent-primary transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <circle cx="12" cy="12" r="10" />
                                        <polyline points="12 6 12 12 16 14" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Jam Kerja</h4>
                                    <p>Senin – Jumat<br>08.00 – 15.00 WIB</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="p-2 rounded-lg bg-white/50 dark:bg-white/5 border border-gray-300/30 dark:border-white/10 text-accent-primary transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Alamat</h4>
                                    <p>Gedung Henricus Constant Lt 8 Unika Soegijapranata<br>
                                        Jl. Pawiyatan Luhur IV/1, Bendan Duwur,<br>Semarang, Jawa Tengah 50234</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-4">
                                <div
                                    class="p-2 rounded-lg bg-white/50 dark:bg-white/5 border border-gray-300/30 dark:border-white/10 text-accent-primary transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <path
                                            d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                                        <polyline points="22,6 12,13 2,6" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-1">Kontak</h4>
                                    <p class="mb-1">Email: <a href="mailto:si@unika.ac.id"
                                            class="text-accent-primary hover:underline">si@unika.ac.id</a></p>
                                    <p>Hotline: <a href="https://wa.me/6281903385595"
                                            class="text-green-400 hover:underline">+62-819-0338-5595 (WA)</a></p>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div
                        class="p-8 md:p-10 border-t md:border-t-0 md:border-l border-gray-300/40 dark:border-white/10 bg-white/60 dark:bg-black/20 flex flex-col justify-center transition-colors">
                        <h3 class="text-xl font-bold mb-6">Kirim Pesan</h3>

                        <?php if ($contact_result): ?>
                            <div
                                class="mb-6 p-4 bg-green-500/20 border border-green-500/30 text-green-300 text-sm rounded-xl text-center">
                                <?= $contact_result ?>
                            </div>
                        <?php endif; ?>

                        <form action="#contact" method="POST" class="space-y-5" onsubmit="return validateContactForm()">
                            <div>
                                <label class="block text-sm font-medium text-text-muted mb-2">Nama Lengkap</label>
                                <input type="text" id="cf-name" name="name" required placeholder="Masukkan nama Anda"
                                    class="w-full px-4 py-3 rounded-xl bg-white/70 dark:bg-white/5 border border-gray-300/40 dark:border-white/10 text-light-text dark:text-dark-text placeholder-gray-400 dark:placeholder-gray-500
                                    focus:outline-none focus:border-accent-primary focus:ring-1 focus:ring-accent-primary transition">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-text-muted mb-2">Email</label>
                                <input type="email" id="cf-email" name="email" required placeholder="email@contoh.com"
                                    class="w-full px-4 py-3 rounded-xl bg-white/70 dark:bg-white/5 border border-gray-300/40 dark:border-white/10 text-light-text dark:text-dark-text placeholder-gray-400 dark:placeholder-gray-500
                                    focus:outline-none focus:border-accent-primary focus:ring-1 focus:ring-accent-primary transition">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-text-muted mb-2">Pesan</label>
                                <textarea id="cf-message" name="message" rows="4" required
                                    placeholder="Tulis pesan Anda di sini..."
                                    class="w-full px-4 py-3 rounded-xl bg-white/70 dark:bg-white/5 border border-gray-300/40 dark:border-white/10 text-light-text dark:text-dark-text placeholder-gray-400 dark:placeholder-gray-500
                                    focus:outline-none focus:border-accent-primary focus:ring-1 focus:ring-accent-primary transition resize-none"></textarea>
                            </div>
                            <button type="submit" name="contact_submit"
                                class="w-full py-4 rounded-xl font-bold text-white bg-gradient-to-r from-accent-primary to-accent-secondary hover:shadow-lg hover:shadow-accent-primary/25 transition transform hover:-translate-y-1">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>
                </div>
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

    // C. Konfigurasi SWIPER (Hero Carousel - 3D Coverflow)
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow", // Mengaktifkan mode 3D
        grabCursor: true,
        centeredSlides: true, // Wajib true agar slide aktif ada di tengah
        slidesPerView: "auto", // Wajib auto agar lebar slide mengikuti CSS (w-60% dll)
        loop: true,
        speed: 800, // Transisi lebih halus

        // Pengaturan efek 3D
        coverflowEffect: {
            rotate: 0,      // Sudut putar (0 = datar, 50 = miring banget)
            stretch: 0,     // Jarak tarik antar slide
            depth: 150,     // Seberapa "dalam" efek 3D-nya (semakin besar semakin jauh slide samping)
            modifier: 1.5,  // Pengali efek
            slideShadows: true, // Bayangan gelap di slide samping agar fokus ke tengah
        },

        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
            pauseOnMouseEnter: true,
        },
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