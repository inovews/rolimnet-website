<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class SupportWppRequest extends FormRequest
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
            'namewpp'      => 'required',
            'phonewpp'     => 'required',
        ];
    }

    public function getValidRequest()
    {
        return [
            //
            'namewpp' => $this->input('namewpp'),
            'phonewpp' => $this->input('phonewpp'),
        ];
    }
}
