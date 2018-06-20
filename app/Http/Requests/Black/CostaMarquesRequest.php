<?php

namespace App\Http\Requests\Black;

use Illuminate\Foundation\Http\FormRequest;

class CostaMarquesRequest extends FormRequest
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
        ];
    }

        public function getValidRequest()
    {
        return [
            //
            //'file' => $this->input('file'), 
            'name' => $this->input('name'),
            'address' => $this->input('address'),
            'number' => $this->input('number'),
            'neighborhood' => $this->input('neighborhood'),
            'phone' => $this->input('phone'),
            'installed' => $this->input('installed'),
            'email' => $this->input('email'),
        ];
    }
}
