<?php
    include __DIR__ . '/Models/Product.php';
    include __DIR__ . '/Models/Food.php';
    include __DIR__ . '/Models/Game.php';
    include __DIR__ . '/Models/Doghouse.php';

    $items = [
        new Food('Carne fresca di agnello nutrito a erba', '25,99 €', 'Cat', 'Edgard Cooper', '2,5 kg'),
        new Game('Gioco per Cane Corda Osso', '4,13 €', 'Dog', 'Misto cotone', 'Blue'),
        new Doghouse('Cuccia rialzata per cani', '80,00 €', 'Dog', 'Memory foam', 'S')
    ];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>E-commerce</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <?php foreach($items as $item){ ?>
                    <div class="card">
                        <div class="card-header">
                            <?php echo $item->category ?>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $item->name ?></h5>
                            <p class="card-text"><?php echo $item->price ?></p>
                            <p class="card-text"><?php echo $item->brand ?></p>
                            <p class="card-text"><?php echo $item->weight ?></p>
                            <p class="card-text"><?php echo $item->material ?></p>
                            <p class="card-text"><?php echo $item->color ?></p>
                            <p class="card-text"><?php echo $item->size ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</body>
</html>