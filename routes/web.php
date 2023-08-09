<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Maincontroller;
Route::get('/',function(){
     return view('index');
});

Route::get('',[Maincontroller::class,'index']) ->  name('index');     