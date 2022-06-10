<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vue Dischi</title>
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <!-- style -->
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <!-- includo il database con require perchè è un elemento importante -->
  <?php require_once __DIR__ . "/database.php"; ?>
  
  <!-- header -->
  <header>
    <a href="https://www.spotify.com/">
      <img src="./img/spotify-download-logo-30.png" alt="Spotify logo" />
    </a>
  </header>
  
  <!-- main -->
  <main>
    <div class="container">
      <div class="row row-cols-3 row-cols-lg-6 mt-4">
        <!-- creo le varie card usando il ciclo foreach -->
        <?php foreach ($database as $element) { ?>
          <div class="my-card text-center p-3 mb-3 mx-3">
            <img src="<?php echo $element["poster"]; ?>" alt="<?php echo $element["title"]; ?>"/>
            <h2 class="p-3"><?php echo $element["title"]; ?></h2>
            <h3><?php echo $element["author"]; ?></h3>
            <h3><?php echo $element["year"]; ?></h3>
          </div>         
          <?php 
        }       
        ?>
      </div>
    </div>    
  </main>
</body>
</html>