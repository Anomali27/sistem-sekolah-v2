<?php

namespace App\Http\Controllers;

use App\Http\Requests\Student\StoreRequest;
use App\Http\Requests\Student\UpdateRequest;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $title = "Sistem Sekolah - Daftar Siswa";
        
        // Ambil semua data dari database
        $students = Student::all();

        // Ambil beberapa data dari database
        // $students = Student::select(['id','nis', 'class','major'])->get();

        return view('students.index',[
            'title' => $title,
            'students' => $students
        ]);
    }

    public function create()
    {
        $title = "Sistem Sekolah - Tambah Siswa";
        
        return view('students.create',[
            'title' => $title
        ]);
    }

    public function store(StoreRequest $request)
    {
        // Custom Request
        $validatedRequest = $request->validated();

        // Validasi
        // $validatedRequest = $request->validate([
        //     'nis' => ['required', 'string', 'size:4', 'unique:students,nis'],
        //     'name'=> ['required', 'string'],
        //     'email'=>['required', 'string', 'unique:students,email'],
        //     'gender'=> ['required', 'string', 'in:Laki-laki, Perempuan'],
        //     'major'=> ['required', 'string', 'in:AKL,TKJ,BiD'],
        //     'class'=>['required', 'string']
        // ]);

        // Tambahkan Data ke Database dengan TANPA Maze Assign
        // Ini belum ditambahkan email pada bagian create sehingga tabelnya tidak muncul atau error

        // $student = new Student();
        // $student->nis = $request->nis;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->major = $request->major;
        // $student->class = $request->class;
        // $student->save();

        // Tambahkan Data ke Database dengan Maze Assign
        // Lebih singkat dan lebih rapi
        Student::create($validatedRequest);

        // Handle If Success
        return redirect()->route('students.index');

    }

    public function show(Student $student)
    {
        $title = "Sistem Sekolah - Detail Siswa";

        return view('students.show',[
            'title' => $title,
            'student' => $student
        ]);
    }

    public function edit(Student $student)
    {
        $title = "Sistem Sekolah - Edit Siswa";

        
        return view('students.edit', [
            'title' => $title,
            'student'=> $student
        ]);
    }

    public function update(Student $student, UpdateRequest $request)
    {
        // Versi custom Request
        $validatedRequest = $request->validated();



        // Validasi
        // $validatedRequest = $request->validate([
            // 'nis' => ['required', 'string', 'size:4', 'unique:students,nis,' . $student->id],
            // 'name'=> ['required', 'string'],
            // 'email'=>['required', 'string', 'unique:students,email,' . $student->id],
            // 'gender'=> ['required', 'string', 'in:Laki-laki, Perempuan'],
            // 'major'=> ['required', 'string', 'in:AKL,TKJ,BiD'],
            // 'class'=>['required', 'string']
        // ]);

        // Update Data
        $student->update($validatedRequest);

        // Handle If Success
        return redirect()->route('students.index');
    }

    public function destroy(Student $student)
    {
        //Delete Data
        $student->delete();

        // Handle If Success
        return redirect()->route('students.index');
    }
}
