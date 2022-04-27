<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Content;
use Illuminate\Http\Request;
use App\Models\Home;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    //
    public function index(){
        $data['homes']=Home::all();
        $data['contents']=Content::all();
        return view('homepages/home',$data);
    }
      public function Videocalling(){
        $data['contents']=Content::all();
        return view("homepages/viewvideo",$data);
      }
    public function create(){
        $data['category']=Category::all();
        return view('homepages/insert',$data);
    }
    public function store(Request $req){
        $req->validate([
            'course_title' => 'required',
            'category_id' => 'required',
            'course_description' => 'required',
            'course_cover' => 'required',
            'course_duration' => 'required',
        ]);

        $data = new Home();
        $data->course_title = $req->course_title; 
        $data->category_id = $req->category_id; 
        $data->course_description = $req->course_description;
        $data->course_duration = $req->course_duration;

        $file = $req->course_cover;
        $fileName=$file->getClientOriginalName();
        $file->move('images',$fileName);
        $data->course_cover=$fileName;
        $data->save();
        return redirect('/');

    }
}
