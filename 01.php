<?php include 'includes/header.php';

/* -- Definir una clase -- */
class Producto
{
    public $nombre;
    public $precio;
    public $disponible;
}


/* -- Instanciar la clase -- */
$producto = new Producto();
$producto->nombre = "Tablet 7 pulgadas";
$producto->precio = "$200";
$producto->disponible = true;

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto2 = new Producto();
$producto2->nombre = "Tablet 10 pulgadas";
$producto2->precio = "$400";
$producto2->disponible = false;

echo "<pre>";
var_dump($producto2);
echo "</pre>";


include 'includes/footer.php';
