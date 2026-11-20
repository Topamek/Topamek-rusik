<?php 
require_once 'classes/Product.php';
require_once 'classes/BookProduct.php';
require_once 'classes/NotebookProduct.php';

function debug($data)
{
  echo '<pre>' . print_r($data, 1) . '<pre>';
}
$book = new BookProduct('Азбука', 20, 1000);
$notebook = new NotebookProduct('Honor', 100, 'intel');

debug($book);
debug($notebook);

$book->discount = 50;

echo $book->getProduct();
echo $notebook->getProduct();
