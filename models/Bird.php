<?php
    require_once __DIR__.'/Product.php';

    class Bird extends Product{

        public $species;

    function __construct($name, $description, $price, $materiale, $dimensioni)
    {
        parent::__construct($name, $description, $price, "Volatili", $materiale, $dimensioni);
    }

    function printOut()
    {
        parent::printOut();
        echo "<img src='https://m.media-amazon.com/images/I/91arutYfUXL._AC_SY355_.jpg" . $this->name . ".jpg'>";
    }
}