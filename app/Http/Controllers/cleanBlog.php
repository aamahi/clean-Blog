<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
class cleanBlog extends Controller
{
   public function home(){
        return view('layout.home');
   }
   public function addCategories(){
       return view('layout.addCategories');
   }
   public function addCategoriesP(Request $request){
       $rules = [
           'name' => 'required',
           'slug' => 'required'
       ];
       $this->validate($request,$rules);
       $data = array();
       $data= $request->except('_token');

       category::create($data);
       return redirect()->route('home');
   }

}
