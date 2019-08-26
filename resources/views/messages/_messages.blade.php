@if( session()->has('message') )

    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>

@endif

@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
