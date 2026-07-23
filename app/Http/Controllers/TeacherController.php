<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Menampilkan daftar teacher
    public function index()
    {
        return "Displaying teacher list";
    }

    // Menampilkan form tambah teacher
    public function create()
    {
        return "Displaying create teacher form";
    }

    // Menyimpan teacher baru
    public function store(Request $request)
    {
        return "Storing new teacher";
    }

    // Menampilkan detail teacher
    public function show($id)
    {
        return "Displaying teacher with ID: {$id}";
    }

    // Menampilkan form edit teacher
    public function edit($id)
    {
        return "Displaying edit form for teacher with ID: {$id}";
    }

    // Mengupdate teacher
    public function update(Request $request, $id)
    {
        return "Updating teacher with ID: {$id}";
    }

    // Menghapus teacher
    public function destroy($id)
    {
        return "Deleting teacher with ID: {$id}";
    }
}
