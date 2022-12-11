<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class MahasiswaRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'npm'           => 'required|numeric|min:3|unique:mahasiswas,npm',
            'nama'          => 'required|string|min:3',
            'nik'           => 'required|numeric|unique:mahasiswas,nik',
            'no_hp'         => 'nullable|numeric',
            'tempat_lahir'  => 'required',
            'tanggal_lahir' => 'required|date',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'required' => ':attribute tidak boleh kosong',
            'numeric'  => ':attribute harus berupa angka',
            'min'      => ':attribute minimal :min karakter',
            'unique'   => ':attribute sudah terdaftar/ganda',
            'string'   => ':attribute harus berupa huruf',
            'date'     => ':attribute harus berupa tanggal',
        ];
    }
}
