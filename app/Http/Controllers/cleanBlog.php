<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;
//use DB;
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
       return $request->all();
   }
//   public function addCategoriesProcess(Request $request){
//       $rules = [
//           'name'=>'required',
//           'slug'=>'required'
//       ];
//       $this->validate($request, $rules);
//       $data = array();
//       $data = $request->except('_token');
////       echo "<pre>";
//        print_r($data);
//        echo "</pre>";
//       $addCategories = DB::table('categories')->insert($data);
//       if ($addCategories){
//           return redirect()->route('home');
//       }
//       echo $addCategories;
//   }
//   public function allCategories(){
//    $allCategories = DB::table('categories')->get();
//    return response()->json($allCategories);
////       return "categories";
//   }
}
