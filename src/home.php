<?php

require "database.php";

session_start();


try {

  $contacts = $conn->query("SELECT  * FROM contacts WHERE user_id = {$_SESSION['user']['id']}");
  
} catch (PDOException $e) {

  echo ("The error is" . $e);
}

if (!isset($_SESSION["user"])) {

  header("Location: login.php");
  return;
}


try {

  //Insert IP user in table
  $ipUser = $_SERVER['REMOTE_ADDR'];
  $statement = $conn->prepare("INSERT INTO user_conection (ip, user_id) VALUES ('$ipUser', {$_SESSION['user']['id']})");
  $statement->execute();
} catch (PDOException $e) {

  echo ("Error is " . $e->getMessage());
}

?>


<?php require "partials/header.php" ?>
<div class="container pt-4 p-3">
  <div class="row">

    <?php if ($contacts->rowCount() == 0) : ?>

      <?php $statement  = $conn->prepare("ALTER TABLE contacts AUTO_INCREMENT = 1");

      $statement->execute();

      ?>

      <div class="col-md-4 mx-auto">
        <div class="card card-body text-center">
          <p>No contacts saved yet</p>
          <a href="add.php">Add One!</a>
        </div>
      </div>

    <?php endif ?>
    <?php foreach ($contacts as $contact) : ?>
      <div class="col-md-4 mb-3">
        <div class="card text-center">
          <div class="card-body">
            <h3 class="card-title text-capitalize"><?= $contact["name"] ?></h3>
            <p class="m-2"><?= $contact["phone_number"] ?></p>
            <a href="edit.php?id=<?= $contact["id"] ?>" class="btn btn-secondary mb-2">Edit Contact</a>
            <a href="delete.php?id=<?= $contact["id"] ?>" class="btn btn-danger mb-2">Delete Contact</a>
          </div>
        </div>
      </div>
    <?php endforeach ?>
    <div class="d-flex justify-content-center">
      <a href="pdf.php" class="btn btn-primary mb-2 mt-5">Export Contacts</a>
    </div>

  </div>
</div>

<?php require "partials/footer.php" ?>
