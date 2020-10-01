<?php

$sql = 'SELECT * FROM users WHERE email = :email AND status= :status';
$database_connectie->prepare($sql);
$statement->bindParam(":email", $email);
$statement->bindParam(":status", $status);
$user = $statement->fetch();

?>