<?php 
require 'poste.php';
require 'conexion.php';
$usuario = new Poste($conexion);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $direccion = $_POST["direccion"];
    $departamento = $_POST["departamento"];
    $municipio = $_POST["municipio"];
    $referencia = $_POST["referencia"];
    $longitud = $_POST["longitud"];

    if ($usuario->agregarPoste( $direccion, $departamento,$municipio,$referencia,$longitud)) {
        header("Location: listar_p.php");
        exit();
    } else {
        echo "Error al agregar el poste.";
    }

}
else{
    echo "Error al agregar el usuario.";
}




?>

