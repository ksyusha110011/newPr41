<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function showIndex() {
        return view('home');
    }

    
    public function showArray() {
        $array = [
            ['id' => 1, 'title' => 'Вода', 'price' => 300, 'path' => 'img/1.jpg'], ['id' => 2, 'title' => 'Сок', 'price' => 150, 'path' => 'img/2.jpg']
            ];
         return view('home', compact(‘array’));
    }
    
}
