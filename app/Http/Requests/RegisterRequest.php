<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'code' => 'bail|required|unique:agencies,code',
            'name' => 'bail|required',
            'phone' => 'bail|required|min:9',
            'email' => 'bail|required|unique:agencies,email|email',
            'address' => 'bail|required',
            'manager' => 'bail|required',


        ];
    }
    public function messages()
    {
        return [
            'code.required' => 'Mã đại lý không được để trống',
            'code.unique' => 'Mã đại lý đã tồn tại',
            'name.required' => 'Tên đại lý không được để trống',
            'phone.required' => 'Số điện thoại không được để trống',
            'phone.min' => 'Số điện thoại sai định dạng',
            'email.required' => 'Email không được để trống',
            'email.unique' => 'Email đã tồn tại',
            'email.email' => 'Email sai định dạng',
            'address.required' => 'Địa chỉ đại lý không được để trống',
            'manager.required' => 'Tên người quản lý không được để trống',
        ];
    }
}
