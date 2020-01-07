<h2>Danh Sách Sản Phẩm</h2>
<a href="./index.php?page=add" class="btn btn-warning btn-sm">thêm mới sản phẩm</a>
<table class="table">
<thead>
    <tr>
        <th>STT</th>
        <th>Code</th>
        <th>Name</th>
        <th>Line</th>
        <th>Vendor</th>
        <th>Quantity</th>
        <th>Price</th>
        <th></th>
        <th></th>
    </tr>
</thead>
<tbody>

    <?php foreach($products as $key => $product): ?>
    <tr>
        <td><?php echo ++$key ?></td>
        <td><?php echo $product->product_code ?></td>
        <td><?php echo $product->product_name ?></td>
        <td><?php echo $product->product_line ?></td>
        <td><?php echo $product->product_vendor ?></td>
        <td><?php echo $product->quantityInStock ?></td>
        <td><?php echo $product->price ?></td>
        <td> <a href="./index.php?page=delete&id=<?php echo $product->product_id;?>" class="btn btn-danger">Delete</a></td>
        <td> <a href="./index.php?page=edit&id=<?php echo $product->product_id; ?>" class="btn btn-warning btn-sm">Update</a></td>
    </tr>
<?php endforeach; ?>
</tbody>
</table>