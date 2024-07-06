<?php include 'includes/header.php';

/* -- Autoload de clases -- */
function mi_autoload($clase)
{
    require __DIR__ . '/clases/' . $clase . '.php';
}
spl_autoload_register('mi_autoload');

$detalles = new Detalles();
echo "<br>";
$clientes = new Clientes();

include 'includes/footer.php';
