<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Al declarar variables no se puede empezar con un número ni con algún caracter especial
        $num1 = 23  . "40";
        $num2 = "23";
        $num3=$num1+$num2;

        print "<br/>La suma de 23 y 23 es $num3";

        $texto="<br/> estamos en segundo de daw";

        print $num1;

        if (2>=2){
            //Nombre esta decalrada dentro del if, no es solo accesible dentro de if, se puede usar fuera de este
            $nombre="pepe";
            print "<br/> Entra";
        }
        //Si utilizamos la comillas simples para las cadenas de texto 
        //no se pueden meter variables dentro 
        print '<br/> Mi nombre el $nombre';
        echo "<br/> Mi nombre el $nombre <br/>";
        
        //strlen nos dice cuentos caracteres tiene un string
        print "El nombre tiene".strlen($nombre)." caracteres<br/>";

        var_dump($nombre);
        echo "<br/>";
        $empleado= array("pedro", 34 , 2345.4,"soltero");

        //count nos cuenta la cantidad de elementos de un array
        print("<br/>El array empleado tiene " . count($empleado)." elementos");

        var_dump($empleado);

        //str_replace ("palabra a buscar", "palabra sustituta", Cadena de donde se va a cambiar)
        echo $texto;
        echo str_replace("daw","smr",$texto);

        //strpos() Te da la posición de la palabra que tu le diga, aunque solo te da la posición de la primera vez que aparezca

        //strtok Te separa un texto según el elemento que le hayas dicho

        //strcom(); La mayor es segun el codigo ASCII

        //trim para quitar espacios de delante y detras

        //explode cçrta una cadena y devuelve un array de secciones de dicha cadena
        echo "<br/>";
        var_dump( explode(" ",$texto));

        //Las variables creadas dentro de funtion solo se pueden utilizar dentro de funtion
    ?>
</body>
</html>