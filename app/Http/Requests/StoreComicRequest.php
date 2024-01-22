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
            'title' => 'required|min:6|max:200',
            'thumb' => 'required',
            'series' => 'required|min:6|max:200',
            'sale_date' => 'required',
            'price' => 'required',
            'type' => 'required',
            'description' => 'nullable'
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è richiesto',
            'title.min' => 'Il titolo deve essere lungo almeno :min caratteri',
            'image.required' => 'L\'immagine è richiesta',
        ];
    }
}
