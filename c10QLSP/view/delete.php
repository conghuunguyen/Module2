<h1>Bạn chắc chắn muốn xóa san pham này?</h1>
<h3><?php echo $product->product_name; ?></h3>
<form action="" method="post">
  <input type="hidden" name="id" value="<?php echo $product->product_id; ?>"/>
  <div class="form-group">
      <input type="submit" value="Delete" class="btn btn-danger"/>
      <a class="btn btn-default" href="index.php">Cancel</a>
  </div>
</form>