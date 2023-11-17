<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher\Topic;
use Illuminate\Http\Request;

class Lesson_Controller extends Controller
{
    //

    public function lessons(Request $request ,$id){

        $topic_insert = new Topic();
        $topic_insert->Topic_Name = $request->topics;
        $topic_insert->Class_No = $id;
        $topic_insert->Topic_id = "Detault";
        $topic_insert->save();
        return back();

    }

    public function edit($id){

        $data = Topic::find($id);
        return response()->json([
            'status'=>200,
            'student'=>$data

        ]);
    }

    public function update(Request $request){

        $id = $request->st_id;
        $topic = Topic::find($id);
        $topic->Topic_Name = $request->topics;
        $topic->update();
        return back();
        
    }
}
