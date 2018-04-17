<?php
require_once('../config.php');
require_once('../inc/database.php');
require_once(DBAPI);
$products = null;
$product = null;
/**
*  Listagem de produtos
*/
function index() {
  global $products;
  $products = find_all('produtos');
}
/**
*  Cadastro de produto
*/
function add() {
  if (!empty($_POST['product'])) {
    header('location: save.php');
  }
}
/**
*  Visualização de um produto
*/
function view($id = null) {
  global $product;
  if (find('produtos', $id)) {
    $product = find('produtos', $id);
  } else {
    header('location: index.php');
  }
}
/**
* Alteração de um produto
*/
function edit($id = null) {
  global $product;
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (find('produtos', $id)) {
      if (isset($_POST['product'])) {
        $product = $_POST['product'];
        update('produtos', $id, $product);
        header('location: index.php');
      } else {
        global $product;
        $product = find('produtos', $id);
      }
    } else {
      header('location: index.php');
    }
  } else {
    header('location: index.php');
  }
  return $product;
}
/**
*  Exclusão de um produto
*/
function delete($id = null) {

  if (find('produtos', $id)) {
      global $product;
    $product = remove('produtos', $id);
    header('location: index.php');
  }  else {
    header('location: add.php');
  }
}
