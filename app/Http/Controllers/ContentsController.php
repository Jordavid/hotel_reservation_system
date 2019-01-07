<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentsController extends Controller
{
    
    public function home()
    {
        $data = [
            'version' => '1.0.1'
        ];
        $last_updated = request()->session()->has('last_updated') ? request()->session()->pull('last_updated') : '';
        return view('contents.home', compact('data', 'last_updated'));
    }
}
