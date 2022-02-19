<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
            // the value of name is unique in posts table
            'name' => 'required|unique:posts|min:3',
            'title' => 'required|unique:posts|min:3',
            'body' => 'required|unique:posts|min:3',

        ];
    }


    public function messages()
{
    return [
        'name.required' => 'A name is required',
        'title.required' => 'A title is required',
        'body.required' => 'A message is required'
    ];
}
}
