<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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

    public function upload(Request $request)
    {
        $method = $request->method();
        if($method == "POST"){
            $this->validate($request, ['image_upload' => 'required|mimes:jpg,jpeg,bmp,png']);
            Input::file('image_upload')->move('images', 'attractions.jpg');
            return redirect('/');
        }
        return view('contents.upload');
    }
}
