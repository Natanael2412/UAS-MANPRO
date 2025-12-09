<?php
$title = "Kurikulum";
$simple_mode = true; // Menyembunyikan menu navbar sesuai request
require __DIR__ . '/partials/header.php';
?>

<main class="w-full min-h-screen bg-gray-50 dark:bg-gray-900 pt-24 pb-8 px-4 sm:px-6 transition-colors duration-300 flex flex-col">

    <div class="max-w-6xl mx-auto w-full h-full flex-1 flex flex-col gap-4">

        <div class="flex flex-col md:flex-row justify-between items-start md:items-center gap-4 animate-fade-in-down shrink-0">
            <div>
                <h1 class="text-2xl font-bold text-slate-800 dark:text-white flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                        class="text-blue-600 dark:text-blue-400">
                        <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z"></path>
                        <polyline points="14 2 14 8 20 8"></polyline>
                        <line x1="16" y1="13" x2="8" y2="13"></line>
                        <line x1="16" y1="17" x2="8" y2="17"></line>
                        <polyline points="10 9 9 9 8 9"></polyline>
                    </svg>
                    Dokumen Kurikulum
                </h1>
                <p class="text-slate-500 dark:text-slate-400 text-sm mt-1">
                    Tahun Ajaran 2025/2026 • Program Studi Sistem Informasi
                </p>
            </div>

            <a href="Kurikulum_SIEGA_Dummy.pdf" download="Kurikulum_SIEGA_2025.pdf" class="group relative inline-flex items-center justify-center gap-2 px-5 py-2.5 
                      font-medium text-white transition-all duration-200 
                      bg-blue-600 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-600 
                      shadow-lg shadow-blue-500/30 hover:shadow-blue-500/50">
                <svg class="w-5 h-5 transition-transform duration-200 group-hover:-translate-y-0.5"
                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                </svg>
                Unduh PDF
            </a>
        </div>

        <div class="w-full h-[80vh] md:h-[calc(100vh-200px)] bg-white dark:bg-slate-800 rounded-xl shadow-2xl overflow-hidden border border-slate-200 dark:border-slate-700 relative animate-fade-in-up flex flex-col">

            <div class="h-10 bg-slate-100 dark:bg-slate-900 border-b border-slate-200 dark:border-slate-700 flex items-center px-4 gap-2 shrink-0">
                <div class="flex gap-1.5">
                    <div class="w-3 h-3 rounded-full bg-red-400"></div>
                    <div class="w-3 h-3 rounded-full bg-yellow-400"></div>
                    <div class="w-3 h-3 rounded-full bg-green-400"></div>
                </div>
                <div class="ml-auto text-xs text-slate-500 font-medium">
                    Kurikulum_SIEGA_2025.pdf
                </div>
            </div>

            <div class="relative w-full flex-1 bg-gray-200">
                <iframe 
                    src="assets/Kurikulum_SIEGA_Dummy.pdf#view=FitH" 
                    class="absolute inset-0 w-full h-full" 
                    frameborder="0">
                    
                    <div class="flex flex-col items-center justify-center h-full space-y-4 p-8 text-center bg-gray-50">
                        <p class="text-gray-500">Browser tidak dapat menampilkan PDF secara langsung.</p>
                        <a href="assets/Kurikulum_SIEGA_Dummy.pdf" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Download PDF Saja
                        </a>
                    </div>
                </iframe>
            </div>

        </div>

        <p class="md:hidden text-center text-xs text-slate-400">
            *Jika PDF terpotong di layar HP, gunakan tombol Unduh di atas.
        </p>

    </div>
</main>

<style>
    /* Animasi Masuk */
    @keyframes fadeInDown {
        from {
            opacity: 0;
            transform: translateY(-10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(10px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .animate-fade-in-down {
        animation: fadeInDown 0.5s ease-out forwards;
    }

    .animate-fade-in-up {
        animation: fadeInUp 0.5s ease-out 0.2s forwards;
        opacity: 0;
    }
</style>

</body>

</html>

<?php
require __DIR__ . '/partials/footer.php';
?>