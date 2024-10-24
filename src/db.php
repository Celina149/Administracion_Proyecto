<?php
$severname = "db";
$username = "root";
$password = "yourpassword";
$dbname = "webstoreDB";

try{
    $conn  =  new PDO(
        "mysql:host=$severname; 
        dbname=$dbname;
        port:3307",
        $username, 
        $password);
        
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexión exitosa!";

}catch(PDOException $e){
    echo "Conexión fallida: " . $e->getMessage();
}
?>