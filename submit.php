<?php

$un = $_POST['usuario'];
$pwd = $_POST['clave'];
try{
    $bdd = new PDO(
        "mysql:host=" . getenv("MYSQL_ADDON_HOST") . ";dbname=" . getenv("MYSQL_ADDON_DB"),
        getenv("MYSQL_ADDON_USER"),
        getenv("MYSQL_ADDON_PASSWORD")
    );
    if ( isset($bdd) ) {
        echo "CONECTADO";
        $stmt = $bdd->prepare("SELECT * FROM users");
        echo $stmt;
        $stmt->execute();
        while ($row = $stmt->fetch()) {
           
            echo $row['usuario'];
        }
    
    
    }else{
        die("Connection failed: " . $conn->connect_error);
        header('Location: index.php');
    }
}catch(Exception $e){
    echo $e->getMessage();
}


// Check connection


?>