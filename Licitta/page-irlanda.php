<?php get_header(); ?>
<section class="banner">
    <img class="w-100"
        src="<?= get_template_directory_uri(); ?>/assets/img/banners/fundo-intercambio-na-irlanda-ok-intercambio.webp" />
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
            <p>A República da Irlanda ocupa a maior parte da ilha da Irlanda, perto da costa da Inglaterra e do País de Gales. Sua capital é Dublin. Pubs, Leprechauns, St. Patrick’s Day, lendas e paisagens fascinantes fazem da Irlanda um país único e encantador. </p><p>

O país é cheio de história e diversão, com uma população jovem e alegre, tornou-se um dos destinos mais procurados pelos intercambistas de todo o mundo. A Irlanda é ainda berço de escritores como Oscar Wilde, Samuel Back, James Joyce e local de origem da cerveja Guinness, o Livro de Kells, do século 9, e outros manuscritos ilustrados estão em exposição na biblioteca da Universidade de Trinity, em Dublin. </p><p>

Apelidado de "Ilha Esmeralda" por sua paisagem exuberante, o país está repleto de castelos, como a construção medieval de Cahir, Carlow Castle, Rock Catle, Kilkeny Castle, entre outros.</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <h2 class="text-center mb-3"> Estudar e trabalhar</h2>
            <p>O intercambista tem a possibilidade de estudar e trabalhar, na Irlanda, por até oito meses. Com o visto (STAMP 2) é possível passar seis meses em aula e dois meses em férias. Logo, o curso escolhido deverá ter duração de até 25 semanas.</p><p>

O trabalho pode ser realizado em meio período durante as aulas e integral nas férias, que deverão estar nos meses de maio, junho, julho e agosto e entre os dias 15 de dezembro a 15 de janeiro. A hora de trabalho gira em torno de 11,20€.</p><p>

Para quem acaba de chegar ao país as oportunidades são para áreas que não exigem formação profissional, como garçom, cleaner, atendente de loja, babá delivery, assistente de cozinha, etc. Também é importante lembrar que a Irlanda tem dezenas de multinacionais instaladas no país, e de acordo com o nível de inglês e formação profissional existem muitas oportunidades para os estrangeiros.</p>
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
                        <p class="text-white px-4 fw-light"> Dublin</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/territory.svg" alt="Icone de Mapa" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Território</h6>
                        <p class="text-white px-4 fw-light"> 70.274 km²</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/plug.svg" alt="Icone de tomada" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Voltagem</h6>
                        <p class="text-white px-4 fw-light"> 240 V</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/world.svg" alt="Icone de mundo" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Língua ficial</h6>
                        <p class="text-white px-4 fw-light"> Inglês e Gaélico</p>
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
                        <p class="text-white px-4 fw-light"> GMT +1</p>
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
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/irlanda/cidade-bray-irlanda-ok-intercambio.webp"
                                alt="Cidade Bray irlanda ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Bray
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/irlanda/cidade-cork-irlanda-ok-intercambio.webp"
                                alt="Cidade Cork irlanda ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Cork
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/irlanda/cidade-dublin-irlanda-ok-intercambio.webp"
                                alt="Cidade Dublin irlanda ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Dublin
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/irlanda/cidade-galway-irlanda-ok-intercambio.webp"
                                alt="Cidade Galway irlanda ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Galway
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/irlanda/cidade-limerick-irlanda-ok-intercambio.webp"
                                alt="Cidade Limerick irlanda ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Limerick
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/irlanda/cidade-waterford-irlanda-ok-intercambio.webp"
                                alt="Cidade Waterford irlanda ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Waterford
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
                    <a class="shadow position-relative overflow-hidden rounded-3" href="<?=home_url()?>/programas/#estudo-e-trabalho">
                        <img class="w-100 rounded-3"
                            src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-estudo-e-trabalho-ok-intercambio.webp"
                            alt="Programa Estudo e Trabalho" />
                        <h3
                            class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                            Estudo e trabalho
                        </h3>
                    </a>
                </div>
            </div>
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
                    <a class="shadow position-relative overflow-hidden rounded-3" href="<?=home_url()?>/programas/#high-school">
                        <img class="w-100 rounded-3"
                            src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-high-school-ok-intercambio.webp"
                            alt="Programa High School" />
                        <h3
                            class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                            High School
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
            <div class="col-sm-6 col-md-4">
                <div class="post-frame d-flex mt-4 justify-content-center">
                    <a class="shadow position-relative overflow-hidden rounded-3" href="<?=home_url()?>/programas/#bussiness-english">
                        <img class="w-100 rounded-3"
                            src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-bussiness-english-ok-intercambio.webp"
                            alt="Programa Bussiness English" />
                        <h3
                            class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                            Bussiness English
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
            <iframe class="w-100 youtube"  height="400" src="https://www.youtube.com/embed/pjvpOqhfLbo?controls=0"
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