<?php
require_once('functions.php');
index();
?>

<?php include(HEADER_TEMPLATE); ?>

<div id="content">
  <div class="outer">
    <div class="inner bg-light lter">
      <table class="table table-hover">
        <tr>
          <th>ID </th>
          <th>Nome </th>
          <th></th>
          <th></th>
        </tr>
        <?php if($companies) : ?>
          <?php foreach ($companies as $c) :
            ?>
            <tr>
              <td><?= $c['id']?></td>
              <td><?= $c['nome']?></td>
              <?php
          			echo "<td><img src='images/".$c['imagem']."' width='50px'></td>";
              ?>
              <td class="actions text-right">
                <a href="view.php?id=<?php echo $c['id']; ?>" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> Visualizar</a>
                <a href="edit.php?id=<?php echo $c['id']; ?>" class="btn btn-sm btn-warning"><i class="fa fa-pencil"></i> Editar</a>
                <a href="delete.php?id=<?php echo $c['id']; ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Excluir</a>
              </td>
            </tr>
          <?php endforeach; ?>
        <?php else : ?>
          <tr>
            <td colspan="6">Nenhum registro encontrado.</td>
          </tr>
        <?php endif; ?>
      </table>

    </div>
    <!-- /.inner -->
  </div>
  <!-- /.outer -->
</div>

<?php include(FOOTER_TEMPLATE); ?>
