@extends('base')

@section('content')
    <div class="container">
        <h1><u>{{ __('Sign Up') }}</u></h1>
        <form action="/registerForm" method="post" enctype="multipart/form-data">
            @csrf
            <div class="d-flex justify-content-center">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
            <div class="d-flex justify-content-center">
                <table style="border-collapse: separate;
                border-spacing:10px 30px">
                    <tr>
                        <td>{{ __('First Name') }}</td>
                        <td><input type="text" name="firstName" id="" class="form-control"></td>

                    </tr>
                    <tr>
                        <td>{{ __('Last Name') }}</td>
                        <td><input type="text" name="lastName" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>{{ __('Gender') }}</td>
                        <td>
                            <input type="radio" name="gender" id="" value="1">
                            <label for="">{{ __('Male') }}</label>
                            <input type="radio" name="gender" id="" value="2">
                            <label for="">{{ __('Female') }}</label>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('Password') }}</td>
                        <td><input type="password" name="password" id="" class="form-control"></td>

                    </tr>
                </table>

                <table class="ml-5" style="border-collapse: separate;
                border-spacing:10px 30px">
                    <tr>
                        <td>{{ __('Middle Name') }}</td>
                        <td><input type="text" name="middleName" id="" class="form-control"></td>

                    </tr>
                    <tr>
                        <td>{{ __('Email Address') }}</td>
                        <td><input type="email" name="email" id="" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>{{ __('Role') }}</td>
                        <td>
                            <select name="role" id="role" class="form-control">
                                <option value="1">{{ __('User') }}</option>
                                <option value="2">{{ __('Admin') }}</option>
                              </select>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('Display Picture') }}</td>
                        <td><input type="file" name="picture" id="" class="form-control-file"></td>
                    </tr>
                </table>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-warning">{{ __('Submit') }}</button>
            </div>
            <div class="text-center mt-2">
                <a href="/login">{{ __('Already have an account? Click here to login') }}</a>
            </div>
        </form>

    </div>
@endsection
