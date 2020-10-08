<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function show()
    {
        return view('mypage.mypage');
    }
    
    public function add()
    {
        return view('mypage.create');
    }

    public function create()
    {
        return redirect('mypage/create');
    }

    public function edit()
    {
        return view('mypage.edit');
    }

    public function update()
    {
        return redirect('mypage/edit');
    }
}
