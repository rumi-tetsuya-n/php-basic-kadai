<?php
class Food {
  public $name;
  public $price;

  public function __construct(string $name,int $price){
    $this ->name =$name;
    $this ->price =$price;
  }
  public function show_price(){
    echo $this ->price;
  }
}

class Animal {
  public $name;
  public $height;
  public $weight;

  public function __construct(string $name,int $height,int $weight){
    $this ->name =$name;
    $this ->height =$height;
    $this ->weight =$weight;
  }
  public function show_height(){
    echo $this ->height;
  }
}

$apple = new Food('りんご',200);
$dog = new Animal('にゃんこ',20,100);

$apple -> show_price();
$dog -> show_height();

print_r($apple);
print_r($dog);

?>