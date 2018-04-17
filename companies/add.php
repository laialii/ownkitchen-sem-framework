<?php
require_once('functions.php');
?>

<?php include(HEADER_TEMPLATE); ?>
<div id="content">
  <div class="outer">
    <div class="inner bg-light lter">
      <div class="col-lg-12">
        <h1 class="page-header">Criar empresa</h1>
        <form action="save.php" method="post" enctype="multipart/form-data">

            <div class="form-group col-md-6">
              <label>Nome</label>
              <input name="nome" class="form-control pull-right">
            </div>

            <div class="form-group col-md-4">
              <label>Contato</label>
              <input name="contato" class="form-control pull-right">
            </div>
          <div class="form-group col-md-3">
            <label>Imagem</label>
            <input type="file" name="image" class="">
          </div>
          <br>
          <br>

          <div class="row">
            <div class="col-md-12">
              <button type="submit" class="btn btn-success" name="upload">Salvar</button>
              <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
</div>

<?php include(FOOTER_TEMPLATE); ?>
