<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicsRequest extends FormRequest
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
            "title" => ["required", "min:3"],
            "description" => ["required", "min:20"],
            "thumb" => ["required"],
            "price" => ["required"],
            "series" => ["required"],
            "sale_date" => ["required"],
            "type" => ["required"],
        ];
    }

    public function messages()
    {
        return [
            "title.required" => "Il titolo non può essere vuoto.",
            "title.min" => "Il titolo non può avere meno di 3 caratteri.",

            "description.required" => "La descrizione non può essere vuota.",
            "description.min" => "La descrizione non avere meno di 20 caratteri.",

            "thumb.required" => "L'immagine non può essere vuota.",
            "price.required" => "Il prezzo non può essere vuoto.",
            "series.required" => "La serie non può essere vuota.",
            "sale_date.required" => "La data di vendita non può essere vuota.",
            "type.required" => "Il tipo non può essere vuoto."


        ];
    }
}
