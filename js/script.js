// main.js - interaktivitas ringan dan DOM manipulation
document.addEventListener('DOMContentLoaded', () => {
    const navToggle = document.getElementById('nav-toggle');
    const nav = document.getElementById('main-nav');

    // Logic untuk Mobile Menu Toggle
    if (navToggle && nav) {
        navToggle.addEventListener('click', () => {
            // Mengganti Tailwind class 'hidden' dan 'flex'
            nav.classList.toggle('hidden');
            nav.classList.toggle('flex'); 
            
            if (!nav.classList.contains('hidden')) {
                // Terapkan style menu mobile (full width, background, shadow)
                nav.classList.add('flex-col', 'absolute', 'top-full', 'left-0', 'right-0', 'bg-dark-bg', 'p-4', 'shadow-xl');
            } else {
                // Hapus style menu mobile
                nav.classList.remove('flex-col', 'absolute', 'top-full', 'left-0', 'right-0', 'bg-dark-bg', 'p-4', 'shadow-xl');
            }
        });

        // Tutup menu setelah klik link (mode mobile)
        document.querySelectorAll('#main-nav a').forEach(a => {
            a.addEventListener('click', () => {
                if (window.innerWidth < 768) { // 768px adalah breakpoint md Tailwind
                    nav.classList.add('hidden');
                    nav.classList.remove('flex');
                }
            });
        });
    }

    // CATATAN: Semua kode Lenis (lenis.scrollTo, const lenis, function raf) telah dihapus dari sini.

    // Validasi form contact sederhana
    function validateContactForm() {
        const name = document.getElementById('cf-name').value.trim();
        const email = document.getElementById('cf-email').value.trim();
        const msg = document.getElementById('cf-message').value.trim();

        if (!name || !email || !msg) {
            alert('Isi semua field sebelum mengirim.');
            return false;
        }

        return true; 
    }
});