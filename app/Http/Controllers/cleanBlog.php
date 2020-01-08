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
       session()->flash('success','Category Add Successfully !');
       return redirect()->route('allCategory');
   }
   public function allCategory(){
       $data = category::all();
       return view('layout.allcategory',compact('data'));
   }
   public function edit($id){
       $data = category::find($id);
       return view('layout.edit',compact('data'));
   }
   public function updateCategory(Request $request, $id){
       $rules = [
           'name' => 'required',
           'slug' => 'required'
       ];
       $this->validate($request,$rules);
       $data = array();
       $data= $request->except('_token');
       $record = category::find($id);
       $record->update($data);

       session()->flash('success','Category Updated Successful!');
       return redirect()->route('allCategory');
   }
   public function delete($id){
       category::where('id',$id)->delete();
       session()->flash('danger','Category Deleted Sucessfully !');
       return redirect()->route('allCategory');
   }
}
