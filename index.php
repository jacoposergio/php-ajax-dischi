<?php require __DIR__ . '/database.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-ajax-dischi </title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;0,900;1,200;1,300;1,400;1,600;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<header>
    <div class="spotify-logo">
        <img src="img/Spotify_logo_without_text.svg.png" alt="spotify logo">
    </div>
  </header>
  <main>
      <div class="main-wrapper">
          <div class="container-fluid">
              <div class="row gx-5 row-cols-md-3">
                  <?php foreach($database as $disc){ ?> 
                  <div class="col">
                    <div class="ms_card">
                        <div class="song-img">
                        <img src="<?php echo $disc['poster'] ?>" alt="poster <?php echo $disc['title'] ?> ">
                        </div>
                        <h3><?php echo $disc['title'] ?></h3>
                        <h4><?php echo $disc['author'] ?></h4>
                        <h5><?php echo $disc['year'] ?></h5>
                    </div>
                 <?php } ?>
                </div> 
            </div>
        </div>
    </div>
  </main>
    
</body>
</html>