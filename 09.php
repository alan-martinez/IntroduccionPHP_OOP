<?php include 'includes/header.php';

//Conectar a la DB con Mysql

$db = new mysqli ('localhost', 'root', 'root', 'bienes_raices');

//Creamos el query
$query = ' SELECT titulo FROM propiedades';

//Lo preparamos
$stmt = $db->prepare($query);

//Lo ejecutamos
$stmt->execute();

//Creamos la variable
$stmt->bind_result($titulo);

//Asignamos el resultado
while($stmt->fetch()){
    var_dump($titulo);
}

// var_dump($titulo);

// while ($row = $resultado->fetch_assoc()):
//     var_dump($row);
// endwhile;

// var_dump($resultado->fetch_assoc());

include 'includes/footer.php';