<?php require_once  '_layouts/header.php' ?>
<br><a href="index">到查詢頁面</a>

<section class="container">
  <form action="" method="post">
<div class="form-group">
  <label for="">標題</label>
  <input type="text" value="" name="title" class="form-control">
</div>
<div class="form-group">
  <label for="">內容</label>
  <textarea name="content"  cols="30" rows="10"></textarea>
</div>
<div class="form-group">
  <label for=""></label>
<input type="submit" name="送出" class="btn btn-primary">
  </div>
  </form>
</section>
<?php require_once '_layouts/footer.php' ?>
