<?php

require "database.php";

session_start();

$contacts = $conn->query("SELECT  * FROM contacts WHERE user_id = {$_SESSION['user']['id']}");


?>

<header>
  <script defer src="https://kit.fontawesome.com/f138f2a48c.js" crossorigin="anonymous"></script>
</header>

<style>
  /**
Tomado de https://parzibyte.me/blog/2018/10/16/tabla-html-bordes-css/
 */


  html {
    margin: 40px 50px
  }

  h2 {

    text-align: center;
    font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;

  }

  th {
    background-color: #4caf50;
    color: white;
    padding: 2px;
    border: 2px solid black;
  }

  td {
    background-color: #f2f2f2;
    color: black;
    padding: 2px;
    border: 2px solid black;
    text-align: center;
  }

  table {
    border-collapse: collapse;
  }

  .contenido {

    margin: 0 auto;

  }
</style>

<div>
  <h2>Lista de contactos</h2>
</div>

<div class="contenido">
  <table>
    <thead>
      <tr class="head">
        <th>Nombre</th>
        <th>Numero</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($contacts as $contact) { ?>
        <tr>
          <td><?php echo $contact["name"]; ?></td>
          <td><?php echo $contact["phone_number"]; ?></td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
