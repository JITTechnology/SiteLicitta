<!DOCTYPE html>
<html lang="pt-br">

<head>  
<title>
    <?php
    if(is_front_page()) {
        echo '';
    }else if(get_the_title() != ''){ 
        echo get_the_title()." | "; 
    }else{
        echo 'Pagina não encontrada!';
    }
    ?>Licitta | Sistema especializado na busca e gestão de licitações
  </title>
  <meta name="copyright" content="OK Intercâmbio Viagens e turismo">
  <meta name="author" content="OK Intercâmbio Viagens e turismo">
  <meta name="publisher" content="OK Intercâmbio Viagens e turismo">
  <meta name="description" content="<?= (get_the_excerpt()) ? get_the_excerpt() : 'O Licitta é um sistema especializado na busca e gestão de licitações, facilitando a participação das empresas em processos licitatórios e a emissão de propostas.'; ?>" />


  <?php wp_head(); ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/img/svgs/logo.svg" />
  <meta name="facebook-domain-verification" content="vyg6blun4f87yvzgtpj9d3ue8vi7mw" />
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16840301627"></script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-TQQWZN8K');</script>
  <!-- End Google Tag Manager -->

  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-16840301627');
  </script>
  <noscript>
    <img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1129816030395640&ev=PageView&noscript=1" />
  </noscript>
</head>
  <!-- End Google Tag Manager (noscript) -->
  <!-- Modal -->
  <header id="header" class="d-flex flex-column fixed-top bg-black">
    <div class="d-none d-lg-none bg-primary align-items-center" style="height: 3em;">
      <div class="container">
        <div class="row justify-content-end">
          <div class="col-sm-3"></div>
          <div class="col-sm-6">
            <!--<div class="search-container">
              <input type="text" placeholder="Pesquisar por destinos; promoções; programas." onblur="hideSearch(false)"
                class="search-input" onkeyup="searchFunction(this.value, false)">
              <span class="search-icon">
                <i class="fa fa-search"></i>
              </span>
              <div class="dropdown-content" id="dropdown-search"></div>
            </div>-->
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-2 align-self-center">
            <div class="align-self-center">
              <a href="https://www.instagram.com/okintercambio/" target="_blank" class="align-self-center">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/instagram.svg" alt="Icon Instagram" title="Icone Instagram" />
              </a>
              <a href="https://api.whatsapp.com/send?phone=5585992442233" target="_blank" class="align-self-center">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/whatsapp.svg" alt="Icon whatsapp" title="Icone whatsapp" />
              </a>
              <a href="https://pt-br.facebook.com/okintercambio/" target="_blank" class="align-self-center">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/facebook.svg" alt="Icon facebook" title="Icone Facebook"/>
              </a>
              <a href="https://www.youtube.com/OKIntercambio" target="_blank" class="align-self-center">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/youtube.svg" alt="Icon youtube" title="Icone youtube" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav class="container d-flex justify-content-between navbar navbar-expand-lg navbar-dark p-0">
      <div class="container-fluid p-0">
        <a id="logo" class="ps-3 pt-2 d-flex align-items-center navbar-brand m-0 w-25" href="<?=home_url()?>">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/logo.svg" alt="Icon ok" style="width: 10em;" title="Icone OK intercâmbio" />
        </a>
        <a class="cl-white px-3 d-sm-flex d-md-none" href="https://app.licitta.com.br" target="_blank">
          Login
        </a>
        <!--<button class="navbar-toggler border-0 d-flex d-none pe-4 justify-content-end" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation" id="toggle-button">
          <span class="navbar-toggler-icon d-flex align-items-center justify-content-center">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/menu.svg" alt="Icon menu" title="Icone Menu" />
          </span>
        </button>-->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="d-flex w-100 justify-content-end navbar-nav">
            <li class="nav-item">
              <a class="text-white nav-link px-4" href="https://app.licitta.com.br" >Login</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>