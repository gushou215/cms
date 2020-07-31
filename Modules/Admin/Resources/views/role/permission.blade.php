@extends('admin::layouts.master')

@section('content')
    <form action="/admin/role/permission/{{$role['id']}}" method="POST">
        @csrf
        @component('components.tabs',['title'=>$role->title.'权限设置'])
            
            @slot('body')
                @foreach ($modules as $module)
                    @foreach ($module['rules'] as $rules)
                        <div class="col-sm-4 col-md-6 col-lg-12 d-flex">                   
                            <div class="card flex-fill">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">{{$rules['group']}}</h5>                              
                                        <div class="col-sm-6 col-md-12">                                        
                                                <div class="be-checkbox inline">
                                                    @foreach ($rules['permissions'] as $permission)
                                                        <input id="check{{$permission['name']}}"  {{ $role->hasPermissionTo($permission['name'])?'checked=""':''}}  type="checkbox" name="name[]"   value="{{$permission['name']}}">
                                                        <label for="check{{$permission['name']}}">{{$permission['title']}}</label>
                                                    @endforeach  
                                                </div>                                                               
                                        </div> 
                                </div>
                            </div>                    
                        </div>
                    @endforeach  
                @endforeach
            @endslot

            @slot('btn')
                <div class="col-2 m-t-15 m-b-15 d-flex">
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <button type="sumbit" class="btn btn-block btn-outline-primary active">保存</button>
                    </div>
                    <div class="col-6 col-sm-4 col-md-2 col-xl mb-3 mb-xl-0">
                        <a href="/admin/role" class="btn btn-block btn-outline-secondary active" pjax>返回</a>
                    </div>
                </div>
            @endslot 
        @endcomponent
         
    
    </form>    

@endsection