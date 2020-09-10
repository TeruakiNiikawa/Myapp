<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MachController extends Controller
{
   public function top()
   {
       return view('mach.mach');
   }
}
