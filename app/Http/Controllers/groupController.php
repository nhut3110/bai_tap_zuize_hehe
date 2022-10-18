<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class groupController extends Controller
{
    public function user1(){
        $textUser = "hello user 1";
        return view('group', compact('textUser'));
    }

    public function user2(){
        echo "hello user2";  
    }

    public function user3(){
        echo "hello user3";  
    }
}
