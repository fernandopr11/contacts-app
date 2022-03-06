<?php

$host = "localhost";
$database = "contacts_app";
$user = "fernando";
$password = "0701951063";

try {

  $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);

  // foreach ($conn->query("SHOW DATABASES") as $row) {

  //   print_r($row);
  // }

} catch (PDOException $e) {

  echo ("Error al conectar con la base de datos " . $e->getMessage());
  die();
}
