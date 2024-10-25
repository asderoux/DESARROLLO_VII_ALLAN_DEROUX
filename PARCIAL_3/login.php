<?php
session_start();
//inicio de sesion
$usuarios = [
    'username' => 'Allan',
    'password' => '123456'
];


if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit;
}

// Verificar si se enviaron los datos de inicio de sesión
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validar las credenciales
    if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
        $_SESSION['username'] = $username;
        $_SESSION['tareas'] = []; 
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'El nombre de usuario o contraseña son incorrectos';
    }
}
?>








<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
    <h2>Iniciar Sesión</h2>
    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form method="post">
        <label>Usuario:</label>
        <input type="text" name="username" required><br>
        <label>Contraseña:</label>
        <input type="password" name="password" required><br>
        <input type="submit" value="Iniciar Sesión">
    </form>
</body>
</html>
