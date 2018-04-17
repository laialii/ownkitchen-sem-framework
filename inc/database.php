<?php
mysqli_report(MYSQLI_REPORT_STRICT);
function open_database() {
  try {
    global $connection;
    $connection = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    return $connection;
  } catch (Exception $e) {
    echo $e->getMessage();
    return null;
  }
}
function close_database($connection) {
  try {
    mysqli_close($connection);
  } catch (Exception $e) {
    echo $e->getMessage();
  }
}
function find( $table = null, $id = null ) {
  $database = open_database();
  $found = null;
  try {
    if ($id) {
      $sql = "SELECT * FROM " . $table . " WHERE id = " . $id;
      $result = $database->query($sql);

      if ($result->num_rows > 0) {
        $found = $result->fetch_assoc();
      }

    } else {

      $sql = "SELECT * FROM " . $table;
      $result = $database->query($sql);

      if ($result->num_rows > 0) {
        $found = $result->fetch_all(MYSQLI_ASSOC);
      }
    }
  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }

  close_database($database);
  return $found;
}
function findProdutos( $table = null, $id = null ) {
  $database = open_database();
  $found = null;
  if ($id) {
    $sql = "SELECT * FROM " . $table . " WHERE cod_empresa = " . $id;
    $result = $database->query($sql);

    if ($result->num_rows > 0) {
      $found = $result->fetch_assoc();
    }

  }
  close_database($database);
  return $found;
}

function find_all( $table ) {
  return find($table);
}

/**
*  Insere um registro no BD
*/
function save($table = null, $data = null) {
  $database = open_database();

  $sql = "INSERT INTO empresas (nome, contato, imagem, cod_usuario)
  VALUES ('{$_POST["nome"]}', '{$_POST["contato"]}', '{$_POST["imagem"]}', '{$_POST["cod_usuario"]}')";
  $database->query($sql);

  close_database($database);
}

/**
*  Atualiza um registro em uma tabela, por ID
*/
function update($table = null, $id = 0, $data = null) {
  $database = open_database();
  $items = null;
  foreach ($data as $key => $value) {
    $items .= trim($key, "'") . "='$value',";
  }
  // remove a ultima virgula
  $items = rtrim($items, ',');
  $sql  = "UPDATE " . $table;
  $sql .= " SET $items";
  $sql .= " WHERE id=" . $id . ";";
  try {
    $database->query($sql);
    $_SESSION['message'] = 'Registro atualizado com sucesso.';
    $_SESSION['type'] = 'success';
  } catch (Exception $e) {
    $_SESSION['message'] = 'Nao foi possivel realizar a operacao.';
    $_SESSION['type'] = 'danger';
  }
  close_database($database);
}
function view_records($table = null, $id = null, $company = null, $product = null){
  $database = open_database();
  $found = null;
  try{
    if ($company) {
      $sql = "SELECT * FROM empresas WHERE cod_empresa = ". $id;
      $result = $database->query($sql);
      if (!$result) {
        trigger_error('Invalid query: ' . $database->error);
      }

      if ($result->num_rows > 0) {
        $found = $result->fetch_assoc();
      }
    }
    elseif ($product) {
      $sql = "SELECT * FROM 'produtos' WHERE id = " . $id;
      $result = $database->query($sql);

      if ($result->num_rows > 0) {
        $found = $result->fetch_assoc();
      }
    }
  }
  catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }

  close_database($database);
  return $found;
}
/**
*  Remove uma linha de uma tabela pelo ID do registro
*/
function remove( $table = null, $id = null ) {
  $database = open_database();

  try {
    if ($id) {
      $sql = "DELETE FROM " . $table . " WHERE id = " . $id;
      $result = $database->query($sql);
      if ($result = $database->query($sql)) {
        $_SESSION['message'] = "Registro Removido com Sucesso.";
        $_SESSION['type'] = 'success';
      }
    }
  } catch (Exception $e) {
    $_SESSION['message'] = $e->GetMessage();
    $_SESSION['type'] = 'danger';
  }
  close_database($database);
}
