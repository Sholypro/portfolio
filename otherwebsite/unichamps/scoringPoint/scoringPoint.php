<!doctype html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="../imgsrc/favicon.ico">
  <title>Unichamps</title>
  <link rel="stylesheet" href="/styles.css">
  <link rel="stylesheet" href="scoringPoint.css">
  <script src="script.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
    crossorigin="anonymous"></script>
  
  <!-- POLICES  -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300&display=swap" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- POLICE POUR LE MESSAGE AU MILIEUX DU HOME -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@900&display=swap" rel="stylesheet">
  <script type="text/javascript" src="Team.json"></script>
  <script type="text/javascript" src="testJSON.js"></script>
  <meta http-equiv="Refresh" content="20">
</head>

<body>
<?php include "$_SERVER[DOCUMENT_ROOT]/header.php"; ?>

 
 <table class="table" id="data" style="width: 600px">
  <thead>
    <tr>
      <th scope="col" class="Rank" >Position</th>
      <th scope="col" class="Team">Team</th>
      <th scope="col" class="Points">Points</th>
    </tr>
  </thead>
  <tbody id="Leaderboard">
    
  </tbody>
</table> 


<!-- BOUTON POUR ALLER EN ADMIN MODE -->
<div id="admin-part">
    <a href="../admin/admin.php">
    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor" class="bi bi-award-fill" viewBox="0 0 20 20">
        <path d="m8 0 1.669.864 1.858.282.842 1.68 1.337 1.32L13.4 6l.306 1.854-1.337 1.32-.842 1.68-1.858.282L8 12l-1.669-.864-1.858-.282-.842-1.68-1.337-1.32L2.6 6l-.306-1.854 1.337-1.32.842-1.68L6.331.864 8 0z"/>
        <path d="M4 11.794V16l4-1 4 1v-4.206l-2.018.306L8 13.126 6.018 12.1 4 11.794z"/>
      </svg>
    </a>
</div>

</body>

</html>