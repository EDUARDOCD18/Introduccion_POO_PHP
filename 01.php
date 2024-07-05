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
}

/* -- Instanciar la clase -- */
$producto = new Producto("Table 7", 40, false);
echo "<pre>";
var_dump($producto);
echo "</pre>";


include 'includes/footer.php';
