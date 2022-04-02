<?php

$host = "localhost";
$database = "contacts_app";
$user = "root";
$password = "0701951063";

try {

  $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);


} catch (PDOException $e) {

  echo ("Error al conectar con la base de datos " . $e->getMessage());
  die();
}
