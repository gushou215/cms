@extends('admin::layouts.master')

@section('content')

    @component('components.tabs',['title'=>'栏目管理'])
        @slot('nav')
            <div class="mt-5">
                <button type="button" class="btn btn-primary">栏目列表</button>
                <a  href="/article/category/create" class="btn btn-light"  pjax>添加栏目</a>
            </div>        
        @endslot        

        @slot('body')
            <div class="table-responsive">
                <table class="table table-nowrap mb-0">
                    <thead>
                        <tr>
                            <th>编号</th>
                            <th>栏目名称</th>
                            <th>创建时间</th>
                            <th>修改时间</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category )
                            <tr>
                                <td>{{$category['id']}}</td>
                                <td>{!! $category['_name'] !!}</td>
                                <td>{{$category['created_at']}}</td>
                                <td>{{$category['updated_at']}}</td>
                                <td>
                                    <div class="btn-toolbar">
                                        <div class="btn-group btn-group-sm">
                                            <a  class="btn btn-primary" href="/article/category/{{$category['id']}}/edit" pjax>编辑</a>
                                            <button type="button" class="btn btn-primary" onclick="delRole({{$category['id']}},this)">删除</button>
                                            <form action="/article/category/{{$category['id']}}" method="POST">
                                                @csrf @method('DELETE') 
                                            </form>								
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        
                    </tbody>
                </table>
                
            </div>
        @endslot

        {{-- @slot('roles')
            {{$roles->links()}}
        @endslot --}}

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