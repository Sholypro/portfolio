<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="/img/lopez.png">
  <title>Portfolio</title>
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <meta name="description" content="Lopez Alexandre Porfolio">
  <meta name="keywords" content="LOPEZ ALEXANDRE, LOPEZ , Alexandre, Design, Front-end,infographie">
  <meta name="author" content="Lopez Alexandre">
  <!-- CSS -->
  
  <link rel="stylesheet" href="./loader.css" />
  <link rel="stylesheet" href="/styles-clair.css" />
  <link rel="stylesheet" href="/dot/css/style.css" />
  <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css" />
  <link rel="stylesheet" href="/node_modules/animate.css/animate.css" />
  <!--   LA GALERIE D IMAGE -->
  <link href="node_modules/lightbox2/dist/css/lightbox.css" rel="stylesheet" />
  <link rel="stylesheet" href="node_modules/sal.js/dist/sal.css">

  <!-- Carousel de site -->
  <link rel="stylesheet" href="/flickity-docs/flickity.css" />
  <script src="./flickity-docs/flickity.pkgd.js" type="text/javascript"></script>
  <!-- jS -->

  <script src="/dot/js//scripts.js"></script>
  <script src="node_modules/sal.js/dist/sal.js" type="text/javascript"></script>
  <script src="portolio.js" type="text/javascript"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
  <script src="node_modules/lightbox2/dist/js/lightbox-plus-jquery.js"></script>

  <!-- FONT -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Krona+One&family=Zen+Dots&display=swap" rel="stylesheet">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SZSL0B5JPK"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SZSL0B5JPK');
</script>

</head>

