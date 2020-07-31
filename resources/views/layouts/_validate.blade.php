{{-- <!-- @if(count($errors)>0)
    <div role="alert" class="alert alert-contrast alert-danger alert-dismissible">
    <button type="button" data-dismiss="alert" aria-label="Close" class="close">
        <span aria-hidden="true" class="mdi mdi-close"></span>
    </button>
    <div class="icon"><span class="mdi mdi-alert-triangle"></span></div>
        <div class="message">
            @foreach($errors->all() as $error)
                {{$error}} <br>
            @endforeach
        </div>
</div>
@endif --> --}}

<!-- Alerts -->
@if(count($errors)>0)
	<section class="comp-section">
		{{-- <div class="card">
			<div class="card-body"> --}}
				@foreach($errors->all() as $error)
					{{--  <div class="alert alert-primary alert-dismissible" role="alert">
						<strong>{{$error}}</strong> 
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>  --}}
					<div class="alert alert-primary alert-dismissible fade show" role="alert">
						<strong>{{$error}}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
				@endforeach
			{{-- </div>
		</div> --}}
	</section>
@endif
<!-- /Alerts -->