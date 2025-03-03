<style>
   .whatsapp {
   position: fixed;
   bottom: 1%;
   right: 1%;
   padding: 10px;
   padding-right: 0;
   z-index: 10000000;
   width: 4em;
   }
   .redes_sociais_footer {
   text-align: center;
   align-self: center;
   }
   a {
   text-decoration: none !important;
   }
   ul#footer-menu {
   font-family: sans-serif;
   list-style: none;
   max-height: 12.5em;
   display: -webkit-flex;
   display: flex;
   -webkit-flex-flow: column wrap;
   flex-flow: column wrap;
   }
   ul#footer-menu a {
   color: #fff;
   font-family: "Manrope";
   padding-left: 1em;
   }
   ul#footer-menu .main {
   padding-left: 0;
   font-size: 1.2em;
   font-weight: bold;
   }
   .grecaptcha-badge {
   display: none;
   }
   .pulse-effect {
   display: inline-block;
   animation: pulse 2s infinite;
   }
   @keyframes pulse {
   0% {
   transform: scale(1);
   }
   50% {
   transform: scale(1.2);
   }
   100% {
   transform: scale(1);
   }
   }
   footer {
   color: white;
   padding: 1em;
   background: #FFB131;
   }
   footer svg {
   padding: 0.2em;
   }
   .btn-landpage {
   background-color: #FF6A2E;
   color: white;
   width: 100% !important;
   height: 40px !important;
   border: none;
   border-radius: 10px;
   margin: 0 !important;
   margin-top: 10px !important;
   }
   .modal-contato .wpcf7-list-item {
   margin: 0;
   margin-right: 1em;
   }
   .modal-contato .wpcf7-list-item label {
   font-size: 0.8em;
   }
   .modal-contato .wpcf7 form .modal-contato .wpcf7-response-output {
   display: none;
   }
   .modal-contato .wpcf7-form p {
   font-weight: 500;
   font-family: 'Manrope';
   color: black;
   margin: 0;
   }
   .wpcf7-spinner {
   display: none;
   }
   .modal-contato .wpcf7-form input {
   margin-bottom: 1em;
   }
   #copyright{
   color: white;
   }
   .footerTiTleItem{
   color: #FCFCFC;
   font-size: 1.5rem;
   line-height: normal;
   }
   .footerItemLink{
   color:  #FF6A2E;
   font-size: 1.2rem;
   line-height: normal;
   }
   .atendimentoTitle{
   font-size: 3rem;
   color: white;
   }
   .atendimentoButton{
   font-family: 'Manrope';
   background: transparent;
   color: white;
   padding: 0.25rem 0.625rem;
   border-radius: 0.625rem;
   border: 1px solid white;
   font-size: 1.4rem;
   font-weight: bold;
   text-decoration: none;
   transition: 0.2s;
   }
   .atendimentoButton:hover{
   color:  #FF6A2E;
   background: white;
   }
   /* Grouped @media screen queries */
   @media screen and (max-width: 576px) {
   ul#footer-menu {
   max-height: 100%;
   }
   .d-md-initial {
   display: none;
   }
   #copyright{
   padding: 1em;
   }
   .atendimentoButton{
   font-size: 1rem;
   }
   .atendimentoTitle{
   font-size: 1.5rem;
   }
   .footerImage{
   transform: scale(1.2);
   }
   }
   @media screen and (max-width: 400px) {
   .atendimentoTitle{
   font-size: 1rem;
   }
   .atendimentoButton{
   font-size: 0.7rem;
   }
   }
   @media screen and (min-width: 576px) {
   footer {
   padding: 5em;
   }
   #copyright{
   position: absolute;
   left: 50%;
   transform: translate(-50%, 30%);
   }
   #jit-logo{
   position: absolute;
   right: 0;
   transform: translate(-50%, 28%);
   }
   }
</style>
<div>
   <a href="https://api.whatsapp.com/send?phone=5585992442233" target="_blank">
   <img class="whatsapp pulse-effect" src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/whatsapp.webp" />
   </a>
</div>
<div class="position-relative align-items-center d-none d-md-flex" style="max-width: 100%;overflow: hidden;">
   <img class="w-100 footerImage" src="https://okintercambio.com.br/wp-content/uploads/2024/07/footer-image.png" />
   <div class="position-absolute ps-5 row">
   <div class="col-sm-12 col-md-6 p-5" style="align-self: center; width: 55vw">
         <h4 style="color: white">Fale com um especialista <br>online para todo o Brasil! 
         </h4>
      </div>
      <div class="col-sm-12 col-md-4 modal-contato" id="form">
         <div style="background: #FCFCFC; padding: 3em;border-radius: 5%;">
            <?= do_shortcode( '[contact-form-7 id="34d40a2" title="Formulário Footer"]');    ?>
         </div>
      </div>
   </div>
