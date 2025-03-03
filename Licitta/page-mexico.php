<?php get_header(); ?>
<section class="banner">
    <img class="w-100"
        src="<?= get_template_directory_uri(); ?>/assets/img/banners/fundo-intercambio-no-mexico-ok-intercambio.webp" />
    <div class="filtro d-flex align-items-center">
        <div class="container mt-5">
            <h1 class="text-center text-sm-start"><?=get_the_title()?></h1>
        </div>
    </div>
</section>
<div class="container py-5" id="sobre">
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <h2 class="text-center mb-3">Sobre</h2>
            <p>Com cerca de 118 milhões de habitantes, o país concentra o maior número de falantes da língua espanhola no mundo, o que torna a rota atraente para intercambistas que buscam aprender o idioma e mergulhar na cultura local. O destino é considerado mais barato, comparado à Espanha, e o turismo também é outro aspecto que chama a atenção do estudante e viajantes brasileiros.</p><p>

O México é um país de clima tropical, ou seja, um “bônus” para os brasileiros, e reserva roteiros encantadores, ricos em cultura, histórias e belezas naturais, que podem ser explorados nos horários livres.</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <h2 class="text-center mb-3"> Vistos</h2>
            <p>Os brasileiros que viajarem para o México por turismo, negócios ou para estudo (por menos de seis meses) não necessitam de visto. Brasileiros precisam, sim, de visto para períodos superiores a 180 dias.</p>
        </div>
    </div>
</div>
<div class="py-5 bg-purple" id="life-cost">
    <h2 class="text-center cl-white">Informações Úteis</h2>
    <div class="container">
        <div class="row d-sm-flex">
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/map-pointer.svg"
                        alt="Icone de Localização" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Capital</h6>
                        <p class="text-white px-4 fw-light"> Cidade do México</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/territory.svg" alt="Icone de Mapa" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Território</h6>
                        <p class="text-white px-4 fw-light">1.973.000 km²</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/plug.svg" alt="Icone de tomada" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Voltagem</h6>
                        <p class="text-white px-4 fw-light"> 110 V</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/world.svg" alt="Icone de mundo" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Língua ficial</h6>
                        <p class="text-white px-4 fw-light"> Espanhol</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/cash.svg" alt="Icone de mundo" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Moeda</h6>
                        <p class="text-white px-4 fw-light"> Peso Mexicano</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/clock.svg" alt="Icone de mundo" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Fuso Horário</h6>
                        <p class="text-white px-4 fw-light"> GMT -5</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<section id="cities" class="bg-yellow">
    <div class="container py-3">
        <h2 class="text-center text-xl-center cl-white mt-3">Cidades Ofertadas</h2>
        <div class="swiper swiper-depoimentos mt-3">
            <div class="swiper-wrapper pt-5">
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/mexico/cidade-cancun-mexico-ok-intercambio.webp"
                                alt="Cidade Cancun mexico ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Cancun
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/mexico/cidade-cidade-do-mexico-mexico-ok-intercambio.webp"
                                alt="Cidade Cidade do México mexico ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Cidade do México
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/mexico/cidade-playa-del-carmen-mexico-ok-intercambio.webp"
                                alt="Cidade Playa del Carmen mexico ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Playa del Carmen
                            </h3>
                        </a>
                    </div>
                </div>
            </div>
            <div class="gradiente"></div>
            <div class="swiper-pagination mt-4"></div>
        </div>
    </div>
</section>
<section class="bg-white">
    <div class="container py-5">
        <h2 class="servicos text-center">Programas disponíveis</h2>
        <div class="row justify-content-center px-14">
            <div class="col-sm-6 col-md-4">
                <div class="post-frame d-flex mt-4 justify-content-center">
                    <a class="shadow position-relative overflow-hidden rounded-3" href="<?=home_url()?>/programas/#curso-de-idiomas">
                        <img class="w-100 rounded-3"
                            src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-curso-de-idiomas-ok-intercambio.webp"
                            alt="Programa curso de Idiomas" />
                        <h3
                            class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                            Curso de idiomas
                        </h3>
                    </a>
                </div>
            </div>
        </div>
</section>
<section class="bg-purple">
    <div class="container py-5">
        <h2 class="text-center text-xl-center servicos cl-white mb-3">Vídeo</h2>
        <div class="container-youtube">
            <iframe class="w-100 youtube"  height="400" src="https://www.youtube.com/embed/ZXXxwTQf8CE?controls=0"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>
    </div>
</section>
<?php

includeFile('components/depoimentos.php', 
    array()
); 

?>
<?php get_footer(); ?>