<?php

namespace controller;

use model\Product;
use model\ProductDB;
use model\DBConnection;

class ProductController
{

    public $productDB;

    public function __construct()
    {
        $connection = new DBConnection("mysql:host=localhost; dbname=product", "root", "123456789");

        $this->productDB = new ProductDB($connection->connect());
    }

    public function index()
    {
        $products = $this->productDB->getAll();
        include 'view/list.php';
    }


    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $product_code = $_POST['product_code'];
            $product_name = $_POST['product_name'];
            $product_line = $_POST['product_line'];
            $product_vendor = $_POST['product_vendor'];
            $quantityInStock = $_POST['quantityInStock'];
            $price = $_POST['price'];


            $product = new Product($product_code, $product_name, $product_line, $product_vendor, $quantityInStock, $price);
            $this->productDB->create($product);
            $message = 'Product created';
            // var_dump($message);

            header('location: index.php');
        }
    }


    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            // var_dump($id);
            $product = $this->productDB->get($id);
            // var_dump($product);
            include 'view/delete.php';
        } else {
            $id = $_POST['id'];
            $this->productDB->delete($id);
            header('Location: index.php');
        }
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->get($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['masp'], $_POST['tensp'], $_POST['dongsp'], $_POST['nhacungcap'], $_POST['tonkho'], $_POST['giasp']);
            // var_dump($product);
            $this->productDB->update($id, $product);
            header('Location: index.php');
        }
    }
}
