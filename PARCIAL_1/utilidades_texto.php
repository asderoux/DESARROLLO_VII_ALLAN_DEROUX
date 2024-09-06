
<?php
// Función para contar el número de palabras en un texto
function contar_palabras($texto) {
    return str_word_count($texto);
}

// Función para contar el número de vocales en un texto
function contar_vocales($texto) {
    $vocales = preg_match_all('/[aeiouáéíóúAEIOUÁÉÍÓÚ]/', $texto);
    return $vocales;
}

// Función para invertir el orden de las palabras en el texto
function invertir_palabras($texto) {
    $palabras = explode(" ", $texto);
    $palabras_invertidas = array_reverse($palabras);
    return implode(" ", $palabras_invertidas);
}
?>
