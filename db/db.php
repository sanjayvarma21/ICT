<?php
$servername = "localhost";
$username = "id16599587_ment";
$password = "Mentcaresystem@123";

try {
  $conn = new PDO("mysql:host=$servername;dbname=id16599587_mentcare_system", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>