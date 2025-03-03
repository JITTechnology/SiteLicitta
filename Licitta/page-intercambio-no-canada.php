<?php
$title="Viva a experiência de um intercâmbio no Canadá";
$description="Aprenda inglês do zero de forma legal no Canadá! Descubra como estudar no país e receber seu planejamento personalizado. Preencha o formulário agora!";
include('header-landingpage.php');
?>
<style>
    .main {
        background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url("<?= get_template_directory_uri(); ?>/assets/img/banners/landingpage-canada-ok-intercambio.webp");
        background-size: cover;
        background-position: center;
    }
</style>
<section class="main">
    <div class="filter"></div>
    <div class="container" style="padding-top: 3em; padding-bottom: 3em">
        <div class="row">
            <div class="col-sm-12 col-md-7">
                <a href="https://okintercambio.com.br" target="_blank">
                    <img class="w-5em mb-5" alt="Logo da OK Intercâmbio branca" title="Logo da OK Intercâmbio branca"
                        src="<?= get_template_directory_uri(); ?>/assets/img/svgs/logo-ok-intercambio-branco.svg" />
                </a>
                <h1 id="main-text">Intercâmbio<br class="d-none d-lg-block"> na Canadá</h1>
                <p class="p_irlanda"><b>Você pode aprender inglês do zero <br class="d-none d-lg-block">
                        legalmente na Canadá!</b></p>
                <p class="p_irlanda d-none d-md-block">Preencha o formulário para <br class="d-none d-lg-block"> receber
                    seu planejamento</p>
                <div class="row d-none" style="margin-top: 3em">
                    <div class="col-md-4 col-sm-12 pt-3">
                        <img class="svg"
                            src="<?= get_template_directory_uri(); ?>/assets/img/svgs/icone-dolar-amarelo.svg"
                            alt="Icone de Dolar" title="Icone de dolar" />
                        <p class="irlanda_icon_text">Ganhe<br class="d-none d-lg-block"> em Euro</p>
                    </div>
                    <div class="col-md-4 col-sm-12 pt-3">
                        <img class="svg"
                            src="<?= get_template_directory_uri(); ?>/assets/img/svgs/calendario-amarelo.svg"
                            alt="Icone de Calendário" title="Icone de calendario" />
                        <p class="irlanda_icon_text">26 semanas<br class="d-none d-lg-block"> de curso</p>
                    </div>
                    <div class="col-md-4 col-sm-12 pt-3">
                        <img class="svg"
                            src="<?= get_template_directory_uri(); ?>/assets/img/svgs/icone-acordo-amarelo.svg"
                            alt="Icone de Acordo" title="Icone de Acordo" />
                        <p class="irlanda_icon_text">Suporte<br class="d-none d-lg-block"> presencial</p>
                    </div>
                </div>
                <p class="p_irlanda d-block d-md-none my-4" style="float: left">Preencha o formulário para <br> receber
                    seu planejamento</p>
                <a href="#form"><svg class="d-block d-md-none" style="margin-top: 2.5em; margin-left: 1em;" width="30"
                        height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 13L14.5 20.5L22 13" stroke="#FCF3EB" stroke-width="2" stroke-linecap="round" />
                        <circle cx="15" cy="15" r="14" stroke="#FCF3EB" stroke-width="2" />
                    </svg>
                </a>
            </div>
            <div class="col-sm-12 col-md-5 modal-contato" id="form">
                <div style="background: #FCF3EB; padding: 3em;border-radius: 5%;">
                    <h3 style="font-weight: 800;font-family: 'Manrope'; margin-bottom: 1.5em">Dê o primeiro passo para
                        sua carreira internacional</h3>
                    <?= do_shortcode( '[contact-form-7 id="9a66508" title="Landpage Canada"]');    ?>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="container">
    <div class="row">
        <div class="col-lg-6 col-sm-12">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/banners/canada-os-encantos-ok-intercambio.webp"
                 style="width: 100%;">
        </div>
        <div class="col-lg-6 col-sm-12">
            <h2 class="h2_encantos">Os encantos <br class="d-none d-lg-block">do Canadá</h2>
            <p class="texto_irlanda">Montanhas majestosas, auroras boreais, cidades vibrantes e uma cultura acolhedora fazem do Canadá um país único e fascinante. Terra do xarope de bordo, do hóquei no gelo e de paisagens naturais deslumbrantes, o país também é berço de escritores como Margaret Atwood, Alice Munro e Leonard Cohen. Além disso, ícones como as Cataratas do Niágara, o Parque Nacional de Banff e a multicultural Toronto fazem parte da identidade canadense. Para os apreciadores de história e conhecimento, a Biblioteca do Parlamento, em Ottawa, abriga uma das coleções mais impressionantes do país.</p>
            <div class="text-center"><a href="#form"><button class="btn-landpage">Saiba mais sobre a
                        Canadá</button></a></div>
        </div>
    </div>
