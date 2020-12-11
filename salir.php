<?php
$salir = $_POST['salir'];
if(!empty($salir)){
    session_start();
    session_destroy();
    header('Location: index.php');
}


header('Location: index.php');
?>