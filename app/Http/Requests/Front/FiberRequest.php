<?php

namespace App\Http\Requests\Front;

use Illuminate\Foundation\Http\FormRequest;

class FiberRequest extends FormRequest
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
            'email' => 'email:required',
        ];
    }

    public function getValidRequest()
    {
        return [
            //
            'name' => $this->input('file') ?? false,
            'address' => $this->input('name'),
            'number' => $this->input('status'),
            'neighborhood' => $this->input('star'),
            'phone' => $this->input('place'),
            'email' => $this->input('slug'),
        ];
    }
}
