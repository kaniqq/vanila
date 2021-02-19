<?php

namespace App\animal;

class item
{
    public function __construct($price)
    {
        $this->price = $price;
    }

    public function item($type)
    {
        return [
            'type' => $type,
            'price' => $this->price,
        ];
    }
}
