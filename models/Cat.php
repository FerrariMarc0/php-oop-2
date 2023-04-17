<?php
    require_once __DIR__.'/Product.php';

    class Cat extends Product{

    function __construct($name, $description, $price, $materiale, $dimensioni)
    {
        parent::__construct($name, $description, $price, "Gatti", $materiale, $dimensioni);
    }

    function printOut()
    {
        parent::printOut();
        echo "<img src='https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/61s41eVUMhL._AC_SX425_.jpg" . $this->name . ".jpg'>";
    }
}