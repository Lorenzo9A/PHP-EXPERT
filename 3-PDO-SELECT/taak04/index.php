<?php
$host = 'localhost';$db   = 'toolsforever';$user = 'root';$pass = '';
$dsn = "mysql:host=$host;dbname=$db;";

try {     $pdo = new PDO($dsn, $user, $pass);
} catch (\PDOException $e) {     throw new \PDOException($e->getMessage(), (int)$e->getCode());}

$stmt = $pdo->prepare('SELECT * FROM locations WHERE city = :city');
while ($row = $stmt->fetch()){    
    echo $row['name'] . "<br>"; 
    echo $row['address'] . "<br>";    
    echo $row['city'] . "<br>";
           echo "<br>";    }
?>