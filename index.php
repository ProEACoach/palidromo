<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Palíndromo</title>
    <?PHP
    include('import.php'); //Importación de scripts y estilos
    ?>
  </head>
  <body>
    <?PHP
    include('header.php'); //Importamos el header para evitar redundancia y repetición de código
    ?>

    <main class="container"> <!--La etiqueta main identifica el contenido más relevante en HTML-->
        <h1 class="title color-wt">Test palíndromo</h1> 
        <form action="post.php" method="POST" id="form">
        <div class="mb-3">
        <label for="palabra" class="form-label">Agregue el texto que desea validar (solo texto, no se permiten caracteres númericos)</label>
        <input required pattern="[a-z]{2,254}" type="text" class="form-control border-color" id="palindromo" name="text" placeholder="Texto a evaluar (oso, ana...)">
        </div>
        <button type="submit" class="btn btn-primary green-bg">Evaluación</button>
        </form>
    </main>
  </body>
</html>