</div>
<footer style="background: #434444">
   <div class="row pb-5 mb-5 d-md-none" style="border-bottom: 1px solid black;">
      <div class="col-sm-12 col-md-6 p-5" style="align-self: center;">
         <h2 style="color: white">Consulte um especialista
            em viagens e intercâmbio 
            e comece a planejar seu vôo!
         </h2>
         <p>
            Preencha o formulário ao lado e faça parte dos mais de mil alunos embarcados pela OK Intercâmbio para vários países ao longo dos últimos 10 anos.
         </p>
      </div>
      <div class="col-md-1"></div>
      <div class="col-sm-12 col-md-4 modal-contato" id="form">
         <div style="background: #FCFCFC; padding: 3em;border-radius: 5%;">
            <?= do_shortcode( '[contact-form-7 id="34d40a2" title="Formulário Footer"]');    ?>
         </div>
      </div>
   </div>
   </div>
   <div class="row row-cols-2 row-cols-md-3">
      <div class="col-sm-6 col-md-4">
         <div class="d-flex flex-column align-items-start gap-2">
            <h3 class="footerTiTleItem">Destinos</h3>
            <a href="https://okintercambio.com.br/destino/africa-do-sul/">
               <h4 class="footerItemLink">
                  África do sul                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/alemanha/">
               <h4 class="footerItemLink">
                  Alemanha                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/argentina/">
               <h4 class="footerItemLink">
                  Argentina                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/australia/">
               <h4 class="footerItemLink">
                  Austrália                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/canada/">
               <h4 class="footerItemLink">
                  Canadá                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/chile/">
               <h4 class="footerItemLink">
                  Chile                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/espanha/">
               <h4 class="footerItemLink">
                  Espanha                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/eua/">
               <h4 class="footerItemLink">
                  EUA                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/franca/">
               <h4 class="footerItemLink">
                  França                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/inglaterra/">
               <h4 class="footerItemLink">
                  Inglaterra                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/irlanda/">
               <h4 class="footerItemLink">
                  Irlanda                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/italia/">
               <h4 class="footerItemLink">
                  Itália                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/malta/">
               <h4 class="footerItemLink">
                  Malta                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/mexico/">
               <h4 class="footerItemLink">
                  México                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/nova-zelandia/">
               <h4 class="footerItemLink">
                  Nova Zelândia                                
               </h4>
            </a>
            <a href="https://okintercambio.com.br/destino/portugal/">
               <h4 class="footerItemLink">
                  Portugal                                
               </h4>
            </a>
         </div>
      </div>
      <div class="col-sm-6 col-md-8">
         <div class="row" style="height: 100%;">
            <div class="col-sm-12 col-md-6">
               <div class="d-flex flex-column align-items-start gap-2 mb-3">
                  <h3 class="footerTiTleItem">Blog</h3>
                  <a href="https://blog.okintercambio.com.br/ultimas/">
                     <h4 class="footerItemLink">
                        Últimos Posts
                     </h4>
                  </a>
                  <a href="https://blog.okintercambio.com.br/mais-lidas/">
                     <h4 class="footerItemLink">
                        Mais lidas
                     </h4>
                  </a>
                  <a href="https://blog.okintercambio.com.br/category/intercambio/">
                     <h4 class="footerItemLink">
                        Intercâmbio
                     </h4>
                  </a>
                  <a href="https://blog.okintercambio.com.br/category/dicas/">
                     <h4 class="footerItemLink">
                        Dicas de Viagem
                     </h4>
                  </a>
               </div>
               <div class="d-flex flex-column align-items-start gap-2 mb-3">
                  <h3 class="footerTiTleItem">Serviços</h3>
                  <a href="https://okintercambio.com.br/servicos/#passagemAerea">
                     <h4 class="footerItemLink">
                        Passagem Aérea
                     </h4>
                  </a>
                  <a href="https://okintercambio.com.br/servicos/#seguro">
                     <h4 class="footerItemLink">
                        Seguro Viagem
                     </h4>
                  </a>
                  <a href="https://okintercambio.com.br/servicos/#hospedagem">
                     <h4 class="footerItemLink">
                        Hospedagem
                     </h4>
                  </a>
                  <a href="https://okintercambio.com.br/servicos/#visto">
                     <h4 class="footerItemLink">
                        Visto
                     </h4>
                  </a>
               </div>
               <div class="d-flex flex-column align-items-start gap-2 mb-3">
                  <h3 class="footerTiTleItem">A OK</h3>
                  <a href="https://okintercambio.com.br/sobre/">
                     <h4 class="footerItemLink">
                        A empresa
                     </h4>
                  </a>
                  <a href="https://okintercambio.com.br/equipe/">
                     <h4 class="footerItemLink">
                        Equipe
                     </h4>
                  </a>
                  <a href="https://okintercambio.com.br/contato/">
                     <h4 class="footerItemLink">
                        Contato
                     </h4>
                  </a>
               </div>
            </div>
            <div class="col-sm-12 col-md-6">
               <div class="d-flex flex-column justify-content-between" style="height: 100%;">
                  <div>
                     <div class="d-flex flex-column align-items-start gap-2 mb-3">
                        <a href="https://okintercambio.com.br/promocoes/">
                           <h3 class="footerTiTleItem">Promoções</h3>
                        </a>
                     </div>
                     <div class="d-flex flex-column align-items-start gap-2">
                        <h3 class="footerTiTleItem">Programas</h3>
                        <a href="https://okintercambio.com.br/programas/#business-english">
                           <h4 class="footerItemLink">
                              Business English                                                
                           </h4>
                        </a>
                        <a href="https://okintercambio.com.br/programas/#curso-de-idiomas">
                           <h4 class="footerItemLink">
                              Curso de Idiomas                                                
                           </h4>
                        </a>
                        <a href="https://okintercambio.com.br/programas/#estudo-e-trabalho">
                           <h4 class="footerItemLink">
                              Estudo e trabalho                                                
                           </h4>
                        </a>
                        <a href="https://okintercambio.com.br/programas/#high-school">
                           <h4 class="footerItemLink">
                              High School                                                
                           </h4>
                        </a>
                        <a href="https://okintercambio.com.br/programas/#intercâmbio-em-família">
                           <h4 class="footerItemLink">
                              Intercâmbio em família                                                
                           </h4>
                        </a>
                        <a href="https://okintercambio.com.br/programas/#universidade-no-exterior">
                           <h4 class="footerItemLink">
                              Universidade no exterior                                                
                           </h4>
                        </a>
                     </div>
                  </div>
                  <div>
                     <div class="d-md-flex d-none flex-column align-items-end gap-4">
                        <div class="d-flex flex-column align-items-end gap-3">
                           <a href="https://okintercambio.com.br" target="_blank">
                           <img style="width: 5em;"  src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/logo-footer.svg"/>
                           </a>
                           <p class="mb-0  text-end" style="font-size: 0.8em">
                              Av. Santos Dumont, 2789 , Edificio Torre San Carlo<br>
                              loja 10 Aldeota, Fortaleza - CE, 60150-161<br>Tel: <a href="https://api.whatsapp.com/send?phone=5585992442233&text=Ol%C3%A1%2C%20quero%20realizar%20meu%20sonho%20de%20viajar%20e%20estudar%20no%20exterior!">+55 (85) 99244-2233</a>/(85) 3182-4212<br>CNPJ: 23.263.680/0001-31
                           </p>
                        </div>
                        <div class="d-flex align-items-center justify-content-center gap-1">
                           <a href="https://www.instagram.com/okintercambio/" target="_blank" style="align-self: center;">
                           <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/instagram-footer.svg"/>
                           </a>
                           <a href="https://api.whatsapp.com/send?phone=5585992442233&text=Ol%C3%A1%2C%20quero%20realizar%20meu%20sonho%20de%20viajar%20e%20estudar%20no%20exterior!"
                              target="_blank" style="align-self: center">
                           <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/whatsapp-footer.svg"/>
                           </a>
                           <a href="https://www.youtube.com/OKIntercambio" target="_blank" style="align-self: center;">
                           <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/youtube-footer.svg"/>
                           </a>
                           <a href="https://pt-br.facebook.com/okintercambio/" target="_blank" style="align-self: center;">
                           <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/facebook-footer.svg"/>
                           </a>
                        </div>
                        <div>
                           <a href="https://okintercambio.com.br" target="_blank">
                           <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/logo-embratur.svg"/>
                           <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/logo-cadastur.svg"/>
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="d-md-none d-flex my-4 flex-column align-items-center gap-4">
      <div class="d-flex gap-4">
         <a href="https://okintercambio.com.br" target="_blank">
         <img style="width: 5em;"  src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/logo-footer.svg"/>
         </a>
         <div class="d-flex flex-column align-items-center justify-content-center">
            <a href="https://okintercambio.com.br" target="_blank">
            <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/logo-embratur.svg"/>
            <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/logo-cadastur.svg"/>
            </a>
         </div>
      </div>
      <div class="d-flex align-items-center justify-content-center gap-1">
         <a href="https://www.instagram.com/okintercambio/" target="_blank" style="align-self: center;">
         <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/instagram-footer.svg"/>
         </a>
         <a href="https://api.whatsapp.com/send?phone=5585992442233&text=Ol%C3%A1%2C%20quero%20realizar%20meu%20sonho%20de%20viajar%20e%20estudar%20no%20exterior!"
            target="_blank" style="align-self: center">
         <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/whatsapp-footer.svg"/>
         </a>
         <a href="https://www.youtube.com/OKIntercambio" target="_blank" style="align-self: center;">
         <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/youtube-footer.svg"/>
         </a>
         <a href="https://pt-br.facebook.com/okintercambio/" target="_blank" style="align-self: center;">
         <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/facebook-footer.svg"/>
         </a>
      </div>
      <div class="d-flex align-items-center justify-content-center">
         <a href="https://jit.technology">
         <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/JIT-logo.svg" />
         </a>
      </div>
      <p id="copyright">Todos os direitos reservados</p>
   </div>
