<?php
$title = "Akreditasi";
$simple_mode = true; // Menyembunyikan menu navbar sesuai request
require __DIR__ . '/partials/header.php';
?>

<main class="min-h-screen pt-24 pb-20 
    bg-light-bg text-light-text 
    dark:bg-dark-bg dark:text-dark-text transition-colors duration-300">

    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center mb-16 space-y-4" data-aos="fade-down">
            <span class="px-3 py-1 rounded-full bg-blue-100/50 border border-blue-200 text-blue-600 dark:bg-blue-500/10 dark:border-blue-400/20 dark:text-blue-300 text-xs font-semibold tracking-wide uppercase inline-block mb-2">
                Penjaminan Mutu
            </span>
            <h1 class="text-3xl md:text-5xl font-extrabold 
                bg-gradient-to-r from-blue-500 via-teal-400 to-accent-primary
                bg-clip-text text-transparent">
                Status Akreditasi
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 md:gap-12 align-start">

            <div class="group flex flex-col" data-aos="fade-up" data-aos-delay="100">
                <div class="relative bg-white dark:bg-gray-800 rounded-2xl p-3 shadow-lg 
                            border border-gray-200 dark:border-gray-700 
                            transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                    
                    <div class="rounded-xl overflow-hidden border border-gray-100 dark:border-gray-600/50 bg-gray-50 dark:bg-gray-900/50">
                        <img src="assets/img/sertif1.png" 
                             alt="Sertifikat Akreditasi Prodi SIEGA" 
                             class="w-full h-auto object-contain">
                    </div>
                </div>

                <div class="mt-6 px-2 text-center md:text-left">
                    <div class="inline-block p-2 rounded-lg bg-blue-50 dark:bg-blue-900/20 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-accent-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <p class="text-sm md:text-base text-text-muted dark:text-dark-muted leading-relaxed">
                        SIEGA Unika Soegijapranata memperoleh akreditasi <strong class="text-gray-900 dark:text-white font-extrabold">Baik Sekali</strong> berdasarkan Keputusan BAN-PT No. 10974/SK/BAN-PT/Ak.ISK/S/IX/2021 pada 21 September 2021.
                    </p>
                </div>
            </div>

            <div class="group flex flex-col" data-aos="fade-up" data-aos-delay="200">
                <div class="relative bg-white dark:bg-gray-800 rounded-2xl p-3 shadow-lg 
                            border border-gray-200 dark:border-gray-700 
                            transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl">
                    
                    <div class="rounded-xl overflow-hidden border border-gray-100 dark:border-gray-600/50 bg-gray-50 dark:bg-gray-900/50">
                        <img src="assets/img/sertif2.jpeg" 
                             alt="Sertifikat Akreditasi Universitas" 
                             class="w-full h-auto object-contain">
                    </div>
                </div>

                <div class="mt-6 px-2 text-center md:text-left">
                    <div class="inline-block p-2 rounded-lg bg-yellow-50 dark:bg-yellow-900/20 mb-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600 dark:text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                        </svg>
                    </div>
                    <p class="text-sm md:text-base text-text-muted dark:text-dark-muted leading-relaxed">
                        Universitas Katolik Soegijapranata memperoleh peringkat <strong class="text-gray-900 dark:text-white font-extrabold">Akreditasi Unggul</strong> berdasarkan SK Direktur Dewan Eksekutif BAN PT pada 11 April 2023.
                    </p>
                </div>
            </div>

        </div>

    </div>
</main>

<script>
    // Inisialisasi AOS jika belum berjalan (biasanya sudah di footer, tapi untuk jaga-jaga)
    if (typeof AOS !== 'undefined') {
        AOS.init();
    }
</script>
<?php
require __DIR__ . '/partials/footer.php';
?>