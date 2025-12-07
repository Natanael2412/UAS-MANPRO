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
<body>
  <header class="site-header">
    <div class="wrap">
      <a class="brand" href="index.php">Sistem Informasi</a>
     <nav class="nav" id="main-nav">
      <a href="tentang.php">Tentang</a>
      <a href="kurikulum.php">Kurikulum</a>
      <a href="dosen.php">Dosen</a>
      <a href="proyek.php">Proyek</a>
      <a href="kontak.php">Kontak</a>
    </nav>
      <button id="nav-toggle" aria-label="Toggle navigation">≡</button>
    </div>
  </header>