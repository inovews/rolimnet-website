<?php

namespace App\Http\Requests\Black;

use Illuminate\Foundation\Http\FormRequest;

class PlanCityRequest extends FormRequest
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
            'name' => $this->input('name'),
        ];
    }
}
