@extends('base')

@section('content')
    <div class="mt-5 container">
        <table class="table table-hover table-bordered">
            <tr>
                <th style="width: 75%">{{ __('Title') }}</th>
                <th class="text-center" style="width: 25%">{{ __('Action') }}</th>
            </tr>
            @foreach ($order as $key)
                <tr>
                    <td>{{$key->Ebook->title}}</td>
                    <td class="text-center"><a href="/deleteCart/{{$key->id}}">{{ __('Delete') }}</a></td>
                </tr>
            @endforeach
        </table>
        <div class="d-flex flex-row-reverse pt-3">
            <form action="/submit" method="get">
                @csrf
                <button type="submit" class="btn btn-warning px-3 py-2">{{ __('Submit') }}</button>
            </form>
        </div>
    </div>
@endsection
