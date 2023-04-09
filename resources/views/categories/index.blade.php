@extends('layout.layout')
@section('content')

<div class="col-12 mt-5">
    <a href="{{ route('categories.create') }}" class="btn btn-success btn-sm float-end">Category Add</a>
</div>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Category Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <th scope="row">{{$category->id}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->slug}}</td>
            <td>
                <a href="{{ route('categories.edit',$category->id) }}" class="btn btn-success btn-sm">Edit</a>
            </td>
            <td>
                <form action="{{ route('categories.destroy',$category->id) }}" method="POST" onsubmit="return confirm('{{ trans('are You Sure ? ') }}');" style="display: inline-block;">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-danger btn-sm" value="Delete">
                </form>
            </td>
        @endforeach
    </tbody>
</table>

@endsection
