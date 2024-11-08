<?php 


class Product {
    public $name , $price , $brand , $image , $description;
    public $tax = 10 ;

    public function getName(){
       return $this->name ;
    }

    public function priceAfterDiscount($discount){
        $this->price = $this->price - $discount;
        return $this->price;
    }

    public function finalPrice(){
        return $this->price + ($this->tax / 100) * $this->price;
    }
}