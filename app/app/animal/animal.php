<?php

namespace App\animal;

class animal
{
    public function __construct($gender)
    {
        $this->gender = $gender;
    }

    public function dog($cry)
    {
        return [
            'cry' => $cry,
            'gender' => $this->gender,
        ];
    }
}
