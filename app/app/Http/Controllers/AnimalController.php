<?php

namespace App\Http\Controllers;

use App\Animal\AnimalContract;
use App\Animal\Discount;
use App\Animal\Animal;
use Illuminate\Http\Request;
use App\Animal\item;

class AnimalController extends Controller
{
    public function test(Discount $discount, AnimalContract $animal)
//    public function test(item $item)
    {
//        $animal = new animal('male');
        $order = $discount->all();

        dd($animal->dog('wan','20000'));
//        dd($item->item('wood'));
    }
}
