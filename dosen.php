<?php
$title = "Dosen & Staf - Sistem Informasi";
$hide_menu = true; // Menyembunyikan menu navbar sesuai request
require 'partials/header.php'; 
?>

<main class="min-h-screen pt-24 pb-20 
    bg-light-bg-2 text-[#13293D] 
    dark:bg-dark-bg dark:text-dark-text">

    <div class="max-w-7xl mx-auto px-4">
        
        <!-- TITLE -->
        <div class="text-center mb-16 space-y-4" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-extrabold 
                bg-gradient-to-r from-blue-500 via-teal-400 to-accent-primary
                bg-clip-text text-transparent">
                Dosen & Staf Akademik
            </h1>

            <p class="max-w-2xl mx-auto text-lg 
                text-[#18435A] dark:text-dark-muted">
                Berkenalan dengan para akademisi dan praktisi di balik kualitas pendidikan SIEGA.
            </p>
        </div>

        <!-- GRID DOSEN -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            <?php
            $dosen = [
                ["nama" => "Prof. Dr. Ridwan Sanjaya, S.E., S.Kom., MS.IEC", "jabatan" => "Dekan F-Ilkom / Guru Besar SI", "foto" => "assets/img/dosen-ridwan.jpg"],
                ["nama" => "Dr. Bernadinus Harnadi, S.T., M.T.", "jabatan" => "Wakil Dekan F-Ilkom", "foto" => "assets/img/dosen-bernadinus.jpg"],
                ["nama" => "Dr. Albertus Dwiyoga Widiantoro, S.Kom., M.Kom.", "jabatan" => "Ketua Program Studi SI", "foto" => "assets/img/dosen-albertus.jpg"],
                ["nama" => "Andre Kurniawan Pamudji, S.Kom., M.Ling.", "jabatan" => "Sekretaris Program Studi SI", "foto" => "assets/img/dosen-andre.jpg"],
                ["nama" => "Stephani Inggrit Swastini, S.Kom., MBA", "jabatan" => "Kepala Laboratorium SI", "foto" => "assets/img/dosen-inggrit.jpg"],
                ["nama" => "Agus Cahyo Nugroho, S.Kom., M.T.", "jabatan" => "Dosen Sistem Informasi", "foto" => "assets/img/dosen-agus.jpg"],
                ["nama" => "Erdhi Widyarto Nugroho, S.T., M.T.", "jabatan" => "Dosen Sistem Informasi", "foto" => "assets/img/dosen-erdhi.jpg"],
                ["nama" => "Dr. T. Brenda Ch, S.T., M.T.", "jabatan" => "Dosen Sistem Informasi", "foto" => "assets/img/dosen-brenda.jpg"],
                ["nama" => "Fx. Hendra Prasetya, S.T., M.T.", "jabatan" => "Dosen Sistem Informasi", "foto" => "assets/img/dosen-hendra.jpg"]
            ];

            foreach ($dosen as $d):
            ?>

            <!-- CARD DOSEN -->
            <div class="group p-6 rounded-xl transition duration-300 hover:-translate-y-2
                bg-white/70 border border-gray-300/60
                dark:bg-dark-bg-2/40 dark:border-dark-muted/20
                hover:border-accent-primary/60 dark:hover:border-accent-primary/70"
                data-aos="fade-up">

                <!-- FOTO -->
                <div class="aspect-square w-full max-w-[200px] mx-auto 
                    bg-white/50 dark:bg-white/10 
                    p-2 rounded-lg border border-gray-200 dark:border-white/10
                    mb-5 group-hover:border-accent-primary/60 transition">

                    <img src="<?= $d['foto'] ?>"
                        onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($d['nama']) ?>&background=random&size=256'"
                        alt="<?= $d['nama'] ?>"
                        class="w-full h-full object-cover rounded shadow-md grayscale group-hover:grayscale-0 transition">
                </div>

                <!-- NAMA -->
                <h3 class="text-base font-bold text-[#13293D] dark:text-dark-text mb-2 leading-snug">
                    <?= $d['nama'] ?>
                </h3>

                <div class="h-0.5 w-8 bg-accent-secondary mx-auto my-3 opacity-50"></div>

                <!-- JABATAN -->
                <p class="text-xs uppercase tracking-wider font-medium 
                    text-[#18435A] dark:text-dark-muted">
                    <?= $d['jabatan'] ?>
                </p>

            </div>

            <?php endforeach; ?>
        </div>

        <!-- HIGHLIGHT BOX -->
        <div class="mt-16 p-8 rounded-2xl text-center max-w-4xl mx-auto 
            bg-white/60 border border-gray-300/60 
            dark:bg-dark-bg-2/40 dark:border-dark-muted/30"
            data-aos="fade-up">

            <p class="text-lg font-medium text-[#13293D] dark:text-dark-text mb-2">
                ✨ Tim Akademik Solid
            </p>

            <p class="text-sm leading-relaxed text-[#18435A] dark:text-dark-muted">
                Selain nama-nama di atas, masih ada staf akademik dan dosen lain termasuk:<br>
                <span class="text-[#13293D] dark:text-white">V. Eng Yennylawati, S.Kom., M.Kom.</span>;
                <span class="text-[#13293D] dark:text-white">Hinu Indrawardhana, M.Ars</span>;
                <span class="text-[#13293D] dark:text-white">Agustina Alam Anggitasari, S.E., M.M.</span>;
                serta dosen-dosen lain yang mendukung penyelenggaraan SIEGA.
            </p>
        </div>

    </div>
</main>

<?php require 'partials/footer.php'; ?>