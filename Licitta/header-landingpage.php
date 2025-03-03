<!DOCTYPE html>
<html lang="pt-br">

<head>  
  <title>
    <?php
    if($title) {
        echo $title;
    }else if(is_front_page()) {
        echo 'Bem vindo';
    }else if(get_the_title() != ''){ 
        echo get_the_title(); 
    }else{
        echo 'Pagina não encontrada!';
    }
    ?> | OK Intercâmbio
  </title>
  <meta name="copyright" content="OK Intercâmbio Viagens e turismo">
  <meta name="author" content="OK Intercâmbio Viagens e turismo">
  <meta name="publisher" content="OK Intercâmbio Viagens e turismo">
  <meta name="description" content="
  <?php
    if($description) {
      echo $description;
    }else if(get_the_excerpt()) {
      echo get_the_excerpt();
    } else{
      echo 'A OK Intercâmbio é uma agência especializada em estudos no exterior. Atuante no mercado internacional de educação, a empresa desenvolve programas personalizados, com intuito de viabilizar um aprendizado de excelência ao intercambista.';
    }?>" />

  <?php wp_head(); ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/img/svgs/ok.svg" />
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
   
<div style="min-height: 2em;padding: 0.5em;background: var(--primary-color); color: white; font-weight: bold" class="text-center">EXPERIÊNCIA COMPROVADA: 10 ANOS REALIZANDO SONHOS!</div>