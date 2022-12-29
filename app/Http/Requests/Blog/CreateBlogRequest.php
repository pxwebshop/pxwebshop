<?php

namespace App\Http\Requests\Blog;

use Illuminate\Foundation\Http\FormRequest;

class CreateBlogRequest extends FormRequest
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
            'title'                 => 'required|min:3',
            'content'               => 'required|min:3',
            'categories'            => 'required|present|array',
            'status'                => 'required|numeric|not_in:0',
        ];

        // if (!$this->route('id')) {
        //     $validation = [
        //         'username'     => 'required|max:64|min:2|without_spaces|unique:users,username',
        //     ];
        // }

        // return $validation;
    }
}
