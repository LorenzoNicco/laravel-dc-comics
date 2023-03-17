<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ComicRequest extends FormRequest
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
            'title' => 'required|string',
            'description' => 'nullable',
            'thumb' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'price' => 'required|numeric|decimal:2',
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
            'title.required' => 'Ci vuole un titolo',
            'price.numeric' => 'Il prezzo va scritto in numeri, non in lettere'
        ];
    }
}
