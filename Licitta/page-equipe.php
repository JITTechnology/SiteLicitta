<?php get_header(); ?>
<main>
    <section class="banner">
        <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/img/banners/banner-equipe-ok-intercambio.webp" />
        <div class="filtro d-flex align-items-center">
            <div class="container mt-5">
            <h1 class="text-center text-sm-start"><?=get_the_title()?></h1>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="padding: 0px 20px">
            <div class="row mt-5">
                <div class="col-12">
                    <h2 class="text-center text-md-start">Conheça nosso time</h2>
                    <p class="mt-4 text-xl-start">
                        Somos um time de especialistas apaixonados por viagens e educação internacional.
                        <br />
                        Nós cuidados de todos os detalhes para a sua experiência internacional ser incrível!
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5 cursor-pointer">
                <img class="member-thumb" onclick="openModalEquipe(this.alt)" src="<?= get_template_directory_uri(); ?>/assets/img/equipe/neutton-rodrigues-ok-intercambio.webp" alt="Neutton Rodrigues" />
                <h4 class="member-title">Neutton Rodrigues<br><span>CEO</span></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5 cursor-pointer">
                <img class="member-thumb" onclick="openModalEquipe(this.alt)" src="<?= get_template_directory_uri(); ?>/assets/img/equipe/caio-marques-ok-intercambio.webp" alt="Caio Marques" />
                <h4 class="member-title">Caio Marques<br><span>Gerente Operacional</span></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5 cursor-pointer">
                <img class="member-thumb" onclick="openModalEquipe(this.alt)" src="<?= get_template_directory_uri(); ?>/assets/img/equipe/nicole-sigal-ok-intercambio.webp" alt="Nicole Sigal" />
                <h4 class="member-title">Nicole Sigal <br><span>Consultora de Intercâmbio</span></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5 cursor-pointer">
                <img class="member-thumb" onclick="openModalEquipe(this.alt)" src="<?= get_template_directory_uri(); ?>/assets/img/equipe/sarah-araujo-ok-intercambio.webp" alt="Sarah Araújo" />
                <h4 class="member-title">Sarah Araújo<br><span>Consultora de Intercâmbio</span></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5 cursor-pointer">
                <img class="member-thumb" onclick="openModalEquipe(this.alt)" src="<?= get_template_directory_uri(); ?>/assets/img/equipe/max-somar-ok-intercambio.webp" alt="Max Somar" />
                <h4 class="member-title">Max Somar<br><span>Suporte de Intercâmbio</span></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5 cursor-pointer">
                <img class="member-thumb" onclick="openModalEquipe(this.alt)" src="<?= get_template_directory_uri(); ?>/assets/img/equipe/george-alves-ok-intercambio.webp" alt="George Alves" />
                <h4 class="member-title">George Alves<br><span>Suporte de Intercâmbio</span></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5 cursor-pointer">
                <img class="member-thumb" onclick="openModalEquipe(this.alt)" src="<?= get_template_directory_uri(); ?>/assets/img/equipe/emilia-bezerra-ok-intercambio.webp" alt="Emília Bezerra" />
                <h4 class="member-title">Emília Bezerra<br><span>Analista Financeiro</span></h4>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 mt-5 cursor-pointer">
                <img class="member-thumb" onclick="openModalEquipe(this.alt)" src="<?= get_template_directory_uri(); ?>/assets/img/equipe/carlos-henrique-ok-intercambio.webp" alt="Carlos Henrique" />
                <h4 class="member-title">Carlos Henrique<br><span>Consultor de Intercâmbio
                </span></h4>
            </div>
        </div>
    </section>


    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6 col-xl-6">
                <h2 class="text-center text-md-start cor-empresa">Trabalhe conosco</h2>
                <p class="mt-3">Faça parte de uma empresa dinâmica, jovem e focada na realização de sonhos dos
                    brasileiros que buscam uma vivência internacional através do Intercâmbio Cultural.</p>
            </div>
            <div class="col-12 col-md-6 col-xl-6 mb-5">
                <?= do_shortcode('[contact-form-7 id="34d40a2" title="Formulário Footer"]');?>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEquipe" tabindex="-1" aria-labelledby="modalEquipeLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content bg-gray">
                <div class="modal-header border border-0">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-5 pt-4">
                    <div class="row">
                        <div class="col-sm-12 col-md-4">
                            <img id="foto-equipe" class="w-100" />
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <h2 id="nome-equipe"></h2>
                            <strong><p id="titulo-equipe"></p></strong>
                            <a id="email-equipe" href="#"></a>
                        </div>
                        <p class="mt-3" id="descricao-equipe"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        const equipe = [
            {
                nome: "Neutton Rodrigues",
                img: '<?= get_template_directory_uri(); ?>/assets/img/equipe/neutton-rodrigues-ok-intercambio.webp',
                email: 'neutton@okintercambio.com.br',
                titulo: "CEO – OK Intercâmbio",
                descricao: "Tenho vivência internacional de mais de 18 anos em ambientes corporativos diversos, como escolas, universidades e, atualmente, sou gestor de projetos e CEO da OK Intercâmbio. Em Portugal, fiz graduação em Comunicação Audiovisual e Multimídia.<br><br> Na Espanha, me especializei em Comunicação Corporativa e Marketing. Já visitei mais de 40 países e contando. Hoje, resido entre a Europa e o Brasil e acredito no intercâmbio como uma experiência transformadora. Amo o que faço e trabalhar realizando sonhos é incrível."
            },
            {
                nome: "Caio Marques",
                titulo: "Gerente Operacional",
                img: '<?= get_template_directory_uri(); ?>/assets/img/equipe/caio-marques-ok-intercambio.webp',
                email: 'caio@okintercambio.com.br',
                descricao: "Olá, meu nome é Caio, sou de Fortaleza e graduando em Ciências Sociais na Universidade Federal do Ceará. Tenho um lado aventureiro, de fazer trilha (já nadei no Lago Ness), conhecer novas culturas, pessoas e sabores, mas também tenho um lado mais caseiro, de ler artigos sobre negócios e novas tendências. <br><br>Hoje, meu hobby favorito é ir ao cinema para ver filmes de terror: adoro a adrenalina que o desconhecido causa! Antes de ser consultor da Ok Intercâmbio, realizei meu sonho de fazer um intercâmbio na Inglaterra durante dois meses… com a Ok Intercâmbio! Então, vamos conversar? Me conta como eu posso te ajudar a alcançar o seu sonho assim como a Ok me ajudou a alcançar o meu."
            },
            {
                nome: "Nicole Sigal",
                titulo: "Consultora de Intercâmbio",
                img: '<?= get_template_directory_uri(); ?>/assets/img/equipe/nicole-sigal-ok-intercambio.webp',
                email: 'nicole@okintercambio.com.br',
                descricao: "Olá! Eu sou Nicole, tenho 22 anos e sou estudante de Relações Internacionais no último ano. Nascida em Porto Alegre, cresci em Florianópolis e agora vivo em Fortaleza. Adoro me aventurar no universo geek e k-pop, e meu maior sonho é conhecer o mundo todo com meus amigos! Meu primeiro intercâmbio foi para a Colômbia, uma experiência de crescimento pessoal e profissional inesquecível, e agora quero usar essa paixão para inspirar outras pessoas a realizarem esse sonho também!"
            },
            {
                nome: "Sarah Araújo",
                titulo: "Consultora de Intercâmbio",
                img: '<?= get_template_directory_uri(); ?>/assets/img/equipe/sarah-araujo-ok-intercambio.webp',
                email: 'sarah@okintercambio.com.br',
                descricao: "Oii, meu nome é Sarah, sou fortalezense e sou formada em turismo. Amo ler livros de fantasia, distopias e clássicos, sou apaixonada por séries, filmes e músicas da cultura pop, também adoro praticar outras línguas, aprender sobre outras culturas, e claro, viajar! <br><br>Sempre trabalhei com pessoas e atualmente estou atuando exclusivamente com consultoria de intercâmbios, o que me dá a oportunidade de unir minhas paixões a minha profissão enquanto tenho a experiência gratificante de ajudar na realização dos sonhos das pessoas!"
            },
            {
                nome: "Max Somar",
                titulo: "Suporte de Intercâmbio",
                img: '<?= get_template_directory_uri(); ?>/assets/img/equipe/max-somar-ok-intercambio.webp',
                email: 'max@okintercambio.com.br',
                descricao: "Olá, meu nome e Max nascido na Argentina, mas criado no Brasil na cidade de Fortaleza e hoje em dia moro na Europa. Sou um cara extrovertido e leal, sempre trabalhei como suporte ajudando as pessoas da melhor forma possível para que elas possam realizar seus desejos. <br><br>É um privilégio poder compartilhar minha trajetória e conquista com aqueles que querem dar seus primeiros passos assim como eu fiz, me aventurando no meu intercambio."
            },
            {
                nome: "George Alves",
                titulo: "Suporte de Intercâmbio",
                img: '<?= get_template_directory_uri(); ?>/assets/img/equipe/george-alves-ok-intercambio.webp',
                email: 'george@okintercambio.com.br',
                descricao: "Olá, tudo bem? Me chamo George, natural de Fortaleza no Ceará, mas estou atualmente morando em Cork. Sou uma pessoa proativa, de fácil comunicação, paciente e sempre trabalhei com o público a minha carreira profissional toda. <br><br>Espero poder ajudar da melhor maneira possível e compartilhar conhecimento, experiência, e vivência do intercâmbio com as pessoas que vierem para Cork sendo eu o suporte da ok intercambio nessa cidade assim como a propria agencia me auxiliou bastante no inicio do meu intercambio com todo o suporte possivel."
            },
            {
                nome: "Emília Bezerra",
                img: '<?= get_template_directory_uri(); ?>/assets/img/equipe/emilia-bezerra-ok-intercambio.webp',
                email: 'emilia@okintercambio.com.br',
                titulo: "Analista Financeiro",
                descricao: "Olá, meu nome é Emília, sou de Baturité, uma cidade que representa minha essência e minha história. Na OK Intercâmbio, atuo organizando os bastidores para que os sonhos sejam realizados sem complicações. Sou uma pessoa curiosa e apaixonada por histórias de vida. <br><br>Adoro ouvir sobre os sonhos das pessoas e, mais ainda, saber que meu trabalho pode contribuir para transformá-los em realidade. Gosto de desafios, de me reinventar e de fazer parte de momentos que mudam vidas. Isso me motiva e dá sentido ao que faço todos os dias!"
            },
            {
                nome: "Carlos Henrique",
                titulo: "Consultor de Intercâmbio",
                img: '<?= get_template_directory_uri(); ?>/assets/img/equipe/carlos-henrique-ok-intercambio.webp',
                email: 'carloshenrique@okintercambio.com.br',
                descricao: "Olá, eu sou Carlos, paulista, e sou formado em Marketing. Atualmente, estou vivendo a  melhor experiência da minha vida: meu tão sonhado intercâmbio. Com mais de 8 mil  quilômetros de distância de casa, estou tendo a oportunidade incrível de vivenciar  outras culturas, costumes e aprender novos idiomas. <br><br>Meu maior sonho é conhecer o mundo e  estou feliz por ter dado o primeiro passo nessa jornada. E você, também sonha em  conhecer o mundo? Vamos embarcar juntos nessa aventura? Posso ajudá-lo(a) a tornar seu  sonho em realidade!"
            }
        ];
        function openModalEquipe(alt) {
            let membro = equipe.find(item => item.nome === alt);
            $("#foto-equipe").attr("src", membro.img);
            $("#email-equipe").attr("href", 'mailto:'+membro.email);
            $("#email-equipe").html(membro.email);
            $("#nome-equipe").html(membro.nome);
            $("#titulo-equipe").html(membro.titulo);
            $("#descricao-equipe").html(membro.descricao);
            $('#modalEquipe').modal('show');
        }
    </script>

</main>

<?php get_footer(); ?>