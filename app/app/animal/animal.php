<?php

namespace App\animal;

class animal
{

    private $gender;
    private $discount;

    public function __construct($gender)
    {
        $this->gender = $gender;
        $this->discount = 0;
    }

    public function setDiscount($price)
    {
        $this->discount = $price;
    }

    public function dog($cry, $price)
    {
        return [
            'price' => $price - $this->discount,
            'cry' => $cry,
            'gender' => $this->gender,
            'discount' =>$this->discount,
        ];
    }
}
