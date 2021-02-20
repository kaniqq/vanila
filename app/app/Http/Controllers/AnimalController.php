<?php

namespace App\Http\Controllers;

use App\animal\discount;
use App\animal\animal;
use Illuminate\Http\Request;
use App\animal\item;

class AnimalController extends Controller
{
    public function test(discount $discount, animal $animal)
//    public function test(item $item)
    {
//        $animal = new animal('male');
        $order = $discount->all();

        dd($animal->dog('wan','20000'));
//        dd($item->item('wood'));
    }
}
