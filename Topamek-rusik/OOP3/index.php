<?php 
require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';
require_once 'classes/NotebookProduct.php';
require_once 'classes/I3D.php';

function debug($data)
{
  echo '<pre>' . print_r($data, 1) . '<pre>';
}

// $product = new Product('test', 23);


$book = new BookProduct('Азбука', 20, 1000);
$notebook = new NotebookProduct('Honor', 100, 'intel');

$book->addProduct('Test', 10, 1);
$book->test();

debug($book);
debug($notebook);

$book->discount = 50;

echo $book->getProduct();
echo $notebook->getProduct();


