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
            //'file' => 'required',
            'name' => 'required',
            'type' => 'required',
            //'key' => 'required',
        ];
    }

    public function getValidRequest()
    {
        return [
            //
            'file' => $this->input('file'),
            'name' => $this->input('name'),
            'type' => $this->input('type'),
            'key' => $this->input('key'),
        ];
    }
}
