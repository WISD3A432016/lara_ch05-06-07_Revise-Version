<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //ch06練習一 : 在HomeController內加入indexc函數
    public function indexc(){
        return view('welcome');
    }
}
