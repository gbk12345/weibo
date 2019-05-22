<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * @var array
     * 允许赋值的字段
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * @var array
     * 要隐藏的字段
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @param string $size
     * @return string
     * 用户默认头像
     */
    public function gravatar($size = '100')
    {
        return "https://www.gravatar.com/avatar/" . md5(strtolower($this->email)) . "?d=retro&s=48";
    }
}
