<?php
    require_once __DIR__.'/Product.php';

    class Dog extends Product{


    function __construct($name, $description, $price, $materiale, $dimensioni)
    {
        parent::__construct($name, $description, $price, "Cani", $materiale, $dimensioni);
        $this->materiale = $materiale;
    }

    public function printOut()
    {
        parent::printOut();
        echo "<img src='https://m.media-amazon.com/images/W/IMAGERENDERING_521856-T1/images/I/51rJEw-iDDL._AC_SY355_.jpg" . $this->name . ".jpg'>";
        
    }
}