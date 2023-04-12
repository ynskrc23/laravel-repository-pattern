@extends('layout.layout')
@section('content')

<div class="col-6 offset-3 mt-5">
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        <div class="mb-3">
            <label class="form-label">
                User Name
            </label>
            <input type="text" name="name" class="form-control @error('name') border-red-500 @enderror mt-1 rounded-md" placeholder="" value="{{old('name')}}" />
            @error('name')
            <div class="text-sm text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">
                Email
            </label>
            <input type="email" name="email" class="form-control @error('email') border-red-500 @enderror mt-1 rounded-md" placeholder="" value="{{old('email')}}" />
            @error('email')
            <div class="text-sm text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label class="form-label">
                Password
            </label>
            <input type="password" name="password" class="form-control @error('password') border-red-500 @enderror mt-1 rounded-md" placeholder="" value="{{old('password')}}" />
            @error('password')
            <div class="text-sm text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success btn-sm">Submit</button>
    </form>
</div>
@endsection