</footer>
<div class="d-md-block d-none" style="background: var(--primary-color); min-height: 3em">
   <div class="container" style="text-align:center">
      <p id="copyright">Copyright 2024 – OK Intercâmbio</p>
      <a id="jit-logo" href="https://jit.technology">
      <img src="https://okintercambio.com.br/wp-content/themes/OkInter-main/assets/icons/JIT-logo.svg" />
      </a>
   </div>
</div>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.3/js/intlTelInput.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.20/build/js/intlTelInput.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper_featured = new Swiper(".swiper-featured", {
        slidesPerView: 4,
        spaceBetween: 30,
        // centeredSlides: true,
        grabCursor: true,
      //   cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
                100: {
                slidesPerView: 1,
                },
                700: {
                slidesPerView: 2,
                // spaceBetween: 20,
                },
                990: {
                slidesPerView: 3,
                // spaceBetween: 40,
                },
                1330: {
                slidesPerView: 4,
                // spaceBetween: 40,
                },
            },
    });
    var swiper_destaque = new Swiper(".swiper-destaque", {
        slidesPerView: 4,
        spaceBetween: 30,
        // centeredSlides: true,
        grabCursor: true,
      //   cssMode: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
                100: {
                slidesPerView: 1,
                },
                700: {
                slidesPerView: 2,
                // spaceBetween: 20,
                },
                990: {
                slidesPerView: 3,
                // spaceBetween: 40,
                },
                1330: {
                slidesPerView: 4,
                // spaceBetween: 40,
                },
            },
    });

    var swiper_dicas = new Swiper(".swiper-dicas", {
         slidesPerView: 1,
         spaceBetween: 30,
         pagination: {
             el: ".pagination-dicas",
             clickable: true,
         },
    })
    var swiper_sobre_intercambio = new Swiper(".swiper-sobre-intercambio", {
         slidesPerView: 1,
         spaceBetween: 30,
         pagination: {
             el: ".pagination-sobre-intercambio",
             clickable: true,
         },
    })

    var swiper_depoimentos = new Swiper(".swiper-depoimentos", {
         slidesPerView: 3,
         spaceBetween: 30,
         grabCursor: true,
         pagination: {
             el: ".pagination-depoimentos",
             clickable: true,
         },
         breakpoints: {
                100: {
                slidesPerView: 1,
                },
                700: {
                slidesPerView: 2,
                // spaceBetween: 20,
                },
                990: {
                slidesPerView: 3,
                // spaceBetween: 40,
                },
               //  1330: {
               //  slidesPerView: 4,
               //  // spaceBetween: 40,
               //  },
         },
    })

    var swiper_destinos = new Swiper(".swiper-destinos", {
        slidesPerView: 4,
        spaceBetween: 30,
        // centeredSlides: true,
        grabCursor: true,
      //   navigation: {
      //       nextEl: ".swiper-button-next",
      //       prevEl: ".swiper-button-prev",
      //   },
         pagination: {
             el: ".pagination-destinos",
             clickable: true,
         },
        breakpoints: {
                100: {
                slidesPerView: 1,
                },
                700: {
                slidesPerView: 2,
                // spaceBetween: 20,
                },
                990: {
                slidesPerView: 3,
                // spaceBetween: 40,
                },
                1330: {
                slidesPerView: 4,
                // spaceBetween: 40,
                },
         },
    });
</script>
<script>
   const inputElement = document.querySelector('#orcamento-tel-id');
   
   if (inputElement) {
       window.intlTelInput(inputElement, {
               initialCountry: "br",
               utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@19.2.20/build/js/utils.js",
               countrySearch: true,
               useFullscreenPopup: false,
               showSelectedDialCode: true, // exibir o código do país separado do número
       });
   }
</script>
<?php wp_footer(); ?>
</body>
</html>