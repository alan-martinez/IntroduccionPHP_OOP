<?php
declare (strict_types = 1);
include 'includes/header.php';

//Metodos estaticos

class Producto {

    public $imagen;
    public static $imagenPlaceholder = "Imagen.jpg";
  
    public function __construct(protected string $nombre, public int $precio, public bool $disponible, string $imagen){
        if ($imagen){
            self::$imagenPlaceholder = $imagen;
        }
    }

    public static function obtenerProducto(){
        echo 'Obteniendo datos del producto';
    }
    public static function obtenerImagenProducto(){
        return self::$imagenPlaceholder;
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

echo Producto::obtenerProducto();
echo Producto::obtenerImagenProducto();

$producto = new Producto('Tablet', 500, true, 'MOnitor curvo.jpg');
// $producto->mostrarProducto();

echo $producto->obtenerImagenProducto();

echo $producto->getNombre();

// $producto->nombre = 'Nuevo nombre de Producto';
// echo $producto->nombre;

$producto2 = new Producto('Celular', 200, true, '');
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

echo $producto2->obtenerImagenProducto();


include 'includes/footer.php';
