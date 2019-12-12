<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div id="content">
    <h1>Product Discount Calculator</h1>
    <form action="display_discount.php" method="POST">
        <div id="data">
            <label>Product Description:</label>
            <input type="text" name="description" value="<?= $_POST['description'] ?? 0 ?>" required /><br />
            <label>List Price:</label>
            <input type="text" name="price" value="<?= $_POST['price'] ?? 0 ?>" required /><br />
            <label>Discount Percent:</label>
            <input type="text" name="percent" value="<?= $_POST['percent'] ??  0 ?>" required /> </div>
        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Calculate" /><br />
</body>
</html>
