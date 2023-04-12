@extends('layout.layout')
@section('content')

<div class="col-12 mt-5">
    <a href="{{ route('users.create') }}" class="btn btn-success btn-sm float-end">User Add</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
            <th scope="row">{{$user->id}}</th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{ route('users.edit',$user->id) }}" class="btn btn-success btn-sm">Edit</a>
            </td>
            <td>
                <form action="{{ route('users.destroy',$user->id) }}" method="POST" onsubmit="return confirm('{{ trans('are You Sure ? ') }}');" style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form>
            </td>
        @endforeach
    </tbody>
</table>

@endsection
