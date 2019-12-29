<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cleanBlog extends Controller
{
   public function home(){
        return view('layout.home');
   }
}