</section>
<section class="container d-none">
    <div class="row">
        <div class="col-sm-12 d-md-none">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/banners/equipe-ok-intercambio.webp"
                style="width: 100%;">
        </div>
        <div class="col-lg-6 col-sm-12">
            <h2 class="h2_encantos" style="padding-bottom: 0.5em">Trabalhe no exterior<br class="d-none d-lg-block"> e
                ganhe em Euro!</h2>
            <p class="texto_irlanda">Para esse destino, é sempre necessário solicitar o visto previamente ainda no Brasil, pois a natureza do visto muda de acordo com a motivação do intercâmbio, podendo ser um visto para turismo, permitindo o estudo de inglês por até 23 semanas ou visto de estudo para programas que ultrapassem esse período</p>
            <p style="font-family: 'Manrope'; font-style: normal; font-weight: 800;" class="sub-title-irlanda">Hoje, a
                Canadá tem um dos melhores salários da Europa!</p>
            <div class="text-center mb-5">
                <a href="#form"><button class="btn-landpage">Saiba mais sobre visto de trabalho</button></a>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12  d-none d-md-block">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/banners/equipe-ok-intercambio.webp"
                style="width: 100%;">
        </div>
    </div>
</section>
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
<section>
    <?php

includeFile('components/porqueok.php', 
array()
); 
?>
    <div class="text-center pb-5" style="background-color:#7B39E9;">
        <div class="container">
            <h2 class="h2_encantos text-center text-white cidades_ofertadas">Viva essa experiência única!</h2>
            <div class="container-youtube">
                <iframe class="w-100 youtube" width="560" height="315"
                    src="https://www.youtube.com/embed/pjvpOqhfLbo?controls=0" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <?php
includeFile('components/depoimentos.php', 
array('backgroud' => '#FFF')
); 
?>
<section class="planejamento_suporte mt-4">
        <div class="row">
            <div class="col-lg-6 col-sm-12 container p-5" style="align-content: center;">
                <h2 class="h2_encantos" style="color: #FFB131; padding-bottom: 0; padding-top: 0">Do planejamento
                <br
                        class="d-none d-lg-block"> ao suporte completo:</h2>
                <p class="texto_irlanda mb-3" style="color: white; ">Há 10 anos que a OK Intercâmbio transforma sonhos de estudar e trabalhar no exterior em realidade. Voe com a gente! </p>
                <div class="text-center"><a href="#form"><button class="btn-landpage"
                            style="color: white; border-color: white">Quero falar com um consultor!</button></a></div>
            </div>
            <div class="col-lg-6 col-sm-12" style="padding: 0;"><img
                    src="<?= get_template_directory_uri(); ?>/assets/img/banners/sua-carreira-voa-com-ok-intercambio.webp"
                    style="height: 100%; width: 100%" /></div>
        </div>
    </section>
    <div class="modal" tabindex="-1" role="dialog" id="myModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Recebemos suas informações!</h5>
                </div>
                <div class="modal-body">
                    <p>Muito obrigado! Em no máximo 24 horas nossa equipe entrará em contato!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="hideModal()">OK</button>
                </div>
            </div>
        </div>
    </div>
    <?php get_footer(); ?>
    </body>

    <script>
        document.addEventListener('wpcf7mailsent', function (event) {
            $('#myModal').modal('show');
            const fullName = document.querySelector('[name="nome"]').value;
            const telephone = document.querySelector('[name="telefone"]').value;
            const email = document.querySelector('[name="email"]').value;
            const embarque = document.querySelector('[name="embarque"]').value || "Não informado";

            // Dados do lead
            const leadData = {
                FullNamelead: fullName,
                telephoneLead: telephone,
                emailLead: email,
                utm_campaign: "canada-google-2025",
                embarque: embarque
            };

            // Enviar a requisição POST
            fetch("https://h.api.vizion.jit.technology/v1/leads/public", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json"
                },
                body: JSON.stringify(leadData)
            })
            .then(response => response.json())
            .then(data => console.log("Lead enviado com sucesso:", data))
            .catch(error => console.error("Erro ao enviar lead:", error));
        }, false);
        function hideModal() {
            $('#myModal').modal('hide');
        }
    </script>

    </html>