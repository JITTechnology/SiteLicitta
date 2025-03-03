<?php get_header(); ?>

<section class="banner">
  <img class="w-100" src="<?= get_template_directory_uri(); ?>/assets/img/banners/banner-programas-ok-intercambio.webp" />
  <div class="filtro d-flex align-items-center">
        <div class="container mt-5">
           <h1 class="text-center text-sm-start"><?=get_the_title()?></h1>
        </div>
  </div>
</section>
<main>
  <?php
    includeFile('components/porqueok.php', 
        array()
    ); 
?>
  <div class="position-relative w-100 bg-purple" id="estudo-e-trabalho">
    <div class="d-flex justify-content-end"> <img class="img-banner w-75"
        src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-estudo-e-trabalho-descricao-ok-intercambio.webp"></div>
    <div class="w-100 position-absolute top-50">
      <h2 class="container" style="color: white">Estudo e trabalho</h2>
    </div>
  </div>
  <div class=" container mt-5">
    <div class="row">
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Sobre o programa</h3>
        <div class="sobrePrograma">
          <p>Intercâmbio de Estudo e Trabalho é indicado para quem quer viver e estudar fora por um longo período e
            mergulhar em uma experiência internacional no exterior com foco no desenvolvimento do idioma, imersão
            cultural e a possibilidade de trabalhar durante o intercâmbio.</p>
          <p>O programa possibilita ampliar os conhecimentos no idioma local dentro do ambiente de estudo, como também
            fora do ambiente escolar.</p>
          <p>As oportunidades de trabalho para os intercambistas geralmente são voltadas, na grande maioria, para as
            áreas de serviços e hospitalidades. Porém é importante lembrar que a carga horária permitida está
            diretamente ligada ao tipo de visto conforme regra de cada país. No caso de visto de estudo de idiomas a
            média fica em torno de 20h semanais.</p>
          <p>A OK Intercâmbio tem parceria com as melhores escolas e instituições, e dispõe de uma equipe altamente
            qualificada e com vivência internacional para garantir o melhor suporte aos estudantes.</p>
        </div>
        <h3 class="mb-4 mt-4">Países ofertados</h3>
        <div class="row">
          <ul class="mb-4 column-list">
            <li><a href="https://okintercambio.com.br/destino/australia/" class="cl-primary">Austrália</a></li>
            <li><a href="https://okintercambio.com.br/destino/canada/" class="cl-primary">Canadá</a></li>
            <li><a href="https://okintercambio.com.br/destino/irlanda/" class="cl-primary">Irlanda</a></li>
            <li><a href="https://okintercambio.com.br/destino/nova-zelandia/" class="cl-primary">Nova Zelândia</a></li>
          </ul>
        </div>
      </div>
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Motivos</h3>
        <div class="motivos">
          <p>Garantir uma renda durante o <strong>intercâmbio</strong> é o grande diferencial desta
            modalidade, com o visto, o intercambista terá permissão para trabalhar legalmente no país no período do
            curso.</p>
          <p>Desenvolver novas habilidades e competências profissionais que irão possibilitar ao estudante trabalhar em
            diversas áreas, colocando em prática ainda o aprendizado na língua local.</p>
        </div> <iframe class="w-100 youtube" height="315" src="https://www.youtube.com/embed/EawTftTaFAA?controls=0"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
    <div class="text-center col-12 mb-5"> <button class="saber-mais" data-toggle="modal"
        data-target="#modal-contact"> SABER MAIS </button></div>
  </div>
  <div class="position-relative w-100 bg-yellow" id="universidade-no-exterior">
    <div class="d-flex justify-content-end"> <img class="img-banner w-75"
        src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-universidade-no-exterior-descricao-ok-intercambio.webp"></div>
    <div class="w-100 position-absolute top-50">
      <h2 class="container" style="color: white">Universidade no exterior</h2>
    </div>
  </div>
  <div class=" container mt-5">
    <div class="row">
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Sobre o programa</h3>
        <div class="sobrePrograma">
          <p>São muitas as vantagens que a formação em uma universidade no exterior traz, desde a excelência acadêmica
            até a possibilidade de imigrar legalmente para um país estrangeiro.</p>
          <p>Hoje existem dois tipos de formação nos quais a <strong>OK Intercâmbio</strong> trabalha, são
            eles: <strong>Programas College</strong> (Canadá e Alemanha) e <strong>Universidade em
              Portugal.</strong></p>
          <p>O <strong>Programa de College</strong> é uma formação mais focada na prática e na solução de
            problemas que condizem à realidade do mercado de trabalho do país. O College hoje, é uma das portas de
            entradas para especialização profissional, por quem busca a chance de morar com permissão de trabalhar no
            país e ainda uma forma de imigrar legalmente.</p>
          <p>Portugal se consolidou como um destino para <strong>estudantes de diversas partes do
              mundo </strong>que buscam viver uma experiência acadêmica no país. A <strong>OK
              Intercâmbio</strong> oferece cursos de graduação, licenciaturas, mestrados e doutorados.</p>
        </div>
        <h3 class="mb-4 mt-4">Países ofertados</h3>
        <div class="row">
          <ul class="mb-4 column-list">
            <li><a href="https://okintercambio.com.br/destino/alemanha/" class="cl-primary">Alemanha</a></li>
            <li><a href="https://okintercambio.com.br/destino/australia/" class="cl-primary">Austrália</a></li>
            <li><a href="https://okintercambio.com.br/destino/canada/" class="cl-primary">Canadá</a></li>
            <li><a href="https://okintercambio.com.br/destino/irlanda/" class="cl-primary">Irlanda</a></li>
          </ul>
        </div>
      </div>
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Motivos</h3>
        <div class="motivos">
          <p class="mb-4">O mercado de trabalho e internacionalização é uma peça chave do mundo educacional,
            profissional e empresarial de hoje. A cada dia o mercado busca por profissionais que tenham vivência em
            ambiente internacional.</p>
          <p class="mb-4">As instituições de ensino no exterior garantem uma imersão cultural completa, elas recebem
            estudantes de diversas partes do mundo, logo a sua vivência e imersão cultural será única, além de
            possibilitar network com pessoas incríveis.</p>
          <p class="mb-4">Hoje, os programas acadêmicos no exterior tem se tornado um dos caminhos mais rápidos e fáceis
            para quem busca imigrar para Canadá, Alemanha ou Portugal. Além de facilitar os caminhos para quem busca uma
            oportunidade no mercado de trabalho local.</p>
        </div><iframe class="w-100 youtube" height="315" src="https://www.youtube.com/embed/gOe32Lid-BQ?controls=0"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
    <div class="text-center col-12 mb-5"> <button class="saber-mais" data-toggle="modal"
        data-target="#modal-contact"> SABER MAIS </button></div>
  </div>
  <div class="position-relative w-100 bg-yellow" id="high-school">
    <div class="d-flex justify-content-end"> <img class="img-banner w-75"
        src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-high-school-descricao-ok-intercambio.webp"></div>
    <div class="w-100 position-absolute top-50">
      <h2 class="container" style="color: white">High School</h2>
    </div>
  </div>
  <div class=" container mt-5">
    <div class="row">
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Sobre o programa</h3>
        <div class="sobrePrograma">
          <p>Os três anos de estudos do Ensino Médio são decisivos na vida do jovem. Neste período ele está descobrindo
            o mundo adulto, testando habilidades e pensando o que vai ser quando crescer.</p>
          <p>O Programa de High School, que é exatamente o Ensino Médio no exterior, pode ajudar o estudante a ampliar
            seus conhecimentos por meio do convívio com culturas diferentes, sair da zona de conforto da casa dos pais e
            assume responsabilidades sobre si próprio. Além disso, o jovem adquire fluência no idioma do país que
            estudou, atributo que fará toda a diferença na vida futura profissional dele.</p>
          <p>Para se candidatar ao programa, basta escolher o país desejado que nós da OK Intercâmbio auxiliaremos nas
            opções dos colégios disponíveis e documentação necessária para a realização da inscrição. Não há restrições,
            alunos dos 1º,2º e 3º colegiais podem participar.</p>
        </div>
        <h3 class="mb-4 mt-4">Países ofertados</h3>
        <div class="row">
          <ul class="mb-4 column-list">
            <li><a href="https://okintercambio.com.br/destino/australia/" class="cl-primary">Austrália</a></li>
            <li><a href="https://okintercambio.com.br/destino/canada/" class="cl-primary">Canadá</a></li>
            <li><a href="https://okintercambio.com.br/destino/estados-unidos/" class="cl-primary">Estados Unidos</a></li>
            <li><a href="https://okintercambio.com.br/destino/inglaterra/" class="cl-primary">Inglaterra</a></li>
            <li><a href="https://okintercambio.com.br/destino/irlanda/" class="cl-primary">Irlanda</a></li>
            <li><a href="https://okintercambio.com.br/destino/nova-zelandia/" class="cl-primary">Nova Zelândia</a></li>
          </ul>
        </div>
      </div>
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Motivos</h3>
        <div class="motivos">
          <div>
            <div>Experiências incríveis: Trata-se de uma aventura cheia de aprendizados acadêmicos, pessoais e cultural
              que marcará para o resto da vida.</div>
            <div>Aprender em um ambiente novo: Contato com uma educação avançada e diferenciada, já que os países da
              Europa e Estados Unidos seguem padrões elevados.</div>
            <div>Desenvolvimento Internacional: Imersão no idioma que preparar para enfrentar a realidade acadêmica e
              visão de mundo para carreira profissional.</div>
            <div></div>
          </div>
        </div><iframe class="w-100 youtube" height="315" src="https://www.youtube.com/embed/2CZ5CrfcB4U?controls=0"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
    <div class="text-center col-12 mb-5"> <button class="saber-mais" data-toggle="modal"
        data-target="#modal-contact"> SABER MAIS </button></div>
  </div>
  <div class="position-relative w-100 bg-purple" id="curso-de-idiomas">
    <div class="d-flex justify-content-end"> <img class="img-banner w-75"
        src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-curso-de-idiomas-descricao-ok-intercambio.webp"></div>
    <div class="w-100 position-absolute top-50">
      <h2 class="container" style="color: white">Curso de Idiomas</h2>
    </div>
  </div>
  <div class=" container mt-5">
    <div class="row">
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Sobre o programa</h3>
        <div class="sobrePrograma">
          <p>E você, qual idioma quer falar? É só escolher e deixar o resto com a OK Intercâmbio. Oferecemos vários
            programas de idiomas, otimizados a você, podendo ser de curta ou longa duração, dependendo do seu tempo e
            orçamento disponível.</p>
          <p>Os benefícios de um intercâmbio a gente não precisa falar, não é?! Você volta pra casa cidadão do mundo,
            com maior auto-estima, conhecimentos amplos e com uma bagagem cultural inesquecível.</p>
          <p>Cada pessoa tem os seus objetivos particulares ao decidir realizar um intercâmbio. Independente de qual
            seja o seu, há alguns fatores importantes para o sucesso dessa viagem, e o principal deles é a escolha certa
            da agência que irá te auxiliar no passo-a-passo.</p>
        </div>
        <h3 class="mb-4 mt-4">Países ofertados</h3>
        <div class="row">
          <ul class="mb-4 column-list">
            <li><a href="https://okintercambio.com.br/destino/africa-do-sul/" class="cl-primary">África do sul</a></li>
            <li><a href="https://okintercambio.com.br/destino/alemanha/" class="cl-primary">Alemanha</a></li>
            <li><a href="https://okintercambio.com.br/destino/argentina/" class="cl-primary">Argentina</a></li>
            <li><a href="https://okintercambio.com.br/destino/australia/" class="cl-primary">Austrália</a></li>
            <li><a href="https://okintercambio.com.br/destino/canada/" class="cl-primary">Canadá</a></li>
            <li><a href="https://okintercambio.com.br/destino/chile/" class="cl-primary">Chile</a></li>
            <li><a href="https://okintercambio.com.br/destino/espanha/" class="cl-primary">Espanha</a></li>
            <li><a href="https://okintercambio.com.br/destino/estados-unidos/" class="cl-primary">Estados Unidos</a></li>
            <li><a href="https://okintercambio.com.br/destino/franca/" class="cl-primary">França</a></li>
            <li><a href="https://okintercambio.com.br/destino/inglaterra/" class="cl-primary">Inglaterra</a></li>
            <li><a href="https://okintercambio.com.br/destino/irlanda/" class="cl-primary">Irlanda</a></li>
            <li><a href="https://okintercambio.com.br/destino/italia/" class="cl-primary">Itália</a></li>
            <li><a href="https://okintercambio.com.br/destino/malta/" class="cl-primary">Malta</a></li>
            <li><a href="https://okintercambio.com.br/destino/mexico/" class="cl-primary">México</a></li>
            <li><a href="https://okintercambio.com.br/destino/nova-zelandia/" class="cl-primary">Nova Zelândia</a></li>
          </ul>
        </div>
      </div>
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Motivos</h3>
        <div class="motivos">
          <div>
            <div>Aumenta a capacidade intelectual: Falar uma língua estrangeira aumenta sua funcionalidade cerebral. Ele
              é desafiado a reconhecer e comunicar-se em diferentes sistemas linguísticos.</div>
            <div></div>
            <div>É ótimo para sua carreira: A fluência em uma nova língua, suas chances de conseguir um emprego são bem
              maiores que as de pessoas que falam apenas um idioma.</div>
            <div></div>
          </div>
        </div><iframe class="w-100 youtube" height="315" src="https://www.youtube.com/embed/WL2wf2tg808?controls=0"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
    <div class="text-center col-12 mb-5"> <button class="saber-mais" data-toggle="modal"
        data-target="#modal-contact"> SABER MAIS </button></div>
  </div>
  <div class="position-relative w-100 bg-purple" id="business-english">
    <div class="d-flex justify-content-end"> <img class="img-banner w-75"
        src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-bussiness-english-descricao-ok-intercambio.webp"></div>
    <div class="w-100 position-absolute top-50">
      <h2 class="container" style="color: white">Business English</h2>
    </div>
  </div>
  <div class=" container mt-5">
    <div class="row">
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Sobre o Programa</h3>
        <div class="sobrePrograma">
          <p>O Programa de Business English atende executivos de várias áreas de atuação. Os cursos são desenvolvidos
            especialmente para atender as demandas para uma comunicação fluente, com vocabulário específico.</p>
          <p>A OK Intercâmbio firmou parceria com escolas reconhecidas pelo mundo todo por ministrarem cursos de
            especializações renomados e com certificação internacional.</p>
          <p>Profissionais do mundo dos negócios que queiram aproveitar o período das férias para aperfeiçoar o idioma e
            dar um upgrade na carreira, podem se inscrever.</p>
          <p>Os cursos ofertados são de curta ou longa duração, com opções em grupo ou individual, de acordo com as
            necessidades.</p>
        </div>
        <h3 class="mb-4 mt-4">Países ofertados</h3>
        <div class="row">
          <ul class="mb-4 column-list">
            <li><a href="https://okintercambio.com.br/destino/africa-do-sul/" class="cl-primary">África do sul</a></li>
            <li><a href="https://okintercambio.com.br/destino/australia/" class="cl-primary">Austrália</a></li>
            <li><a href="https://okintercambio.com.br/destino/canada/" class="cl-primary">Canadá</a></li>
            <li><a href="https://okintercambio.com.br/destino/estados-unidos/" class="cl-primary">Estados Unidos</a></li>
            <li><a href="https://okintercambio.com.br/destino/irlanda/" class="cl-primary">Irlanda</a></li>
            <li><a href="https://okintercambio.com.br/destino/malta/" class="cl-primary">Malta</a></li>
            <li><a href="https://okintercambio.com.br/destino/nova-zelandia/" class="cl-primary">Nova Zelândia</a></li>
          </ul>
        </div>
      </div>
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Duração</h3>
        <div class="motivos">
          <div>
            <div>O tempo mínimo de programa são 2 semanas e um prazo máximo é indeterminado! A partir dos 18 anos você
              pode embarcar nessa aventura transformadora. Além disso você tem a opção de se hospedar em uma casa de
              família, em uma residência estudantil ou em um hostel.</div>
            <div></div>
          </div>
        </div><iframe class="w-100 youtube" height="315" src="https://www.youtube.com/embed/o-uFqKV7fW8?controls=0"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
    <div class="text-center col-12 mb-5"> <button class="saber-mais" data-toggle="modal"
        data-target="#modal-contact"> SABER MAIS </button></div>
  </div>
  <div class="position-relative w-100 bg-yellow" id="intercambio-em-familia">
    <div class="d-flex justify-content-end"> <img class="img-banner w-75"
        src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-intercambio-em-familia-descricao-ok-intercambio.webp"></div>
    <div class="w-100 position-absolute top-50">
      <h2 class="container" style="color: white">Intercâmbio em família</h2>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row">
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Sobre o programa</h3>
        <div class="sobrePrograma">
          <p>Que tal embarcar com seus filhos para uma diferente viagem de férias?</p>
          <p>Este programa é a melhor opção para toda a família aprender um novo idioma enquanto explora o país.</p>
          <p>Funciona assim, cada integrante da família vai cursar no nível de conhecimento do idioma, porém todos no
            mesmo horário para que no tempo livre possam curtir as férias juntos e conhecer os principais pontos
            turísticos do local.</p>
          <p>Esta também é uma ótima oportunidade para os filhos fazerem um “teste” supervisionado pelos pais antes de
            passarem sozinhos pela experiência do intercâmbio.</p>
          <p>Este programa é inovador no sentido de contemplar todos os membros da família de forma igual, além da
            economia financeira e de tempo uma vez que todos estão aproveitando juntos para estudar, ampliar
            conhecimentos e se divertir.</p>
        </div>
        <h3 class="mb-4 mt-4">Países ofertados</h3>
        <div class="row">
          <ul class="mb-4 column-list">
            <li><a href="https://okintercambio.com.br/destino/australia/" class="cl-primary">Austrália</a></li>
            <li><a href="https://okintercambio.com.br/destino/espanha/" class="cl-primary">Espanha</a></li>
            <li><a href="https://okintercambio.com.br/destino/estados-unidos/" class="cl-primary">Estados Unidos</a></li>
            <li><a href="https://okintercambio.com.br/destino/inglaterra/" class="cl-primary">Inglaterra</a></li>
            <li><a href="https://okintercambio.com.br/destino/malta/" class="cl-primary">Malta</a></li>
          </ul>
        </div>
      </div>
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Motivos</h3>
        <div class="motivos">
          <p>Experiências incríveis: Trata-se de uma aventura cheia de aprendizados acadêmicos, pessoais e cultural que
            marcará para toda família essa experiência incrível.</p>
          <p>Aprender em um ambiente novo: Oportunidade única para pais que quer passear com os filhos e aproveitar para
            turbinar o idioma e vivência uma imersão cultural no país.</p>
          <p>Desenvolvimento Internacional: Imersão no idioma que preparar para enfrentar a realidade acadêmica e visão
            de mundo para carreira profissional.</p>
        </div> <iframe class="w-100 youtube" height="315" src="https://www.youtube.com/embed/XiuH9oB2d8Y?controls=0"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
    <div class="text-center col-12 mb-5"> <button class="saber-mais" data-toggle="modal"
        data-target="#modal-contact"> SABER MAIS </button></div>
  </div>
  <div class="position-relative w-100 bg-yellow" id="intercambio-em-grupo">
    <div class="d-flex justify-content-end"> <img class="img-banner w-75"
      src="<?= get_template_directory_uri(); ?>/assets/img/programas/banner-intercambio-em-familia-descricao-ok-intercambio.webp"></div>
    <div class="w-100 position-absolute top-50">
      <h2 class="container" style="color: white">Intercâmbio em grupo</h2>
    </div>
  </div>
  <div class=" container mt-5">
    <div class="row">
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Sobre o programa</h3>
        <div class="sobrePrograma">
          <p>Um summer camp (acampamento de verão) é uma experiência educativa e recreativa popular, principalmente em
            países como os Estados Unidos, Canadá e várias partes da Europa. Esses acampamentos acontecem geralmente
            durante as férias de verão e são projetados para oferecer a crianças e adolescentes um ambiente seguro e
            divertido para aprender, se socializar e desenvolver habilidades enquanto aproveitam o tempo ao ar livre.
          </p>
          <p>Os summer camps podem ser de diversos tipos, desde acampamentos gerais com atividades variadas, como
            esportes, artes, teatro, música e natação, até acampamentos especializados em áreas específicas, como
            ciência, tecnologia, robótica, línguas estrangeiras ou artes performáticas. A programação é pensada para
            equilibrar o aprendizado com o entretenimento, incentivando a autonomia, a responsabilidade, a cooperação e
            o desenvolvimento pessoal.</p>
          <p>Um dos maiores benefícios de um acampamento de verão é a oportunidade de conviver em um ambiente diferente,
            longe da rotina escolar e doméstica. Isso permite aos participantes desenvolver habilidades sociais, como
            trabalho em equipe, empatia e resolução de conflitos. Além disso, o contato com a natureza e com atividades
            físicas diárias contribui para a saúde física e mental.</p>
          <p>Para pais e cuidadores, um acampamento de verão representa a oportunidade de proporcionar aos filhos uma
            experiência enriquecedora, onde eles podem se divertir e crescer como indivíduos, ao mesmo tempo em que se
            mantêm ocupados de maneira construtiva durante o período de férias escolares.</p>
          <p></p>
        </div>
        <div class="row">
          <ul class="mb-4 column-list"></ul>
        </div>
      </div>
      <div class="col-12  col-lg-6">
        <h3 class="mb-4">Motivos</h3>
        <div class="motivos">
          <p>Os summer camps também oferecem a chance de construir novas amizades, muitas vezes com crianças de
            diferentes culturas e nacionalidades, o que pode expandir a perspectiva dos participantes sobre o mundo.</p>
        </div> 
        <iframe class="w-100 youtube" height="315" src="https://www.youtube.com/embed/MNY7WJY9kB8?controls=0"
          title="YouTube video player" frameborder="0"
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
          allowfullscreen></iframe>
      </div>
    </div>
    <div class="text-center col-12 mb-5"> <button class="saber-mais" data-toggle="modal"
        data-target="#modal-contact"> SABER MAIS </button></div>
  </div>
  <style>
    @media screen and (max-width:576px) {
      .post-frame {
        margin-top: 0;
      }
    }
  </style>
  <?php

  includeFile('components/depoimentos.php', 
      array()
  ); 
  
  ?>
</main>

<?php get_footer(); ?>