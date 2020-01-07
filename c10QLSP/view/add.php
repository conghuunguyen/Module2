<?php
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="col-12 col-md-12">
    <div class="row">
        <div class="col-12">
            <h1>Thêm mới Sản Phẩm</h1>
        </div>
        <div class="col-12">
            <form method="post">
                <div class="form-group">
                    <label>Mã Sản Phẩm</label>
                    <input type="text" class="form-control" name="product_code"  placeholder="Nhập mã sản phẩm" required>
                </div>
                <div class="form-group">
                    <label>Tên Sản Phẩm</label>
                    <input type="text" class="form-control" name="product_name" placeholder="Nhập tên sản phẩm" required>
                </div>
                <div class="form-group">
                    <label>Dòng Sản Phẩm</label>
                    <input type="text" class="form-control" name="product_line" placeholder="Nhập dòng sản phẩm" required>
                </div>
                <div class="form-group">
                    <label>Nhà Cung Cấp Sản Phẩm</label>
                    <input type="text" class="form-control" name="product_vendor" placeholder="Nhập nhà cung cấp" required>
                </div>
                <div class="form-group">
                    <label>Số Lượng Tồn Kho</label>
                    <input type="number" class="form-control" name="quantityInStock" placeholder="Nhập số lượng" required>
                </div>
                <div class="form-group">
                    <label>Giá Sản Phẩm</label>
                    <input type="number" class="form-control" name="price" placeholder="Nhập giá sản phẩm" required>
                </div>
                <button type="submit" class="btn btn-primary">Thêm mới</button>
                <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
            </form>
        </div>
    </div>
</div>