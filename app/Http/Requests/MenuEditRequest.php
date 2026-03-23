<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class MenuEditRequest extends FormRequest
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
            'nome'=>'required|min:3',
            'categoria'=>'required',
            'ingredienti'=>'required',
            'prezzo'=>'required|numeric',

        ];
    }

        public function messages(){
        return [
            'nome.required'=>'Il nome è obbligatorio',
            'categoria.required'=>'La categoria è obbligatoria',
            'ingredienti.required'=>'Gli ingredienti sono obbligatori',
            'prezzo.required'=>'Il prezzo è obbligatorio',
            'nome.min'=>'Il nome deve avere almeno 3 caratteri',
            'prezzo.numeric'=>'Il prezzo deve essere espresso in cifre',
            'img.required'=>'L\'immagine è obbligatoria',
            'img.image'=>'Il file deve essere di tipo immagine',
        ];
    }
}
