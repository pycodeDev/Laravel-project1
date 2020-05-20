<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return view('student.index', ['student' => $student]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $student = new Student;
        // $student->nama = $request->nama;
        // $student->nrp = $request->nrp;
        // $student->email = $request->email;
        // $student->jurusan = $request->jurusan;

        // $student->save(); //cara pertama

        // Student::create([
        //     'nama' => $request->nama,
        //     'nrp' => $request->nrp,
        //     'email' =>$request->email,
        //     'jurusan' => $request->jurusan
        // ]); //cara 2
        
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:11',
            'email' => 'required',
            'jurusan' => 'required'
        ]);

        Student::create($request->all()); //cara ketiga harus ada fillable

        return redirect('/student')->with('status','Data Student Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        // return $student;
        return view('student.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('student.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:11',
            'email' => 'required',
            'jurusan' => 'required'
        ]);
        
        Student::where('id', $student->id)
            ->update([
                'nama' => $request->nama,
                'nrp' => $request->nrp,
                'email' => $request->email,
                'jurusan' => $request->jurusan
            ]);
        return redirect('/student')->with('status','Data Student Berhasil Edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        $st = Student::find($student->id);
        $st->delete();
        
        return redirect('/student')->with('status','Data Student Berhasil Dihapus!');
    }
}
