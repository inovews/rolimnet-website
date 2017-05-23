<?php

namespace App\Http\Requests\Black;

use Illuminate\Foundation\Http\FormRequest;

class DocumentRequest extends FormRequest
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
            'name' => 'required',
            'description' => 'required',
            'file' => 'required',
            'file_id' => 'required',

        ];
    }

    public function getValidRequest()
    {
        return [
            //
            'name' => $this->input('name'),
            'description' => $this->input('description'),
            'file' => $this->input('file'),
            'file_id' => $this->input('file_id'),
        ];
    }
}
