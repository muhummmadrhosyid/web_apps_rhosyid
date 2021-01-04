<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrasiRequet extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            "username" => ["required", "min:5"],
            "password" => ["required", "min:5", "confirmed"],
            "pekerjaan" => ["required"],
            "umur" => ["required", "integer", "size:18"],
            "foto" => ["required", "image"],
            "surat" => ["required", "file", "max:512", "mimes:pdf,docx"]

        ];
    }
}
