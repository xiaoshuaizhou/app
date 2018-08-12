<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ];
    }

    public function messages()
    {
        return [
            'email.required' => '邮箱不能为空',
            'email.string' => '邮箱必须是有效字符',
            'email.email' => '邮箱格式不正确',
            'email.max' => '邮箱最长255个字符',
            'email.unique' => '有限已经被占用',
            'password.required' => '密码不能为空',
            'password.string' => '密码必须是有效字符',
            'password.min' => '密码最少6个字符',
        ];
    }
}
