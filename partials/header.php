<?php
$title = $title ?? 'Jurusan Sistem Informasi';
?>
<!doctype html>
<html lang="id" style="scroll-behavior: smooth;"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title><?= $title ?></title>
  <meta name="description" content="Promosi Jurusan Sistem Informasi - pendidikan, kurikulum, fasilitas, dan peluang karier.">
  
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Geist&family=Geist+Mono&display=swap" rel="stylesheet">
  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Konfigurasi Kustom Tailwind
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'accent-primary': '#7b61ff', 
            'accent-secondary': '#29d8a0',
            'glass-bg': 'rgba(255, 255, 255, 0.06)',
            'dark-bg': '#0f1724', 
            'text-light': '#eef2ff', 
            'text-muted': '#a8b3c7', 
          }
        }
      }
    }
  </script>

  <style>
    body {
      /* Font Geist Sans diterapkan ke seluruh body */
      font-family: 'Geist', sans-serif; 
      background: radial-gradient(circle at 20% 20%, #0c1631 0%, #091021 40%, #01030a 100%);
      color: theme('colors.text-light');
      line-height: 1.7;
    }
    /* Opsional: Terapkan Geist Mono untuk tampilan teknis/kode */
    .font-mono {
        font-family: 'Geist Mono', monospace;
    }
    
    .brand-gradient {
        background-image: linear-gradient(to right, #9eaaff, #65fbd2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .accent-gradient-text {
        background-image: linear-gradient(135deg, #7b61ff 0%, #29d8a0 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .glass-shadow {
        box-shadow: 0 10px 50px rgba(0,0,0,0.25);
    }
    html {
        scroll-behavior: smooth !important;
    }
  </style>
</head>
<body data-lenis-prevent>
  <header class="site-header sticky top-0 backdrop-blur-lg bg-dark-bg/50 border-b border-white/5 z-50">
    <div class="max-w-7xl mx-auto px-4 py-4 flex items-center justify-between">
      <a class="text-2xl font-extrabold tracking-wider no-underline text-white transition duration-300 hover:opacity-70" href="/">Sistem Informasi</a>
      <nav class="hidden md:flex space-x-4" id="main-nav">
        <a href="#about" class="px-3 py-2 rounded-lg no-underline text-text-muted transition duration-250 hover:bg-glass-bg hover:text-text-light hover:transform hover:-translate-y-0.5">Tentang</a>
        <a href="#curriculum" class="px-3 py-2 rounded-lg no-underline text-text-muted transition duration-250 hover:bg-glass-bg hover:text-text-light hover:transform hover:-translate-y-0.5">Kurikulum</a>
        <a href="#faculty" class="px-3 py-2 rounded-lg no-underline text-text-muted transition duration-250 hover:bg-glass-bg hover:text-text-light hover:transform hover:-translate-y-0.5">Dosen</a>
        <a href="#projects" class="px-3 py-2 rounded-lg no-underline text-text-muted transition duration-250 hover:bg-glass-bg hover:text-text-light hover:transform hover:-translate-y-0.5">Proyek</a>
        <a href="#contact" class="px-3 py-2 rounded-lg no-underline text-text-muted transition duration-250 hover:bg-glass-bg hover:text-text-light hover:transform hover:-translate-y-0.5">Kontak</a>
      </nav>
      <button id="nav-toggle" aria-label="Toggle navigation" class="md:hidden text-text-light text-2xl bg-transparent border-none cursor-pointer">
        &#8801;
      </button>
    </div>
  </header>