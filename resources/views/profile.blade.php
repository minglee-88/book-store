@extends('base') 

@section('content')
    <div class="container">
        <form action="/save" method="post" enctype="multipart/form-data">
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
            <div class="d-flex justify-content-center ">
                <div class="d-flex justify-content-center align-items-center">
                    <img src="{{ asset('storage/images/profile.png')}}" style="width:200px;height:250px;">
                   {{-- <img src="{{Storage::url(Auth::User()->picture)}}" style="width:200px;height:250px;"> --}}
                </div>

                <table  class="ml-5" style="border-collapse: separate;
                border-spacing:10px 30px">
                    <tr>
                        <td>{{ __('First Name') }}</td>
                        <td><input type="text" name="firstName" id="" class="form-control" value="{{Auth::User()->firstName}}"></td>

                    </tr>
                    <tr>
                        <td>{{ __('Last Name') }}</td>
                        <td><input type="text" name="lastName" id="" class="form-control"  value="{{Auth::User()->lastName}}"></td>
                    </tr>
                    <tr>
                        <td>{{ __('Gender') }}</td>
                        <td>
                            <input type="radio" name="gender" id="" value="1"
                            <?php if (Auth::user()->genderID == 1): ?>
                                    checked
                            <?php endif ?>>

                            <label for="">{{ __('Male') }}</label>
                            <input type="radio" name="gender" id="" value="2"
                            <?php if (Auth::user()->genderID == 2): ?>
                                    checked
                            <?php endif ?>>
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
                        <td><input type="text" name="middleName" id="" class="form-control" value="{{Auth::User()->middleName}}"></td>

                    </tr>
                    <tr>
                        <td>{{ __('Email Address') }}</td>
                        <td><input type="email" name="email" id="" class="form-control" value="{{Auth::User()->email}}"></td>
                    </tr>
                    <tr>
                        <td>{{ __('Role') }}</td>
                        <td>
                            <?php if (Auth::user()->roleID == 1): ?>
                            {{ __('User') }}
                        <?php endif ?>


                        <?php if (Auth::user()->roleID == 2): ?>
                            Admin
                        <?php endif ?>
                        </td>
                    </tr>
                    <tr>
                        <td>{{ __('Display Picture') }}</td>
                        <td><input type="file" name="picture" id="" class="form-control-file"></td>
                    </tr>
                </table>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-warning px-2">{{ __('Save') }}</button>
            </div>

        </form>

    </div>
@endsection
