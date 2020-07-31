@extends('admin::layouts.master')

@section('content')

    @component('components.tabs',['title'=>'编辑栏目'])       

        @slot('body')

            
            <form action="/article/category/{{$category['id']}}" style="border-radius: 0px;" class="form-horizontal group-border-dashed" method="POST">
                @csrf @method('PUT')
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right control-label">栏目名称</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control form-control-sm" name="name" value="{{$category['name']}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 control-label">父级栏目</label>
                        <div class="col-sm-6">
                              <select class="form-control" name="pid">
                                <option value="0">顶级栏目</option>
                                @foreach ($categories as $category)
                                    <option value="{{$category['id']}}"
                                        {{$category['_selected']?'selected':''}}
                                        {{$category['_disabled']?'disabled':''}}>
                                        {!!$category['_name']!!}
                                    </option>
                                @endforeach
                                
                              </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12 col-sm-3 col-form-label text-sm-right control-label"></label>
                        <div class="col-sm-6">
                            <button class="btn btn-primary">保存提交</button>
                        </div>
                    </div>
                </div>   
            </form>
            
            
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