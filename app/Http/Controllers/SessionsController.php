<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class SessionsController extends Controller
{
    //游客才能访问登录页面
    public function __construct()
    {
        $this->middleware('guest',[
           'only'=>['create']
        ]);
    }

    //登录
    public function create()
    {
        return view('sessions.create');
    }

    //登录逻辑
    public function store(Request $request)
    {
        $user = $this->validate($request, [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);
        if (Auth::attempt($user)) {
            session()->flash('success', '欢迎回来！');
            return redirect()->route('users.show', Auth::user());
        } else {
            session()->flash('danger', '很抱歉，您的邮箱和密码不匹配');
            return redirect()->back()->withInput();
        }
    }

    //用户退出登录
    public function destroy()
    {
        Auth::logout();
        session()->flash('success','退出成功');
        return redirect()->route('login');
    }
}
