<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminUserinsert extends FormRequest
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
            // required 不为空   
            //  regex://  正则表达式     
            //  unique 表名  此项不能重复
            'username'=>'required|regex:/\w{4,8}/|unique:users',
            'password'=>'required|regex:/\w{8,16}/',
            //same:password       跟密码一样
            'repassword'=>'required|regex:/\w{8,16}/|same:password',
             //email 邮箱规则
            'email'=>'required|email|unique:users',
            'phone'=>'required|regex:  /^((\+?[0-9]{2,4}\-[0-9]{3,4}\-)|([0-9]{3,4}\-))?([0-9]{7,8})(\-[0-9]+)?$/ |unique:users',
        ];
    }


    public function messages(){
    return[
        'username.required'=>'用户名不能为空',
        'username.regex'=>'用户名必须是4-8位数字字母',
        'username.unique'=>'用户名   不能重复',

        'password.required'=>'密码不能为空',
        'password.regex'=>'密码必须是8-16位数字字母',
        
        'repassword.required'=>'确认密码不能为空',
        'repassword.regex'=>'确认密码必须是8-16位数字字母',
        'repassword.same'=>'确认密码必须与密码一样',


        'email.required'=>'邮箱不能为空',
        'email.email'=>'邮箱不符合规则',
        'email.unique'=>'邮箱不允许重复',

        'phone.required'=>'电话不能为空',
        'phone.regex'=>'电话必须是11位数字字母',
        'phone.unique'=>'电话不能重复',


        ];
      }
}
