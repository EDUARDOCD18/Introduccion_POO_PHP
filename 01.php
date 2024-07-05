<?php

declare(strict_types=1);
include 'includes/header.php';

/* -- Definir una clase -- */
class Producto
{
    public $nombre;
    public $precio;
    public $disponible;

    // Constructor
    public function __construct(String $nombre, int $precio, bool $disponible)
    {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}


/* -- Instanciar la clase -- */
$producto = new Producto("Tablet", 40, false);
echo "<pre>";
var_dump($producto);
echo "</pre>";


include 'includes/footer.php';
