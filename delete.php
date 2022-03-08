<?php

require "database.php";

$id = $_GET["id"];

$statement = $conn->prepare("SELECT * FROM contacts WHERE id = :id LIMIT 1");
$statement->bindParam(":id", $id);
$statement->execute();

if ($statement->rowCount() == 0) {

  http_response_code(404);
  echo ("HTTP 404 NOT FOUND");
  return;
}

$contact = $statement->fetch(PDO::FETCH_ASSOC);

if ($contact["user_id"] !== $_SESSION["user"]["id"]) {

  http_response_code(403);
  echo ("HTPP 403 unauthorized");
  return;
}

$conn->prepare("DELETE FROM contacts WHERE id = :id")->execute([":id" => $id]);

header("Location: home.php");
