<?php require_once  '_layouts/header.php' ?>
<section class="container">
  <table class="table table-hover">
    <tr class="success">
      <td>main</td>
      <td>edit</td>
      <td>delete</td>
    </tr>
  <?php foreach ($query as $key => $value):?>
  <tr>
    <td><a href="<?= base_url('article/show/'.$value->id)?>"><?= $value->title?></a></td>
    <td><a href="<?= base_url('article/edit/'.$value->id)?>" class="btn btn-warning">Edit</a></td>
    <td><a href="<?= base_url('article/delete/'.$value->id)?>" class="btn btn-danger">delete</a></td>
  </tr>
<?php endforeach ?>
</table>
</section>
<a href=<?=base_url('article/create')?>>回新增</a>
<?php require_once '_layouts/footer.php' ?>
