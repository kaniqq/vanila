<?php

namespace App\Animal;

interface AnimalContract
{
    public function setDiscount($price);

    public function dog($cry, $price);
}
