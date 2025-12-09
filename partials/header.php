<?php
$title = $title ?? 'Jurusan Sistem Informasi';
?>
<!doctype html>
<html lang="id"> 
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= $title ?></title>
  <meta name="description" content="Promosi Jurusan Sistem Informasi - pendidikan, kurikulum, fasilitas, dan peluang karier.">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Geist:wght@100..900&family=Geist+Mono:wght@100..900&display=swap" rel="stylesheet">
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" /> 
  <script src="https://cdn.tailwindcss.com"></script>
<script>
tailwind.config = {
  darkMode: 'class', 
  theme: {
    extend: {
      fontFamily: {
        sans: ['Geist', 'sans-serif'],
        mono: ['Geist Mono', 'monospace'],
      },

      colors: {
        'light-bg': '#F8FAFC',
        'light-bg-2': '#caf0f8',
        'light-card': '#FFFFFF',
        'light-text': '#1E293B',
        'light-muted': '#64748B',

        'dark-bg':   '#1D3461',  
        'dark-bg-2': '#1F487E',   
        'dark-text': '#EEF2FF',  
        'dark-muted': '#829CBC', 

        'accent-primary': '#6290C8',
        'accent-secondary': '#376996',
      },

      backgroundImage: {
        'main-gradient':
          'radial-gradient(circle at 20% 20%, #1F487E 0%, #1D3461 40%, #0F172A 100%)',
      },

      boxShadow: {
        'glass': '0 10px 50px rgba(0,0,0,0.25)',
        'neon': '0 0 20px rgba(98,144,200,0.35)',
      },
    }
  }
}
</script>
  </script>

  <html lang="id"> 

<head>
  <style>
    html.lenis, html.lenis body {
      height: auto;
    }
    
    .lenis.lenis-smooth {
      scroll-behavior: auto !important; 
    }
    
    .lenis.lenis-smooth [data-lenis-prevent] {
      overscroll-behavior: contain;
    }
    
    .lenis.lenis-stopped {
      overflow: hidden;
    }
    
    .lenis.lenis-scrolling iframe {
      pointer-events: none;
    }
  </style>
</head>
</head>
<body class="font-sans 
    bg-light-bg text-light-text 
    dark:bg-dark-bg dark:text-dark-text 
    antialiased leading-relaxed"
    style="padding-top: 90px;">

<header class="fixed top-0 left-0 w-full z-50 border-b border-white/10 bg-white/70 dark:bg-gray-900/80 backdrop-blur-lg transition-colors duration-300">

  <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">

    <a class="text-2xl md:text-3xl font-extrabold leading-tight tracking-tight bg-gradient-to-r from-blue-300 via-teal-300 to-accent-primary bg-clip-text text-transparent mb-1" href="/">
        Sistem Informasi
      </a>

      <?php if (isset($hide_menu) && $hide_menu): ?>
          
          <div class="flex items-center">
              <a href="index.php#faculty" class="flex items-center gap-2 px-4 py-2 rounded-full border border-white/20 bg-white/5 text-white text-sm hover:bg-accent-primary hover:border-transparent transition-all">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" /></svg>
                  Kembali ke Daftar Dosen
              </a>
          </div>

      <?php else: ?>
        
    <nav class="hidden md:flex space-x-6">
      <a href="#about" class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition">Tentang</a>
      <a href="#kurikulum" class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition">Kurikulum</a>
      <a href="#faculty" class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition">Dosen</a>
      <a href="#projects" class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition">Proyek</a>
      <a href="#contact" class="text-gray-700 dark:text-gray-300 hover:text-blue-500 dark:hover:text-blue-400 transition">Kontak</a>
    </nav>

    <button id="themeToggle" class="p-2 rounded-xl border border-gray-300 dark:border-gray-700 hover:bg-gray-200 dark:hover:bg-gray-800 transition">
      <span id="themeIcon">🌙</span>
    </button>

  </div>
</header>

<script>
const html = document.documentElement;
const toggleBtn = document.getElementById("themeToggle");
const themeIcon = document.getElementById("themeIcon");

if (localStorage.theme === "dark" || 
   (!("theme" in localStorage) && window.matchMedia("(prefers-color-scheme: dark)").matches)) {
  html.classList.add("dark");
  themeIcon.textContent = "☀️"; // sun icon
} else {
  html.classList.remove("dark");
  themeIcon.textContent = "🌙"; // moon icon
}

toggleBtn.addEventListener("click", () => {
  if (html.classList.contains("dark")) {
    html.classList.remove("dark");
    localStorage.theme = "light";
    themeIcon.textContent = "🌙";
  } else {
    html.classList.add("dark");
    localStorage.theme = "dark";
    themeIcon.textContent = "☀️";
  }
});
</script>
  