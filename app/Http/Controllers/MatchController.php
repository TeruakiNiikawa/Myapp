<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MatchController extends Controller
{
   public function top()
   {
       return view('match.match');
   }
}
