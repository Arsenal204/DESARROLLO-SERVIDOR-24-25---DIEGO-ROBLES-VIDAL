<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
/**
 * Investigar cómo funciona el juego de piedra papel y tijeras lagarto y spock. 
 * Crear un programa en php que al pulsar un botón genere dos manos (en imagen) 
 * y determine el vencedor o si hay empate. Debe de simular una competición al mejor de 3.
 */
    echo "<form action=\"\" method=\"post\"><input type=\"submit\" name=\"jugar\" value=\"Empezar a jugar\"></form>";
    $manos = ["piedra", "papel", "tijeras", "lagarto", "spock"];
    $puntosJ1 = 0;
    $puntosJ2 = 0;
    if(isset($_POST["jugar"])){
        for ($i=0; $i < 3; $i++) {
        $manoJ1 = $manos[rand(0,4)];
        $manoJ2 = $manos[rand(0,4)];
        switch ($manoJ1) {
            case "piedra":
                if ($manoJ2 == "tijeras" || $manoJ2 == "lagarto") {
                    $puntosJ1++;
                    echo "Gana el jugador 1 <br>";
                } else if ($manoJ2 == "papel" || $manoJ2 == "spock") {
                    $puntosJ2++;
                    echo "Gana el jugador 2 <br>";
                } else {
                    echo "Empate <br>";
                }
                break;
            case "papel":
                if ($manoJ2 == "piedra" || $manoJ2 == "spock") {
                    $puntosJ1++;
                    echo "Gana el jugador 1 <br>";
                } else if ($manoJ2 == "tijeras" || $manoJ2 == "lagarto") {
                    $puntosJ2++;
                    echo "Gana el jugador 2 <br>";
                } else {
                    echo "Empate <br>";
                }
                break;
            case "tijeras":
                if ($manoJ2 == "papel" || $manoJ2 == "lagarto") {
                    $puntosJ1++;
                    echo "Gana el jugador 1 <br>";
                } else if ($manoJ2 == "piedra" || $manoJ2 == "spock") {
                    $puntosJ2++;
                    echo "Gana el jugador 2 <br>";
                } else {
                    echo "Empate <br>";
                }
                break;
            case "lagarto":
                if ($manoJ2 == "piedra" || $manoJ2 == "tijeras") {
                    $puntosJ1++;
                    echo "Gana el jugador 1 <br>";
                } else if ($manoJ2 == "papel" || $manoJ2 == "spock") {
                    $puntosJ2++;
                    echo "Gana el jugador 2 <br>";
                } else {
                    echo "Empate <br>";
                }
                break;
            case "spock":
                if ($manoJ2 == "tijeras" || $manoJ2 == "piedra") {
                    $puntosJ1++;
                    echo "Gana el jugador 1 <br>";
                } else if ($manoJ2 == "papel" || $manoJ2 == "lagarto") {
                    $puntosJ2++;
                    echo "Gana el jugador 2 <br>";
                } else {
                    echo "Empate <br>";
                }
                break;
        }
        echo "<img src=\"img/$manoJ1.png\" width=\"100\">";
        echo "<img src=\"img/$manoJ2.png\" width=\"100\">";
        echo "<br>";
        echo "Puntos jugador 1: ".$puntosJ1."<br>";
        echo "Puntos jugador 2: ".$puntosJ2."<br>";
        if ($puntosJ1 >=2) {
            echo "Gana el jugador 1 la competición";
            exit;
        } else if ($puntosJ2 >= 2) {
            echo "Gana el jugador 2 la competición";
            exit;
        
    }
}
     if ($puntosJ1 == $puntosJ2) {
    echo "Empate";
    exit;
    }
    }    

?>
<div>

</div>


</body>
</html>