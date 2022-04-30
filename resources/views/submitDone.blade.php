@extends('base')

@section('content')
<div class="d-flex justify-content-center align-items-center">
    <div class="border border-5 border-primary rounded-circle m-5 d-flex d-flex justify-content-center align-items-center" style="width: 350px; height: 350px;">
        <div>
            <h2 class="m-3 text-center">{{ __('Success') }}!</h2>
            <a href="/home">{{ __('Click here to "Home"') }}</a>
        </div>
    </div>

</div>
@endsection
