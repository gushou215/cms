<ul class="nav">
    <li class="nav-item">
        <a class="nav-link active" href="/admin">系统设置</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/article">文章系统</a>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="/user">会员粉丝</a>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">更多模块
            <span class="mdi mdi-caret-down"></span>
        </a>
        <div class="dropdown-menu">
            @foreach (\HDModule::getModulesLists() as $module)
                <a class="dropdown-item" href="/{{strtolower($module['name'])}}">{{$module['title']}}</a>
            @endforeach
           
        </div>
      </li>
</ul> 