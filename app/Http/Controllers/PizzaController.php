<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    public function index() {
        $pizza = Pizza::all();

        return view('pizza', ['pizza' =>$pizza]);
    }
}
