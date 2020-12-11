<?php
session_start();
session_status();
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
    <?php       if (!isset($_SESSION['conectado'])    ): ?>
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
        <?php endif; ?>   
        <?php if ( isset($_SESSION['conectado']) && $_SESSION["conectado"]=="C" ): ?>
            <p>Login con exito !</p>
          <form  action="<?php  $_SERVER['PHP_SELF'];
          session_destroy();
          ?>" method="post" >
            <button type="submit">Salir</button>

        </form>  
        <?php endif; ?>   
        
    </div>
</body>
</html>