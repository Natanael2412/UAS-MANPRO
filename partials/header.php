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
      theme: {
        extend: {
          fontFamily: {
            sans: ['Geist', 'sans-serif'],
            mono: ['Geist Mono', 'monospace'],
          },
          colors: {
            'dark-bg': '#0f1724', 
            'accent-primary': '#7b61ff', 
            'accent-secondary': '#29d8a0',
            'text-light': '#eef2ff', 
            'text-muted': '#a8b3c7', 
          },
          backgroundImage: {
            'main-gradient': 'radial-gradient(circle at 20% 20%, #0c1631 0%, #091021 40%, #01030a 100%)',
          },
          boxShadow: {
            'glass': '0 10px 50px rgba(0,0,0,0.25)',
            'neon': '0 0 20px rgba(123,97,255,0.3)',
          }
        }
      }
    }
  </script>

  <html lang="id"> 

<head>
  <style>
    html.lenis, html.lenis body {
      height: auto;
    }
    
    .lenis.lenis-smooth {
      scroll-behavior: auto !important; /* MEMATIKAN smooth scroll bawaan browser secara paksa */
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
<body class="font-sans bg-dark-bg text-text-light antialiased leading-relaxed bg-[url('')] bg-no-repeat bg-fixed" style="background-image: radial-gradient(circle at 20% 20%, #0c1631 0%, #091021 40%, #01030a 100%);">
  
  <header class="sticky top-0 backdrop-blur-lg bg-dark-bg/80 border-b border-white/5 z-50 transition-all duration-300">
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

          <nav class="hidden md:flex space-x-1" id="main-nav">
            <?php 
            $navItems = [
                '#about' => 'Tentang',
                '#curriculum' => 'Kurikulum',
                '#faculty' => 'Dosen',
                '#projects' => 'Proyek',
                '#contact' => 'Kontak'
            ];
            foreach ($navItems as $link => $label): ?>
              <a href="<?= $link ?>" class="px-4 py-2 rounded-lg text-sm font-medium text-text-muted hover:bg-white/5 hover:text-white transition-all duration-200">
                <?= $label ?>
              </a>
            <?php endforeach; ?>
          </nav>

          <button id="nav-toggle" aria-label="Toggle navigation" class="md:hidden text-white p-2 hover:bg-white/10 rounded-lg transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>

      <?php endif; ?>

      <button id="nav-toggle" aria-label="Toggle navigation" class="md:hidden text-white p-2 hover:bg-white/10 rounded-lg transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
    
    <div id="mobile-menu" class="hidden md:hidden absolute top-full left-0 w-full bg-dark-bg border-b border-white/5 shadow-2xl p-4 flex flex-col space-y-2">
       <?php foreach ($navItems as $link => $label): ?>
          <a href="<?= $link ?>" class="block px-4 py-3 rounded-lg text-text-muted hover:bg-white/5 hover:text-white transition">
            <?= $label ?>
          </a>
        <?php endforeach; ?>
    </div>
  </header>