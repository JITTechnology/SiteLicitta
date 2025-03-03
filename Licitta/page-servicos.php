<?php get_header(); ?>
<main>
  <section class="banner">
    <img class="w-100"
      src="<?= get_template_directory_uri(); ?>/assets/img/banners/banner-servicos-ok-intercambio.webp" />
    <div class="filtro d-flex align-items-center">
      <div class="container mt-5">
        <h1 class="text-center text-sm-start">
          <?=get_the_title()?>
        </h1>
      </div>
    </div>
  </section>
  <div class="container">
    <div class="row my-5">
      <div class="col-12 col-md-6 mb-4">
        <h2 class="orange linha1 mb-4">Aproveite sua viagem com tranquilidade</h2>
        <p class="somosTime">Trabalhamos com serviços e seguros personalizados para
          suas necessidades e oferecemos ao viajante todo apoio
          necessário com central de atendimento online para atendê-lo.</p>
      </div>
      <div class="col-12 col-md-6 text-center">
        <iframe class="w-100 youtube" height="315" src="https://www.youtube.com/embed/ZXXxwTQf8CE?controls=0"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>

      </div>
    </div>
  </div>
  <section class="bg-yellow">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="container">
            <h3 class="py-4 cl-white">Passagens Aéreas</h3>
            <img class="w-100 rounded-3"
              src="<?= get_template_directory_uri(); ?>/assets/img/banners/servicos-passagem-aerea-ok-intercambio.webp"
              alt="Servico passagem 1">
            <div class="my-4">
              <p class="my-2">Várias opções de cias aéreas para diversos destinos. Estamos preparados para te ajudar
                a escolher as melhores opções. A OK Intercâmbio garante aos clientes suporte quanto à reserva de
                passagens
                aéreas.</p>
              <span class="w-100 d-flex justify-content-center">
                <a href="#modal-cotacao" data-toggle="modal" data-target="#modal-contact"
                  class="btn btn-orcamento">Realizar cotação</a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="container">
            <h3 class="py-4 cl-white">Vistos</h3>
            <img class="w-100 rounded-3"
              src="<?= get_template_directory_uri(); ?>/assets/img/banners/servicos-vistos-ok-intercambio.webp"
              alt="Servico passagem 1">
            <div class="my-4">
              <p class="mb-2">Cada país tem as suas regras
                próprias para receber viajantes. Oferecemos consultoria com nossos parceiros especializados em
                vistos para assegurar a entrada no país.</p>
              <span class="w-100 d-flex justify-content-center">
                <a href="#modal-cotacao" data-toggle="modal" data-target="#modal-contact"
                  class="btn btn-orcamento">Falar consultor</a>
              </span>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="bg-purple">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="container">
            <h3 class="py-4 cl-white">Hospedagens</h3>
            <img class="w-100 rounded-3"
              src="<?= get_template_directory_uri(); ?>/assets/img/banners/servicos-hospedagem-ok-intercambio.webp"
              alt="Servico passagem 1">
            <div class="my-4">
              <p class="mb-2 cl-white">São diversas opções de estadias a
                sua escolha para diferentes idades e propósitos, para cada perfil de intercambista disponibilizamos
                um estilo de hospedagem.</p>
              <div class="row mb-5 mt-5">
                <div class="col-6 col-lg-3 text-center text-xl-center">
                  <img src="<?= get_template_directory_uri(  );?>/assets/img/svgs/residencia-estudantil.svg">
                  <p class="text-center cl-white mt-4">Residência</p>
                  <p class="text-center cl-white mt-1">estudantil</p>
                </div>
                <div class="col-6 col-lg-3 text-center text-xl-center">
                  <img src="<?= get_template_directory_uri(  );?>/assets/img/svgs/host-family.svg">
                  <p class="text-center cl-white mt-4">Host Family</p>
                </div>
                <div class="col-6 col-lg-3 text-center text-xl-center">
                  <img src="<?= get_template_directory_uri(  );?>/assets/img/svgs/hostel.svg">
                  <p class="text-center cl-white mt-4">Hostel</p>
                </div>
                <div class="col-6 col-lg-3 text-center text-xl-center">
                  <img src="<?= get_template_directory_uri(  );?>/assets/img/svgs/hotel.svg">
                  <p class="text-center cl-white mt-4">Host</p>
                </div>
              </div>
              <span class="w-100 d-flex justify-content-center">
                <a href="#modal-cotacao" data-toggle="modal" data-target="#modal-contact"
                  class="btn btn-orcamento">Falar consultor</a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="container">
            <h3 class="py-4 cl-white">Travel Card</h3>
            <img class="w-100 rounded-3"
              src="<?= get_template_directory_uri(); ?>/assets/img/banners/servicos-travel-card-ok-intercambio.webp"
              alt="Servico passagem 1">
            <div class="my-4">
              <p class="my-2 cl-white">Uma boa opção para quem não deseja
                levar dinheiro em mãos. É muito importante garantir toda segurança na viagem de nossos clientes.
                Sempre aconselhamos a utilização de um cartão moeda.</p>
              <div class="row mb-5 mt-5">
                <div class="col-6 col-lg-3 text-center text-xl-center">
                  <img src="<?= get_template_directory_uri(  );?>/assets/img/svgs/padlock.svg">
                  <p class="text-center cl-white mt-4">Proteção por</p>
                  <p class="text-center cl-white mt-1">chip e senha</p>
                </div>
                <div class="col-6 col-lg-3 text-center text-xl-center">
                  <img src="<?= get_template_directory_uri(  );?>/assets/img/svgs/programas-mundo.svg">
                  <p class="text-center cl-white mt-4">Assistência</p>
                  <p class="text-center cl-white mt-1">global</p>
                </div>
                <div class="col-6 col-lg-3 text-center text-xl-center">
                  <img src="<?= get_template_directory_uri(  );?>/assets/img/svgs/card-add.svg">
                  <p class="text-center cl-white mt-4">Substituição</p>
                  <p class="text-center cl-white mt-1">gratuita</p>
                </div>
                <div class="col-6 col-lg-3 text-center text-xl-center">
                  <img src="<?= get_template_directory_uri(  );?>/assets/img/svgs/card-block.svg">
                  <p class="text-center cl-white mt-4">Sem vínculo com</p>
                  <p class="text-center cl-white mt-1">a sua conta</p>
                </div>
              </div>
              <span class="w-100 d-flex justify-content-center">
                <a href="#modal-cotacao" data-toggle="modal" data-target="#modal-contact"
                  class="btn btn-orcamento">Realizar cotação</a>
              </span>
            </div>
          </div>
        </div>
      </div>
  </section>
  <section class="bg-yellow">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6">
          <div class="container">
            <h3 class="py-4 cl-white">Translado</h3>
            <img class="w-100 rounded-3"
              src="<?= get_template_directory_uri(); ?>/assets/img/banners/servicos-transfer-ok-intercambio.webp"
              alt="Servico passagem 1">
            <div class="my-4">
              <p class="my-2">Garantimos o suporte terrestre entre aeroporto e local da hospedagem, assumindo a
                responsabilidade de oferecer todo o acompanhamento para garantir conforto para nossos clientes.</p>
              <p class="my-2">Possuimos um completo serviço de transfer, em parceria com empresas especializadas em
                nossos destinos.</p>
              <span class="w-100 d-flex justify-content-center">
                <a href="#modal-cotacao" data-toggle="modal" data-target="#modal-contact"
                  class="btn btn-orcamento">Realizar cotação</a>
              </span>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6">
          <div class="container">
            <h3 class="py-4 cl-white">Seguro</h3>
            <img class="w-100 rounded-3"
              src="<?= get_template_directory_uri(); ?>/assets/img/banners/servicos-seguro-ok-intercambio.webp"
              alt="Servico passagem 1">
            <div class="my-4">
              <p class="mb-2">Garantir a tranquilidade da viagem com um seguro internacional é muito importante.
                Oferecemos suporte com diversas empresas especializadas em nossos destinos.</p>
              <p class="mb-2">Sabemos que imprevistos podem acontecer, por isso estar amparado por uma assistência
                médica faz toda a diferença. </p>
              <span class="w-100 d-flex justify-content-center">
                <a href="#modal-cotacao" data-toggle="modal" data-target="#modal-contact"
                  class="btn btn-orcamento">Falar consultor</a>
              </span>
            </div>
          </div>
        </div>
      </div>
  </section>
  </div>

  <?php
  includeFile('components/porqueok.php', 
      array()
  ); 
