<?php
declare (strict_types = 1);
include 'includes/header.php';

//Definir una clas
class Producto {
    public $nombre;
    public $precio;
    public $disponible;

    public function __construct(string $nombre, int $precio, bool $disponible){
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->disponible = $disponible;
    }
}

$producto = new Producto('Tablet', 500, true);
// $producto->nombre = 'Tablet';
// $producto->precio = 200;
// $producto->disponible = true;

echo "<pre>";
var_dump($producto);
echo "</pre>";

include 'includes/footer.php';
