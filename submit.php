<?php


try{
    $un = $_POST['usuario'];
    $pwd = $_POST['clave'];
    echo $un;
    echo $pwd;

    $bdd = new PDO(
        "mysql:host=" . getenv("MYSQL_ADDON_HOST") . ";dbname=" . getenv("MYSQL_ADDON_DB"),
        getenv("MYSQL_ADDON_USER"),
        getenv("MYSQL_ADDON_PASSWORD")
    );
    if ( isset($bdd) ) {
        echo "CONECTADO";
        $stmt = $bdd->prepare("SELECT * FROM users WHERE usuario=:un AND clave = :pwd");
        /*$stmt->bindValue(':un', 'Joe');
        $stmt->bindValue(':pwd', 'Joe');*/

        $stmt->execute(['un' => $un, 'pwd' => $pwd]); 
        $result = $stmt->fetchAll();
        foreach($result as $row){
            echo "<li>{$row['usuario']}</li>";
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