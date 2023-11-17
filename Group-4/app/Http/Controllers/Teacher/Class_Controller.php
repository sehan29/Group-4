<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher\Quiz_Forum;
use App\Models\Teacher\State_Manage;
use App\Models\Teacher\Teacher_Class;
use App\Models\Teacher\Teacher_Details;
use App\Models\Teacher\Topic;
use Illuminate\Http\Request;

class Class_Controller extends Controller
{
    //
    public function getClassDetails($teacherDetailsId)
    {
        // Find the teacher details by ID
        $teacherDetails = Teacher_Details::find($teacherDetailsId);

        if (!$teacherDetails) {
            return abort(404);  
        }
        $assignedClasses = $teacherDetails->classes;

        // Pass the data to a view for display
        return view('Teacher/Master_Page/My_Class', ['teacherDetails'=>$assignedClasses]);
        /* dd($assignedClasses); */
    }

    public function classInnerDetails($id)
    {
        /* dd($id); */
        $class_details = Teacher_Class::find($id);
        $values = Topic::where('Class_No', $id)->get();
        $order = State_Manage::all();
        $quiz_data = Quiz_Forum::all();
       /*  dd($values); */
        return view('Teacher.Master_Page.Single_Class',['class_details'=>$class_details,'topic_details'=>$values,'seq'=>$order,'quiz_data'=>$quiz_data]);
        
    }

    public function Student_Tables($class_id)
    {

        return view('Teacher.Master_Page.Student_Table');
    }
}
