<form action="{{$url}}" method="POST">
    @csrf
    @isset($method)
        @method($method)
    @endisset
    <div class="modal fade" id="{{$id}}" tabindex="-1" role="dialog"  aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header btn btn-primary">
                    <h5 class="modal-title">{{$title}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">             
                       {{$slot}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">取消</button>
                    <button type="sumbit" class="btn btn-primary">保存</button>
                </div>
            </div>
        </div>
    </div>
</form>

