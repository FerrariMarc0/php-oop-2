<?php
class Product
{
    public $name;
    public $description;
    public $price;
    public $category;
    public $materiale;
    public $dimensioni;

    public function __construct($name, $description, $price, $category, $materiale, $dimensioni)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->category = $category;
        $this->materiale = $materiale;
        $this->dimensioni = $dimensioni;

    }

    function printOut()
    {
        echo "<div class='scheda-prodotto'>";
        echo "<h2>" . $this->name . "</h2>";
        echo "<p>" . $this->description . "</p>";
        echo "<p>Prezzo: " . $this->price . " </p>";
        echo "<p>Categoria: " . $this->category . "</p>";
        echo "<p>Materiale: " . $this->materiale . "</p>";
        echo "<p>Dimensioni: " . $this->dimensioni . "</p>";
        echo "</div>";
    }
}