?>

  <section id="home-destinos">
    <div class="text-center py-5 bg-yellow">
      <h2 class="cl-white">Nossos destinos</h2>
      <div class="container mt-4">
        <div class="row" id="destinos">
          <div class="col-6 col-lg-4 mb-4"> <a href="<?=home_url()?>/destino/australia/" class="card border-0 shadow position-relative">
              <img class="rounded-3"
                src="<?= get_template_directory_uri(); ?>/assets/img/destinos/destino-australia-ok-intercambio.webp"
                alt="Destino Austrália">
              <h3
                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                Austrália</h3>
            </a>
          </div>
          <div class="col-6 col-lg-4 mb-4"> <a href="<?=home_url()?>/destino/canada/" class="card border-0 shadow position-relative">
              <img class="rounded-3"
                src="<?= get_template_directory_uri(); ?>/assets/img/destinos/destino-canada-ok-intercambio.webp"
                alt="Destino Canadá">
              <h3
                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                Canadá</h3>
            </a>
          </div>
          <div class="col-6 col-lg-4 mb-4"> <a href="<?=home_url()?>/destino/espanha/" class="card border-0 shadow position-relative">
              <img class="rounded-3"
                src="<?= get_template_directory_uri(); ?>/assets/img/destinos/destino-espanha-ok-intercambio.webp"
                alt="Destino Espanha">
              <h3
                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                Espanha</h3>
            </a>
          </div>
          <div class="col-6 col-lg-4 mb-4"> <a href="<?=home_url()?>/destino/inglaterra/"
              class="card border-0 shadow position-relative"> <img class="rounded-3"
                src="<?= get_template_directory_uri(); ?>/assets/img/destinos/destino-inglaterra-ok-intercambio.webp"
                alt="Destino Inglaterra">
              <h3
                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                Inglaterra</h3>
            </a>
          </div>
          <div class="col-6 col-lg-4 mb-4"> <a href="<?=home_url()?>/destino/irlanda/" class="card border-0 shadow position-relative">
              <img class="rounded-3"
                src="<?= get_template_directory_uri(); ?>/assets/img/destinos/destino-irlanda-ok-intercambio.webp"
                alt="Destino Irlanda">
              <h3
                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                Irlanda</h3>
            </a>
          </div>
          <div class="col-6 col-lg-4 mb-4"> <a href="<?=home_url()?>/destino/nova-zelandia/"
              class="card border-0 shadow position-relative"> <img class="rounded-3"
                src="<?= get_template_directory_uri(); ?>/assets/img/destinos/destino-nova-zelandia-ok-intercambio.webp"
                alt="Destino Nova Zelândia">
              <h3
                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                Nova Zelândia</h3>
            </a>
          </div>
        </div>
      </div> <a href="<?=home_url()?>/destinos/" class="w-100 d-flex justify-content-center"> <button type="button"
          class="mt-3 fw-bold text-center btn-orcamento"> Ver mais </button> </a>
    </div>
  </section>
  <?php
    includeFile('components/depoimentos.php', 
        array()
    ); 
?>
</main>

<?php get_footer(); ?>