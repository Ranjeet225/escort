@extends('frontend.layouts.main')

@section('title', 'Login')
@section('css')
   <style>
       body {
           font-family: Arial, sans-serif;
           background-color: #f8f9fa;
       }

       .login-container {
           max-width: 400px;
           margin: 30px auto;
           padding: 20px;
           background-color: #fff;
           border-radius: 5px;
           box-shadow: 0 0 10px rgba(0,0,0,0.05);
       }

       .login-title {
           text-align: center;
           font-weight: bold;
           font-size: 28px;
           color: #212529;
       }

       .form-group label {
           font-weight: 500;
           color: #495057;
       }

       .form-control {
           border-radius: 4px;
           padding: 10px 12px;
           border: 1px solid #ced4da;
       }

       .form-control:focus {
           border-color: #D81B60;
           box-shadow: 0 0 0 0.2rem rgba(216, 27, 96, 0.25);
       }

       .password-toggle {
           position: absolute;
           right: 10px;
           top: 50%;
           transform: translateY(-50%);
           cursor: pointer;
           color: #6c757d;
       }

       .login-button {
           width: 100%;
           background-color: #D81B60;
           border: none;
           padding: 12px;
           border-radius: 4px;
           color: white;
           font-weight: 500;
           margin-top: 15px;
           text-transform: uppercase;
           letter-spacing: 1px;
       }

       .login-button:hover {
           background-color: #c2185b;
       }

       .forgot-password, .signup-link {
           text-align: center;
           margin-top: 15px;
       }

       .forgot-password a, .signup-link a {
           color: #D81B60;
           text-decoration: none;
       }

       .forgot-password a:hover, .signup-link a:hover {
           text-decoration: underline;
       }
   </style>
@endsection
@section('content')
<div class="login-container">
    <h1 class="login-title">Welcome Back!</h1>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ old('email') }}" required autofocus class="form-control" placeholder="Email">
            @error('email')
                <span>{{ $message ?? $errors->first('email') }}</span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Password</label>
            <div style="position: relative;">
                <input type="password" class="form-control" name="password" required autocomplete="current-password" id="password" placeholder="Password">
                @error('password')
                    <span>{{ $message ?? $errors->first('password') }}</span>
                @enderror
                <span class="password-toggle">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        <button type="submit" class="login-button">Login</button>
        <div class="forgot-password">
        <a href="{{ route('password.request') }}">Forgot your password?</a>
        </div>

        <div class="signup-link">
            <span style="color: #6c757d;">Don't have an account yet?</span> <a href="{{ route('signup') }}">Sign up!</a>
        </div>
    </form>
</div>
@endsection
