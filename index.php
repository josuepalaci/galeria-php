<?php  
require 'funciones.php';

$fotos_por_pagina=8;
$pagina_actual=((isset($_GET['p'])) ? (int)$_GET['p']:1);  
$inicio=($pagina_actual>1)?$pagina_actual*$fotos_por_pagina-$fotos_por_pagina:0;

$conexion=conexion('galeria_practica','root','');

if (!$conexion) {
    die();
}

$statemnet=$conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM fotos limit $inicio,$fotos_por_pagina");
$statemnet->execute();
$fotos=$statemnet->fetchAll();

if (!$fotos) {
    header('Location: index.php');   
}

$statemnet= $conexion->prepare("SELECT FOUND_ROWS() as total_filas");
$statemnet->execute();
$total_post=$statemnet->fetch()['total_filas'];

$total_paginas=ceil($total_post/$fotos_por_pagina);



require 'views/index.view.php'; 
?>