<?php

namespace Modules\Article\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use View;
use App;
use Illuminate\View\FileViewFinder;
use Modules\Article\Entities\Category;
use Modules\Article\Entities\Content;

class HomeController extends Controller
{
    public function __construct()
    {
        $template = \HDModule::config('article.config.template');
        // $paths = [public_path('templates/'.$template)];
        // View::setFinder(new FileViewFinder(App::make('files'),$paths));
        $finder = app('view')->getFinder();
        $finder->prependLocation(public_path('templates/'.$template));
    }
    public function index()
    {
        // dd('article_index');
        return view('index');
    }


    public function lists(Category $category)
    {
       $data = Content::where('category_id',$category['id'])->paginate(10);
       return view('lists',compact('data','category'));
    }


    public function content(Content $content)
    {
        // dd($content->toarray());

        return view('content',compact('content'));
    }

    
}
