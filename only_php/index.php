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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.14/vue.common.dev.min.js" integrity="sha512-TpgbLHXaTCAZ7ULhjopb1PveTz5Jx6KEQUtMfXhV0m0EArh+6O8ybZjjDN1Yug6oagN6iFm6EoMjuYSiFr0qXQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Spotify</title>
</head>

<body>
    <div class="container">
        <ul <?php foreach ($songs as $song) : ?> class="container d-flex flex-row ">
            <li>
                <img src="<?php echo $song['poster'] ?>" alt="">
                <h3><?php echo $song['title'] ?></h3>
                <div class="description">
                    <div class="author"><?php echo $song['author'] ?></div>
                    <div class="year"><?php echo $song['year'] ?></div>
                </div>
            </li>
        </ul <? endforeach ?>>
    </div>
</body>

</html>