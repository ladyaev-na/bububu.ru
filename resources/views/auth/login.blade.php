@extends('layouts.layout')
@section('title','Авторизация')

@section('content')
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="mb-0">Login</h4>
                        @error('error')
                        <p class="warning">{{ $message  }}</p>
                        @enderror
                    </div>
                    <div class="card-body">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="login-in-email">Email address</label>
                                <input type="email" class="form-control" id="login-in-email" name="email" required>
                            </div>

                            <div class="form-group">
                                <label for="login-in-password">Password</label>
                                <input type="password" class="form-control" id="login-in-password" name="password" required>
                            </div>

                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


