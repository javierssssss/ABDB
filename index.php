<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!-- Title Page -->  
    <title>Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="estilos.css"> 
</head>
<body>
    <div id="container">
        <form method="POST" action="submit.php">
            <!-- Username -->
            <label for="name">Usuario:</label>
            <input required type="name" name="usuario">
            <!-- Password -->
            <label for="username">Clave:</label>
           
            <input required type="password" name="clave">
            <div id="lower">
                <!-- Submit Button -->
                <input type="submit" value="Login">
            </div>
        </form>       
    </div>
</body>
</html>