<body>


  <main class="accueil">
    <header class="header sticky-top">
      <!-- <img id="lopez" src="img/nom.png" /> -->
      <h2 id="lopez" class="animate__animated animate__backInRight animate__slow">Lopez Alexandre</h1>

        <nav class="navbar">
        <li class="animate__animated animate__backInRight animate__slow"><a href="#projet">Projet</a></li>

          <li class="animate__animated animate__backInRight animate__slow "><a href="#portfolio">Portfolio</a></li>
        
          <li class="animate__animated animate__backInRight animate__slow"><a href="#Contactpart">Contact</a></li>
        </nav>

    </header>

    <div id="MOIJE" data-sal="fade" style="--sal-duration: 3s; --sal-delay: 1s;">
      <h1 id="ME">Qui suis-je ?</h1>
      <div id="about">
        <img src="./img/MOI.jpg" />
        <p>Étudiant en design et multimédia, je suis motivé ainsi qu’intéressé par le design et la technologie. Je fais preuve de sérieux tout en sachant travailler en équipe après avoir géré un groupe de joueurs durant 2 ans
        </p>

      </div>
      <a id="CV" href="./img/LOPEZ Alexandre CV.pdf" target="_blank">Mon CV (PDF)</a>
    </div>
    <!-- CAROUSEL SITE -->
    <h1 id="projet" class="animate__animated animate__backInLeft animate__delay-2s animate__slow">Projet Site web</h1>

    <div class="carousel animate__animated animate__backInLeft animate__delay-2s animate__slow" title="Cliquez pour visiter le site" data-flickity>
      <!-- UNICHAMPS -->
      <div class="carousel-cell">
        <a href="https://unichamps.sholy.fr" target="_blank"> <img src="./img/unichamps.mokup.png" width="100%" alt="unichamps website picture" /></a>
        <p> Le projet Unichamps est un tournois Esport organisé dans le cadre de mon Projet tutoré. Ce tournoi rassemble 5 jeux et est retransmis en direct sur twitch youtube et visionnable sur le site du projet via les API de ces derniers. (Le site est toujours en développement)</p>
      </div>

      <!-- UNIPLAY -->
      <div class="carousel-cell">
        <a href="./uniplay/index.php"><img src="./img/uniplay.png" width="100%" ghe alt="uniplay website picture" /></a>
        <p> Le projet Uniplay est le site de l'agence du même nom, cette agence fictive a pour rôle d'organiser des évenements tel que le tournoi Esport Unichamps (Le site est toujours en développement)</p>
      </div>
      <!-- COLORLESS -->
      <div class="carousel-cell">

        <a href="https://www.colorless.sholy.fr" target="_blank"> <img src="./img/colorless.mokup.png" width="100%" ghe alt="colorless website picture" /></a>
        <p> Le projet Colorless était un site web pour débutant sur le jeu vidéo Albion Online, je l'avais réalisé pour leur permettre de savoir quoi porter durant les différentes activités. </p>
      </div>


    </div>
    <h1 id="portfolio">Visuels</h1>

    <script>
      lightbox.option({
        'fitImagesInViewport': true,
        'showImageNumberLabel': false,
        'disableScrolling': true
      });
    </script>

    <div class="grid-container " title="cliquez pour agrandir">

      <div class="c1" data-sal="slide-left" data-sal-delay="200" data-sal-duration="1200"><a href="./img/grid/baniere-sholy.png" data-lightbox="MaGalerie" data-title="Logo twitch de Sholy"> <img class="image-zoom" src="./img/grid/baniere-sholy.png" alt="logo sholy" /></a> </div>
      <div class="c2" data-sal="slide-left" data-sal-delay="200" data-sal-duration="1200"><a href="./img/grid/explain/sholylogo-explain_Plan de travail 1.jpg" data-lightbox="MaGalerie" data-title="Bannière Twitch et Youtube pour Sholy "><img class="image-zoom" src="./img/grid/logo-sholy.png" alt="banière twitch sholy" /></a></div>
      <div class="c3" data-sal="slide-left" data-sal-delay="200" data-sal-duration="1200"><a href="./img/grid/explain/SPACEBURGER_Plan de travail 1.jpg" data-lightbox="MaGalerie" data-title="Logo de l'event Esport Unichamps"><img class="image-zoom" src="./img/grid/space burger.jpg" alt="logo Unichamps" /></a></div>

      
      <div class="c4" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/widget-insta.png" data-lightbox="MaGalerie" data-title="Widget Instagram pour la chaine Twitch de Sholy"><img class="image-zoom" src="./img/grid/widget-insta.png" alt="" /></a></div>
      <div class="c5" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/widget-donation.png" data-lightbox="MaGalerie" data-title="Widget Donation pour la chaine twitch de Sholy"><img class="image-zoom" src="./img/grid/widget-donation.png" alt="" /></a></div>
      <div class="c6" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/widget-discord.png" data-lightbox="MaGalerie" data-title="Widget Discord pour la chaine Twitch de Sholy"><img class="image-zoom" src="./img/grid/widget-discord.png" alt="" /></a></div>

      <div class="c7" data-sal="slide-left" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/coupe-darkness.jpg" data-lightbox="MaGalerie" data-title="Photo teasing de la coupe a gagné lors de l'Unichamps"><img class="image-zoom" src="./img/grid/coupe-darkness.jpg" alt="mokup uniplay" /></a></div>
      <div class="c8" data-sal="slide-left" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/explain/unichamps-explain_Plan de travail 1.jpg" data-lightbox="MaGalerie" data-title="Logo de l'agence UniPlay"><img class="image-zoom" src="./img/grid/esport-logo.png" alt="logo uniplay" /></a></div>
      <div class="c9" data-sal="slide-left" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/coupe-light.jpg" data-lightbox="MaGalerie" data-title="Mokup de vitrine pour l'agence UniPlay"><img class="image-zoom" src="./img/grid/coupe-light.jpg" alt="mokup hestia" /></a></div>

      <div class="c10" data-sal="slide-left" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/cartevisite-studio.png" data-lightbox="MaGalerie" data-title="Mokup de carte de visite pour l'agence UniPlay"><img class="image-zoom" src="./img/grid/cartevisite-studio.png" alt="mokup uniplay" /></a></div>
      <div class="c11" data-sal="slide-left" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/explain/Uniplay-explain_Plan de travail 1.jpg" data-lightbox="MaGalerie" data-title="Logo de l'agence UniPlay"><img class="image-zoom" src="./img/grid/uniplay-logo.png" alt="logo uniplay" /></a></div>
      <div class="c12" data-sal="slide-left" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/vitrine-studio.png" data-lightbox="MaGalerie" data-title="Mokup de vitrine pour l'agence UniPlay"><img class="image-zoom" src="./img/grid/vitrine-studio.png" alt="mokup hestia" /></a></div>

      <div class="c13" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/sac-papier.png" data-lightbox="MaGalerie" data-title="Mokup de vitrine pour l'entreprise Mod'elle"><img class="image-zoom" src="./img/grid/sac-papier.png" alt="" /></a></div>
      <div class="c14" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/baniere-homme.png" data-lightbox="MaGalerie" data-title="Bannière Facebook de l'entreprise Mod'elle"><img class="image-zoom" src="./img/grid/baniere-homme.png" alt="" /></a></div>
      <div class="c15" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/vitrine-modelle.png" data-lightbox="MaGalerie" data-title="Mokup sac en papier de l'entreprise Mod'elle"><img class="image-zoom" src="./img/grid/vitrine-modelle.png" alt="" /></a></div>

      <div class="c16" data-sal="slide-left" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/hestia-clavier.png" data-lightbox="MaGalerie" data-title="Logo pour l'entreprise fictive Hestia"><img class="image-zoom" src="./img/grid/hestia-clavier.png" alt="" /></a></div>
      <div class="c17" data-sal="slide-left" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/explain//hestia-explain_Plan de travail 1.jpg" data-lightbox="MaGalerie" data-title="Logo de l'entreprise fictive Hestia."><img class="image-zoom" src="./img/grid/hestia-logo.png" alt="" /></a></div>
      <div class="c18" data-sal="slide-left" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/vitine-hestia.png" data-lightbox="MaGalerie" data-title="Mokup de vitrine pour l'entreprise fictive Hestia"><img class="image-zoom" src="./img/grid/vitine-hestia.png" alt="" /></a></div>

      <div class="c19" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/lennymokuptissu.jpg" data-lightbox="MaGalerie" data-title="Mokup tissu pour le logo du joueur de football Lenny Joseph"><img class="image-zoom" src="./img/grid/lennymokuptissu.jpg" alt="" /></a></div>
      <div class="c20" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/explain//Lj-explain_Plan de travail 1.jpg" data-lightbox="MaGalerie" data-title="Logo du joueur de football Lenny Joseph"><img class="image-zoom" src="./img/grid/logo-lenny.png" alt="" /></a></div>
      <div class="c21" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/caselenny.png" data-lightbox="MaGalerie" data-title="Merchandising fictive pour Lenney Joseph"><img class="image-zoom" src="./img/grid/caselenny.png" alt="" /></a></div>

      <div class="c22" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/offline-unichamps.png" data-lightbox="MaGalerie" data-title="Écran d'affichage OFFLINE twich pour la chaine Unichamps"><img class="image-zoom" src="./img/grid/offline-unichamps.png" alt="" /></a></div>
      <div class="c23" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/a3-unichamps.png" data-lightbox="MaGalerie" data-title="Affiche A3 pour l'annoncement de l'event Unichamps"><img class="image-zoom" src="./img/grid/a3-unichamps.png" alt="" /></a></div>
      <div class="c24" data-sal="slide-right" data-sal-delay="300" data-sal-duration="1200"><a href="./img/grid/overlay-unichamps.png" data-lightbox="MaGalerie" data-title="Exemple d'utilisation d'un des l'overlay de stream Unichamps"><img class="image-zoom" src="./img/grid/overlay-unichamps.png" alt="" /></a></div>



    </div>

    <h1>Animation</h1>
    <iframe width="70%" height="auto" src="https://www.youtube.com/embed/oer_ChuwCIA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

    </iframe></section>
    <section>
      <!-- CHARTE GRAPHIQUE-->
      <h1 class="alt">Chartes Graphique</h1>
      <div id="nomobile" class="carousel " title="Cliquez pour visiter le site" data-flickity >
        <!-- UNICHAMPS -->
        <div class="carousel-cell">
          <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
            <div class="responsive-wrapper 
     responsive-wrapper-wxh-572x612" style="-webkit-overflow-scrolling: touch; overflow: auto;">

              <iframe src="./img/uniplay-chartegraphique.pdf">
                <p style="font-size: 110%;"><em><strong>ERROR: </strong>
                    An &#105;frame should be displayed here but your browser version does not support &#105;frames. </em>Please update your browser to its most recent version and try again.</p>
              </iframe>

            </div>
          </div>
        </div>
        <!-- COLORLESS -->
        <div class="carousel-cell">
          <div id="Iframe-Master-CC-and-Rs" class="set-margin set-padding set-border set-box-shadow center-block-horiz">
            <div class="responsive-wrapper 
     responsive-wrapper-wxh-572x612" style="-webkit-overflow-scrolling: touch; overflow: auto;">

              <iframe src="./img/Charte-graphique-Event.pdf">
                <p style="font-size: 110%;"><em><strong>ERROR: </strong>
                    An &#105;frame should be displayed here but your browser version does not support &#105;frames. </em>Please update your browser to its most recent version and try again.</p>
              </iframe>


            </div>
          </div>
        </div>


      </div>


      <div id="onlymobile">
        <div id="CG">
          <p>Charte graphique UniPlay</p>
          <a href="./img/uniplay-chartegraphique.pdf" download="./img/uniplay-chartegraphique.pdf">Télécharger</a>
          <p>Charte graphique UniChamps</p>
          <a href="./img/Charte-graphique-Event.pdf" download="./img/Charte-graphique-Event.pdf">Télécharger</a>
        </div>
      </div>


      <h1 id="Contactpart">Contactez moi</h1>

      <div class="containere">


        <form class="contactForm" action="https://formsubmit.co/alexandre.lopez78310@gmail.com" method="POST" target="_blank">
          <div class="cible">
            <label for="fname">Nom & prénom</label>
            <input type="text" name="name" placeholder="Votre nom" required>
          </div>
          <div class="cible">
            <label for="emailAddress">Email</label>
            <input type="email" name="email" placeholder="Votre adresse mail" required>
          </div>

          <label for="sujet">Objet</label>
          <input type="text" name="subject" placeholder="Objet" required>


          <label for="subject">Message</label>
          <textarea name="message" placeholder="Votre message" required></textarea>


          <input type="submit" name="submit"></input>
        </form>
      </div>
      <div id="contact">

        <img class="chart" src="/img/contact/mail_Plan de travail 1.svg" title="cliquez pour avoir le mail" onclick="cliclic('alexandre.lopez78310@gmail.com')" data-sal="fade" data-sal-delay="200" data-sal-duration="2000" />

        <img class="chart" src="./img/telephone-fill.svg" title="cliquez pour avoir le numéro de téléphone" onclick="cliclic('0646793390')" data-sal="fade" data-sal-delay="200" data-sal-duration="2000" />


        <a class="chart" href="https://www.linkedin.com/in/alexandre-lopez-sholy/" title="cliquez pour avoir le linkedin" target="_blank"><img src="/img/contact/linkedin.svg" data-sal="fade" data-sal-delay="200" data-sal-duration="2000"  style="padding: 10px;"/> </a>

        <a class="chart" href="https://www.instagram.com/shly_a/" title="cliquez pour avoir l'instagram" target="_blank"><img src="/img/contact/insta_Plan de travail 1.svg" data-sal="fade" data-sal-delay="200" data-sal-duration="2000"/> </a>


      </div>


      <!-- Bouton pour aller en haut de page -->
      <div id="scrollUp">
        <a href="#top"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-up-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V11.5z" />
          </svg></a>
      </div>

      <script>
        jQuery(function() {
          $(function() {
            $(window).scroll(function() {
              if ($(this).scrollTop() > 200) {
                $('#scrollUp').css('right', '10px');
              } else {
                $('#scrollUp').removeAttr('style');
              }

            });
          });
        });

        sal({
          threshold: 0.7,
          once: true,

        });
      </script>

  </main>
</body>

</html>