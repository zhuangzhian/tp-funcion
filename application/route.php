<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

use think\Route;
//return [
//    '__pattern__' => [
//        'name' => '\w+',
//    ],
//    '[hello]'     => [
//        ':id'   => ['index/hello', ['method' => 'get'], ['id' => '\d+']],
//        ':name' => ['index/hello', ['method' => 'post']],
//    ],
//];
Route::get('validate','index/ValidateFunction/index');
Route::get('validate','index/ValidateFunction/index');
Route::get('test','index/Index/test');
Route::get('test3','index/Index/test3');
Route::get('test4','index/Index/test4');
Route::get('test5','index/Index/test5');
Route::get('test6','index/Index/test6');
Route::get('test7','index/Index/test7');
Route::get('test8','index/Index/test8');
Route::get('test10','index/Index/test10');
Route::get('test11','index/Index/test11');
Route::get('hanWord','index/Index/hanWord');