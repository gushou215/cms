<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use  Illuminate\Support\Facades\Auth;
use App\User;
use App\Mail\RegMail;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth',[
            'except'=>['index','show','create','store','confirmEmailToken','follow']
        ]);
        $this->middleware('guest',[
            'only'=>['create','store']
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(10);
        Return view('home/user/index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        Return view('home/user/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($_POST);
        $data = $this->validate($request,[
            'name'=>'required|min:3',
            'email'=>'required|unique:users|email',
            'password'=>'required|min:5|confirmed'
        ]);
  
        $data['password'] = bcrypt($data['password']);
        $data['email_token'] =str_random(10);
        
        // DB::table('users')->insert($data);
        $user = User::create($data);
        // Auth::attempt(['email' => $request->email, 'password' => $request->password]);
        //自动登录
        Mail::to($user)->send(new RegMail($user));
        session()->flash('success','请查看邮箱完成注册验证');
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        // dd($user->toArray());
        $blogs = $user->blogs()->paginate(5);
        if(Auth::check()){
            $followTitle = $user->isFollow(Auth::user()->id)?'取消关注':'关注';    
        }
        
        return view('home.user.show',compact('user','blogs','followTitle'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        // dd($user);
        $this->authorize('update',$user);
        return view('home.user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request,[
            'name'=> 'required|min:3',
            'password'=>'nullable|min:5|confirmed'
        ]);
        $user->name = $request->name;
        if($request->password){
            $user->password = bcrypt($request->password);
        }
        $user->save();
        session()->flash('success','修改成功');
        return redirect()->route('user.show',$user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        // dd($user->id);exit;
        $this->authorize('delete',$user);
        $user->delete();
        session()->flash('success','删除成功');
        return redirect()->route('user.index');
    }

    /**
     * 邮箱验证
     */
    public function confirmEmailToken($token){
        // $user = User::find(1);       
        // Mail::to($user)->send(new RegMail($user));
        $user = User::where('email_token',$token)->first();
        if($user){
            $user->email_active = true;
            $user->save();
            session()->flash('验证成功');
            Auth::login($user);
            return redirect()->route('home');
        }

        session()->flash('danger','邮箱验证失败');
        return redirect()->route('home');
    }

    public function follow(User $user){
        $user->followToggle(Auth::user()->id);
        return back();
    }
}
