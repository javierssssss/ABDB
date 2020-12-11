<?php
 $bdd = new PDO(
    "mysql:host=" . getenv("MYSQL_ADDON_HOST") . ";dbname=" . getenv("MYSQL_ADDON_DB"),
    getenv("MYSQL_ADDON_USER"),
    getenv("MYSQL_ADDON_PASSWORD")
);

// Check connection
if ( $bdd!=null ) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>