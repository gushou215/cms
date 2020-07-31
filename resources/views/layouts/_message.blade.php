{{--  @foreach(['success','warning','danger'] as $t)
    @if(session()->has($t))
        <div role="alert" class="alert alert-{{$t}} alert-dismissible">
            <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button>
            <div class="icon"><span class="mdi mdi-check"></span></div>
            <div class="message">
                <strong>{{session()->get($t)}}</strong>
            </div>
        </div>
    @endif
@endforeach  --}}
@foreach(['success','warning','danger'] as $t)
    @if(session()->has($t))
        {{--  <div class="alert alert-{{$t}} alert-dismissible" role="alert">
            <strong>{{session()->get($t)}}</strong> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>  --}}
        {{--  <div role="alert" class="alert alert-{{$t}} alert-dismissible">
            <button type="button" data-dismiss="alert" aria-label="Close" class="close">
                <span aria-hidden="true" class="mdi mdi-close"></span>
            </button>
            <span class="icon mdi mdi-check"></span>
            <strong>{{session()->get($t)}}</strong>
        </div>  --}}
        <div class="alert alert-{{$t}} alert-dismissible fade show" role="alert">
            {{session()->get($t)}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
            </button>
        </div>
    @endif    
@endforeach

@if (session('status'))
    <div role="alert" class="alert alert-success alert-dismissible">
        <button type="button" data-dismiss="alert" aria-label="Close" class="close"><span aria-hidden="true" class="mdi mdi-close"></span></button>
        <div class="icon"><span class="mdi mdi-check"></span></div>
        <div class="message">
            {{ session('status') }}
        </div>
    </div>
@endif