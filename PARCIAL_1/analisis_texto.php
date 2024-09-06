

<?php
include 'utilidades_texto.php';

$frases = [
    "Me gusta mucho construir cosas nuevas",
    "Algun dia quisiera ser un programador experto",
    "Esta es una prueba para mi primer parcial"
];




echo "<table border='1'>";
echo "<tr><th>Frase</th><th>Número de Palabras</th><th>Número de Vocales</th><th>Palabras Invertidas</th></tr>";


foreach ($frases as $frase) {
    $num_palabras = contar_palabras($frase);
    $num_vocales = contar_vocales($frase);
    $palabras_invertidas = invertir_palabras($frase);
    
    echo "<tr>";
    echo "<td>$frase</td>";
    echo "<td>$num_palabras</td>";
    echo "<td>$num_vocales</td>";
    echo "<td>$palabras_invertidas</td>";
    echo "</tr>";
}

echo "</table>";
?>


