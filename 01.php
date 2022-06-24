<?php
declare (strict_types = 1);
include 'includes/header.php';

//Definir una clase
class Producto {
    /* MANERA VIEJA */
    // public $nombre;
    // public $precio;
    // public $disponible;

    // public function __construct(string $nombre, int $precio, bool $disponible){
    //     $this->nombre = $nombre;
    //     $this->precio = $precio;
    //     $this->disponible = $disponible;
    // }

    public function __construct(public string $nombre, public int $precio, public bool $disponible){
    
    }

    public function mostrarProducto(){
        echo 'El producto es: ' . $this->nombre . ' y su precio: ' . $this->precio;
    }
}

$producto = new Producto('Tablet', 500, true);
$producto->mostrarProducto();

$producto2 = new Producto('Celular', 200, true);
$producto2->mostrarProducto();

// $producto->nombre = 'Tablet';
// $producto->precio = 200;
// $producto->disponible = true;

echo "<pre>";
var_dump($producto);
echo "</pre>";

include 'includes/footer.php';
