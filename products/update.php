<?php
require_once('../config.php');
require_once('../inc/database.php');
require_once(DBAPI);

$database = open_database();

if (isset($_POST['upload'])) {
  $target = "images/".basename($_FILES['image']['name']);

  $image = $_FILES['image']['name'];

  $sql = "UPDATE produtos
  SET titulo='{$_POST["titulo"]}',  descricao='{$_POST["descricao"]}',
  preco='{$_POST["preco"]}',
  imagem='$image', cod_categoria='{$_POST["cod_categoria"]}'
  WHERE id={$_GET["id"]}";

  $database->query($sql);

  move_uploaded_file($_FILES['image']['tmp_name'], $target);
}

close_database($database);

header('location: index.php');

?>
