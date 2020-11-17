<?php
$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';
$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
$sql = "INSERT INTO products (Fname, verkoopPrijs, aankoopPrijs) VALUES (:ph_Fname, :ph_verkoopPrijs, :ph_aankoopPrijs)" ;
$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":ph_Fname", $Fname ); 
$stmt->bindParam(":ph_verkoopPrijs", $verkoopPrijs );
$stmt->bindParam(":ph_aankoopPrijs", $aankoopPrijs );
$stmt->execute();

?>