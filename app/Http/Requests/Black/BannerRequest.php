<?php

namespace App\Http\Requests\Black;

use Illuminate\Foundation\Http\FormRequest;

class BannerRequest extends FormRequest
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
            'file' => $this->input('file'), 
            'name' => $this->input('name'),
            'status' => $this->input('status'),
            'star' => $this->input('star'),
            'place' => $this->input('place'),
            'slug' => $this->input('slug'),
            'price' => $this->input('price'),
            'description' => $this->input('description'),
            'subdescription' => $this->input('subdescription'),
            'published_at' => $this->input('published_at'),
            'until_then' => $this->input('until_then'),
            'target' => $this->input('target'),
        ];
    }
}
