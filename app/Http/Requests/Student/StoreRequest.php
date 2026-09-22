<?php

namespace App\Http\Requests\Student;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nis' => ['required', 'string', 'size:4', 'unique:students,nis'],
            'name'=> ['required', 'string'],
            'email'=>['required', 'string', 'unique:students,email'],
            'gender'=> ['required', 'string', 'in:Laki-laki, Perempuan'],
            'major'=> ['required', 'string', 'in:AKL,TKJ,BiD'],
            'class'=>['required', 'string']
        ];
    }

    // public function attributes(){
    //     return [
    //         'nis' => 'Nomor Induk Siswa',
    //         'name' => 'Nama Lengkap',
    //         'email' => 'Email',
    //         'gender' => 'Jenis Kelamin',
    //         'class' => 'Kelas',
    //         'major' => 'Jurusan'            
    //     ];
    // }

    // Untuk membuat custom messages sesuai yang kita mau 
    // public function messages(){
    //     return[
    //         'nis.required' => 'Nomor Induk Siswa wajib diisi',
    //         'nis.size' => 'Nomor Induk Siswa harus terdiri dari 4 Karakter'
    //     ];
    // }
}
