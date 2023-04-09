@extends('layout.layout')
@section('content')

<div class="col-6 offset-3 mt-5">
    <form method="POST" action="{{ route('categories.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">
                Category Name
            </label>
            <input type="text" name="name" class="form-control @error('name') border-red-500 @enderror mt-1 rounded-md" placeholder="" value="{{old('name')}}" />
            @error('name')
            <div class="text-sm text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">
                Category Slug
            </label>
            <input type="text" name="slug" class="form-control @error('name') border-red-500 @enderror mt-1 rounded-md" placeholder="" value="{{old('slug')}}" />
            @error('name')
            <div class="text-sm text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success btn-sm">Submit</button>
    </form>
</div>
@endsection
