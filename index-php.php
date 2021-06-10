<?php

require_once __DIR__ . "/data/db.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="styles/style.css">
  <title>Dischi PHP</title>
</head>
<body>

<header class="d-flex justify-content-between ps-3 pe-3">
    <div>
      <img src="img/spotify-logo.png" alt="Spotify">
    </div>
    <div>
   
    </div>
  </header>

  <main class="container mt-5">
    <div class="d-flex flex-wrap">

<?php foreach($database as $album): ?>

      <div class="disc p-3 text-center">
        <div class="p-3">
          <img class="img-fluid mb-3" 
          src="<?php echo $album['poster']?>" 
          alt="<?php echo $album['title']?>">
          <h4><?php echo $album['title']?></h4>
          <h3><?php echo $album['author']?></h3>
          <h5><?php echo $album['year']?></h5>
        </div>
      </div>

<?php endforeach; ?>
      

    </div>
  </main>



</body>
</html>