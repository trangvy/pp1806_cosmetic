<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProduct extends FormRequest
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
            'name' => ['required'],
            'category_id' => ['required', 'numeric'],
            'brand_id' => ['required', 'numeric'],            
            'price' => 'required|max:22|regex:/^\d*(\.\d{1,2})?$/',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
            'image_list' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:10048',
        ];
    }
}
