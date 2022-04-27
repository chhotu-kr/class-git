<?php

namespace App\Http\Controllers;
use App\Models\Home;
use Illuminate\Http\Request;
use App\Models\Topic;
class TopicController extends Controller
{
    //
    public function show(){
        $data['Topics']=Home::all();
        return view('chapters/InsertTopic',$data);
    }
    public function StoreTopic(Request $req){
        $req->validate([
            'topic_title' =>'required',
            'home_id' =>'required',
        ]);

        $data = new Topic();
        $data->topic_title = $req->topic_title;
        $data->home_id = $req->home_id;
        $data->save();
        return redirect()->route('topic.store');
    }
}
