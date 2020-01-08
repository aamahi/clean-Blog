<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Post;
class cleanBlog extends Controller
{
   public function home(){
       $data = Post::all();
        return view('layout.home',compact('data'));
   }
//   public function post($id){
//      $post = Post::find($id);
//      return view('layout.post_details',compact('post'));
//   }

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

   public function write_post(){
       $data = category::all();
       return view('layout.write_post',compact('data'));
   }
   public function write_post_p(Request $request){
       $rules = [
           'title' => 'required',
           'author' => 'required',
           'category_id' => 'required',
           'content' => 'required'
       ];
       $this->validate($request,$rules);
       $data = array();
       $data= $request->except('_token');
//       print_r($data);
         Post::create($data);
       session()->flash('success','Post Add Successfully !');
       return redirect()->route('allCategory');
   }
}
