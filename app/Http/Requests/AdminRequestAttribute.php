<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequestAttribute extends FormRequest
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
            'atb_name' => 'required|max:190|min:3|unique:attributes,atb_name,'.$this->id
        ];
    }

    public function messages()
    {
        return [
          'atb_name.required' => 'Dữ liệu không được để trống',
          'atb_name.unique' => 'Dữ liệu đã tồn tại',
          'atb_name.max' => 'Dữ liệu không quá 190 ký tự',
          'atb_name.min' => 'Dữ liệu nhiều hơn 3 ký tự',
            'atb_type.required' => 'Dữ liệu không được để trống',
            'atb_category_id.required' => 'Dữ liệu không được để trống'
        ];
    }
}
