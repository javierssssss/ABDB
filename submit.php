<?php

$un = $_POST['usuario'];
$pwd = $_POST['clave'];

 $bdd = new PDO(
    "mysql:host=" . getenv("MYSQL_ADDON_HOST") . ";dbname=" . getenv("MYSQL_ADDON_DB"),
    getenv("MYSQL_ADDON_USER"),
    getenv("MYSQL_ADDON_PASSWORD")
);

// Check connection
if ( isset($bdd) ) {
    echo "Connected successfully";
    $stmt = $pdo->prepare("SELECT * FROM users WHERE usuario=:id AND clave =:pw");
    $stmt->execute(['usuario' => $un, 'pw' => $pwd]); 

while ($row = $stmt->fetch()) {
    echo $row['usuario']."<br />\n";
}

}else{
    die("Connection failed: " . $conn->connect_error);
    header('Location: index.php');
}

?>