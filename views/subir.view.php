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
            <h1 class="titulo">Subir foto</h1>
        </div>
    </header>


    <div class="contenedor">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" class="formulario" method="POST" enctype="multipart/form-data">

            <label for="foto">Selecciona tu foto</label>
            <input type="file" name="foto" id="foto" class="foto">
            
            <label for="titulo">Escribe tu titulo</label>
            <input type="text" name="titulo" id="titulo" class="titulo" placeholder="ingresa el titulo">
        
            <label for="texto">Descripcion:</label>
            <textarea name="texto" id="texto" placeholder="ingresa la descripcion"></textarea>

            <?php  if(isset($error)):   ?>
                <p class="error"><?php  echo $error;   ?></p>
            <?php  endif;   ?>
            <input type="submit" value="Subir foto" class="submit">

        </form>
    </div>









    <footer>
        <p class="copyright">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
    </footer>
</body>
</html>