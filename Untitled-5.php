<?php
class Microwave{
    private $brand;
    private $power;
    function __construct($brand,$power){
    $this->brand = $brand;
    $this->power = $power;
}
    public function getBrand(){
    return $this->brand;
}
    public function getPower(){
    return $this->power;
}
    public function Output(){
    return "{$this->brand}" . "{$this->power}";
}
}
    $objectFive = new Microwave("Midea",700);
    echo "Бренд - " . $objectOne->getBrand() . " ";
    echo "Мощность - " . $objectOne->getPower();
    ?>