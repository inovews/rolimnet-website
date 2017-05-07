<?php

namespace App\Http\Requests\Black;

use Illuminate\Foundation\Http\FormRequest;

class FaqRequest extends FormRequest
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
            //
            'user_id' => 'required',
            'title' => 'required',
            'status' => 'required',
            'category_id' => 'required',
            'slug' => 'required',
            'content' => 'required',
            'html_content' => 'required',
            'description' => 'required',

        ];
    }

    public function getValidRequest()
    {
        return [
            //
            'user_id' => $this->input('user_id') ?? false,
            'title' => $this->input('title'),
            'status' => $this->input('status'),
            'category_id' => $this->input('category_id'),
            'slug' => $this->input('slug'),
            'content' => $this->input('content'),
            'html_content' => $this->input('html_content'),
            'description' => $this->input('description'),
        ];
    }
}
