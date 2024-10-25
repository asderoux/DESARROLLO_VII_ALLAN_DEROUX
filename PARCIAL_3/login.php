<?php
session_start();
//inicio de sesion
$usuarios = [
    'username' => 'Allan', 
    'password' => '12345'
    
];

//verifica si hay session activa
if (isset($_SESSION['username'])) {
    header('Location: dashboard.php');
    exit;
}


// verifica si se enviaron los datos
if ($_SERVER['REQUEST_METHOD']==='POST') {
    $username =$_POST ['username'] ?? '';
    $password = $_POST ['password'] ?? '';

    
    // Validar las credenciales
    if (isset($usuarios[$username]) && $usuarios[$username] === $password) {
        $_SESSION['username'] = $username;
        $_SESSION['tareas'] = []; 
        header('Location: dashboard.php');
        exit;
    } else {
        $error = 'Usuario o contraseña incorrectos';
    }
}
 


    


?>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio de Sesión</title>
</head>
<body>
    <h1>Formulario de inicio de sesion</h1>
    <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
    <form method="post">
        <label><b>Usuario:     </b></label>
        <input type="text" name="username" required><br>
        <label><b>Contraseña:</b></label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>








