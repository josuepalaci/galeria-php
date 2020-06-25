<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://kit.fontawesome.com/1d8a52458d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">GALERIA CON PHP</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">

            <?php  foreach($fotos as $foto):   ?>
                <div class="thumb"><a href="foto.php?id=<?php echo $foto['id']?>"><img src="fotos/<?php echo $foto['imagen'] ?>" alt=""></a></div>
            <?php  endforeach;   ?>

            <div class="paginacion">

                <?php  if($pagina_actual>1):   ?>
                <a href="index.php?p=<?php echo $pagina_actual-1;?>" class="izquierda"> <i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <?php  endif;   ?>
                <?php  if($total_paginas!=$pagina_actual):   ?>
                <a href="index.php?p=<?php echo $pagina_actual+1;?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i> </a>
                <?php  endif;   ?>
            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">Lorem ipsum, dolor sit amet consectetur adipisicing.</p>
    </footer>


</body>
</html>