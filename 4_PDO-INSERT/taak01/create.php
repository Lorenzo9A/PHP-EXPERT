<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';
$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
$sql = "INSERT INTO users (firstname, lastname) VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."')" ;
$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":ph_firstname", $firstName ); 
$stmt->bindParam(":ph_lastname", $lastName ); 
$stmt->execute();

?>