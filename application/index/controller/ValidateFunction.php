<?php


namespace app\index\controller;

use think\Validate;

class ValidateFunction extends Validate
{
    protected $rule = [
        'name'  =>  'require|max:25',
        'username'  =>  'min:3|max:15',
        'password'  =>  'min:8|max:15',
        'email' =>  'email',
    ];

    protected $message  =   [
        'name.require' => '名称必须',
        'name.max'     => '名称最多不能超过25个字符',
        'username.max'     => '名称最多不能超过15个字符',
        'username.min'     => '名称至少3字符',
        'password.max'     => '名称最多不能超过15个字符',
        'password.min'     => '名称至少8字符',
        'age.number'   => '年龄必须是数字',
        'age.between'  => '年龄只能在1-120之间',
        'email'        => '邮箱格式错误',
    ];


}