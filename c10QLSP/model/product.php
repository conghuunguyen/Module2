<?php

namespace model;

class Product {
    public $product_id;
    public $product_code;
    public $product_name;
    public $product_line;
    public $product_vendor;
    public $quantityInStock;
    public $price;


    public function __construct($product_code,$product_name,$product_line,$product_vendor,$quantityInStock,$price)
    {
        $this->product_code= $product_code;
        $this->product_name = $product_name;
        $this->product_line = $product_line;
        $this->product_vendor = $product_vendor;
        $this->quantityInStock = $quantityInStock;
        $this->price = $price;
    }
}

?>