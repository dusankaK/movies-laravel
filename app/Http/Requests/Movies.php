<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Movies extends FormRequest
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
            'title' => 'required',
            'genre' => 'required',
            'director' => 'max:25',
            'year' => 'numeric | min:1900 | max:2019',
            'storyline' => 'max:1000'
        ];
    }
}
