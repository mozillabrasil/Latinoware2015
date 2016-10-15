<?php

  function verificaDatas($dataInicio, $dataFim){
    $dataAtual = date("Y-m-d H:i:s");
    //$dataAtual = "2015-10-15 14:30:00";
    if($dataAtual >= $dataInicio && $dataAtual < $dataFim){
      echo ' class="occurring"';
    }elseif($dataAtual >= $dataFim){
      echo ' class="finished"';
    }
  }

?><!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/png" sizes="196x196" href="favicon.png">
    <title>Mozilla na Latinoware</title>
    <link href="css/bootstrap.min.css" rel="stylesheet
    " type="text/css">
    <link href="css/freelancer.css" rel="stylesheet" type="text/css">
    <link href="css/tables.css" rel="stylesheet" type="text/css">
    <link href='css/fonts.css' rel='stylesheet' type='text/css'>
</head>

<body id="topo" class="index">
    <nav class="navbar navbar-default navbar-fixed-top navbar-shrink">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#topo">Mozilla na Latinoware</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#topo"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#programacao">Programação Latinoware</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#staff">Quem faz acontecer</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#evento">Sobre o Evento</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/profile.png" width="400" alt="Comunidade Mozilla Brasil">
                </div>
            </div>
        </div>
    </header>

    <section id="programacao"> <!-- SECAO PROGRAMACAO -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="intro-text">
                      <span class="img-respo" style="text-align: center"><h2>Programação</h2></span>
                      <hr class="hr">
                  </div>
                </div>
            </div>

            <!-- TABELA DE PROGRAMAÇAO -->
            <table class="table table-bordered table-condensed table-nooverflow">
              <!-- CABEÇALHO DA TABELA -->
              <thead>
                  <tr>
                      <th style="text-align: center; width: 100px;">DATA</th>
                      <th style="text-align: center; width: 100%;">ATIVIDADES</th>
                  </tr>
              </thead>

              <!-- CORPO DA TABELA -->
              <tbody>

                  <!-- 1 LINHA -->
                  <tr class="info">
                    <td style="text-align: center;"><strong>14/10/2015<br/>10:00<br/></strong></td>
                    <td style="text-align: center;"><strong>INÍCIO DAS ATIVIDADES DA MOZILLA BRASIL!<br/>PRESENÇA NO STAND, VENHA PARTICIPAR!</strong></td>
                  </tr>

                  <!-- 2 LINHA -->
                  <tr <?php verificaDatas("2015-10-14 13:00:00", "2015-10-14 14:00:00"); ?>>
                    <!-- O QUE HA DE NOVO NO FIREFOX -->
                    <td style="text-align: center;"><strong>13:00~14:00<br/><br/>ESPAÇO EQUADOR</strong></td>
                    <td style="text-align: center;"><strong style="display: block;">PALESTRA: O que há de novo no Firefox?</strong>
                      <small>Samuel, Jaime, João, Urcu</small>
                      <div style="display: block;" class="description">
                        <div class="text-justify">
                            Veja o que foi implementado no Firefox no último ano e o que será implementado no futuro, além de conhecer algumas features que provavelmente tenham passadas despercebidas e que fazem o Firefox se tornar o navegador mais fácil de se utilizar no dia-a-dia.
                        </div>
                      </div>
                    </td>
                  </tr> <!-- FIM LINHA 2 -->

                <tr <?php verificaDatas("2015-10-14 16:00:00", "2015-10-14 17:00:00"); ?>> <!-- 3 LINHA -->
                  <!-- OPEN BADGES -->
                  <td style="text-align: center;"><strong>16:00~17:00<br/><br/>ESPAÇO URUGUAI</strong></td>
                  <td style="text-align: center;"> <!-- style="cursor: pointer;"> EFEITOS -->
                    <strong style="display: block;">PALESTRA: OpenBadges</strong>
                    <small>Jayme</small>
                    <div class="text-justify"> <!-- style="display: none;" class="description"> PARA EFEITOS -->
                      Com a evolução dos sistemas de EaD e os ambientes virtuais de aprendizagem é possível desenvolver novos conhecimentos e adquirir novas habilidades de qualquer lugar, não somente em salas de aula tradicionais. Mas como estimular e certificar o desenvolvimento de novas habilidades e do conhecimento nestes ambientes? Neste sentido surge a gamificação, que adiciona características de jogos a sistemas de informação e ambientes virtuais de aprendizagem. Os badges ou emblemas, são uma forma de estimular os usuários desses sistemas e também de certificar as habilidades desenvolvidas. Neste sentido a Mozilla desenvolveu a plataforma OpenBadges através da qual é possível emitir, armazenar e exibir badges/emblemas adquiridos. Nesta palestra apresentaremos como usar esta plataforma para a emissão, certificação e exibição de emblemas.
                    </div>
                  </td>
                </tr> <!-- FIM 3 LINHA-->

                <!-- 10 LINHA -->
                <tr <?php verificaDatas("2015-10-14 16:00:00", "2015-10-14 20:00:00"); ?>>
                  <td style="text-align: center;"><strong>16:00~20:00<br/><b/>LAB1</strong></td>
                  <td style="text-align: center;">
                    <strong style="display: block;">WORKSHOP: Ferramentas de desenvolvimento da Mozilla</strong>
                    <small>João, Samuel, Jaime</small>
                    <div style="display: block;" class="description">
                      <div class="text-justify">
                      Com as ferramentas de desenvolvimento do Firefox o desenvolvimento web fica muito mais fácil. Neste workshop vamos apresentar as ferramentas e como utilizar elas.
                    </div>
                    </div>
                  </td>
                </tr> <!-- FIM 10 LINHA -->

                <!-- 4 LINHA -->
                <tr class="info">
                  <td style="text-align: center;"><strong>20:00<br/></strong></td>
                  <td style="text-align: center;"><strong>ENCERRAMENTO DO DIA 14</strong></td>
                </tr> <!-- FIM 4 LINHA -->

                <!-- 5 LINHA -->
                <tr class="warning">
                  <td style="text-align: center;"><strong>15/10/2015</strong></td>
                  <td style="text-align: center;"><strong>INÍCIO DAS ATIVIDADES DO DIA 15!</strong></td>
                </tr> <!-- FIM 5 LINHA -->

                <!-- 6 LINHA -->
                <tr <?php verificaDatas("2015-10-15 10:00:00", "2015-10-15 14:00:00"); ?>>
                  <td style="text-align: center;"><strong>10:00~14:00<br/><br/>LAB1</strong></td>
                  <td style="text-align: center;">
                    <strong style="display: block;">WORKSHOP: Localização de produtos da Mozilla para português, castelhano e guarani</strong>
                    <small>Rocio</small>
                    <div style="display: block;" class="description">
                      <div class="text-justify">
                          Neste Workshop será demonstrado projetos que fazem parte do plano de trabalho de localização dos voluntários da comunidade Mozilla Brasil. Informações de como contribuir, quais as ferramentas estão disponíveis para o auxílio das traduções e ferramentas como Transifex, Pootle e muito mais! Venha fazer com que a web aberta chegue a todos os idiomas junto com a Mozilla Brasil!
                      </div>
                    </div>
                  </td>
                </tr> <!-- FIM 6 LINHA PARADO AQUI! -->

                <!-- 7 LINHA -->
                <tr <?php verificaDatas("2015-10-15 14:00:00", "2015-10-15 18:00:00"); ?>>
                  <td style="text-align: center;"><strong>14:00~18:00<br/><br/>LAB4</strong></td>
                  <td style="text-align: center;">
                    <strong style="display: block;">WORKSHOP: Como proteger sua privacidade na web</strong>
                    <small>Valéria, Aníbal, Samuel, Jaime</small>
                    <div style="display: block;" class="description">
                      <div class="text-justify">
                          “Sou um usuário comum, não preciso ter  tanta privacidade assim!”, se você pensa isso, não sabe metade do que podem estar fazendo com seus dados neste exato momento e no que isto poderá afetar o futuro de todos. Este é um dos objetivos da Mozilla, a privacidade dos usuários. Vamos mostrar alguns vilões, como se proteger deles e como nos ajudar.
                      </div>
                    </div>
                  </td>
                </tr> <!-- FIM 7 LINHA PARADO AQUI! -->

                <!-- 8 LINHA -->
                <tr class="warning">
                  <td style="text-align: center;"><strong>18:00~20:00</strong></td>
                  <td style="text-align: center;"><strong>PRESENÇA NO STAND, VENHA PARTICIPAR!</strong></td>
                </tr> <!-- FIM 8 LINHA -->

                <!-- 9 LINHA -->
                <tr class="info">
                  <td style="text-align: center;"><strong>16/10/2015</strong></td>
                  <td style="text-align: center;"><strong>INÍCIO DAS ATIVIDADES DO DIA 16!</strong></td>
                </tr> <!-- FIM 9 LINHA -->

                <!-- 10 LINHA -->
                <tr <?php verificaDatas("2015-10-16 10:00:00", "2015-10-16 14:00:00"); ?>>
                  <td style="text-align: center;"><strong>10:00~14:00<br/><br/>LAB1</strong></td>
                  <td style="text-align: center;">
                    <strong style="display: block;">WORKSHOP: Webmaker</strong>
                    <small>Rocio, Samuel, Urcu</small>
                    <div style="display: block;" class="description">
                      <div class="text-justify">
                          Mozilla Webmaker transforma os usuários da Web em criadores da Web. Você pode construir conteúdos originais como livros de recados, galerias de fotos, memes, tirinhas e muito mais. O design único e flexível do aplicativo torna sua experiência simples e intuitiva. Webmaker é gratuito, de código aberto e independente. Venha conhecer esta maravilhosa ferramenta e fazer parte também deste Projeto com a Mozilla Brasil!
                      </div>
                    </div>
                  </td>
                </tr> <!-- FIM 10 LINHA -->

                <!-- 11 LINHA -->
                <tr <?php verificaDatas("2015-10-15 14:30:00", "2015-10-15 15:30:00"); ?>>
                  <td style="text-align: center;"><strong>14:30~15:30<br/><br/>ESPAÇO COLÔMBIA</strong></td>
                  <td style="text-align: center;">
                      <strong style="display: block;">PALESTRA: Envolva-se com a Mozilla Brasil e Paraguai</strong>
                      <small>Rocio, Samuel, Jaime, João, Urcu</small>
                      <div style="text-justify" class="description">
                          <div class="text-justify">
                            Você já participou de alguma comunidade de Software Livre? sabe o quão divertido é participar de uma? Nesta palestra iremos apresentar os vários metodos em que você pode contribuir com uma comunidade de Software Livre (e não somente com a Mozilla).
                          </div>
                      </div>
                  </td>
                </tr> <!-- FIM 11 LINHA -->

                <!-- INICIO LINHA 12 -->
                <tr <?php verificaDatas("2015-10-15 15:30:00", "2015-10-15 16:30:00"); ?>>
                  <!-- WEBMAKER -->
                  <td style="text-align: center;"><strong>15:30~16:30<br/><br/>ESPAÇO COLÔMBIA</strong></td>
                  <td style="text-align: center;">
                    <strong style="display: block;">PALESTRA: Webmaker</strong>
                    <small>Rocio, Urcu</small>
                    <div style="display: block;" class="description">
                      <div class="text-justify">
                          Mozilla Webmaker transforma os usuários da Web em criadores da Web. Você pode construir conteúdos originais como livros de recados, galerias de fotos, memes, tirinhas e muito mais. O design único e flexível do aplicativo torna sua experiência simples e intuitiva. Webmaker é gratuito, de código aberto e independente. Venha fazer parte também deste Projeto com a Mozilla Brasil!
                      </div>
                    </div>
                  </td>
                </tr> <!-- FIM LINHA 12 -->

                <!-- 13 LINHA -->
                <tr <?php verificaDatas("2015-10-15 16:30:00", "2015-10-15 17:30:00"); ?>> <!-- WOMOZ, MINICURSO -->
                  <!-- WOMOZ -->
                  <td style="text-align: center;"><strong>16:30~17:30<br/><br/>ESPAÇO COLÔMBIA</strong></td>
                  <td style="text-align: center;">
                    <strong style="display: block;">PALESTRA: WoMoz</strong>
                    <small>Valéria</small>
                    <div style="display: block;" class="description">
                      <div class="text-justify">
                          WoMoz (Women & Mozilla) é uma comunidade composta por entusiastas da web aberta com foco em aumentar o envolvimento de mulheres na tecnologia. Nosso objetivo principal é dar maior visibilidade e incentivar o trabalho das mulheres dentro do mundo Open Source. O WoMoz existe desde 2009 e tem passado por reformulações de objetivos. No Brasil o movimento foi iniciado em outubro de 2014 por um grupo de voluntárias da comunidade brasileira. O futuro da web está em nossas mãos, venha lutar com a gente!
                      </div>
                    </div>
                  </td>
                </tr> <!-- FIM 13 LINHA -->

                <!-- 15 LINHA -->
                <tr class="info">
                  <td style="text-align: center;"><strong>17:30~20:00</strong></td>
                  <td style="text-align: center;"><strong>ENCERRAMENTO. PRESENÇA NO STAND, VENHA PARTICIPAR!</strong></td>
                </tr> <!-- FIM 15 LINHA -->

              </tbody> <!-- FIM CORPO DA TABELA -->
            </table> <!-- FECHAMENTO DE TABELA -->
        </div>

    </section>

    <section class="success" id="staff"> <!-- SECAO QUEM FAZ ACONTECER -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Quem faz acontecer</h2>
                    <hr class="hr">
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="col-lg-4">
                      <p>
                        <a href="http://latinoware.org/anibal-centurion/">
                           <img src="img/anibalc.png" width="200"/>
                        </a>
                      </p>
                      <p>Aníbal Centurión</p>
                    </div>
                    <div class="col-lg-4">
                      <p>
                        <a href="https://mozillians.org/pt-BR/u/du.barros/">
                           <img src="img/eduardob.jpg" width="200"/>
                        </a>
                      </p>
                      <p>Eduardo Barros</p>
                    </div>
                    <div class="col-lg-4">
                      <p>
                        <a href="http://latinoware.org/eduardo-urcullu/">
                           <img src="img/eduardou.png" width="200"/>
                        </a>
                      </p>
                      <p>Eduardo Urcullú</p>
                    </div>
                </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-12">
                  <div class="col-lg-4">
                      <p>
                        <a href="http://latinoware.org/jaime-maretoli/">
                           <img src="img/jaime.jpg" width="200"/>
                        </a>
                      </p>
                      <p>Jaime Maretoli</p>
                  </div>
                  <div class="col-lg-4">
                    <p>
                      <a href="http://latinoware.org/jayme-ayres/">
                         <img src="img/jaymeayres.png" width="200"/>
                      </a>
                    </p>
                      <p>Jayme Ayres</p>
                  </div>
                  <div class="col-lg-4">
                      <p>
                        <a href="http://latinoware.org/joao-paulo-polles/">
                           <img src="img/joaop.jpg" width="200"/>
                        </a>
                      </p>
                      <p>João Polles</p>
                  </div>
              </div>
            </div>

            <div class="row text-center">
                <div class="col-lg-12">
                  <div class="col-lg-4">
                    <p>
                      <a href="http://latinoware.org/rocio-soledad-meza/">
                         <img src="img/rocios.png" width="200"/>
                      </a>
                    </p>
                      <p>Rocío Meza</p>
                  </div>
                  <div class="col-lg-4">
                    <p>
                      <a href="http://latinoware.org/samuel-moraes/">
                         <img src="img/samuel.png" width="200"/>
                      </a>
                    </p>
                      <p>Samuel Moraes</p>
                  </div>
                  <div class="col-lg-4">
                    <p>
                      <a href="http://latinoware.org/valeria-barros/">
                         <img src="img/valeriab.png" width="200"/>
                      </a>
                    </p>
                      <p>Valéria Barros</p>
                  </div>
                </div>
            </div>
        </div>
    </section>

    <section id="evento"> <!-- SECAO CONTATO -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>LATINOWARE 2015</h2>
                    <hr class="hr">
                </div>
            </div>

            <!-- TEXTO SOBRE O EVENTO -->
            <div class="row">
              <div class="col-lg-12 text-center">
                <div class="col-lg-12 text-justify">
                    <form role="form">
                        <div class="row">
                            <p>
                              <a target="_blank" href="http://latinoware.org/">A 12ª Conferencia Latino-americana de Software Livre</a>
                              ou <a target="_blank" href="http://latinoware.org/">Latinoware</a> é um evento
                              que ocorre anualmente no <a target="_blank" href="http://www.openstreetmap.org/way/32236291#map=14/-25.4129/-54.5968">Parque
                                Tecnológico Itaipu em Foz do Iguaçu, Paraná no Brasil.</a>
                              E neste ano, 2015, além de poder ampliar os seus conhecimentos sobre as ferramentas
                              livres de desenvolvimento, o público poderá trocar experiências e impressões sobre
                              os projetos inovadores de código aberto. Com uma proposta cada vez mais abrangente, a
                              <a target="_blank" href="http://latinoware.org/">Latinoware</a> se destaca por reunir um amplo conteúdo de
                              informações, ideal para que estudantes, professores, pesquisadores e especialistas compartilhem
                              os seus conhecimentos no mesmo ambiente. Um evento que que vai além da apresentação das novidades do setor.
                              A Conferência promove também a integração cultural, econômica e tecnológica da América Latina, visando ampliar os
                               debates relacionados ao acesso às diferentes ferramentas de código aberto com diversas atividades
                               relacionadas a tecnologia. A Grade de
                               <a target="_blank" href="http://lapsi.latinoware.org/index.php?r=Program.ViewProgram&p=aWRQcm9ncmFtPTMy"> Palestras</a>,
                               <a target="_blank" href="http://lapsi.latinoware.org/index.php?r=Program.ViewProgram&p=aWRQcm9ncmFtPTMx">Minicursos</a> e o
                               <a target="_blank" href="http://lapsi.latinoware.org/index.php?r=Program.ViewProgram&p=aWRQcm9ncmFtPTMz">Fórum Latino de Hardware Livre</a>
                                podem ser visualizadas através do sistema <a target="_blank" href="https://lapsi.latinoware.org/">Lapsi</a>
                                do <a target="_blank" href="http://latinoware.org/">evento.</a> A <a target="_blank" href="http://mozillabrasil.org.br/">Comunidade Mozilla Brasil</a>
                                 faz sua presença novamente no <a target="_blank" href="http://latinoware.org/">Latinoware</a>
                                 com diversas <a href="#programacao">atividades, palestas, workshops</a> e muito mais no seu stand.
                            </p>
                        </div>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-6">
                        <a href="http://mozillabrasil.org.br/">Comunidade Mozilla Brasil</a>
                    </div>
                    <div class="footer-col col-md-6 text-right">
                        <a href="https://facebook.com/mozillabrasil">Facebook</a> <small style="color:#1A1A1A;">-</small> <a href="http://twitter.com/mozillabrasil">Twitter</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>
    <script src="js/freelancer.js"></script>
</body>
</html>
