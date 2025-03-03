<!DOCTYPE html>
<html lang="pt-br">

<head>  
<title>
    <?php
    if($title){
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
  <meta name="description" content="<?= (!empty($description)) ? $description : (get_the_excerpt() ? get_the_excerpt() : 'A OK Intercâmbio é uma agência especializada em estudos no exterior. Atuante no mercado internacional de educação, a empresa desenvolve programas personalizados, com intuito de viabilizar um aprendizado de excelência ao intercambista.'); ?>" />

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

<body><!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TQQWZN8K"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!-- Modal -->
  <header id="header" class="d-flex flex-column fixed-top bg-white">
    <div class="d-none d-lg-flex bg-primary align-items-center" style="height: 3em;">
        <div class="container">
          <div class="row justify-content-end">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
              <!--<div class="search-container">
                <input type="text" placeholder="Pesquisar por destinos; promoções; programas." onblur="hideSearch(false)" class="search-input" onkeyup="searchFunction(this.value, false)">
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
                  <img data-src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/instagram.svg" alt="Icon Instagram" title="Icone Instagram" src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/instagram.svg" class=" ls-is-cached lazyloaded"><noscript><img src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/instagram.svg" alt="Icon Instagram" title="Icone Instagram" /></noscript>
                </a>
                <a href="https://api.whatsapp.com/send?phone=5585992442233" target="_blank" class="align-self-center">
                  <img data-src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/whatsapp.svg" alt="Icon whatsapp" title="Icone whatsapp" src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/whatsapp.svg" class=" ls-is-cached lazyloaded"><noscript><img src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/whatsapp.svg" alt="Icon whatsapp" title="Icone whatsapp" /></noscript>
                </a>
                <a href="https://pt-br.facebook.com/okintercambio/" target="_blank" class="align-self-center">
                  <img data-src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/facebook.svg" alt="Icon facebook" title="Icone Facebook" src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/facebook.svg" class=" ls-is-cached lazyloaded"><noscript><img src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/facebook.svg" alt="Icon facebook" title="Icone Facebook"/></noscript>
                </a>
                <a href="https://www.youtube.com/OKIntercambio" target="_blank" class="align-self-center">
                  <img data-src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/youtube.svg" alt="Icon youtube" title="Icone youtube" src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/youtube.svg" class=" ls-is-cached lazyloaded"><noscript><img src="https://okintercambio.com.br/wp-content/themes/Site%20OK/assets/img/svgs/youtube.svg" alt="Icon youtube" title="Icone youtube" /></noscript>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    <nav class="container d-flex justify-content-between navbar navbar-expand-lg navbar-dark p-0">
      <div class="container-fluid p-0">
        <a id="logo" class="ps-3 pt-2 d-flex justify-content-center align-items-center navbar-brand m-0 w-25" href="<?=home_url()?>/blog">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/blog-ok.svg" alt="Icon ok" title="Icone OK intercâmbio" />
        </a>
        <button class="navbar-toggler border-0 d-flex pe-4 justify-content-end" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation" id="toggle-button">
          <span class="navbar-toggler-icon d-flex align-items-center justify-content-center">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/menu.svg" alt="Icon menu" title="Icone Menu" />
          </span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="d-flex w-100 justify-content-between navbar-nav">
            <li class="nav-item d-md-none d-lg-none">
              <div class="search-container px-4 py-0">
                <input type="text" placeholder="Pesquisar por destinos; promoções; programas." onblur="hideSearch(true)"
                  class="search-input" onkeyup="searchFunction(this.value, true)">
                <span class="search-icon" style="right: 22px">
                  <i class="fa fa-search"></i>
                </span>
                <div class="dropdown-content" id="dropdown-search-mobile"></div>
              </div>
            </li>
            <li class="nav-item dropdown">
                <a style="color: black" class="nav-link dropdown d-flex align-items-center px-4" href="<?=home_url()?>/sobre/"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    ASSUNTOS

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z"
                            fill="black" />
                    </svg>
                </a>
                <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                    <div class="dropdown-content">
                        <label for="#lista-em-alta"
                            style="padding-left: calc(3rem + 10px); color: var(--primary-color)">Em alta</label>
                        <ul id="lista-em-alta">
                            <?php
                                $description = 'em-alta';
                                $category = get_term_by('description', $description, 'category');
                                $categories = get_categories();
                                
                                foreach ($categories as $cat) {
                                    if ($cat->description == $description) {
                                        echo '<li>';
                                        echo '<a class="dropdown-item px-5" href="' . esc_url( get_category_link( $cat->term_id ) ) . '">' . esc_html( $cat->name ) . '</a>';
                                        echo '</li>';
                                    }
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a style="color: black" class="nav-link dropdown d-flex align-items-center px-4"
                    href="<?=home_url()?>/destinos/" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    DESTINOS

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z"
                            fill="black" />
                    </svg>
                </a>

                <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                    <div class="dropdown-content">
                        <ul>
                            <li><a class="dropdown-item px-5"
                                    href="<?=home_url()?>/blog/tema/australia/">Austrália</a>
                            </li>
                            <li><a class="dropdown-item px-5"
                                    href="<?=home_url()?>/blog/tema/canada/">Canadá</a></li>
                            <li><a class="dropdown-item px-5"
                                    href="<?=home_url()?>/blog/tema/espanha/">Espanha</a></li>
                            <li><a class="dropdown-item px-5"
                                    href="<?=home_url()?>/blog/tema/inglaterra/">Inglaterra</a>
                            </li>
                            <li><a class="dropdown-item px-5"
                                    href="<?=home_url()?>/blog/tema/irlanda/">Irlanda</a></li>
                            <li><a class="dropdown-item px-5"
                                    href="<?=home_url()?>/blog/tema/nova-zelandia/">Nova
                                    Zelândia</a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a style="color: black" class="nav-link dropdown d-flex align-items-center px-4" href="<?=home_url()?>/sobre/"
                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    E-BOOKS

                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M15.8805 9.29L12.0005 13.17L8.12047 9.29C7.73047 8.9 7.10047 8.9 6.71047 9.29C6.32047 9.68 6.32047 10.31 6.71047 10.7L11.3005 15.29C11.6905 15.68 12.3205 15.68 12.7105 15.29L17.3005 10.7C17.6905 10.31 17.6905 9.68 17.3005 9.29C16.9105 8.91 16.2705 8.9 15.8805 9.29Z"
                            fill="black" />
                    </svg>
                </a>
                <div class="dropdown-menu shadow" aria-labelledby="navbarDropdown">
                    <div class="dropdown-content">
                        <ul id="lista-ebooks">
                            <?php
                                $args = array(
                                    'post_type' => 'ebook',
                                    'posts_per_page' => -1, // Pega todos os posts
                                );
                                $query = new WP_Query($args);
                                if ($query->have_posts()) {
                                    while ($query->have_posts()) {
                                        $query->the_post();
                                        echo '
                                        <li>
                                            <a target="_blanc" class="dropdown-item px-5" href="' . get_the_permalink() . '">' . get_the_title() . '</a>
                                        </li>
                                        ';
                                    }
                                    wp_reset_postdata(); // Reseta os dados dos posts
                                } else {
                                    echo 'Em breve...';
                                }
                            ?>
                        </ul>
                    </div>
                </div>
            </li>
          </ul>
        </div>
        <a id="logo" class="ps-3 pt-2 d-flex justify-content-center align-items-center navbar-brand m-0 w-25" href="<?=home_url()?>">
          <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/ok.svg" alt="Icon ok" style="width: 3em;" title="Icone OK intercâmbio" />
        </a>
        <button class="navbar-toggler border-0 d-flex pe-4 justify-content-end" type="button" data-toggle="collapse"
          data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation" id="toggle-button">
          <span class="navbar-toggler-icon d-flex align-items-center justify-content-center">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/menu.svg" alt="Icon menu" title="Icone Menu" />
          </span>
        </button>
      </div>
    </nav>
  </header>

  <!--Modals-->
  <div class="modal fade" id="modalOrcamento" tabindex="-1" aria-labelledby="modalOrcamentoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content bg-gray">
        <div class="modal-header border border-0">
          <span></span>
          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-0">
          <p class="modal-title ps-4 h2" id="modalOrcamentoLabel"> Solicite seu orçamento </p>
          <div class="ps-4">
            <?=do_shortcode( '[contact-form-7 id="4e29c5b" title="Formulário HOME"]');?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal-cotacao" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog rounded-3 modal-dialog-centered">
      <div class="modal-content rounded-3 rounded-top">
        <div class="modal-header">
          <div>
            <button type="button" class="btn-close shadow-none" data-dismiss="modal" aria-label="Close"></button>
            <h2 class="cor-empresa mt-3 mb-4" style="line-height: 35px;">Cotação de passagem aérea </h3>
          </div>
        </div>
        <div class="modal-body">
          <?= do_shortcode('[contact-form-7 id="223" title="Formulário de cotação de passagem"]');?>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal-contact" data-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog rounded-3 modal-dialog-centered">
      <div class="modal-content rounded-3 rounded-top">
        <div class="modal-header">
          <div>
            <button type="button" class="btn-close shadow-none" data-dismiss="modal" aria-label="Close"></button>
            <h2 class="cor-empresa mt-3 mb-4" style="line-height: 35px;">Falar com o consultor </h3>
          </div>
        </div>
        <div class="modal-body">
          <?= do_shortcode('[contact-form-7 id="221" title="Formulário de contato"]');?>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="modal-promocao" data-keyboard="false" tabindex="-1"
      aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog rounded-3 modal-dialog-centered">
          <div class="modal-content rounded-3 rounded-top">
              <div class="modal-header">
                  <div>
                      <button type="button" class="btn-close shadow-none" data-dismiss="modal"
                          aria-label="Close"></button>
                      <p class="mb-3">Fale diretamente com o time de
                          especialistas e <strong>realize seu sonho no exterior!</strong></p>
                      <p class="mb-3">Um intercâmbio permite a você
                          desenvolver diversas habilidades que vão além de um novo idioma. <strong>Você enriquece sua
                              bagagem cultura e amplia seu ciclo de amizades.</strong></p>

                  </div>
              </div>
              <div class="modal-body">
                  <?= do_shortcode('[contact-form-7 id="13621" title="Formulário de contato"]');?>
              </div>

          </div>
      </div>
  </div>