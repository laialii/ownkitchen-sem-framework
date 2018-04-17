<?php
require_once('functions.php');
require_once('../inc/database.php');
view($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>
<div id="content">
  <div class="outer">
    <div class="inner bg-light lter">

      <div class="ui-sortable">
        <div class="box ui-sortable-handle">
          <header>
            <h4 class="page-header"><?php echo $product['id']; ?> - <?php echo $product['titulo']; ?></h4>
          </header>

          <div class="body">
            <table width="100%">
              <tr>
                <th></th>
                <th></th>
                <th></th>
                <th></th>
              </tr>
              <?php
              if ($product['imagem']) {
                echo "<td><img src='images/".$product['imagem']."' width='500px' ></td>";
              }
              ?>
              <tr>
                <td><strong>Descrição: </strong><?php echo $product['descricao']; ?></td>
              </tr>
              <tr>
                <td><strong>Categoria: </strong><?php echo $product['cod_categoria']; ?></td>
              </tr>
              <tr>
                <td><strong>Empresa:</strong> <?php echo $product['cod_empresa']; ?></td>
              </tr>
            </table>
            <br>
            <a href="edit.php?id=<?php echo $product['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="delete.php?id=<?php echo $product['id']; ?>" class="btn btn-danger">Excluir</a>
            <a href="index.php" class="btn btn-default">Voltar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
