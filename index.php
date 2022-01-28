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


  <link rel="stylesheet" href="/styles-clair.css" />
  <link rel="stylesheet" href="/dot/css/style.css" />
  <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.css" />
  <link rel="stylesheet" href="/node_modules/animate.css/animate.css" />
  <!--   LA GALERIE D IMAGE -->
  <link href="node_modules/lightbox2/dist/css/lightbox.css" rel="stylesheet" />
  <link rel="stylesheet" href="node_modules/sal.js/dist/sal.css">

  <!-- Carousel de site -->
  <link rel="stylesheet" href="/node_modules/flickity-docs/flickity.css" />
  <script src="/node_modules/flickity-docs/flickity.pkgd.js" type="text/javascript"></script>
  <!-- jS -->

  <script src="/dot/js//scripts.js"></script>
  <script src="node_modules/sal.js/dist/sal.js" type="text/javascript"></script>
  <script src="portolio.js" type="text/javascript"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
  <script src="node_modules/lightbox2/dist/js/lightbox-plus-jquery.js"></script>

  <!-- FONT -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Aclonica&family=Krona+One&family=Zen+Dots&display=swap" rel="stylesheet">

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-SZSL0B5JPK"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-SZSL0B5JPK');
  </script>

</head>

<body>


  
    <?php include 'header.php' ?>
    <main class="accueil">
    <div id="MOIJE" data-sal="fade" style="--sal-duration: 3s; --sal-delay: 1s;">
      <h1 id="ME">Qui suis-je ?</h1>
      <div id="about">
        <img src="/img/MOI.jpg" />
        <p>Étudiant en design et multimédia, je suis motivé ainsi qu’intéressé par le design et la technologie. Je fais preuve de sérieux tout en sachant travailler en équipe après avoir géré un groupe de joueurs durant 2 ans
        </p>

      </div>
      <a id="CV" href="./img/LOPEZ Alexandre CV.pdf" target="_blank">mon CV (PDF)</a>
    </div>

    <div >
    <h1 id="projet" >Catégories :</h1>
      <ul class="choise">
        <li><a href=" index.php?id_page=1">Projets site web</a></li>
        <li> <a href=" index.php?id_page=2">Galerie</a></li>
        <li> <a href="index.php?id_page=3">Animation</a></li>
        <li> <a href="index.php?id_page=4">Chartes graphiques</a></li>
        <li> <a href="index.php?id_page=5">Projet détaillé</a></li>
      </ul>
    </div>

    <div id="contenu"> 

    <?php
    
    if (!isset($_GET['id_page']))
      $id_page = 0;
    else
      $id_page = $_GET['id_page'];
    switch ($id_page) {
      case 1:
        $contenu = "site";
        break;
      case 2:
        $contenu = "galerie";
        break;
      case 3:
        $contenu = "animation";
        break;

        case 4:
          $contenu = "chartegraphique";
          break;

          case 5:
            $contenu = "detail";
            break;
  
        default:
        $contenu = "galerie";
        break;
    }
    require("project/" . $contenu . ".php");
 

    ?>
   



    <h1 id=" Contactpart">Contactez moi</h1>

    <div class="containere">


      <form class="contactForm" action="https://formsubmit.co/alexandre.lopez78310@gmail.com" method="POST" target="_blank">
        <div class="cible">
          <label for="fname">Nom & Prénom</label>
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


      <a class="chart" href="https://www.linkedin.com/in/alexandre-lopez-sholy/" title="cliquez pour avoir le linkedin" target="_blank"><img src="/img/contact/linkedin.svg" data-sal="fade" data-sal-delay="200" data-sal-duration="2000" style="padding: 10px;" /> </a>

      <a class="chart" href="https://www.instagram.com/shly_a/" title="cliquez pour avoir l'instagram" target="_blank"><img src="/img/contact/insta_Plan de travail 1.svg" data-sal="fade" data-sal-delay="200" data-sal-duration="2000" /> </a>


    </div>

    <footer>
      © Alexandre Lopez
    </footer>
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