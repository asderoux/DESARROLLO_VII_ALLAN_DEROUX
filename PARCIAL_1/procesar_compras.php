<?php
// Incluir el archivo con las funciones
include 'funciones_tienda.php';

// Definir un array asociativo con productos y sus precios
$productos = [
    'camisa' => 50,
    'pantalon' => 70,
    'zapatos' => 80,
    'calcetines' => 10,
    'gorra' => 25
];

// Definir un array asociativo para simular el carrito de compras
$carrito = [
    'camisa' => 2,
    'pantalon' => 1,
    'zapatos' => 1,
    'calcetines' => 3,
    'gorra' => 0
];

// Calcular el subtotal
$subtotal = 0;
echo "<h2>Resumen de la Compra</h2>";
echo "<table border='1'>";
echo "<tr><th>Producto</th><th>Cantidad</th><th>Precio Unitario</th><th>Total</th></tr>";

foreach ($carrito as $producto => $cantidad) {
    if ($cantidad > 0) {
        $precio_unitario = $productos[$producto];
        $total_producto = $precio_unitario * $cantidad;
        $subtotal += $total_producto;
        
        // Mostrar la lista de productos, cantidad y total
        echo "<tr>
                <td>$producto</td>
                <td>$cantidad</td>
                <td>$$precio_unitario</td>
                <td>$$total_producto</td>
              </tr>";
    }
}

echo "</table>";

// Calcular el descuento, impuesto y total
$descuento = calcular_descuento($subtotal);
$impuesto = aplicar_impuesto($subtotal);
$total_a_pagar = calcular_total($subtotal, $descuento, $impuesto);

// Mostrar el resumen en formato HTML
echo "<p><strong>Subtotal:</strong> $$subtotal</p>";
echo "<p><strong>Descuento:</strong> $$descuento</p>";
echo "<p><strong>Impuesto (7%):</strong> $$impuesto</p>";
echo "<p><strong>Total a pagar:</strong> $$total_a_pagar</p>";
?>
