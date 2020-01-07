<h2>Cập nhật thông tin khách hàng</h2>
<form method="post" action="./index.php?page=edit">
<input type="hidden" name="id" value="<?php echo $product->product_id; ?>"/>
<div class='form-group'>
    <label>ma sp</label>
    <input type="text" name="masp" value="<?php echo $product->product_code; ?>" class="form-control"/>
</div>
<div class='form-group'>
    <label>ten sp</label>
    <input type="text" name="tensp" value="<?php echo $product->product_name; ?>" class="form-control"/>
</div>
<div class='form-group'>
    <label>dong sp</label>
    <input type="text" name="dongsp" value="<?php echo $product->product_line; ?>" class="form-control"/>
</div>
<div class='form-group'>
    <label>nha cung cap</label>
    <input type="text" name="nhacungcap" value="<?php echo $product->product_vendor; ?>" class="form-control"/>
</div>
<div class='form-group'>
    <label>ton kho</label>
    <input type="text" name="tonkho" value="<?php echo $product->quantityInStock; ?>" class="form-control"/>
</div>
<div class='form-group'>
    <label>gia sp</label>
    <input type="text" name="giasp" value="<?php echo $product->price; ?>" class="form-control"/>
</div>
<div class ='form-group'>
    <input type="submit" value="update" class="btn btn-primary"/>
    <a href="index.php" class="btn btn-default">Cancel</a>

</div>
</form>