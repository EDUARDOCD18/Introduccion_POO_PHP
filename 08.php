<?php include 'includes/header.php';

/* -- Autoload de clases -- */
use APP\Clientes;
use APP\Detalles;

function mi_autoload($clase)
{
    $partes = explode('\\', $clase);
    require __DIR__ . '/clases/' . $partes[1] . '.php';
}
spl_autoload_register('mi_autoload');

$detalles = new Detalles();
echo "<br>";
$clientes = new Clientes();

include 'includes/footer.php';
