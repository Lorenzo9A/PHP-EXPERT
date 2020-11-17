<?php

$database_lokatie     = 'localhost';
$database_naam        = 'toolsforever';
$database_gebruiker   = 'root';
$database_wachtwoord  = '';
$db_conn = new PDO("mysql:host=$database_lokatie;dbname=$database_naam", $database_gebruiker, $database_wachtwoord);

$id = 5;

$sql = "DELETE FROM users WHERE id = :ph_id";
$stmt = $db_conn->prepare($sql);
$stmt->bindParam(":ph_id", $id );
$stmt->execute()

?>
<form action="delete.php">
<label for="id">Verwijder id:</label>
  <input type="number" id="id" name="remove"><br><br>
  <button type="submit">Submit:</button>
<a href="delete.php?id=1<?php echo $users['id']; ?> </a></td>
</form>