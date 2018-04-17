<?php
require_once('functions.php');
edit($_GET['id']);
?>

<?php include(HEADER_TEMPLATE); ?>

<div id="content">
  <div class="outer">
    <div class="inner bg-light lter">
      <div class="col-lg-12">
        <h1 class="page-header">Editar produto cadastrado</h1>

        <form action="update.php?id=<?php echo $product['id']; ?>" method="post" enctype="multipart/form-data">
          <div class="row">
            <div class="form-group col-md-4">
              <label>Titulo</label>
              <input name="titulo" class="form-control pull-right" value="<?php echo $product['titulo']; ?>">
            </div>

            <div class="form-group col-md-4">
              <label>Categorias</label>
              <select type="text" name="cod_categoria" class="form-control">
                <?php
                foreach (find('categorias') as $c) {
                  echo "<option value='{$c['id']}'>";
                  echo $c['nome'];
                  echo "</option>";
                }
                ?>
              </select>
            </div>

            <div class="row">
              <div class="form-group col-md-3">
                <label>Imagem</label>
                <input type="file" name="image" class=" form-control pull-right" value="<?php echo $product['imagem']; ?>">
              </div>
            </div>
            <div class="form-group col-md-8">
              <label>Descrição</label>
              <textarea name="descricao" class="form-control pull-right"><?php echo $product['descricao']; ?></textarea>
            </div>

            <div class="form-group col-md-8">
              <label>Preço</label>
              <input name="preco" class="form-control pull-right" value="<?php echo $product['preco']; ?>">
            </div>

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
