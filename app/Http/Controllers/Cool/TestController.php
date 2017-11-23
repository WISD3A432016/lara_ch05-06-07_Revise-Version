<?php

namespace App\Http\Controllers\Cool;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //ch06練習三(2): 加入indexc函數
    public function indexc(){
        return 'Cooler';
    }
}
