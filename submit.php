<?php
try{
    session_start();
    $un = $_POST['usuario'];
    $pwd = $_POST['clave'];
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
        if (count($result) > 0){
            echo "Logueado";
            $_SESSION["conectado"]=true;
            header('Location: index.php');
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