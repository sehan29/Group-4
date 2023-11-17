<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher\Quiz_Forum;
use App\Models\Teacher\Quiz_Handle;
use App\Models\Teacher\State_Manage;
use Illuminate\Http\Request;

class Quiz_Controller extends Controller
{
    //

    public function index($Class_ID,$Topic_Id){

        /* dd($Class_ID,$Topic_Id); */

        return view('Teacher/Master_Page/Quiz_Forum',['class_id_'=>$Class_ID,'topic_id_'=>$Topic_Id]);

    }

    public function forum_data(Request $request,$class_i,$activity_num)
    {
        /* dd($class,$activity); */
        $sequency = new State_Manage();
        $data = new Quiz_Forum();
        $data->Quiz_Title = $request->quiz_name;
        $data->Quiz_Description = $request->quiz_discription;
        $data->Start_Date = $request->start_date;
        $data->Start_Time = $request->start_time;
        $data->End_Date = $request->end_date;
        $data->End_Time = $request->end_time;
        $data->Time_Limit = $request->time_limit;
        $data->Number_of_Quection = $request->number_of_quections;
        $data->save();
        $sequency->Class_No = $class_i;
        $sequency->Topic_Id = $activity_num;
        $sequency->Activity = $data->Quiz_Un;
        $sequency->save();

        $quiz = $data::find($data->id);

        /* return back()->with('message', 'Data Updated Successfully'); */

        /* dd($quiz); */

        return view('Teacher/Master_Page/Quiz',['quiz_data'=>$quiz,'class_id'=>$class_i,'activity'=>$activity_num]);
        

    }


    public function StoreQuiz(Request $request,$class_Id,$topic_id,$quiz_id)
    {
        
        $number = Quiz_Forum::find($quiz_id)->Number_of_Quection + 3;

        for ($i = 3; $i <$number; $i++) {
            Quiz_Handle::create([

                'Quiz_ID' => $quiz_id,
                'Quiction' => $request->input('editor' . $i),
                'Answer1' => $request->input('Aanswer' . $i),
                'Answer2' => $request->input('Banswer' . $i),
                'Answer3' => $request->input('Canswer' . $i),
                'Answer4' => $request->input('Danswer' . $i),
                'Correct_Answer' => $request->input('correct' . $i),
                
            ]);
        }

    }

    public function preview($topic_id,$quiz_id)
    {
        $results = Quiz_Handle::where('Quiz_ID', $quiz_id)->get();
        $quiz_data = Quiz_Forum::find($quiz_id);
        /* dd($results); */

        return view('Teacher/Master_Page/Quiz_Preview',['quiz'=>$results,'quiz_data'=>$quiz_data]);
    }

    public function edit($class_id,$topic_id,$quiz_id)
    {

        
        $data = new Quiz_Forum();
        $results = Quiz_Handle::where('Quiz_ID', $quiz_id)->get();
        $quiz = $data::find($quiz_id);
        /* dd($quiz->Number_of_Quection); */
        /* dd(gettype($quiz->Number_of_Quection)); */
        $number_of_Quection = intval($quiz->Number_of_Quection);

       /*  dd(gettype($number_of_Quection));
         */
        return view('Teacher/Master_Page/Edit_Quiz',['quiz_data'=>$quiz,'class_id'=>$class_id,'activity'=>$topic_id,'quections'=>$results,'number'=>$number_of_Quection]);

    }

    public function update(Request $request, $class_Id, $topic_id, $quiz_id)
    {
        // Assuming you want to update the number of questions
        $quiz = Quiz_Forum::find($quiz_id);
        $number = $quiz->Number_of_Quection;
        /* dd(gettype($number)); */
    
        // Update the number of questions in Quiz_Forum table
        $quiz->update([
            'Number_of_Quection' => $number,
            // Other fields you may want to update
        ]);
    
        for ($i = 0; $i < 3; $i++) {
            Quiz_Handle::updateOrCreate(
                ['Quiz_ID' => $quiz_id, 'Quiction' => $request->input('editor' . $i)],
                [
                    'Quiz_ID' => $quiz_id,
                    'Quiction' => $request->input('editor' . $i),
                    'Answer1' => $request->input('Aanswer' . $i),
                    'Answer2' => $request->input('Banswer' . $i),
                    'Answer3' => $request->input('Canswer' . $i),
                    'Answer4' => $request->input('Danswer' . $i),
                    'Correct_Answer' => $request->input('correct' . $i),
                ]
            );
        }
    
        // You can add any additional logic or error handling here
        /* return response()->json(['message' => 'Quiz updated successfully']); */
        return back()->with('message', 'Data Updated Successfully');
    }
    

    public function Student_Marks($class_id,$topic,$quiz_id)
    {

        return view('Teacher/Master_Page/Student_marks');

    }


}
