<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
        $email=
        [
            'required',
        ];
        $password=
        [
        ];
        if($this->method() == "POST")
        {
            $email= 'unique:users,email';
            $password =[
                'required',

            ];
        }
        return [
            'name' => [
            'required',
            'string',

        ],
        'email'=>[
            'required',
            $email,
        ],
        'password'=>[
            $password,

        ],
        'type' => [
            'required',

        ],
     ];
    }
    public function messages()
    {
        return [
            'name.required' => __('الاسم المطلوب'),
            'type.required' => __('المسمي الوظيفي المطلوب'),
            'email.required' => __('البريد الالكتروني مطلوب'),
            'email.unique' => __('البريد الالكتروني متسخدم مسبقا'),
            'password.required' => __('كلمة المرور مطلوبة'),
            'password.required' => __('كلمة المرور يجب أن تكون أكثر من  ٨ خانات'),

        ];
    }
}
