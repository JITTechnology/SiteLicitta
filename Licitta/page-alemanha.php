<?php get_header(); ?>
<section class="banner">
    <img class="w-100"
        src="<?= get_template_directory_uri(); ?>/assets/img/banners/fundo-intercambio-na-alemanha-ok-intercambio.webp" />
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
            <p>A República Federal da Alemanha está situada no coração da Europa e é um país cosmopolita, democrático, com uma grande tradição e um presente vibrante.</p><p>
            País da Europa Ocidental conta com uma paisagem de florestas, rios, serras e praias do Mar do Norte. Tem mais de 2 milénios de história.</p><p>
            Berlim, a capital, alberga espaços de arte e de vida noturna, a Porta de Brandeburgo e muitos locais relacionados com a Segunda Guerra Mundial. Munique, é conhecida pela Oktoberfest e pelas cervejarias, incluindo a Hofbräuhaus, dó século XVI. Frankfurt, com os seus arranha-céus, alberga o Banco Central. Hoje muitos estudantes estrangeiros procuram o país para viver um experiência de estudo e até mesmo uma oportunidade no âmbito profissional.</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <h2 class="text-center mb-3">Vistos</h2>
            <p>Turismo e Intercâmbio de Curta duração: brasileiros não necessitam de visto para viajar para a Alemanha para permanência de até 90 dias, ou seja, para quem vai de férias ou deseja fazer um intercâmbio de até 3 meses não precisa aplicar para visto. Já para quem busca uma experiência de estudo com permissão de trabalho no país é preciso aplicar para um visto.</p>
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
                        <p class="text-white px-4 fw-light"> Berlim</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/territory.svg" alt="Icone de Mapa" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Território</h6>
                        <p class="text-white px-4 fw-light"> 357.588 km²</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/plug.svg" alt="Icone de tomada" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Voltagem</h6>
                        <p class="text-white px-4 fw-light"> 230 V</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/world.svg" alt="Icone de mundo" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Língua ficial</h6>
                        <p class="text-white px-4 fw-light"> Alemão</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/cash.svg" alt="Icone de mundo" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Moeda</h6>
                        <p class="text-white px-4 fw-light"> Euro</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/clock.svg" alt="Icone de mundo" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Fuso Horário</h6>
                        <p class="text-white px-4 fw-light"> GMT +2</p>
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
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/alemanha/cidade-berlin-alemanha-ok-intercambio.webp"
                                alt="Cidade Berlin Alemanha ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Berlin
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/alemanha/cidade-frankfurt-alemanha-ok-intercambio.webp"
                                alt="Cidade Frankfurt Alemanha ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Frankfurt
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/alemanha/cidade-munich-alemanha-ok-intercambio.webp"
                                alt="Cidade Munich Alemanha ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Munich
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
                    <a class="shadow position-relative overflow-hidden rounded-3" href="<?=home_url()?>/programas/#universidade-no-exterior">
                        <img class="w-100 rounded-3"
                            src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-universidade-no-exterior-ok-intercambio.webp"
                            alt="Programa Universidade no Exterior" />
                        <h3
                            class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                            Universidade no exterior
                        </h3>
                    </a>
                </div>
            </div>
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