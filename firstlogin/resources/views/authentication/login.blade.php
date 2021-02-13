@extends('authentication.master')
@section('contents')
    <div class="card-header">Login</div>
    <div class="card-body">
        <form action="{{ route('login') }}" method="post">
            @csrf
            <div class="form-group">
                <span class="text-danger">
                    {{ session('error') }}
                </span>
                <input type="text" name="email" class="form-control mb-3" placeholder="Enter your email">
                <input type="password" name="password" class="form-control mb-3" placeholder="Enter your password">
                <button type="submit" class="btn btn-sm btn-info">Login</button>
                <a href="{{ url('/register') }}">Register</a>
            </div>
        </form>
    </div>
@endsection