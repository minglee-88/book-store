@extends('base')

@section('content')
    <div class="container">
        <h1><u>{{ __('Log in') }}</u></h1>
        <form action="/loginForm" method="post">
            @csrf
            <div class="d-flex justify-content-center">
                <table style="border-collapse: separate;
                border-spacing:10px 30px">
                    <tr>
                        <td>{{ __('Email Address') }}</td>
                        <td><input type="email" name="email" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>{{ __('Password') }}</td>
                        <td><input type="password" name="password" id="" class="form-control"></td>
                    </tr>
                </table>
            </div>
            <div class="d-flex justify-content-center">
                @if($errors->any())
                        <p class="bg-danger text-white p-1">{{$errors->first()}}</p>
                @endif

            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-warning">{{ __('Log In') }}</button>
            </div>
            <div class="text-center mt-2">
                <a href="/register">{{ __('Dont have an account? Click here to sign up') }}</a>
            </div>
        </form>

    </div>
@endsection
