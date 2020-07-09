<?php
function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "basetest01";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM
            produit
            WHERE nom = 'T-shirt noir'";
        
    $pdo->exec($sql);
        echo "Entrée supprimée dans la table";
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

connect_to_database();

?>