<footer class="site-footer">
    <div class="wrap">
      <div class="footer-grid">
        <div>
          <h4>Sistem Informasi</h4>
          <p>Alamat kampus — Jl. Contoh No.1, Kota. Telepon: (021) xxx-xxxx</p>
        </div>
        <div>
          <h4>Ikuti Kami</h4>
          <p>Instagram | LinkedIn | YouTube</p>
        </div>
        <div>
          <h4>Akademik</h4>
          <p>Info PMB, Kurikulum, Akreditasi</p>
        </div>
      </div>
      <p class="copyright">© <?=date('Y')?> Jurusan Sistem Informasi — Semua hak dilindungi.</p>
    </div>
  </footer>
  
  <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>

  <script>
    var scroll = new SmoothScroll('#main-nav a[href*="#"], .cta-group a[href*="#"]', {
        speed: 1200, 
        easing: 'easeInOutCubic',
        offset: 100 
    });
  </script>

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 800, // Durasi Animasi
      once: true // Animasi hanya terjadi satu kali per elemen saat discroll
    });
  </script>
  
  <script src="js/script.js"></script>
</body>
</html>