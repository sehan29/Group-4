<?php

namespace App\Http\Controllers\Teacher;

use App\Http\Controllers\Controller;
use App\Models\Teacher\Teacher_Details;
use Illuminate\Http\Request;

class Profile_Controller extends Controller
{
    //
    public function index(){
        /* Make Sure To Change This after creating Athuentication Part using  Auth function*/
        $teacher_details = Teacher_Details::where('id',1)->first();
        return view('Teacher/Master_Page/Teacher_Profile',['details'=>$teacher_details]);
    }

    public function update(Request $request, $id)
    {
        $data = Teacher_Details::find($id);

        if ($request->hasFile('photo')) {
            $file = $request->file('photo');
            $file_name = time() . $file->getClientOriginalName();
            $path = $file->storeAs('images', $file_name, 'public');
            $data->Image = "/storage/" . $path;
        }
        $data->Address_1 = $request->address_1;
        $data->Address_2 = $request->address_2;
        $data->City = $request->town;
        $data->Province = $request->province;
        $data->Contact_Number = $request->contact;

        // Save the changes to the database
        $data->save();
        return back()->with('message', 'Data Updated Successfully');

    }
}