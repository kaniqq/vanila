<?php


namespace App\Animal;

use App\Animal\Animal;

class Discount
{
    public function __construct(AnimalContract $animal)
    {
        $this->animal = $animal;
    }

    public function all()
    {
        $this->animal->setDiscount(3000);

        return [
            'name' => 'bob',
            'address' => '123 Coder\'s Tape Street'
        ];
    }
}
