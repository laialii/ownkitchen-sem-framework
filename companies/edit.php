<?php
require_once('functions.php');
edit($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>
<div id="content">
  <div class="outer">
    <div class="inner bg-light lter">
      <div class="col-lg-12">
        <h1 class="page-header">Editar empresa cadastrada</h1>
        <form action="update.php?id=<?php echo $company['id']; ?>" method="post" enctype="multipart/form-data">
          <div class="col-lg-12">
            <div class="form-group col-md-8">
              <label>Nome</label>
              <input name="nome" class="form-control pull-right" value="<?php echo $company['nome']; ?>">
            </div>
            <div class="form-group col-md-4">
              <label>Contato</label>
              <input name="contato" class="form-control pull-right" value="<?php echo $company['contato']; ?>">
            </div>
          </div>
          <div class="col-lg-12">
            <div class="form-group col-md-3">
              <label>Imagem</label>
              <input type="file" name="image" class="form-control pull-right" value="<?php echo $company['imagem']; ?>">
            </div>
            <br>
            <br>
          </div>
          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-success" name="upload">Atualizar</button>
              <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
