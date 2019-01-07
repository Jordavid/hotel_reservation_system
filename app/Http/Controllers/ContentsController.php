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
        return view('contents.home', compact('data'));
    }
}
