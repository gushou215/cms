<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use  Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('home/login/login');
    }

    public function store(Request $request){
        
        $data = $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required|min:5'
        ]);
        if(Auth::attempt($data)){
            session()->flash('success','登录成功');
            return redirect('/home/index/index');
        }
        session()->flash('danger','账号或密码错误');
        
        return back();
    }

    public function logout(){       
        Auth::logout();
        session()->flash('success','退出成功');
        return redirect()->route('home');
    }
}
