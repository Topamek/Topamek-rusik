<?php 
class BookProduct extends Product{
  public $numPages;
  public function __construct($name, $price, $numPages)
  {
    parent:: __construct($name, $price);
    $this->numPages = $numPages;
    $this->setDiscount(10);
    // var_dump($this->public);
    // var_dump($this->protected);
    // var_dump($this->private);
  }
  public function getNumpages()
  {
    return $this->numPages;
  }
  public function getProduct()
  {
    $out = parent::getProduct();
    $out .= 'Кол-во страниц: {$this->numPages} <br>';
    $out .= 'Скидка: {$this->getDiscount}<br>';
    return $out;
  }
}
 ?>