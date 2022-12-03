<?php
function mostrarMatriz($matriz){
    echo "<table border='1'>";
    foreach($matriz as $clave => $valor){
        echo "<tr><td>$clave</td><td>$valor</td></tr>";
    }
    echo "</table>";
}

?>