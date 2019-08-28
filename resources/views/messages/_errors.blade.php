@if(count($errors) > 0 )
    <div class="alert alert-warning">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
@if(session()->has('mjs_error') )
    <div class="alert alert-warning">
        {{ session()->get('mjs_error') }}
    </div>
@endif
