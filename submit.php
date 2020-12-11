<?php

$un = $_POST['usuario'];
$pwd = $_POST['clave'];
try{
    $bdd = new PDO(
        "mysql:host=" . getenv("MYSQL_ADDON_HOST") . ";dbname=" . getenv("MYSQL_ADDON_DB"),
        getenv("MYSQL_ADDON_USER"),
        getenv("MYSQL_ADDON_PASSWORD")
    );
}catch(PDOException $e){
    echo $e->getMessage();
}


// Check connection
if ( isset($bdd) ) {
    
    $stmt = $bdd->prepare("SELECT * FROM users");
    while ($row = $stmt->fetch()) {
        echo "Connected successfully";
        echo $row['usuario']."<br />\n";
    }


}else{
    die("Connection failed: " . $conn->connect_error);
    header('Location: index.php');
}

?>