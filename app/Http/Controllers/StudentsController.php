<?php

namespace App\Http\Controllers;

use App\StudentData;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function store(Request $request)
    {
        $initiate = sprintf('%08d', 1);
        $year = $request->input('year');
        $regNo = substr($year, 2, 3)."000000" + $initiate;
        $student = StudentData::where('year', $year)
                            ->orderBy('id', 'desc')
                            ->first();
        
        $addStudent = new StudentData();
        $addStudent->name = $request->input('name');
        $addStudent->email = $request->input('email');
        $addStudent->initial_class = $request->input('initial_class');
        $addStudent->year = $request->input('year');

        if($student) {
            $addStudent->registration_no = $student->registration_no + 1;
        } else {
            $addStudent->registration_no = $regNo;
        }
        $addStudent->save();

        return back();
    }
}
