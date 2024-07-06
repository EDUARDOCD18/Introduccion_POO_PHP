<?php

declare(strict_types=1);
include 'includes/header.php';

/* -- Métodos estáticos -- */
class Producto
{

    public $imagen;
    public static $imagenPlaceeholder = "imagen.jpg";

    // Constructor
    public function __construct(protected String $nombre, public int $precio, public bool $disponible, String $imagen)
    {
        if($imagen){
            self::$imagenPlaceeholder = $imagen;
        }
    }

    public function mostarProdcuto(): void
    {
        echo $this->nombre . ". Precio de $" . $this->precio . ".";
    }

    // Función estática
    public static function obteberProducto()
    {
        echo "Obteniendo el producto...";
    }

    public static function obtenerImagen()
    {
        return self::$imagenPlaceeholder;
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

echo Producto::obteberProducto();
echo "<br>";
echo Producto::obtenerImagen();
echo "<br>";

/* -- Instanciar la clase -- */
$producto = new Producto("Tablet 7", 40, false, "CD");
echo $producto->getNombre(); // Obtener el nombre
echo "<br>";
echo $producto->obtenerImagen();
echo "<br>";
$producto2 = new Producto("Monitor", 400, false, "Imagen del monitor");
echo "<pre>";
var_dump($producto2);
echo "</pre>";
echo $producto2->obtenerImagen();



/* $producto->mostarProdcuto();

echo "<br>";

$producto2 = new Producto("Mini PC", 4000, true);
$producto2->mostarProdcuto();

echo "<br>";

$producto3 = new Producto("UPS", 160, true);
$producto3->mostarProdcuto();
 */


include 'includes/footer.php';
