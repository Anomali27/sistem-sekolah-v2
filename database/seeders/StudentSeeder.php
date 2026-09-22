<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Student::factory()->count(100)->create();    
    
    
    
    
    
    
    
    
    
    // Versi Seeder 

        // $students = [
        //     ['nis'=> '1001', 'name' => 'Richard', 'email' => 'Richard@gmail.com', 'gender' => 'Laki-laki', 'class' => '12 TKJ 1', 'major' => 'TKJ'],
        //     ['nis'=> '1002', 'name' => 'Budi', 'email' => 'Budi@gmail.com', 'gender' => 'Laki-laki', 'class' => '12 AKL 1', 'major' => 'AKL'],
        //     ['nis'=> '1003', 'name' => 'Nina', 'email' => 'Nina@gmail.com', 'gender' => 'Perempuan', 'class' => '12 BiD 1', 'major' => 'BiD']
        // ];

        // Student::upsert($students, ['nis'], ['name','email','gender','class','major']);
    }
}
