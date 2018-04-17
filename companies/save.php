<?php
require_once('../config.php');
require_once('../inc/database.php');
require_once(DBAPI);

$database = open_database();

if (isset($_POST['upload'])) {
  $target = "images/".basename($_FILES['image']['name']);

  $image = $_FILES['image']['name'];

  $sql = "INSERT INTO empresas (nome, contato, imagem)
  VALUES ('{$_POST["nome"]}', '{$_POST["contato"]}', '$image')";
  $database->query($sql);

  move_uploaded_file($_FILES['image']['tmp_name'], $target);
}

close_database($database);

header('location: index.php');

?>
