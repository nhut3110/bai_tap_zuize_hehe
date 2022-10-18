<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MangController extends Controller
{
    public function getStudent(){
        $name = "Nhut";
        $age = 20;
        $class = "20CSE";
        $arr = [
            [ 'name' => $name, 'age' => $age, 'class' => $class],
            [ 'name' => "hehe", 'age' => $age, 'class' => $class]
        ];
        return view('mang')->with('student', $arr);
    }
}
