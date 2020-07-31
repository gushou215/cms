<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">{{$title}}</h4>
            @isset($nav)
             {{$nav}}
            @endisset
        </div>
        <div class="card-body">
            @isset($body)
                {{$body}}
            @endisset
            
        </div>
       
    </div>
    @isset($roles)
        {{$roles}}
    @endisset      
    @isset($btn)
        {{$btn}}
    @endisset
</div>