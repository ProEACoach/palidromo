<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la evaluación</title>
    <?PHP
    include('import.php');
    ?>
</head>
<body>

    <?PHP   
    include('header.php');
    $text = $_POST['text']; //Se asigna un valor a una variable correspondiente al valor enviado mediante POST al input con nombre "text"

    function palidromo ($value){
    $large = strlen($value);
    $extraction = $large;
    $extraction = intval($extraction);
    $inverse = null;
        for($i=1; $i<=$large; $i++){
            $extraction--;
            $rest = substr($value, $extraction, 1);
            $inverse = $inverse.$rest;
        }
        if($inverse === $value){
            $result = $inverse.' es igual a '.$value.'<b> es palíndromo</b>';
        }
        else{
            $result = $inverse.' no es igual a '.$value.'<b> no es un palíndromo</b>';
        }
    return $result;
    }
    

   $answer = palidromo($text);

    ?>






    <main class="container"> <!--La etiqueta main identifica el contenido más relevante en HTML-->
    <h1>Resultado de la evaluación</h1>
    <h2>El resultado es <span class="green-text"><?PHP echo($answer)?></span></h2>
    <a class="btn btn-primary green-bg" href="index.php" role="button">Hacer otra prueba</a>
    </main>
</body>
</html>