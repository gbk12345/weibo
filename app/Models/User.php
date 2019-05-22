<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class User extends Authenticatable
{
    use Notifiable;
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
