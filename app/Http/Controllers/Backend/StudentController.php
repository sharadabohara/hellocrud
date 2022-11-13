<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student=Student::all();
        return view('students.view-student',compact('student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.create-student');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // validation
    public function store(Request $request)
     {
        $student =$request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'password'=>'required',
            'email'=>'required|unique:students',
            'address'=>'required',
            'file'=>'required',

        ]);
    
        $student = new Student;
        $student->fname=$request->fname;
        $student->lname=$request->lname;
        $student->email=$request->email;
        $student->password=$request->password;
        $student->address=$request->address;
        // $student->gender=$request->gender;
        $student->dob=$request->dob;
        if($request->hasfile('file')){

            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/',$filename);
            $student->file=$filename;
        }
        $student->save();
        return redirect()->route('view-student');

    }

    
    public function show($id)
    {
        $student=Student::find($id);
        return view('students.show-student',compact('student'));

    }

    
    public function edit($id)
    {
        $student=Student::find($id);
        return view('students.edit-student',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $student = $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'password'=>'required',
            'email'=>'required|unique:students',
            'address'=>'required',
        ]);
        $student=Student::find($id);
        $student->fname=$request->fname;
        $student->lname=$request->lname;
        $student->email=$request->email;
        $student->address=$request->address;
        if($request->hasfile('file')){
            $destination="uploads/student".$student->file;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('file');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads/students/',$filename);
            $student->file=$filename;
        }
        $student->save();
        return redirect()->route('view-student');


    }

    

    
    public function destroy($id)
    {
        $student=Student::find($id);
        $student->delete();
        return redirect()->route(view-student);
    }

}