<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|max:50',
            'thumb' => 'max:255',
            'price' => 'decimal:2',
            'series' => 'max:255',
            'description' => 'max:1000',
            'sale_date' => 'date',
            'type' => 'required|max:50',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo del fumetto è obbligatorio',
            'title.max' => 'Il titolo del fumetto deve essere lungo al massimo 50 caratteri',
            'thumb.max' => "L'URL del fumetto deve essere lungo al massimo 255 caratteri",
            'price.decimal' => 'Il prezzo deve essere un numero valido',
            'series.max' => 'Il nome della serie deve avere un massimo di 255 lettere',
            'description.max' => 'Hai superato il limite massimo di caratteri, per favore sii più breve',
            'sale_date.date' => 'Per favore, inserire una data valida',
            'type.required' => 'Il tipo del fumetto è obbligatorio',
            'type.max' => 'Il tipo del fumetto deve essere lungo al massimo 50 caratteri',
        ];
    }
}
