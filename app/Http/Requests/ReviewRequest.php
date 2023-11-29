<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReviewRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name'=>'required|min:3',
            'stars'=>'required|min:1|max:5',
            'description'=>'required|min:3|max:255'
        ];
    }

    public function messages(){
        return [
            'name' => 'Deve essere inserito un nome',
            'name' => 'Il nome deve avere almeno 3 caratteri',
            'description' => 'Deve essere inserita una descrizione',
            'description' => 'La descrizione deve essere di almeno 3 caratteri',
            'description' => 'La descrizione può avere massimo 255 caratteri',
            'stars'=>'Deve essere inserita almeno una stella',
            'stars'=>'Possono essere inserite massimo 5 stelle',
        ];
    }
}
