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
            <h1 class="titulo">foto: 
            <?php  if(!empty($foto['titulo'])){
                echo $foto['titulo'];
            } else {
                echo $foto['imagen'];
            }
            
            ?>
            </h1>
        </div>
    </header>


    <div class="contenedor">
        <div class="foto">
            <img src="fotos/<?php echo $foto['imagen'];   ?>" alt="">
            <p class="texto"><?php  echo $foto['texto'];   ?></p>
            <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
        </div>
    </div>




    <footer>
        <p class="copyright">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
    </footer>
</body>
</html>