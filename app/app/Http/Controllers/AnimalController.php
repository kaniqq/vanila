<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\animal\animal;
use App\animal\item;

class AnimalController extends Controller
{
    public function test(animal $animal)
//    public function test(item $item)
    {
//        $animal = new animal('male');

        dd($animal->dog('wan'));
//        dd($item->item('wood'));
    }
}
