<?php 
require_once 'classes/ProductClass.php';

function debug($data)
{
  echo '<pre>' . print_r($data, 1) . '<pre>';
}
$book = new BookProduct('Азбука', 20, null, 1000);
$notebook = new NoteboookProduct('Honor', 100, 'intel');

debug($book);
debug($notebook);

echo $book->getProduct();
echo $notebook->getProduct();
