<?php
session_start();
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    
    <!-- Title Page -->  
    <title>Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css"> 
</head>
<body>
    <div id="container">
    <?php       if (!isset($_SESSION['conectado'])): ?>
        <form method="post" action="submit.php">
            <!-- Username -->
            <label for="name">Usuario:</label>
            <input  type="name" name="usuario" required>
            <!-- Password -->
            <label for="username">Clave:</label>
           
            <input required type="password" name="clave" required>
            <div id="lower">
                <!-- Submit Button -->
                <input type="submit" value="Login">
            </div>
        </form>     
        <?php else: ?>
            <p>Login con exito !</p>
               

        <?php endif; ?>  
    </div>
</body>
</html>