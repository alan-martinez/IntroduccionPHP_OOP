<?php include 'includes/header.php';

//Herencia
class Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad){

    }

    public function getInfo(): string{
        return 'El tranporte tiene ' . $this->ruedas . ' ruedas y una capacidad de ' . $this->capacidad . ' de personas';
    }

    public function getRuedas() : int{
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte{
    public function getInfo() : string{
        return  'El tranporte tiene ' . $this->ruedas . ' ruedas y una capacidad de ' . $this->capacidad . ' de personas y no gasta gasolina';
    }
}

class Automovil extends Transporte{
    public function __construct(protected int $ruedas, protected int $capacidad, protected string $transmision){

    }

    public function getTransimision() : string {
        return $this->transmision;
    }

}

$bicicleta = new Bicicleta(2,1);
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo '<hr>';

$auto = new Automovil(4,4, 'Manual');
echo $auto->getInfo();
echo $auto->getTransimision();

include 'includes/footer.php';