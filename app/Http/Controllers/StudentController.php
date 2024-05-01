<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showData(Request $request){
        $pageNumber = $request->query('page', 1);
        //$students= Student::all();
        $students = Student::paginate(1);

        return view('students_show',compact('students'));


    }//end method
}
