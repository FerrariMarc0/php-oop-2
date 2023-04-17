<?php
    require_once __DIR__.'/models/Product.php';
    require_once __DIR__.'/models/Dog.php';
    require_once __DIR__.'/models/Cat.php';
    require_once __DIR__.'/models/Bird.php';
    require_once __DIR__.'/models/Fish.php';

    // Creazione delle categorie
$dog = new Dog("", "", 0, "", "", "");
$cat = new Cat("", "", 0, "", "", "");
$bird = new Bird("", "", 0, "", "", "");
$fish = new fish("", "", 0, "", "", "");

// Creazione dei prodotti
$prod1 = new Dog("Cuccia per cani", "Cuccia morbida e confortevole per cani di tutte le taglie", "18.99 €", "Cotone", "37,1 x 28 x 7,3 cm");
$prod2 = new Cat("Giocattolo per gatti", "Giocattolo in peluche con piume per far divertire il tuo gatto", "14.93 €", "peluche + filo d'acciaio", "45 x 7 cm");
$prod3 = new Bird("Gabbia per uccelli", "Gabbia spaziosa per uccelli di medie dimensioni con accessori inclusi", "99.99 €", "Metallo", "95,5 x 45,5 x 52,5 cm");
$prod4 = new fish("Acquario completo", "Acquario di vetro completo di filtro, pompa e illuminazione LED", "120 €", "Vetro 6mm", "80 x 32 x 48 cm");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Boolshop</title>
</head>
<body>
    <header>
        <h1>Boolshop</h1>
    </header>
    <div class="container">
        <div class="box">
            <?php echo $prod1->printOut(); ?>
        </div>
        <div class="box">
            <?php echo $prod2->printOut(); ?>
        </div>
        <div class="box">
            <?php echo $prod3->printOut(); ?>
        </div>
        <div class="box">
            <?php echo $prod4->printOut(); ?>
        </div>
    </div>
    
</body>
</html>