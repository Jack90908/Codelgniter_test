<?php require_once  '_layouts/header.php' ?>
<section class="container">
  <form action="" method="post">
<div class="form-group">
  <label for="">標題</label>
  <input type="text" value="" name="title" class="form-control"value="<?= $query->title?>">
</div>
<div class="form-group">
  <label for="">內容</label>
  <textarea name="content" id="" cols="30" rows="10"value="<?$query->content ?>"></textarea>
</div>
<div class="form-group">
  <label for=""></label>
<input type="submit" name="送出" class="btn btn-primary">
  </div>
  </form>
</section>
<a href="create">回新增</a>
<a href="index">回查詢</a>
<?php var_dump($data) ?>
<?php require_once '_layouts/footer.php' ?>
