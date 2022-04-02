<?php

$host = "db";
$database = "contacts_app";
$user = "root";
$password = "MYSQL_ROOT_PASSWORD";

try {

  $conn = new PDO("mysql:host=$host;dbname=$database", $user, $password);
  
} catch (PDOException $e) {

  echo ("Error al conectar con la base de datos " . $e->getMessage());
  die();
}
