<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class OmbudsmanRequest extends FormRequest
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
            'subject'   => 'required',
            'name'      => 'required',
            'email'     => 'email|required',
            'phone'     => 'required',
            'g-recaptcha-response' => 'required|captcha',
            'message'   => 'required'
        ];
    }
}
