<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Maincontroller;

class Maincontroller extends Controller
{
    //

   function index(){
        return view('index');
   }


}
