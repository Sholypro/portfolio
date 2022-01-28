<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="../imgsrc/favicon.ico">
  <title>Unichamps</title>
  <link rel="stylesheet" href="../styles.css">
  <script src="script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
   
  <!-- POLICES -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
<?php include "$_SERVER[DOCUMENT_ROOT]/header.php"; ?>

<!-- NAVBAR VERTICAL -->
<ul class="nav flex-column bg-darkc  sidebar">
  <li class="nav-item">
   <a class="nav-link active text-white" href="#twitch-embed"><img src="../imgsrc/logo.svg"/><div id="texteSidebar">Twitch</div></a>
  </li>
  <li class="nav-item ">
    <a class="nav-link text-white" href="#youtube-embed"><img src="../imgsrc/logo.svg"><span class="texte-sidebar">Youtube</span></a>
  </li>
  <!-- <li class="nav-item">
    <a class="nav-link text-white" href="#"><span class="texte-sidebar">Streamer 3</span></a>
  </li>
  <li class="nav-item text-white">
    <a class="nav-link disabled" href="#"><span class="texte-sidebar">more?</span></a>
  </li> -->

  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-down-right-circle-fill" viewBox="0 0 16 16">
    <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm5.904-2.803a.5.5 0 1 0-.707.707L9.293 10H6.525a.5.5 0 0 0 0 1H10.5a.5.5 0 0 0 .5-.5V6.525a.5.5 0 0 0-1 0v2.768L5.904 5.197z"/>
  </svg>




</ul>


  <!-- INTEGRATION DE TWITCH -->

  <div id="stream">
    <!-- Add a placeholder for the Twitch embed -->
    <div id="twitch-embed"></div>

    <!-- Load the Twitch embed script -->
    <script src="https://embed.twitch.tv/embed/v1.js"></script>

    <!-- Create a Twitch.Embed object that will render within the "twitch-embed" root element. -->
    <script type="text/javascript">
      new Twitch.Embed("twitch-embed", {
        width: "80%",
        height: 670,
        autoplay:true,
        channel: "unichamps",
        // only needed if your site is also embedded on embed.example.com and othersite.example.com 
        parent: []
      });
    </script>
 

    <div id="youtube-embed">
    <iframe  width="80%" height="670" src="https://www.youtube.com/embed/5qap5aO4i9A" 
    title="YouTube Stream"
      frameborder="0" 
      allow=" autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
      allowfullscreen>
    </iframe>
  </div>
  </div>


 </body>

</html>