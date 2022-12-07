<?php
require __DIR__ . '/db.php';
$randBool = (bool) mt_rand(0, 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Class</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <main id="site_main" class="py-5">
        <h1 class="text-center">Movies Class</h1>
        <div class="container pt-3">
            <div class="row row-cols-1 row-cols-3 gy-4">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col movie">
                        <div class="ms_card bg-white p-3 mx-2">
                            <img src=<?= './assets/img/' . $movie->img ?> alt=<?= $movie->title ?>>
                            <h1><?= $movie->title ?></h1>
                            <p><?= $movie->desc ?></p>
                            <div class="genres d-flex flex-wrap">
                                <?php foreach ($movie->genres as $genre) : ?>
                                    <div class="genre bg-primary text-white me-3 px-3 py-1  text-center rounded-4 text-uppercase <?= $randBool ? 'first-gradient' : 'second-gradient' ?>"><?= $genre ?></div>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </main>
    <!-- /#site_main -->
    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>