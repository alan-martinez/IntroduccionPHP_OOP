<?php
declare (strict_types = 1);
include 'includes/header.php';

//Encapsulacion


//Definir una clase
class Producto {
    //Public - Se puede acceder y modificar en cualquier lugar (clase y objeto)

    //Protected  - Se puede acceder/modificar unicamente en la clase 

    //Private - Solo miembros de la misma clase puede acceder a el

    public function __construct(protected string $nombre, public int $precio, public bool $disponible){
    
    }

    public function mostrarProducto() : void{
        echo 'El producto es: ' . $this->nombre . ' y su precio: ' . $this->precio;
    }

    public function getNombre() : string{
        return $this->nombre;
    }
    public function setNombre(string $nombre){
        $this->nombre = $nombre;
    }
}

$producto = new Producto('Tablet', 500, true);
// $producto->mostrarProducto();
echo $producto->getNombre();

// $producto->nombre = 'Nuevo nombre de Producto';
// echo $producto->nombre;

$producto2 = new Producto('Celular', 200, true);
// $producto2->mostrarProducto();

// $producto->nombre = 'Tablet';
// $producto->precio = 200;
// $producto->disponible = true;

echo "<pre>";
var_dump($producto);
echo "</pre>";

$producto->setNombre('BLABLA');

echo "<pre>";
var_dump($producto);
echo "</pre>";

include 'includes/footer.php';
