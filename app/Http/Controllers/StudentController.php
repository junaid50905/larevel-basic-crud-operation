<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $student = $request->all();
        Student::create($student);
        return redirect()->route('list');
    }
    public function index()
    {
        $students = Student::all();
        return view('index', compact('students'));
    }
    public function edit($id)
    {
        $edit_student = Student::find($id);
        return view('edit', compact('edit_student'));
    }
    public function update(Request $request, $id)
    {
        $updated_student = $request->except('_token');
        Student::where('id', $id)->update($updated_student);
        return redirect('list');
    }
    public function destroy($id)
    {
        $deleted_student = Student::find($id);
        $deleted_student->delete();
        return redirect()->route('list');
    }
    public function detailed($id)
    {
        $student_detailed = Student::find($id);
        return view('detailed', compact('student_detailed'));
    }
}
