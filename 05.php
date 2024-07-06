<?php include 'includes/header.php';

/* -- Clases Abstractas -- */
abstract class Transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad)
    {
    }

    public function getInfo(): string
    {
        return "El transporte tiene " . $this->ruedas . " rueda(s). Capacidad de " . $this->capacidad . " asiento(s).";
    }

    public function getRuedas(): int
    {
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte
{

    public function __construct(protected int $ruedas, protected int $capacidad, protected string $tipo)
    {
    }

    public function tipoBici(): string
    {
        return "Bicicleta de tipo: " . $this->tipo;
    }
}

class Carro extends Transporte
{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision)
    {
    }

    public function getTransmision(): string
    {
        return "Transmisión: " . $this->transmision;
    }
}

$bicicleta = new Bicicleta(2, 1, "Ruta");
echo $bicicleta->getInfo();
echo "<br>";
echo $bicicleta->tipoBici();
echo "<hr>";

$carro = new Carro(4, 5, "Manual");
echo $carro->getInfo();
echo "<br>";
echo $carro->getTransmision();
echo "<hr>";

include 'includes/footer.php';
