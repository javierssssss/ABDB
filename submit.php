<?php

$un = $_POST['usuario'];
$pwd = $_POST['clave'];

 $bdd = new PDO(
    "mysql:host=" . getenv("MYSQL_ADDON_HOST") . ";dbname=" . getenv("MYSQL_ADDON_DB"),
    getenv("MYSQL_ADDON_USER"),
    getenv("MYSQL_ADDON_PASSWORD")
);

// Check connection
if ( $bdd==null ) {
  die("Connection failed: " . $conn->connect_error);
  $stmt = $bdd->query("SELECT * FROM users");
while ($row = $stmt->fetch()) {
    echo $row['name']."<br />\n";
}

}else{
    echo "Connected successfully";
    header('Location: index.php');
}

?>