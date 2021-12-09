<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/Style/header.css">
    <link rel="stylesheet" href="./assets/Style/main.css">
    <title>Document</title>
</head>
<body>

<header>
    <img src="./assets/img/Spotify_logo_without_text.svg" alt="" />
</header>

<main>

    <div class="container">
    
    <?php foreach( $apiMusics as $disk){
    
    ?>
    <div class="disco">
        <div class="cover">
          <img src="<?= $disk["poster"] ?>" alt="" />
        </div>
        <h2>
            <?= $disk["title"] ?>
        </h2>
        <p>
          <?= $disk["author"] ?> <br />
          <?= $disk["year"] ?>
        </p>
    </div>
    
    <?php
    }
    
    ?>
    </div>
    
</main>


</body>
</html>