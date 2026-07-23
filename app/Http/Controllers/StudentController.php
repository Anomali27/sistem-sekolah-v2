<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return "Displaying student list";
    }

    public function create()
    {
        return "Displaying student create form";
    }

    public function store()
    {
        return "Storing new student";
    }

    public function show($id)
    {
        return "Displaying student with ID: {$id}";
    }

    public function edit($id)
    {
        return "Displaying student edit form with ID: {$id}";
    }

    public function update($id)
    {
        return "Updating student with ID: {$id}";
    }

    public function destroy($id)
    {
        return "Deleting student with ID: {$id}";
    }
}
