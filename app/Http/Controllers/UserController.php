<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\RegisterMailNotify;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function checkMailshow(){
        return view('user.check_mail_show');
    }

    public function sendMailToken(){
        $user = auth()->user();
        $user->notify(new RegisterMailNotify($user));
        return back()->with('success','验证码已发送到你的邮箱'.$user->email);
    }

    public function checkUserMail($token){
        $user = User::where('mail_token',$token)->first();
        if($user){
            $user['mail_status'] =1;
            $user->save();
            return redirect('/')->with('success','邮箱验证成功');
        }
        return redirect('/')->with('danger','账号不存在');
    }
}
