<footer class="border-t border-white/5 mt-20 bg-dark-bg/50 backdrop-blur-sm">
  <div class="max-w-7xl mx-auto px-6 py-12">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-10 mb-10">
      <div class="space-y-4">
        <h4 class="text-white font-bold text-lg">Sistem Informasi</h4>
        <p class="text-text-muted text-sm leading-relaxed">
        <p>Gedung Henricus Constant Lt 8 Unika Soegijapranata<br>
          Jl. Pawiyatan Luhur IV/1, Bendan Duwur,<br>Semarang, Jawa Tengah 50234
          <br>Telepon: +62-819-0338-5595 (WA)
        </p>
      </div>

      <div class="space-y-4">
        <h4 class="text-white font-bold text-lg">Ikuti Kami</h4>
        <div class="flex flex-col space-y-2 text-text-muted text-sm">
          <a href="https://www.instagram.com/siega_unika?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" class="hover:text-accent-secondary transition">Instagram</a>
          <a href="https://youtube.com/@siegaunikasoegijapranata8217?si=GlrxAk30G3P1Go4L" class="hover:text-accent-secondary transition">YouTube</a>
          <a href="https://www.tiktok.com/@siega_unika?is_from_webapp=1&sender_device=pc" class="hover:text-accent-secondary transition">Tiktok</a>
        </div>
      </div>

      <div class="space-y-4">
        <h4 class="text-white font-bold text-lg">Akademik</h4>
        <div class="flex flex-col space-y-2 text-text-muted text-sm">
          <a href="infopmb.php" class="hover:text-accent-secondary transition">Info Penerimaan Siswa Baru</a>
          <a href="#" class="hover:text-accent-secondary transition">Kurikulum</a>
          <a href="#" class="hover:text-accent-secondary transition">Akreditasi</a>
        </div>
      </div>
    </div>

    <div class="border-t border-white/5 pt-8 text-center">
      <p class="text-text-muted text-sm">© <?= date('Y') ?> Jurusan Sistem Informasi — Semua hak dilindungi.</p>
    </div>
  </div>
</footer>

<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/lenis@1.1.18/dist/lenis.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script>
  AOS.init({ duration: 800, once: true, offset: 100 });

  const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smooth: true,
    smoothTouch: false
  });
  function raf(time) { lenis.raf(time); requestAnimationFrame(raf); }
  requestAnimationFrame(raf);

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1, 
    spaceBetween: 20, 
    loop: true,       
    grabCursor: true, 
    breakpoints: {
      640: {
        slidesPerView: 2, 
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 3, 
        spaceBetween: 30,
      },
    },

    navigation: {
      nextEl: ".swiper-button-next-custom",
      prevEl: ".swiper-button-prev-custom",
    },

    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true, 
    },

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
  });

  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      const targetElem = document.querySelector(targetId);
      if (targetElem) {
        lenis.scrollTo(targetId, { offset: -80, duration: 1.5 });
        const mobileMenu = document.getElementById('mobile-menu');
        if (mobileMenu && !mobileMenu.classList.contains('hidden')) {
          mobileMenu.classList.add('hidden');
        }
      }
    });
  });

  const btn = document.getElementById('nav-toggle');
  const menu = document.getElementById('mobile-menu');
  if (btn && menu) btn.addEventListener('click', () => menu.classList.toggle('hidden'));
</script>