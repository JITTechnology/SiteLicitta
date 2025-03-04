<div>
    <a href="https://api.whatsapp.com/send?phone=5585994139360" target="_blank">
        <img class="whatsapp pulse-effect" alt="logo do whatsapp" title="Fale com o Licitta pelo WhatsApp"
            src="<?= get_template_directory_uri(); ?>/assets/img/whatsapp.webp" />
    </a>
</div>
<footer class="bg-footer-color">
    <div class="row pb-5 mb-5 border-bottom">
        <div class="col-sm-12 col-md-6 p-5 align-self-center">
            <h2 class="cl-white">
                Encontre e gerencie licitações de forma eficiente com o Licitta!
            </h2>
            <p>
                Centralize todas as licitações de interesse da sua empresa e simplifique a gestão e o envio de propostas. 
                Preencha o formulário ao lado e otimize sua participação nos processos licitatórios.
            </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-sm-12 col-md-4 modal-contato" id="form">
            <div class="p-5 bg-gray" style="border-radius: 5%;">
                <?= do_shortcode( '[contact-form-7 id="ce2d8d5" title="Formulário footer"]');    ?>
            </div>
        </div>
    </div>
</footer>
<div class="bg-primary" style="min-height: 3em">
    <div class="container text-center">
        <p id="copyright">Copyright 2025 – Licitta</p>
        <a id="jit-logo" href="https://jit.technology">
            <img src="<?= get_template_directory_uri(); ?>/assets/img/svgs/JIT-logo.svg" title="Logo da JIT Technology" alt="Logo da JIT Technology" />
        </a>
    </div>
</div>
<?php wp_footer(); ?>
</body>

</html>