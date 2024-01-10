<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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

            'title' => 'required|min:5|max:255',
            'type' => 'required|max:50',
            'price' => 'required|max:20',
            'series' => 'required|max:30',
            'sale_date' => 'required',
            'thumb' => 'url',

        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Il campo titolo deve avere almeno :min caratteri',
            'title.max' => 'Il campo titolo deve avere massimo :max caratteri',
            'type.required' => 'Il campo tipo è obbligatorio',
            'type.max' => 'Il campo tipo deve avere massimo :max caratteri',
            'price.required' => 'Il campo prezzo è obbligatorio',
            'price.max' => 'Il campo prezzo deve avere massimo :max caratteri',
            'series.required' => 'Il campo serie è obbligatorio',
            'series.max' => 'Il campo serie deve avere massimo :max caratteri',
            'sale_date.required' => 'Il campo data di uscita è obbligatorio',
            'thumb.url' => 'Il campo immagine deve essere un url',
        ];
    }
}
