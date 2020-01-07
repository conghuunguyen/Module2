<?php 

namespace model;


class ProductDB{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }


    public function create($product) {
        $sql = "INSERT INTO productnew (product_code, product_name, product_line, product_vendor, quantityInStock, price) VALUE (?, ?, ?, ?, ?, ?)";

        $statement= $this->connection->prepare($sql);
        $statement->bindParam(1, $product->product_code);
        $statement->bindParam(2, $product->product_name);
        $statement->bindParam(3, $product->product_line);
        $statement->bindParam(4, $product->product_vendor);
        $statement->bindParam(5, $product->quantityInStock);
        $statement->bindParam(6, $product->price);
        return $statement->execute();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM productnew";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row['product_code'], $row['product_name'], $row['product_line'], $row["product_vendor"], $row['quantityInStock'],$row['price']);
            $product->product_id = $row['product_id'];
            $products[] = $product;

        }
        return $products;
    }

    public function get($id){
        $sql = "SELECT * FROM productnew WHERE product_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        // var_dump($row);

        $product = new Product($row['product_code'], $row['product_name'], $row['product_line'], $row["product_vendor"], $row['quantityInStock'],$row['price']);
        $product->product_id = $row['product_id'];
        // var_dump($product);
        return $product;
    }
    
    public function delete($id){
        
        $sql = "DELETE FROM productnew WHERE product_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }

    public function update($id, $product)
    {
        $sql = "UPDATE productnew SET product_code = ?, product_name = ?, product_line = ?, product_vendor = ?, quantityInStock = ?, price = ? WHERE product_id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->product_code);
        $statement->bindParam(2, $product->product_name);
        $statement->bindParam(3, $product->product_line);
        $statement->bindParam(4, $product->product_vendor);
        $statement->bindParam(5, $product->quantityInStock);
        $statement->bindParam(6, $product->price);
        $statement->bindParam(7, $id);
        // var_dump($product);
        return $statement->execute();
    }
}


?>