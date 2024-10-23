<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego de Adivinar el Número</title>
</head>

<body>
    <h1>¡Adivina el Número!</h1>

    <?php

    /**
     * Crea un programa que genere un número aleatorio y haga que el usuario lo intente acertar en menos de 6 intentos. 
     * Si está muy cerca , a menos de 5 posiciones, dirá (calentito totalis!), 
     * si está más lejos dirá que el número es mayor o menor.
     *
     */
    if (!isset($_POST['numdado'])) {
        $numaleatorio = rand(1, 100);
        $numdado = 0;
        $intento = 6;
    } else {
        $numdado = $_POST['numdado'];
        $intento = $_POST['intento'];
        $numaleatorio = $_POST['numaleatorio'];
    }

    if ($intento != 0) {
        if (isset($_POST['numdado'])) {
            $numdado = $_POST['numdado'];
            if ($numaleatorio == $numdado) {
                echo "Has ganado";
            } elseif (abs($numdado - $numaleatorio) <= 5  && abs($numdado - $numaleatorio) >= -5) {
                echo "Calentito totalis!";
            } elseif ($numdado > $numaleatorio) {
                echo "El número es menor";
            } else {
                echo "El número es mayor";
            }
            $intento--;
        }
        "<p>Adivina un número entre 1 y 100. Tienes <?php echo $intento; ?> intentos.</p>";
    }
    var_dump($numaleatorio);
    var_dump($numdado);

    ?>
    <form method="post"><label type="number" class="form-label">Elige un número entre 1 y 100</label>
        <input type="hidden" value="<?php echo $numaleatorio ?>" type="number" class="form-control input-small" id="numaleatorio" name="numaleatorio" aria-describedby="Numero aleatorio">
        <input value="<?php echo $numdado ?>" type="number" class="form-control input-small" id="numdado" name="numdado" aria-describedby="Numero dado">
        <input type="hidden" value="<?php echo $intento ?>" type="number" class="form-control input-small" id="intento" name="intento" aria-describedby="Intentos">
        <button type="submit">¿He ganado?</button>
    </form>



</body>







</html>