<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     echo "<form action=\"\" method=\"post\"><input type=\"submit\" name=\"jugar\" value=\"Cambio de todas las cartas\"></form>";
   
    ?>

    

<?php 

/**
 * Realizar un formulario en php que simule el juego del 1 simplificado. Mostrará la carta dada la vuelta actual y 4 cartas en imágenes como la mano del jugador. 
 * Las cartas serán botones, si se pulsa sobre una carta válida (mismo número o color), recargará la página y mostrará un mensaje de felicitación. 
 * Las cartas deben de generarse aleatoriamente. 
 * Existirá un botón para repetir la mano del usuario, pero la carta volteada debe ser la misma. 
 * (solo dos colores y hasta 5 para que sean menos imágenes)
 */


// Inicialización de colores y números
$colores = ['rojo', 'azul'];
$numeros = [1, 2, 3, 4, 5];

// Si no hay carta volteada (primera carga)
if (!isset($_POST['carta_volteada_color'])) {
    // Generar la carta volteada de manera manual
    $carta_volteada_color = $colores[rand(0, 1)];
    $carta_volteada_numero = rand(1, 5);
} else {
    // Recuperar la carta volteada enviada por el formulario
    $carta_volteada_color = $_POST['carta_volteada_color'];
    $carta_volteada_numero = $_POST['carta_volteada_numero'];
}

// Generar la mano del jugador de manera manual
$mano_jugador = [];
for ($i = 0; $i < 4; $i++) {
    $mano_jugador[$i]['color'] = $colores[rand(0, 1)];
    $mano_jugador[$i]['numero'] = rand(1, 5);
}

// Verificar si se ha seleccionado una carta válida
$mensaje = '';
if (isset($_POST['carta_color']) && isset($_POST['carta_numero'])) {
    $carta_color = $_POST['carta_color'];
    $carta_numero = $_POST['carta_numero'];

    // Validar si la carta seleccionada es del mismo color o número
    if ($carta_color == $carta_volteada_color || $carta_numero == $carta_volteada_numero) {
        $mensaje = "¡Felicitaciones! Has seleccionado una carta válida.";
    } else {
        $mensaje = "Carta inválida. Intenta de nuevo.";
    }
}
?>

<h1>Juego del Uno Simplificado</h1>

<h2>Carta Volteada</h2>
<p>Carta: <?php echo "<img src=\"img/" . $carta_volteada_numero . "_" . $carta_volteada_color . ".png\" alt=\"No se ha encontrado la imagen\">" ?></p>

<h2>Tu Mano</h2>
<form method="post">
    <?php foreach ($mano_jugador as $i => $carta): ?>
        <button type="submit" name="carta_color" value="<?php echo "<button name=\"carta1\"><img src=\"img/" . $carta['numero'] . "_" . $carta['color'] . ".png\" alt=\"No se ha encontrado la imagen\"></button>"; ?>">
        <input type="hidden" name="carta_color" value="<?php echo $carta['color']; ?>">    
        <input type="hidden" name="carta_numero" value="<?php echo $carta['numero']; ?>">
            <input type="hidden" name="carta_volteada_color" value="<?php echo $carta_volteada_color; ?>">
            <input type="hidden" name="carta_volteada_numero" value="<?php echo $carta_volteada_numero; ?>">
            
        </button>
        <br>
    <?php endforeach; ?>
</form>

<h2><?php echo $mensaje; ?></h2>

<form method="post">
    <input type="hidden" name="carta_volteada_color" value="<?php echo $carta_volteada_color; ?>">
    <input type="hidden" name="carta_volteada_numero" value="<?php echo $carta_volteada_numero; ?>">
    
    <button type="submit" name="reiniciar_mano">Reiniciar Mano</button>
</form>



</body>
</html>