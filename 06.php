<?php include 'includes/header.php';

interface TransporteInterfaz
{
    public function getInfo(): string;
    public function getRuedas(): int;
}

class Transporte implements TransporteInterfaz
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

include 'includes/footer.php';
