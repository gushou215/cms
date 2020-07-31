<?php

namespace App\Http\Controllers\Home;

use App\Blog;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Test;
use App\User;
use Exception;
use Symfony\Component\HttpFoundation\File\Exception\UploadException;
use App\Mail\RegMail;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index(){
        // dd(Blog::find(1)->user);
        $blogs = Blog::orderBy('id','DESC')->with('user')->paginate(10);
        Return view('home/index/index',compact('blogs'));
    }

}
