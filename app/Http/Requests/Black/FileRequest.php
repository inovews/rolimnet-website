<?php

namespace App\Http\Requests\Black;

use Illuminate\Foundation\Http\FormRequest;

class FileRequest extends FormRequest
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
            'name' => 'required'
        ];
    }

    public function getValidRequest()
    {
        return [
            //
            'file' => $this->input('file') ?? false,
            'name' => $this->input('name'),
            'key' => $this->input('key'),
            'type' => $this->input('type'),
            'size' => $this->input('size') ?? false,
        ];
    }
}
