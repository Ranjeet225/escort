@extends('frontend.layouts.main')

@section('title', 'Issue')
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
        
        .captcha-box {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px;
            margin-top: 15px;
        }
        
        .captcha-logo {
            float: right;
            text-align: right;
            font-size: 12px;
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
        
        .viom-carousel {
            margin-top: 30px;
            position: relative;
            overflow: hidden;
            height: 80px;
        }
        
        .carousel-inner {
            position: relative;
            width: 100%;
            height: 100%;
        }
        
        .carousel-item {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            text-align: center;
            opacity: 0;
            transition: opacity 0.5s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: #777;
        }
        
        .carousel-item.active {
            opacity: 1;
        }
        
        .carousel-item i {
            color: #D81B60;
            font-size: 20px;
            margin-bottom: 5px;
        }
        
        .carousel-indicators {
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 15;
            display: flex;
            justify-content: center;
            padding: 0;
            margin: 0;
            list-style: none;
        }
        
        .carousel-indicators li {
            width: 8px;
            height: 8px;
            border-radius: 50%;
            margin: 0 4px;
            background-color: #ddd;
            cursor: pointer;
        }
        
        .carousel-indicators li.active {
            background-color: #D81B60;
        }
        .btn-primary {
            color: #fff;
            background-color: #1abc9c;
            border-color: #1abc9c;
        }
        .text-primary {
            color: #1abc9c !important;
        }  
   </style>
@endsection
@section('content')
<div class="login-container">
    <h1 class="login-title">Get into viom!</h1>
    <div class="viom-carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <i class="fa fa-line-chart"></i>
                <div><strong>Publish and Manage</strong> your ads</div>
            </div>
            <div class="carousel-item active">
                <i class="fa fa-bullhorn"></i>
                <div>Discover all our <strong>news</strong></div>
            </div>
            <div class="carousel-item">
                <i class="fa fa-thumbs-o-up"></i>
                <div>Activate our exclusive <strong>promotions</strong></div>
            </div>
        </div>
        <ol class="carousel-indicators">
            <li data-target="#viomCarousel" data-slide-to="0"></li>
            <li data-target="#viomCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#viomCarousel" data-slide-to="2"></li>
        </ol>
    </div>
    
    <form>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Email">
        </div>
        
        <div class="form-group">
            <label for="password">Password</label>
            <div style="position: relative;">
                <input type="password" class="form-control" id="password" placeholder="Password">
                <span class="password-toggle">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                </span>
            </div>
        </div>
        
        <div class="captcha-box">
            <div class="captcha-content">
                <input type="checkbox" id="human-check" style="vertical-align: middle;">
                <label for="human-check" style="margin-bottom: 0; vertical-align: middle;">I am human</label>
                <div class="captcha-logo">
                    hCaptcha<br>
                    Privacy - Terms
                </div>
            </div>
        </div>
        
        <button type="submit" class="login-button">Login</button>
        
        <div class="forgot-password">
            <a href="#">Forgot your password?</a>
        </div>
        
        <div class="signup-link">
            <span style="color: #6c757d;">Don't have an account yet?</span> <a href="{{url('user/register')}}">Sign up!</a>
        </div>
    </form>
</div>
@endsection