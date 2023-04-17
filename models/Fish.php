<?php
    require_once __DIR__.'/Product.php';

    class Fish extends Product{

        public $species;

    function __construct($name, $description, $price, $materiale, $dimensioni)
    {
        parent::__construct($name, $description, $price, "Pesci", $materiale, $dimensioni);
    }

    function printOut()
    {
        parent::printOut();
        echo "<img src='https://m.media-amazon.com/images/I/71S6tQZX85L._AC_SX425_.jpg" . $this->name . ".jpg'>";
    }
}