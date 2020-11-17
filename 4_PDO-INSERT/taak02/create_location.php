<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';
$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$namee = $_POST['namee'];
$adress = $_POST['adress'];
$city = $_POST['city'];

$sql = "INSERT INTO locations (namee, adress, city) VALUES (:ph_namee , :ph_adress, :ph_city)" ;
$stmt = $db_conn->prepare($sql); 
$stmt->bindParam(":ph_namee", $namee );
$stmt->bindParam(":ph_adress", $adress ); 
$stmt->bindParam(":ph_city", $city ); 
$stmt->execute();

?>