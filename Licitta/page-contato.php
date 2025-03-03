<?php get_header(); ?>
<main>
    <section class="banner">
        <img class="w-100" alt="Banner entre em contato com a OK Intercâmbio"
            src="<?= get_template_directory_uri(); ?>/assets/img/banners/banner-contato-ok-intercambio.webp" />
        <div class="filtro d-flex align-items-center">
            <div class="container mt-5">
                <h1 class="text-center text-sm-start">
                    <?=get_the_title()?>
                </h1>
            </div>
        </div>
    </section>
    <section class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6 ">
                <h3 class="my-5 bold text-center text-md-start">Fale conosco</h3>
                <p class="text-center text-md-start">
                    A agência OK Intercâmbio é uma empresa especializada em oferecer serviços voltados para programas de
                    estudos no exterior. Se você deseja uma cotação de passagens aéreas clique <a href="#modal-cotacao"
                        data-toggle="modal" data-target="#modal-cotacao">aqui</a>.
                </p>
                <br />
                <p class="text-center text-md-start">
                    Agora se você deseja receber um orçamento de intercâmbio é só clicar <a href="#modalOrcamento"
                        data-toggle="modal" data-target="#modalOrcamento">aqui</a>. Mas se você deseja falar
                    sobre outros assuntos, é só preencher o formulário ao lado.
                </p><br>
            </div>
            <div class="col-12 col-md-6 col-xl-6 pt-3">
                <?= do_shortcode( '[contact-form-7 id="34d40a2" title="Formulário Footer"]');?>
            </div>
        </div>
        <hr class="mt-5">
        <h3 class="text-center bold mt-5">Unidades</h3>
        <br>
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6 mb-5 text-end">
                <h5 class="text-center fw-bold mb-5">Brasil</h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15925.36701953988!2d-38.4997817!3d-3.7354932!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89cbedf1801741de!2sEdif%C3%ADcio%20Torre%20San%20Carlo!5e0!3m2!1spt-BR!2sbr!4v1654483120120!5m2!1spt-BR!2sbr"
                    width="450" height="370"
                    style="border:2px solid var(--primary-color); box-shadow: 5px 5px 5px gray; box-sizing: border-box; filter: drop-shadow(6px 6px 16px rgba(0, 0, 0, 0.3)); border-radius: 8px;"
                    allowfullscreen="" loading="lazy" class="col-12 col-md-12 col-xl-12 mb-4 rounded-3"></iframe>
                <div class="row">
                    <h6 class="text-center fw-bold">Fortaleza, CE</h5> <br>
                        <div class="col-12 col-md-12 col-sm-12 text-center">
                            <p class="mt-3 text-start"><img alt="Icone localização"
                                    src="<?= get_template_directory_uri( );?>/assets/img/svgs/pointer.svg" class="me-3">Av.
                                Santos Dummont, 2789, loja 10,
                                Edifício: Torre San Carlo, Aldeota, Fortaleza/CE, Brasil, CEP: 60150-161
                            </p>
                            <p class="mt-3 text-xl-start text-start"><img alt="Icone relogio"
                                    src="<?= get_template_directory_uri( );?>/assets/img/svgs/black-clock.svg"
                                    class="me-3">De segunda à sexta: de 8h à 18h / Sábado: de 9h à 12h</p>
                        </div>
                        <div class="col-12 col-md-12 col-sm-12 text-center">
                            <p class="mt-3 text-start"><img alt="Icone telefone"
                                    src="<?= get_template_directory_uri( );?>/assets/img/svgs/icone-tel.svg"
                                    class="me-3"><a href="https://api.whatsapp.com/send?phone=5585992442233">+55 (85)
                                    99244-2233</a> / +55 (85) 3182-4212</p>
                            <p class="mt-3 text-start d-flex"><img alt="Icone email"
                                    src="<?= get_template_directory_uri( );?>/assets/img/svgs/icone-email.svg"
                                    class="me-3">contato@okintercambio.com.br</p>
                        </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-6 mb-5 text-end">
                <h5 class="text-center fw-bold mb-5">Irlanda</h5>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2381.2459126351364!2d-6.25818438419262!3d53.35675377998122!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e62a882fc7b%3A0x2643f8d5abff5dc4!2s30%20Mountjoy%20Square%20E%2C%20Mountjoy%2C%20Dublin%2C%20D01%20Y6R9%2C%20Irlanda!5e0!3m2!1spt-BR!2sbr!4v1647905282136!5m2!1spt-BR!2sbr"
                    width="450" height="370"
                    style="border:2px solid var(--primary-color); box-shadow: 5px 5px 5px gray; box-sizing: border-box; filter: drop-shadow(6px 6px 16px rgba(0, 0, 0, 0.3)); border-radius: 8px;"
                    allowfullscreen="" loading="lazy" class="col-12 col-md-12 col-xl-12 mb-4 rounded-3"></iframe>
                <h6 class="text-center fw-bold">Dublin</h5>
                    <div class="row">
                        <div class="col-12 col-md-12 col-sm-12 text-start">
                            <p class="mt-3 text-xl-start "><img alt="Icone relogio"
                                    src="<?= get_template_directory_uri( );?>/assets/img/svgs/black-clock.svg"
                                    class="me-3">Atendimento por agendamento</p>

                        </div>
                        <div class="col-12 col-md-12 col-sm-12 text-start mb-5">
                            <p class="mt-3 text-start"><img alt="Icone email"
                                    src="<?= get_template_directory_uri( );?>/assets/img/svgs/icone-email.svg"
                                    class="me-3">contato@okintercambio.com.br</p>

                        </div>
                    </div>
            </div>

        </div>
    </section>
</main>


<?php get_footer(); ?>