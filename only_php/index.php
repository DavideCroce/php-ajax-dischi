<?php
include 'data/data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/8/84/Spotify_icon.svg">
    <title>Spotify</title>
</head>

<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/8/84/Spotify_icon.svg" alt="">
    </header>
    <main>
        <div class="container">
            <ul class="container d-flex flex-row flex-wrap">
                <?php foreach ($songs as $song) : ?>
                    <li class="col-3 d-flex justify-content-center flex-column mx-4 pb-5 mb-4">
                        <img src="<?php echo $song['poster'] ?>" alt="">
                        <h3><?php echo $song['title'] ?></h3>
                        <div class="description">
                            <div class="author"><?php echo $song['author'] ?></div>
                            <div class="year"><?php echo $song['year'] ?></div>
                        </div>
                    </li>
                <? endforeach ?>
            </ul>
        </div>
    </main>
</body>

</html>