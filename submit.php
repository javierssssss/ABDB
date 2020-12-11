<?php

$un = $_POST['usuario'];
$pwd = $_POST['clave'];

 $bdd = new PDO(
    "mysql:host=" . getenv("MYSQL_ADDON_HOST") . ";dbname=" . getenv("MYSQL_ADDON_DB"),
    getenv("MYSQL_ADDON_USER"),
    getenv("MYSQL_ADDON_PASSWORD")
);

// Check connection
if ( $bdd!=null ) {
    echo "Connected successfully";
  $stmt = $bdd->query("SELECT * FROM users");
while ($row = $stmt->fetch()) {
    echo $row['name']."<br />\n";
}

}else{
    die("Connection failed: " . $conn->connect_error);
    header('Location: index.php');
}

?>