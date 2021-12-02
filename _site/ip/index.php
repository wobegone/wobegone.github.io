<!doctype html>
<!--
  Minimal Mistakes Jekyll Theme 4.15.1 by Michael Rose
  Copyright 2013-2019 Michael Rose - mademistakes.com | @mmistakes
  Free for personal and commercial use under the MIT license
  https://github.com/mmistakes/minimal-mistakes/blob/master/LICENSE
-->
<html lang="en" class="no-js">
  <head>
    <meta charset="utf-8">

<!-- begin _includes/seo.html --><title>Buscador general de palabras clave - s4vitar.io</title>
<meta name="description" content="Artículos sobre ciberseguridad, CTFs e investigaciones">



<meta property="og:type" content="article">
<meta property="og:locale" content="en_US">
<meta property="og:site_name" content="av4sin.io">
<meta property="og:title" content="Quiero ver mi IP">
<meta property="og:url" content="http://localhost:4000/ip/">








  <meta property="article:published_time" content="2020-01-29T00:00:00+00:00">





  

  


<link rel="canonical" href="http://localhost:4000/ip/">







  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Person",
      "name": "Av4sin",
      "url": "http://localhost:4000",
      "sameAs": null
    }
  </script>







<!-- end _includes/seo.html -->


<link href="/feed.xml" type="application/atom+xml" rel="alternate" title="s4vitar.io Feed">

<!-- https://t.co/dKP3o1e -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<script>
  document.documentElement.className = document.documentElement.className.replace(/\bno-js\b/g, '') + ' js ';
</script>

<!-- For all browsers -->
<link rel="stylesheet" href="/assets/css/main.css">

<!--[if IE ]>
  <style>
    /* old IE unsupported flexbox fixes */
    .greedy-nav .site-title {
      padding-right: 3em;
    }
    .greedy-nav button {
      position: absolute;
      top: 0;
      right: 0;
      height: 100%;
    }
  </style>
<![endif]-->



    <!-- start custom head snippets -->

<!-- insert favicons. use https://realfavicongenerator.net/ -->

<!-- end custom head snippets -->

  </head>

  <body class="layout--search">

    <!--[if lt IE 9]>
<div class="notice--danger align-center" style="margin: 0;">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

    

<div class="masthead">
  <div class="masthead__inner-wrap">
    <div class="masthead__menu">
      <nav id="site-nav" class="greedy-nav">
        
          <a class="site-logo" href="/"><img src="/assets/images/masthead.png" alt=""></a>
                
        <ul class="visible-links"><li class="masthead__menu-item">
              <a href="/" >Home</a>
            </li><li class="masthead__menu-item">
              <a href="/year-archive/" >Artículos</a>
            </li><li class="masthead__menu-item">
              <a href="/categories/" >Categorías</a>
            </li><li class="masthead__menu-item">
              <a href="/tags/" >Etiquetas</a>
            </li><li class="masthead__menu-item">
              <a href="/videos/" >Vídeos</a>
            </li><li class="masthead__menu-item">
              <a href="/buscador/" >Buscador</a>
            </li><li class="masthead__menu-item">
              <a href="/about/" >Contacto</a>
            </li></ul>
        
        <button class="greedy-nav__toggle hidden" type="button">
          <span class="visually-hidden">Toggle menu</span>
          <div class="navicon"></div>
        </button>
        <ul class="hidden-links hidden"></ul>
      </nav>
    </div>
  </div>
</div>
    

    <div class="initial-content">
      


  
    



<nav class="breadcrumbs">
  <ol itemscope itemtype="https://schema.org/BreadcrumbList">
    
    
    
      
        <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
          <a href="http://localhost:4000/" itemprop="item"><span itemprop="name">Home</span></a>
          <meta itemprop="position" content="1" />
        </li>
        <span class="sep">/</span>
      
      
        <li class="current">Buscador general de palabras clave</li>
      <?php 
echo "Tu dirección IP es: {$_SERVER['REMOTE_ADDR']}";
echo "El nombre del servidor es: {$_SERVER['SERVER_NAME']}<hr>"; 
echo "Vienes procedente de la página: {$_SERVER['HTTP_REFERER']}<hr>"; 
echo "Te has conectado usando el puerto: {$_SERVER['REMOTE_PORT']}<hr>"; 
echo "El agente de usuario de tu navegador es: {$_SERVER['HTTP_USER_AGENT']}";
?>
    
  </ol>
</nav>

  


<div id="main" role="main">
  

  <div class="archive">
    
      <h1 id="page-title" class="page__title">Buscador general de palabras clave</h1>
    

    
<input type="text" id="search" class="search-input" tabindex="-1" placeholder="Introduce tu palabra clave aquí..." />
        <div id="results" class="results"></div></div>
</div>

    </div>

    

    <div class="page__footer">
      <footer>
        <!-- start custom footer snippets -->

<!-- end custom footer snippets -->
        <div class="page__footer-follow">
  <ul class="social-icons">
    

    

    <li><a href="/feed.xml"><i class="fas fa-fw fa-rss-square" aria-hidden="true"></i> Feed</a></li>
  </ul>
</div>

<div class="page__footer-copyright">&copy; 2020 S4vitar</div>

      </footer>
    </div>

    
  <script src="/assets/js/main.min.js"></script>
  <script data-search-pseudo-elements defer src="https://use.fontawesome.com/releases/v5.7.1/js/all.js" integrity="sha384-eVEQC9zshBn0rFj4+TU78eNA19HMNigMviK/PU/FFjLXqa/GKPgX58rvt5Z8PLs7" crossorigin="anonymous"></script>




<script src="/assets/js/lunr/lunr.min.js"></script>
<script src="/assets/js/lunr/lunr-store.js"></script>
<script src="/assets/js/lunr/lunr-en.js"></script>





  </body>
</html>
