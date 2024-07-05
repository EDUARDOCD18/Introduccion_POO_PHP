<?php

declare(strict_types=1);
include 'includes/header.php';

/* -- Definir una clase -- */
class Producto
{
    // Constructor
    public function __construct(public String $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostarProdcuto()
    {
        echo $this->nombre . ". Precio de $" . $this->precio . ".";
    }
}

/* -- Instanciar la clase -- */
$producto = new Producto("Table 7", 40, false);
$producto->mostarProdcuto();

echo "<br>";

$producto2 = new Producto("Mini PC", 4000, true);
$producto2->mostarProdcuto();

echo "<br>";

$producto3 = new Producto("UPS", 160, true);
$producto3->mostarProdcuto();



include 'includes/footer.php';
