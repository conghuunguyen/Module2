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
<?php
$description = $_POST['description'] ?? 0;
$price = $_POST['price'] ?? 0;
$percent = $_POST['percent'] ?? 0;
$amount =  $price * $percent * 0.01;
$result = $price - $amount;
if ( empty($_POST['description']) || empty($_POST['price']) || empty($_POST['percent'])) {
    echo "<p>Error : description, price, percent require</p>";
} 
// else {
//     echo "Amount : $amount";
//     echo "Result : $result";
// }
?>
<div id="content">
    <h1>Product Discount Calculator</h1>
<div id="data">
            <label>Product Description:</label>
            <span><?php echo $description ?></span><br />
            <label>List Price:</label>
            <span><?php echo "$$price" ?></span><br />
            <label>Discount Percent:</label>
            <span><?php echo "$percent%" ?></span><br />
            <label>Discount Amount:</label>
            <span><?php echo "$$amount" ?></span><br />
            <label>Discount Price:</label>
            <span><?php echo "$$result" ?></span><br /> </div>
</div>
</body>
</html>
