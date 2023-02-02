<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class wrRequest extends FormRequest
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
            'tPer' => 'required|numeric',
            'tWr' => 'required|numeric',
            'reqWr' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'tPer.required' => 'Diisi Dong Mas Bro Total Pertandingannya',
            'tWr.required' => 'Diisi Dong Mas Bro Total Wr nya',
            'reqWr.required' => 'Diisi Dong Mas Bro Req Wr nya',

            'tPer.numeric' => 'Harus Angka Mas bro',
            'tWr.numeric' => 'Harus Angka Mas bro',
            'reqWr.numeric' => 'Harus Angka Mas bro',
        ];
    }
}
