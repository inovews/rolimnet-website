<?php

namespace App\Http\Requests\Front;

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
            'name' => 'required',
            'address' => 'required',
            'number' => 'required',
            'neighborhood' => 'required',
            'phone' => 'required',
            'g-recaptcha-response' => 'required|captcha',
            'email' => 'email:required'
        ];
    }

    public function getValidRequest()
    {
        return [
            //
            'name' => $this->input('name'),
            'address' => $this->input('address'),
            'number' => $this->input('number'),
            'neighborhood' => $this->input('neighborhood'),
            'phone' => $this->input('phone'),
            'email' => $this->input('email'), 
        ];
    }
}
