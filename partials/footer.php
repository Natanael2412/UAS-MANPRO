<footer class="border-t border-white/5 mt-20 bg-dark-bg/50 backdrop-blur-sm">
    <div class="max-w-7xl mx-auto px-6 py-12">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-10">
        <div class="space-y-4">
          <h4 class="text-white font-bold text-lg">Sistem Informasi</h4>
          <p class="text-text-muted text-sm leading-relaxed">
            Alamat kampus — Jl. Contoh No.1, Kota.<br>
            Telepon: (021) xxx-xxxx
          </p>
        </div>
        
        <div class="space-y-4">
          <h4 class="text-white font-bold text-lg">Ikuti Kami</h4>
          <div class="flex flex-col space-y-2 text-text-muted text-sm">
             <a href="#" class="hover:text-accent-secondary transition">Instagram</a>
             <a href="#" class="hover:text-accent-secondary transition">LinkedIn</a>
             <a href="#" class="hover:text-accent-secondary transition">YouTube</a>
          </div>
        </div>
        
        <div class="space-y-4">
          <h4 class="text-white font-bold text-lg">Akademik</h4>
          <div class="flex flex-col space-y-2 text-text-muted text-sm">
            <a href="#" class="hover:text-accent-secondary transition">Info PMB</a>
            <a href="#" class="hover:text-accent-secondary transition">Kurikulum</a>
            <a href="#" class="hover:text-accent-secondary transition">Akreditasi</a>
          </div>
        </div>
      </div>
      
      <div class="border-t border-white/5 pt-8 text-center">
        <p class="text-text-muted text-sm">© <?=date('Y')?> Jurusan Sistem Informasi — Semua hak dilindungi.</p>
      </div>
    </div>
  </footer>
  
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>

  <script>
    // 1. Inisialisasi AOS (Animasi masuk elemen)
    AOS.init({ 
      duration: 800, 
      once: true,
      offset: 100 
    });

    // 2. Settingan Rasa Scroll Lenis
    const lenis = new Lenis({
      duration: 1.2,    // Kecepatan: Semakin besar angka, semakin lambat/halus
      easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)), // Easing function (jangan ubah kalau tidak paham math)
      smooth: true,
      smoothTouch: false // Biarkan false agar di HP terasa natural (native)
    });

    // Engine Scroll (Wajib Ada)
    function raf(time) {
      lenis.raf(time);
      requestAnimationFrame(raf);
    }
    requestAnimationFrame(raf);

    // 3. Menangani Klik Menu Agar Smooth (Override Anchor Link)
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        e.preventDefault(); // Matikan lompatan kasar bawaan HTML
        
        const targetId = this.getAttribute('href');
        const targetElem = document.querySelector(targetId);
        
        if (targetElem) {
            // Perintah Lenis untuk meluncur ke target
            lenis.scrollTo(targetId, {
                offset: -80, // PENTING: Kompensasi tinggi Header Sticky (sesuaikan pixelnya)
                duration: 1.5 // Durasi meluncur saat klik menu
            });
            
            // Tutup menu mobile otomatis (jika ada)
            const mobileMenu = document.getElementById('mobile-menu');
            if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
                mobileMenu.classList.add('hidden');
            }
        }
      });
    });
  </script>
</body>
</html>