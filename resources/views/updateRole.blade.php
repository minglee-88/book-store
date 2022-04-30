@extends('base')

@section('content')
    <div class="mt-4 container px-5 mr-5">
        <u>{{$user->firstName}} {{$user->middleName}} {{$user->lastName}}</u>
        <br><br>
        <form action="/updateRole/{{$user->id}}" method="post">
            @csrf
            <table>
                <tr>
                    <td style="width: 30%">{{ __('Role') }}</td>
                    <td style="width: 25%">
                        <select name="role" id="role" class="form-control text-center">
                            <option value="1"
                            <?php if ($user->roleID == 1): ?>
                                selected
                            <?php endif ?>>{{ __('User') }}</option>

                            <option value="2"
                            <?php if ($user->roleID == 2): ?>
                                selected
                            <?php endif ?>>Admin</option>
                          </select>
                    </td>
                </tr>
            </table>
            <div class="mt-5 ml-5">
                <button type="submit" class="btn btn-warning px-2 py-2">{{ __('Save') }}</button>
            </div>
        </form>
    </div>

@endsection
