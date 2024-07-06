<?php include 'includes/header.php';

/* Conectar a la BD con mysqli */
$db = new mysqli('localhost', 'root', '', 'bienesraices_crud');

// Crear el query
$query = "SELECT titulo, imagen FROM propiedades";

// Se prepara
$stmt = $db->prepare($query);

// Se ejecuta
$stmt->execute();

// Se crea la varible
$stmt->bind_result($titulo, $imagen);

// Se asigna el resultado
$stmt->fetch();
/* 
var_dump($titulo);
var_dump($imagen); */


while ($stmt->fetch()) :
    var_dump($titulo);
    echo "<br>";
    var_dump($imagen);
    echo "<br>";
endwhile;

include 'includes/footer.php';
