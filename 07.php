<?php include 'includes/header.php';

interface TransporteInterfaz
{
    public function getInfo(): string;
    public function getRuedas(): int;
}

abstract class Transporte implements TransporteInterfaz
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

class Automovil extends Transporte implements TransporteInterfaz
{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $color)
    {
    }

    public function getInfo(): string
    {
        return "El transporte tiene " . $this->ruedas . " rueda(s). Capacidad de " . $this->capacidad . " asiento(s). Color: " . $this->color;
    }

    public function getColor () : string{
        return "Color: " . $this->color;
    }
}

$carro = new Automovil(4, 5, "Verde moco");
echo $carro->getInfo();
echo "<br>";
echo $carro->getColor();

include 'includes/footer.php';
