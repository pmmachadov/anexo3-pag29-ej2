<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
Crea una función que dada una matriz asociativa muestre en una tabla la relación
de claves y valores almacenados en la matriz. 

<?php

include 'funlib.php';

echo "<table border = 1>";
echo "<tr>";
echo "  <td> Pablo  </td>";
echo "  <td> Machado </td>";
echo "</tr>";
echo "<td> " . "Ejercicio" . "</td>";
echo "<td> " . "anexo3-pag29-ej2" . "</td>";
echo "</tr>";
echo "<td> " . "Resultado" . "</td>";
echo "<td> " . "clave1	valor1
clave2	valor2;" . "</td>";
echo "</tr>";
echo "</table>";

    $matriz = array("clave1" => "valor1", "clave2" => "valor2");
    mostrarMatriz($matriz);
?>
</body>
</html>