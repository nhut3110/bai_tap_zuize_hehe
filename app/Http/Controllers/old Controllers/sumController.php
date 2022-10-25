<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sumController extends Controller
{
    public function sum($a, $b) {
        return $a + $b;
    }

    public function calculation(Request $request) {
        $sum = $request->numA + $request->numB;
        return view('sum', compact('sum'));
    }
}
