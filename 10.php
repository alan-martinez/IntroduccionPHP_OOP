<?php include 'includes/header.php';

//Conectar a la BD con PDO
$db = new PDO('mysql:host=localhost; dbname=bienes_raices', 'root', 'root');

$query = ' SELECT titulo FROM propiedades';

//Consultar la BD 
$resultado = $db->query($query)->fetch();
var_dump($resultado);

include 'includes/footer.php';