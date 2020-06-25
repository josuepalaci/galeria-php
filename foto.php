<?php  
require 'funciones.php';

$conexion=conexion('galeria_practica','root','');
if (!$conexion) {
    die();
}

$id=(isset($_GET['id'])) ? (int)$_GET['id']:false;
if (!$id) {
    header('Location:index.php');
}

$statemnet=$conexion->prepare("SELECT * FROM fotos WHERE id=:id");
$statemnet->execute(array(':id'=>$id));
$foto=$statemnet->fetch();

if (!$foto) {
    header('Location:index.php');
}





require 'views/foto.view.php'; 
?>