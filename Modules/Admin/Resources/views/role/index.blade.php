@extends('admin::layouts.master')

@section('content')

    @component('components.tabs',['title'=>'角色管理'])
        @slot('nav')
            <div class="mt-5">
                <button type="button" class="btn btn-primary">角色列表</button>
                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#addRole" >添加角色</button>
            </div> 
            @component('components.modal',['id'=>'addRole','url'=>'/admin/role','title'=>'添加角色','method'=>'POST'])
                <div class="form-group">
                    <label  class="col-form-label">角色名称</label>
                    <input type="text" class="form-control" name="title" placeholder="请输入中文角色名称" value="{{old('title')}}"> 
                </div>
                <div class="form-group">
                    <label  class="col-form-label">角色标识</label>
                    <input type="text" class="form-control" name="name" placeholder="标识必须为英文字母" value="{{old('name')}}">
                </div>

            @endcomponent 
        @endslot        

        @slot('body')
            <div class="table-responsive">
                <table class="table table-nowrap mb-0">
                    <thead>
                        <tr>
                            <th>编号</th>
                            <th>角色名称</th>
                            <th>角色标识</th>
                            <th>守卫名称</th>
                            <th>创建时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($roles as $val)
                            <tr>
                                <td>{{$val['id']}}</td>
                                <td>{{$val['title']}}</td>
                                <td>{{$val['name']}}</td>
                                <td>{{$val['guard_name']}}</td>
                                <td>{{$val['created_at']}}</td>
                                <td>
                                    <div class="btn-toolbar">
                                        <div class="btn-group btn-group-sm">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editRole{{$val['id']}}">编辑</button>
                                            <button type="button" class="btn btn-primary" onclick="delRole({{$val['id']}},this)">删除</button>
                                            <form action="/admin/role/{{$val['id']}}" method="POST">
                                                @csrf @method('DELETE') 
                                            </form>
                                            <a href="/admin/role/permission/{{$val['id']}}" type="button" class="btn btn-primary" pjax>权限</a>									
                                        </div>
                                    </div>
                                    @component('components.modal',['id'=>"editRole{$val['id']}",'url'=>"/admin/role/{$val['id']}",'title'=>"编辑{$val['title']}",'method'=>'PUT'])
                                        <div class="form-group">
                                            <label  class="col-form-label">角色名称</label>
                                            <input type="text" class="form-control" name="title" placeholder="请输入中文角色名称" value="{{$val['title']}}"> 
                                        </div>
                                        <div class="form-group">
                                            <label  class="col-form-label">角色标识</label>
                                            <input type="text" class="form-control" name="name" placeholder="标识必须为英文字母" value="{{$val['name']}}">
                                        </div>
                        
                                    @endcomponent
                    
                                </td>
                            </tr>   
                        @endforeach
                        
                    </tbody>
                </table>
                
            </div>
        @endslot

        @slot('roles')
            {{$roles->links()}}
        @endslot

    @endcomponent          
@endsection
@section('scripts')
    <script>
        function delRole(id,bt){
            if(confirm('确定删除角色吗?')){
                $(bt).next('form').trigger('submit');
            }
        }
    </script>
@endsection