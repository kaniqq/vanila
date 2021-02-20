<?php


namespace App\animal;

use App\animal\animal;

class discount
{
    public function __construct(Animal $animal)
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
