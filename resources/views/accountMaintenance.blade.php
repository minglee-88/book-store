@extends('base')

@section('content')
    <div class="mt-5 container">
        <table class="table table-hover table-bordered">
            <tr>
                <th class="text-center">{{ __('Account') }}</th>
                <th class="text-center">{{ __('Action') }}</th>
            </tr>
            @foreach ($user as $key)
                <tr>
                    <td class="text-center">{{$key->firstName}} {{$key->middleName}} {{$key->lastName}} - {{$key->modifiedBy}}</td>
                    <td class="d-flex justify-content-around">
                        <a href="/updateRole/{{$key->id}}">{{ __('Update Role') }}</a>
                        <a href="/deleteUser/{{$key->id}}">{{ __('Delete') }}</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
