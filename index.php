<?php

require_once __DIR__ . '/classes/Food.php';

// Instances

$example_food_01 = new Food('img/placeholder.png', 'Example 01', 'Description', 0, new Section('icon', 'Example'), 0);
$example_food_02 = new Food('img/placeholder.png', 'Example 02', 'Description', 0, new Section('icon', 'Example'), 0);
$example_food_03 = new Food('img/placeholder.png', 'Example 03', 'Description', 0, new Section('icon', 'Example'), 0);
$example_food_04 = new Food('img/placeholder.png', 'Example 04', 'Description', 0, new Section('icon', 'Example'), 0);

// Struttura dati
$foodsList = [$example_food_01, $example_food_02, $example_food_03, $example_food_04];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Marco Guarnera">
    <meta name="description" content="PHP OOP">
    <!-- Title -->
    <title>PHP OOP</title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <!-- Main Header -->
    <header id="main-header">
        <h1 class="text-center">PHP OOP</h1>
    </header>
    <!-- Main -->
    <main>
        <div class="container-fluid">
            <div class="row">
                <?php foreach ($foodsList as $food) { ?>
                    <div class="col-3">
                        <div class="card mb-3">
                            <img class="card-img-top" src="<?= $food->img_src ?>" alt="...">
                            <div class="card-body">
                                <h5 class="card-title mb-1"><?= $food->name ?></h5>
                                <p class="card-text mb-2"><?= $food->description ?></p>
                                <span class="card-text"><?= $food->price . '$' ?></span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </main>
</body>

</html>

<?php

// Fase di produzione
var_dump($foodsList);

?>