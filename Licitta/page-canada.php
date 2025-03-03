<?php get_header(); ?>
<section class="banner">
    <img class="w-100"
        src="<?= get_template_directory_uri(); ?>/assets/img/banners/fundo-intercambio-no-canada-ok-intercambio.webp" />
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
            <p>Considerado um país com qualidade de vida e um bom custo benefício para se fazer intercâmbio, e também para turistar. O Canadá fica na América do Norte e sua capital é a cidade de Ottawa. Colonizado pela Inglaterra e França,<strong>o país possui dois idiomas oficiais: o inglês e o francês</strong> (sendo este falado na província de Quebec). Sua moeda é o dólar canadense. Com cerca de 35 milhões de habitantes, os canadenses são reconhecidamente gentis com os imigrantes.</p>
            <p>O <strong>Canadá</strong> é um país que exige o visto para brasileiros entrar no país e precisa ser solicitado antes mesmo de embarcar para o destino.</p>
            <p>O <strong>programa de intercâmbio</strong> de estudo de <strong>língua inglesa</strong> ou <strong>francesa</strong> no Canadá de curta ou longa duração que pode durar entre 2 semanas a 24 semanas respectivamente, é preciso solicitar o Visto de Turismo ou Visto de Residente Temporário.</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <h2 class="text-center mb-3"> Estudar e trabalhar</h2>
            <p>A procura por modalidades de intercâmbio que combinam estudo e trabalho no Canadá tem aumentado bastante. O valor do dólar canadense, mais barato do que o americano, tem sido também um grande atrativo, custo-benefício é um dos melhores se comparado a outros diversos países.</p>
            <p>O College hoje é uma das portas de entradas para especialização profissional, por quem busca a chance de morar e trabalhar legalmente no país e ainda se candidatar ao Entry Express (Programa do Governo do Canadá que visa atrair mais de 600 mil novos emigrantes que queiram residir definitivamente no País.)</p>
            <p>O programa de College no Canadá é uma formação mais focada na prática e na solução de problemas que condizem à realidade do mercado de trabalho Canadense.</p>
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
                        <p class="text-white px-4 fw-light">Ottawa</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/territory.svg" alt="Icone de Mapa" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Território</h6>
                        <p class="text-white px-4 fw-light">9.985.000 km²</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/plug.svg" alt="Icone de tomada" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Voltagem</h6>
                        <p class="text-white px-4 fw-light">110/120 V</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/world.svg" alt="Icone de mundo" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Língua ficial</h6>
                        <p class="text-white px-4 fw-light">Inglês & Francês</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/cash.svg" alt="Icone de mundo" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Moeda</h6>
                        <p class="text-white px-4 fw-light">Dólar Canadense</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="container d-flex flex-column flex-lg-row align-items-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/clock.svg" alt="Icone de mundo" />
                    <div class="text-lg-start text-center">
                        <h6 class="text-white px-4">Fuso Horário</h6>
                        <p class="text-white px-4 fw-light"> GMT -4</p>
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
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/canada/cidade-calgary-canada-ok-intercambio.webp"
                                alt="Cidade calgary canada ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Calgary
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/canada/cidade-ottawa-canada-ok-intercambio.webp"
                                alt="Cidade ottawa canada ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Ottawa
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/canada/cidade-quebec-canada-ok-intercambio.webp"
                                alt="Cidade Quebec canada ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Quebec
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/canada/cidade-toronto-canada-ok-intercambio.webp"
                                alt="Cidade Toronto canada ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Toronto
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/canada/cidade-vancouver-canada-ok-intercambio.webp"
                                alt="Cidade vancouver canada ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Vancouver
                            </h3>
                        </a>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="post-frame d-flex justify-content-center pt-3">
                        <a class="card border-0 shadow position-relative">
                            <img class="rounded-3" style="height: 20em;"
                                src="<?= get_template_directory_uri(); ?>/assets/img/cidades/canada/cidade-victoria-canada-ok-intercambio.webp"
                                alt="Cidade Victoria canada ok intercambio" />
                            <h3
                                class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                                Victoria
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
                <div class="post-frame d-flex mt-4">
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
                <div class="post-frame d-flex mt-4">
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
                <div class="post-frame d-flex mt-4">
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
                <div class="post-frame d-flex mt-4">
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
                <div class="post-frame d-flex mt-4">
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
            <div class="col-sm-6 col-md-4">
                <div class="post-frame d-flex mt-4">
                    <a class="shadow position-relative overflow-hidden rounded-3" href="<?=home_url()?>/programas/#intercambio-em-familia">
                        <img class="w-100 rounded-3"
                            src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-intercambio-em-familia-ok-intercambio.webp"
                            alt="Programa Intercâmbio em família" />
                        <h3
                            class="card-text-background position-absolute bottom-0 w-100 rounded-3 py-2 px-2 mb-0 text-center cl-white">
                            Intercâmbio em família
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
            <iframe class="w-100 youtube"  height="400" src="https://www.youtube.com/embed/U5IBusukias?controls=0"
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