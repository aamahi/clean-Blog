<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cleanBlog extends Controller
{
   public function home(){
        return view('layout.home');
   }
   public function addCategories(){
       return view('layout.addCategories');
   }
   public function addCategoriesProcess(Request $request){
       $rules = [
           'name'=>'required',
           'slug'=>'required'
       ];
       $this->validate($request, $rules);
       $data = array();
       $data['name'] = $request->except('_token');

       echo "<pre>";
       print_r($data);
       echo "</pre>";
   }
}
