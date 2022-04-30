@extends('base')

@section('content')
    <div class="container">
        <table class="table table-hover table-bordered-5">
            <tr>
                <th>{{ __('Author') }}</th>
                <th>{{ __('Title') }}</th>
            </tr>
            @foreach ($ebook as $key)
                <tr>
                    <td>{{$key->author}}</td>
                    <td>
                        <a href="/detail/{{$key->id}}">{{$key->title}}</a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
