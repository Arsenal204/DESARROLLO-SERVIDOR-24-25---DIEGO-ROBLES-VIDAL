<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $jose = ["nombre" => "jose", "edad" => 23, "repetidor" => false, "notaM" => 6.78];
    $juan = ["nombre" => "juan", "edad" => 43, "repetidor" => true, "notaM" => 5.52];
    $pedro = ["nombre" => "pedro", "edad" => 19, "repetidor" => false, "notaM" => 9.64];
    $sofia = ["nombre" => "sofia", "edad" => 32, "repetidor" => true, "notaM" => 3.23];


    for ($i = 0; $i < 40; $i++) {
        $alumnos[$i]["nombre"] = "Alumno" . ($i + 1);
        $alumnos[$i]["edad"] = rand(1, 100);
        $alumnos[$i]["notaM"] = rand(1.0, 10.0);
        $alumnos[$i]["repetidor"] = rand(1, 6) > 1 ? false : true;
        var_dump($alumnos);
        print "</br>";
    }


    foreach ($alumnos as $alumno) {


        //Para cada alumno, que es un array asociativo 
        //Puedo recorrer sus valores utilizando for each y
        //acceder a las claves y los valores por separado
        foreach ($alumno as $clave => $valor) {

            if ($clave == "nombre") {
                print "</br>" . $valor;
            }
        }
    }




    ?>

</body>

</html>