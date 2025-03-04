<?php get_header(); ?>
<style>
    
@media (min-width: 768px) {
    .font-md-7{
        font-size: 7em;
    }
    .font-md-3{
        font-size: 3em;
    }
    .font-md-4{
        font-size: 4em;
    }
    .font-md-5{
        font-size: 5em;
    }
}
.bold{
    font-weight: bold;
}
@media (max-width: 768px) {
  input[type="checkbox"] {
    /* Double-sized Checkboxes */
    -ms-transform: scale(1); /* IE */
    -moz-transform: scale(1); /* FF */
    -webkit-transform: scale(1); /* Safari and Chrome */
    -o-transform: scale(1); /* Opera */
    transform: scale(1);
  }
  .font-sm-4{
    font-size: 4em;
  }
  .font-sm-5{
    font-size: 5em;
  }
}
</style>
<section style="background: black; height: 100vh;align-content: center;">
    <img src="<?= get_template_directory_uri(); ?>/assets/img/capa.png" style="position: absolute;width: 20em;top: 0;max-height: 100vh;z-index: 10040"/>    
    <div class="container p-5" style="color: white">
        <h1 class="text-center bold cl-white" style="font-size: 3em; height: 1em" id="text">Pesquisar</h1>
        <h1 class="text-center bold cl-primary font-sm-5 font-md-7">Licitações</h1>
    </div>
</section>

<section style="background-color:white">
    <div class="container p-5">
        <div class="row">
            <div class="col-sm-12 col-md-4 p-2">
                <h2>Não perca mais nenhuma oportunidade de licitação!</h2>
                <p style="border-left: 1px solid black; padding-left: 1em">O Licitta centraliza todas as licitações de interesse da sua empresa, facilitando a busca, o gerenciamento e a emissão de propostas.</p>
            </div>
            <div class="col-sm-12 col-md-4 p-4">
                <h2>A solução completa para gerenciar licitações!</h2>
                <p style="border-left: 1px solid black; padding-left: 1em">Organize e acompanhe licitações de forma eficiente, garantindo mais controle sobre suas propostas e resultados.</p>
            </div>
            <div class="col-sm-12 col-md-4 p-4">
                <h2>Acelere sua participação em licitações!</h2>
                <p style="border-left: 1px solid black; padding-left: 1em">Filtre, acompanhe e gerencie licitações sem complicação. Tenha mais controle e aumente suas chances de vitória.</p>
            </div>
        </div>
    </div>
</section>
<section class="p-5 bg-primary" id="about">
    <div class="">
        <div class="row">
            <div class="col-md-7">
                <img src="<?= get_template_directory_uri(); ?>/assets/img/mockups/pesquisar.png" style="width: 100%" />
            </div>
            <div class="col-md-5 p-5" style="align-content: center; justify-items: center;">
                <h2 class="cl-white font-md-3">O caminho para o seu </h2>
                <h2 class="cl-white font-md-3"><strong class="cl-white" style="font-size: 1.5em">SUCESSO</strong></h2>
            </div>
        </div>
    </div>
</section>
<section class="d-none">
    <div class="container p-5" style="    place-items: center;">
        <h2>Como Funciona?</h2>
        <p>Participar de licitações nunca foi tão fácil!</p>
        <div class="mt-5" style="width: 60vw; height: 70vh; background: black"></div>
    </div>
</section>
<section class="row" style="background-color: black;--bs-gutter-x: 0">
    <div class="col-sm-12 col-md-6">
        <div class="container p-5">
            <h2 class="cl-primary" style="font-size: 4em;"> Por que usar<BR> o Licitta?</h2>
            <div>
                <p class="cl-white" style="font-size: 1.4em;">Com o Licitta, sua empresa ganha mais agilidade e eficiência na busca, gestão e envio de propostas, aumentando suas chances de sucesso.</p>
            </div>
        </div>
    </div>
    <div class="col-sm-12 col-md-6 bg-primary" style="align-content: center;">
        <div class="container p-5">
            <div class="row">
                <div class="col-6 px-4 mt-4">
                    <h2 class="cl-black">Busca Inteligente</h2>
                    <p  class="cl-black" style="border-left: 1px solid black; padding-left: 1em">Encontre rapidamente licitações compatíveis com sua empresa.</p>
                </div>
                <div class="col-6 px-4 mt-4">
                    <h2 class="cl-black">Gestão Centralizada</h2>
                    <p  class="cl-black" style="border-left: 1px solid black; padding-left: 1em">Armazene e acompanhe todas as propostas em um só lugar.</p>
                </div>
                <div class="col-6 px-4 mt-4">
                    <h2 class="cl-black">Alertas e Notificações</h2>
                    <p  class="cl-black" style="border-left: 1px solid black; padding-left: 1em">Receba alertas e acompanhe cada etapa das licitações em tempo real.</p>
                </div>
                <div class="col-6 px-4 mt-4">
                    <h2 class="cl-black">Emissão de Propostas Facilitada</h2>
                    <p  class="cl-black" style="border-left: 1px solid black; padding-left: 1em">Gere documentos de forma automatizada e profissional.</p>
                </div>
            </div>    
        </div>
    </div>
</section>

<script>
    const texts = ["Pesquisar", "Qualificar", "Participar", "Gerenciar"];
    let textIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function typeEffect() {
        const container = document.getElementById("text");
        const currentText = texts[textIndex];

        if (isDeleting) {
            charIndex--;
        } else {
            charIndex++;
        }

        container.textContent = currentText.substring(0, charIndex);

        if (!isDeleting && charIndex === currentText.length) {
            setTimeout(() => isDeleting = true, 500); // Espera antes de apagar
        } else if (isDeleting && charIndex === 0) {
            isDeleting = false;
            textIndex = (textIndex + 1) % texts.length; // Muda para o próximo texto
        }

        setTimeout(typeEffect, isDeleting ? 50 : 100); // Velocidade da animação
    }
    typeEffect();
    </script>
    <?php get_footer(); ?>