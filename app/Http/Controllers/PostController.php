<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function show()
   {
       return view('post.post');
   }
   
   public function add()
   {
       return view('post.create');
   }
}
