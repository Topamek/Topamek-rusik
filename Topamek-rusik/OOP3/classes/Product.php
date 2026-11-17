<?php
class Product
{
  public $name;
  public $price;

  private $discount = 10;

  // public $public = 'Public' ;
  // ptotected $protected = 'Protected';
  // private $private = 'Private';
  public function __construct($name, $price)
  {
    $this->name = $name;
    $this->price = $price;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getPrice()
  {
    return $this->price - ($this->discount / 100 * $this->price);
  }

  public function getDiscount():int{
    return $this->discount;
  }
  public function setDiscount(int $discount){
    return $this->discount = $discount;
  }

  public function getProduct ()
  {
    return
    "hr О товаре: <br>
    Наименование: {$this->name} <br>
    Цена со скидкой: {$this->getPrice()} <br>";
  }


}