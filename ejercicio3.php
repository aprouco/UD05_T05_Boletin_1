<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <?php
    $traductor = array(
        'milk' => 'leche',
        'bread' => 'pan',
        'water' => 'agua',
        'wine' => 'vino',
        'car' => 'coche',
        'table' => 'mesa',
        'door' => 'puerta',
        'windows' => 'ventana',
        'dish' => 'plato',
        'fork' => 'tenedor',
    );
    echo "<table border = '1'>";
    foreach ($traductor as $ingles => $castellano) {
        echo "<tr><td>.$ingles.</td><td>.$castellano.</td></tr>";
    }

    echo "</table>";
    ?>
</body>
</html>