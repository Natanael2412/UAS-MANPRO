<?php
$title = "Dosen & Staf - Sistem Informasi";
$hide_menu = true; // Menyembunyikan menu navbar sesuai request
require 'partials/header.php'; 
?>

<main class="min-h-screen pt-24 pb-20 bg-dark-bg text-text-light">
    <div class="max-w-7xl mx-auto px-4">
        
        <div class="text-center mb-16 space-y-4" data-aos="fade-up">
            <h1 class="text-4xl md:text-5xl font-extrabold bg-gradient-to-r from-blue-300 via-teal-300 to-accent-primary bg-clip-text text-transparent">
                Dosen & Staf Akademik
            </h1>
            <p class="text-text-muted max-w-2xl mx-auto text-lg">
                Berkenalan dengan para akademisi dan praktisi di balik kualitas pendidikan SIEGA.
            </p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            
            <?php
            // Array Data Dosen (Agar kodingan rapi dan mudah diedit)
            $dosen = [
                [
                    "nama" => "Prof. Dr. Ridwan Sanjaya, S.E., S.Kom., MS.IEC",
                    "jabatan" => "Dekan F-Ilkom / Guru Besar SI",
                    "foto" => "assets/img/dosen-ridwan.jpg"
                ],
                [
                    "nama" => "Dr. Bernadinus Harnadi, S.T., M.T.",
                    "jabatan" => "Wakil Dekan F-Ilkom",
                    "foto" => "assets/img/dosen-bernadinus.jpg"
                ],
                [
                    "nama" => "Dr. Albertus Dwiyoga Widiantoro, S.Kom., M.Kom.",
                    "jabatan" => "Ketua Program Studi SI",
                    "foto" => "assets/img/dosen-albertus.jpg"
                ],
                [
                    "nama" => "Andre Kurniawan Pamudji, S.Kom., M.Ling.",
                    "jabatan" => "Sekretaris Program Studi SI",
                    "foto" => "assets/img/dosen-andre.jpg"
                ],
                [
                    "nama" => "Stephani Inggrit Swastini, S.Kom., MBA",
                    "jabatan" => "Kepala Laboratorium SI",
                    "foto" => "assets/img/dosen-inggrit.jpg"
                ],
                [
                    "nama" => "Agus Cahyo Nugroho, S.Kom., M.T.",
                    "jabatan" => "Dosen Sistem Informasi",
                    "foto" => "assets/img/dosen-agus.jpg"
                ],
                [
                    "nama" => "Erdhi Widyarto Nugroho, S.T., M.T.",
                    "jabatan" => "Dosen Sistem Informasi",
                    "foto" => "assets/img/dosen-erdhi.jpg"
                ],
                [
                    "nama" => "Dr. T. Brenda Ch, S.T., M.T.",
                    "jabatan" => "Dosen Sistem Informasi",
                    "foto" => "assets/img/dosen-brenda.jpg"
                ],
                [
                    "nama" => "Fx. Hendra Prasetya, S.T., M.T.",
                    "jabatan" => "Dosen Sistem Informasi",
                    "foto" => "assets/img/dosen-hendra.jpg"
                ]
            ];

            // Loop untuk menampilkan card
            foreach ($dosen as $d): 
            ?>
            
            <div class="group bg-glass-bg border border-white/10 rounded-xl p-6 text-center hover:border-accent-primary/50 transition duration-300 hover:-translate-y-2" data-aos="fade-up">
                <div class="aspect-square w-full max-w-[200px] mx-auto bg-white/5 p-2 rounded-lg border border-white/10 mb-5 group-hover:border-accent-primary/50 transition relative overflow-hidden">
                    <img src="<?= $d['foto'] ?>" 
                         onerror="this.src='https://ui-avatars.com/api/?name=<?= urlencode($d['nama']) ?>&background=random&size=256'" 
                         alt="<?= $d['nama'] ?>" 
                         class="w-full h-full object-cover rounded shadow-md grayscale group-hover:grayscale-0 transition duration-500">
                </div>
                
                <h3 class="text-base font-bold text-white mb-2 leading-snug min-h-[3rem] flex items-center justify-center">
                    <?= $d['nama'] ?>
                </h3>
                <div class="h-0.5 w-8 bg-accent-secondary mx-auto my-3 opacity-50"></div>
                <p class="text-text-muted text-xs font-medium uppercase tracking-wider">
                    <?= $d['jabatan'] ?>
                </p>
            </div>

            <?php endforeach; ?>

        </div>

        <div class="mt-16 p-8 bg-gradient-to-r from-accent-primary/10 to-accent-secondary/10 border border-white/10 rounded-2xl text-center max-w-4xl mx-auto" data-aos="fade-up">
            <p class="text-lg text-white font-medium mb-2">✨ Tim Akademik Solid</p>
            <p class="text-text-muted text-sm leading-relaxed">
                Selain nama-nama di atas, masih ada staf akademik dan dosen lain termasuk: <br>
                <span class="text-white">V. Eng Yennylawati, S.Kom., M.Kom.</span>; 
                <span class="text-white">Hinu Indrawardhana, M.Ars</span>; 
                <span class="text-white">Agustina Alam Anggitasari, S.E., M.M.</span>; 
                serta dosen-dosen lain yang mendukung penyelenggaraan SIEGA.
            </p>
        </div>
    </div>
</main>

<?php require 'partials/footer.php'; ?>