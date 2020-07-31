<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\FindPasswordNotify;
use App\User;
// use Illuminate\Notifications\Notification;
use Notification;


class PasswordController extends Controller
{
    public function email(){
        return view('password.email');
    }

    public function send(Request $request){
        // dd($request->all());
        $user = User::where('email',$request->email)->first();
        Notification::send($user,new FindPasswordNotify($user->email_token));

        return view('password.send');
    }

    public function edit($token){
        // dd($token);
        $user = $this->getUserByToken($token);
        return view('password.edit',compact('user'));
    }

    public function update(Request $request){
        $this->validate($request,[
            'password' => 'required|min:5|confirmed'
        ]);
        $user = $this->getUserByToken($request->token);
        $user->password = bcrypt($request->password);
        $user->save();
        session()->flash('successs','修改密码成功');
        return redirect()->route('login');
    }

    protected function getUserByToken($token){
        return User::where('email_token',$token)->first();
    }
}
