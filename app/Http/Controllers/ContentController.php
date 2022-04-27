<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Topic;
class ContentController extends Controller
{
    // 
    public function index(){
        return view('contents/contentHome');
    }

    public function create(){
        $data['topics']=Topic::all();
        return view('Contents/InsertContent',$data);
    }
    public function insert(Request $req){
      $data= $req->validate([
           'author'=>'required',
           'date_of_publish'=>'required',
           'video_url'=>'required',
           'description'=>'required',
           'topic_id'=>'required',
       ]);

    //    $data = new Content();
    //    $data->author = $req->author;
    //    $data->date_of_publish = $req->date_of_publish;
    //    $data->video_url = $req->video_url;
    //    $data->description = $req->description;
    //    $data->save();
    Content::create($data);
       return redirect('/');
    }
}
