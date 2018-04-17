<?php
require_once('../config.php');
require_once('../inc/database.php');
require_once(DBAPI);
$companies = null;
$company = null;
/**
*  Listagem de Empresas
*/
function index() {
  global $companies;
  $companies = find_all('empresas');
}
/**
*  Cadastro de empresa
*/
function add() {
  if (!empty($_POST['company'])) {
    header('location: save.php');
  }
}
/**
*  Visualização de uma empresa
*/
function view($id = null) {
  global $company;
  if (find('empresas', $id)) {
    $company = find('empresas', $id);
    $products = findProdutos('produtos', 0);
  } else {
    header('location: index.php');
  }
}
/**
* Alteração de uma empresa
*/
function edit($id = null) {
  global $company;
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    if (find('empresas', $id)) {
      if (isset($_POST['company'])) {
        $company = $_POST['company'];
        update('empresas', $id, $company);
        header('location: index.php');
      } else {
        global $company;
        $company = find('empresas', $id);
      }
    } else {
      header('location: index.php');
    }
  } else {
    header('location: index.php');
  }
  return $company;
}
/**
*  Exclusão de uma empresa
*/
function delete($id = null) {
  global $company;
    $company = remove('empresas', $id);
    header('location: add.php');
}
