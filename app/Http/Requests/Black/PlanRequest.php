<?php

namespace App\Http\Requests\Black;

use Illuminate\Foundation\Http\FormRequest;

class PlanRequest extends FormRequest
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
            'file' => $this->input('file'),
            'name' => $this->input('name'),
            'price' => $this->input('price'),
            'slug' => $this->input('slug'),
            'zone' => $this->input('zone'),
            'type' => $this->input('type'),
            'featured' => $this->input('featured'),
            'plan_city_id' => $this->input('plan_city_id'),
        ];
    }
}
