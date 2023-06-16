@extends('layout.master')

@section('content')
    <div class="container">
        <div class="card p-5 mt-3">
            <div class="card-body">
                @if(session()->has('error'))
                    <div class="alert alert-danger mb-3">
                        {{ session()->get('error') }}
                    </div>

                    <div class="clearfix"></div>
                @endif

                @if (session()->has('errors'))
                    <div class="alert alert-danger mb-3">
                        @foreach ($errors->all() as $error)
                            <p class="mb-1">{{ $error }}</p>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('auth.doLogin') }}" method="post">
                    @csrf

                    <div class="form-group mb-3">
                        <label for="">E-mail Address</label>
                        <input type="text" name="email" placeholder="E-mail Address" class="form-control">
                    </div>

                    <div class="form-group mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" placeholder="Password" class="form-control">
                    </div>

                    <button type="submit" class="btn btn-primary">Log In</button>
                </form>
            </div>
        </div>
    </div>

@endsection
