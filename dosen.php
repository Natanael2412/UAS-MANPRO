<?php
$title = "Dosen & Staf - Sistem Informasi";
$hide_menu = true; // <--- TAMBAHKAN BARIS INI
require 'partials/header.php'; 
?>

<main class="min-h-screen pt-24 pb-12 bg-dark-bg text-text-light">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="text-center mb-16" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-4 bg-gradient-to-r from-blue-300 via-teal-300 to-accent-primary bg-clip-text text-transparent">
                Tim Pengajar Kami
            </h1>
            <p class="text-text-muted max-w-2xl mx-auto">
                Bertemu dengan para ahli dan praktisi yang siap membimbing masa depan Anda.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            
            <div class="group bg-glass-bg border border-white/10 rounded-2xl p-6 text-center hover:border-accent-primary/50 transition duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="w-28 h-28 mx-auto rounded-full p-1 bg-gradient-to-br from-accent-primary to-accent-secondary mb-4">
                    <img src="assets/img/dosen1.jpg" alt="Nama Dosen" class="w-full h-full object-cover rounded-full border-4 border-dark-bg">
                </div>
                <h3 class="text-lg font-bold text-white mb-1">Nama Dosen, S.Kom, M.Kom</h3>
                <p class="text-accent-secondary text-xs font-semibold uppercase tracking-wide mb-2">Dosen Tetap</p>
                <p class="text-text-muted text-xs line-clamp-2">Expertise: AI, Data Mining, Software Engineering</p>
            </div>
            <div class="group bg-glass-bg border border-white/10 rounded-2xl p-6 text-center hover:border-accent-primary/50 transition duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="w-28 h-28 mx-auto rounded-full p-1 bg-gray-700 mb-4">
                    <div class="w-full h-full rounded-full bg-gray-600 flex items-center justify-center text-2xl">👨‍🏫</div>
                </div>
                <h3 class="text-lg font-bold text-white mb-1">Nama Dosen Lain</h3>
                <p class="text-pink-400 text-xs font-semibold uppercase tracking-wide mb-2">Kepala Lab</p>
                <p class="text-text-muted text-xs">Expertise: Game Dev, VR</p>
            </div>

            </div>
    </div>
</main>

<?php require 'partials/footer.php'; ?>