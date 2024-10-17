<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //Escribir una funcion que se llame potencia 

    //La funcion recibe un número y una potencia y devuelve el número elevado a esa potencia 
    /**
     * @param int $numero
     * @param int $potencia
     * @return void
     * 
     */
    function potencia($numero, $potencia)
    {
        $numero = $numero ** $potencia;
        echo $numero . "<br>";
    }

    //Al pasar por valor variable a una funcion hay que poner delante el &
    //Esto hace que yo pueda modificar el valor de la variable y se queda modificado
    //despues de la ejecuación de la función
    function potencia_ref(&$numero, $potencia)
    {
        $numero = $numero ** $potencia;
        echo $numero . "<br>";
    }

    $valor = 3;
    echo potencia($valor, 3);
    echo $valor . "<br>";

    echo potencia_ref($valor, 3);
    echo $valor . "<br>";
    ?>
</body>

</html>