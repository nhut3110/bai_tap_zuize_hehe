<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class signupRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name'=>'required|max:255|string',
            'age'=>'required|numeric',
            'date'=>'required|string',
            'phone'=>'required|numeric',
            'web'=>'required|string',
            'address'=>'required|string',
        ];
    }

    public function messages()
    {
        return [
            'name.required'=>'please input your name',
            'name.string'=>'please input your right name',
            'age.required'=>'please input your age',
            'age.numeric'=>'please input your right age',
            'date.required'=>'please input your date',
            'date.string'=>'please input your right date',
            'phone.required'=>'please input your phone',
            'phone.numeric'=>'please input your right phone',
            'web.required'=>'please input your web',
            'web.string'=>'please check your web',
            'address.required'=>'please input your address',
            'address.string'=>'please input your right address',
        ];
    }
}
