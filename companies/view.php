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
            <h4 class="page-header"><?php echo $company['id']; ?> - <?php echo $company['nome']; ?></h4>
          </header>
          <div class="body">
            <?php
            if ($company['imagem']) {
              echo "<img src='images/".$company['imagem']."' width='500px' >";
            }
            ?>
            <br>
            <strong>Contato</strong> <?php echo $company['contato']; ?>
            <br>
            <br>
            <a href="edit.php?id=<?php echo $company['id']; ?>" class="btn btn-primary">Editar</a>
            <a href="delete.php?id=<?php echo $company['id']; ?>" class="btn btn-danger">Excluir</a>
            <a href="index.php" class="btn btn-default">Voltar</a>
          </div>
        </div>
      </div>

      <div class="ui-sortable">
        <div class="box ui-sortable-handle">
          <header>
            <h4 class="page-header">Galeria de produtos</h4>
          </header>
          <div class="body">
            <div class="row">
              <?php
              $products = findProdutos('produtos', $company['id']);

              if ($products) {
                foreach ($products as $product) {

                ?>
                <div class="col-md-2">
                  <div class="thumbnail">
                    <a href="<?php echo BASEURL; ?>products/view.php?id=<?=$product['id']?>">
                      <?php
                      echo "<td><img class='img-thumbnail' src='../products/images/".$product['imagem']."' width='145px'>";
                      ?>
                      <div class="caption">
                        <p><?=$product['titulo']?></p>
                      </div>
                    </div>
                  </div>
                <?php } ?>
                  <a href="<?php echo BASEURL; ?>products/add.php?id=<?=$company['id']?>" class="btn btn-metis-1 btn-line">Cadastrar mais produtos!</a>
                  <?php
                }
                else{
                  ?>
                  <a href="<?php echo BASEURL; ?>products/add.php?id=<?=$company['id']?>" class="btn btn-metis-1 btn-line">Cadastre seu primeiro produto!</a>
                <?php } ?>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
