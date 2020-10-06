
<?php
 
$host = 'localhost';
$db   = 'toolsforever';
$user = 'root';
$pass = '';
$database_connectie = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);
 
$dsn = "mysql:host=$host;dbname=$db;";
try {
     $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}
 
$sql = 'SELECT * FROM users WHERE firstname = :Mohammed';
$stmt = $pdo->prepare('SELECT * FROM users WHERE firstname = :Mohamed');
$stmt->execute(['firstname' => $firstname]);
$user = $stmt->fetch();
 
foreach ($stmt as $row)
{
    echo $row['firstname'] . "\n";
}
 
?>

