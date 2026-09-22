<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;

#[Fillable('nis', 'name','email', 'gender', 'major', 'class')]
#[Table('students')]
class Student extends Model
{
    // UNTUK MENGGUNAN VERSI MANUAL DAN LEBIH MANUAL, DAN MASIH SUPPORT DI LARAVEL 13

    // protected $table = 'students';
    
    // protected $fillable = [
    //     'nis',
    //     'name',
    //     'gender',
    //     'major',
    //     'class',
    //     'email'
    // ];
}
