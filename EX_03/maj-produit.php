<?php
function connect_to_database(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "basetest01";

    try{
        $pdo=new PDO("mysql:host=$servername;dbname=$databasename", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "UPDATE
            produit
            SET quantite ='1'
            WHERE nom = 'Short bleu'";
        
    $pdo->exec($sql);
        echo "Quantité mise à jour dans la table";
    }
    catch(PDOException $e){
        echo "Erreur : " . $e->getMessage();
    }
}

connect_to_database();

?>