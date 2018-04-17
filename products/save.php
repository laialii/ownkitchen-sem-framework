<?php
require_once('../config.php');
require_once('../inc/database.php');
require_once(DBAPI);

$database = open_database();


if (isset($_POST['upload'])) {
  $target = "images/".basename($_FILES['image']['name']);

  $image = $_FILES['image']['name'];

  $sql = "INSERT INTO produtos (titulo, descricao, preco, imagem, cod_categoria, cod_empresa)
  VALUES ('{$_POST["titulo"]}', '{$_POST["descricao"]}', '{$_POST["preco"]}',
    '$image', '{$_POST["cod_categoria"]}', '{$_POST["cod_empresa"]}')";
    $database->query($sql);
    move_uploaded_file($_FILES['image']['tmp_name'], $target);
  }

  close_database($database);

  header('location: index.php');

  ?>
