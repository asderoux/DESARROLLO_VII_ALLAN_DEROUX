<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['username'])) {
    header('Location: Login.php');
    exit;
}

// Procesar la nueva tarea
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $titulo = $_POST['titulo'] ?? '';
    $fecha_limite = $_POST['fecha_limite'] ?? '';

    // Validar que los campos estén completos 
    if ($titulo && $fecha_limite && strtotime($fecha_limite) > time()) {
        $_SESSION['tareas'][] = ['titulo' => $titulo, 'fecha_limite' => $fecha_limite];
    } else {
        $error = 'Por favor, ingresa un título válido y una fecha futura.';
    }
}




// Cerrar sesión
if (isset($_POST['logout'])) {
    session_destroy();
    header('Location: Login.php');
    exit;
}

$tareas = $_SESSION['tareas'] ?? [];
?>





<!DOCTYPE html>
<html>
<head>
    <title>Tareas</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $_SESSION['username']; ?>!</h2>
    
    <h3>Lista de Tareas</h3>
    <?php if (empty($tareas)): ?>
        <p>No tienes tareas pendientes.</p>
    <?php else: ?>
        <ul>
            <?php foreach ($tareas as $tarea): ?>
                <li><?php echo htmlspecialchars($tarea['titulo']) . ' - ' . htmlspecialchars($tarea['fecha_limite']); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <h3>Agregar Nueva Tarea</h3>
    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form method="post">
        <label>Título:</label>
        <input type="text" name="titulo" required><br>
        <label>Fecha Límite:</label>
        <input type="date" name="fecha_limite" required><br>
        <input type="submit" value="Agregar Tarea">
    </form>

    <form method="post">
        <input type="submit" name="logout" value="Cerrar Sesión">
    </form>
</body>
</html>
