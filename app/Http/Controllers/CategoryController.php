<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('master/category');
    }
    public function show(){
        return view('master/insert',['Categories' =>Category::all()]);
    }
    public function InsertStore(Request $pro){
       $pro->validate([
           'cat_title'=>'required',
       ]);
       $data =new Category();
       $data->cat_title=$pro->cat_title;
       $data->save();
       return redirect()->route('index');
    }
}
