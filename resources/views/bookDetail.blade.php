@extends('base')

@section('content')
    <div class="container mt-5">
        <u><strong></strong></u>
        <table class="table table-borderless mt-2">
            <tr>
                <td>{{ __('Title') }}</td>
                <td>{{$ebook->title}}</td>
            </tr>
            <tr>
                <td>{{ __('Author') }}</td>
                <td>{{$ebook->author}}</td>
            </tr>
            <tr>
                <td>{{ __('Description') }}</td>
                <td>{{$ebook->desc}}</td>
            </tr>
        </table>
        <div class="d-flex flex-row-reverse">
            <form action="/rent/{{$ebook->id}}" method="get">
                @csrf
                <button type="submit" class="btn btn-warning px-3 py-2">{{ __('Rent') }}</button>
            </form>
        </div>
    </div>

@endsection
