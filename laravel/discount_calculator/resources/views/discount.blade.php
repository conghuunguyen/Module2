<html>
    <head>
        <title>Product Discount Calculator</title>
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
        <div id="content">
            <h1>Product Discount Calculator</h1>
            <h1>Discount Calculator</h1>
            <form method="post" action="discount">
            @csrf
                <div id="data">
                    <label>Product Description:</label>
                    <input type="text" name="ProductDescription:" placeholder="thêm mô tả sản phẩm"/><br/>
                    <label>List Price:</label>
                    <input type="text" name="ListPrice" placeholder="thêm giá cho sản phẩm"/><br/>
                    <label>Discount Percent:</label>
                    <input type="text" name="DiscountPercent" placeholder="tỉ lệ chiết khấu"/>(%)<br/>
                </div>
                <div id="buttons">
                    <label>&nbsp;</label>
                    <input type="submit" value="Calculate Discount"/>
                </div>
            </form>
        </div>
    </body>
</html>