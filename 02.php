<?php

declare(strict_types=1);
include 'includes/header.php';

/* -- Encapsulación -- */
class Producto
{
    // Constructor
    public function __construct(protected String $nombre, public int $precio, public bool $disponible)
    {
    }

    public function mostarProdcuto(): void
    {
        echo $this->nombre . ". Precio de $" . $this->precio . ".";
    }

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(String $nombre)
    {
        $this->nombre = $nombre;
    }
}

/* -- Instanciar la clase -- */
$producto = new Producto("Tablet 7", 40, false);
echo $producto->getNombre(); // Obtener el nombre
$producto->setNombre("PC"); // Modificar el nombre
echo $producto->getNombre(); // Obterner el nuevo nombre

/* $producto->mostarProdcuto();

echo "<br>";

$producto2 = new Producto("Mini PC", 4000, true);
$producto2->mostarProdcuto();

echo "<br>";

$producto3 = new Producto("UPS", 160, true);
$producto3->mostarProdcuto();
 */


include 'includes/footer.php';
