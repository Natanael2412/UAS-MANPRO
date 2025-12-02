// main.js - interaktivitas ringan
document.addEventListener('DOMContentLoaded', () => {
  const navToggle = document.getElementById('nav-toggle');
  const nav = document.getElementById('main-nav');

  // Toggle menu mobile
  if (navToggle) {
    navToggle.addEventListener('click', () => {
      if (nav.style.display === 'flex') {
        nav.style.display = 'none';
      } else {
        nav.style.display = 'flex';
      }
    });
  }

  // Smooth scroll untuk link internal
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const target = document.querySelector(a.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });

        // Tutup menu setelah klik (mode mobile)
        if (window.innerWidth < 900 && nav) {
          nav.style.display = 'none';
        }
      }
    });
  });
});

// Validasi form contact sederhana
function validateContactForm() {
  const name = document.getElementById('cf-name').value.trim();
  const email = document.getElementById('cf-email').value.trim();
  const msg = document.getElementById('cf-message').value.trim();

  if (!name || !email || !msg) {
    alert('Isi semua field sebelum mengirim.');
    return false;
  }

  return true; // lolos validasi
}
