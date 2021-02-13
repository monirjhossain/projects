@extends('authentication.master')
@section('contents')
    <div class="card-header">Register</div>
    <div class="card-body">
        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group">
                <ol>
                   @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <li class="text-danger">{{ $error }}</li>
                        @endforeach
                   @endif
                </ol>
                <span class="text-danger">
                    {{ session('error') }}
                </span>
                <input type="text" name="name" class="form-control mb-3" placeholder="Enter your name">
                <input type="text" name="email" class="form-control mb-3" placeholder="Enter your email">
                <input type="password" name="password" class="form-control mb-3" placeholder="Enter your password">
                <input type="password" name="password_confirmation" class="form-control mb-3" placeholder="Enter your password again">
                <button type="submit" class="btn btn-sm btn-info">Register</button>
                <a href="{{ url('/login') }}">Login</a>
            </div>
        </form>
    </div>
@endsection