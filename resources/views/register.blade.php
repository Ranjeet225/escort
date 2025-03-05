@extends('frontend.layouts.main')

@section('title', 'Issue')
@section('css')
<style>
       body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
        }
        
        .signup-container {
            max-width: 500px;
            margin: 30px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
        }
        
        .signup-title {
            text-align: center;
            font-weight: bold;
            font-size: 28px;
            margin-bottom: 20px;
            color: #212529;
        }
        
        .icon-container {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .icon-container i {
            color: #D81B60;
            font-size: 24px;
        }
        
        .tagline {
            text-align: center;
            color: #D81B60;
            margin-bottom: 30px;
            font-size: 18px;
        }
        .glamo-carousel {
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
        
        .password-requirements {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 15px;
            margin-top: 15px;
            margin-bottom: 15px;
            background-color: #f8f9fa;
        }
        
        .requirement {
            margin-bottom: 5px;
            color: #6c757d;
        }
        
        .requirement i {
            margin-right: 5px;
            color: #28a745;
        }
        
        .consent-section {
            margin-top: 15px;
            margin-bottom: 15px;
        }
        
        .consent-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .consent-toggle {
            margin-right: 10px;
            margin-top: 2px;
        }
        
        .consent-toggle .toggle-btn {
            width: 40px;
            height: 20px;
            background-color: #e2e2e2;
            border-radius: 20px;
            position: relative;
            display: inline-block;
        }
        
        .consent-toggle .toggle-text {
            display: inline-block;
            vertical-align: middle;
            margin-left: 5px;
            font-weight: bold;
        }
        
        .consent-text {
            font-size: 14px;
            color: #212529;
        }
        
        .consent-text a {
            color: #D81B60;
            text-decoration: none;
        }
        
        .consent-text a:hover {
            text-decoration: underline;
        }
        
        .optional-note {
            font-size: 14px;
            color: #6c757d;
            margin-top: 5px;
        }
        
        .captcha-box {
            border: 1px solid #ced4da;
            border-radius: 4px;
            padding: 10px;
            margin-top: 15px;
            margin-bottom: 15px;
        }
        
        .captcha-logo {
            float: right;
            text-align: right;
            font-size: 12px;
            color: #6c757d;
        }
        
        .signup-button {
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
        
        .signup-button:hover {
            background-color: #c2185b;
        }
        
        .login-link {
            text-align: center;
            margin-top: 20px;
        }
        
        .login-link a {
            color: #D81B60;
            text-decoration: none;
        }
        
        .login-link a:hover {
            text-decoration: underline;
        }
</style>
@endsection
@section('content')
<div class="signup-container">
    <h1 class="signup-title">Join Glamo!</h1>
    
    <div class="glamo-carousel">
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
            <li data-target="#glamoCarousel" data-slide-to="0"></li>
            <li data-target="#glamoCarousel" data-slide-to="1" class="active"></li>
            <li data-target="#glamoCarousel" data-slide-to="2"></li>
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
        
        <div class="password-requirements">
            <p>Your password must have:</p>
            <div class="requirement">
                <i class="fa fa-check-circle"></i> A lowercase letter
            </div>
            <div class="requirement">
                <i class="fa fa-check-circle"></i> A uppercase letter
            </div>
            <div class="requirement">
                <i class="fa fa-check-circle"></i> A number
            </div>
            <div class="requirement">
                <i class="fa fa-check-circle"></i> Minimum 8 characters
            </div>
        </div>
        
        <div class="consent-section">
            <div class="consent-item">
                <div class="consent-toggle">
                    <div class="toggle-btn"></div>
                    <span class="toggle-text">NO</span>
                </div>
                <div class="consent-text">
                    <strong>Terms, Conditions and Privacy Policy</strong><br>
                    I have read the <a href="#">Terms and Conditions</a> of use and <a href="#">Privacy Policy</a> and I hereby authorize the processing of my personal data for the purpose of providing this web service.
                </div>
            </div>
            
            <div class="consent-item">
                <div class="consent-toggle">
                    <div class="toggle-btn"></div>
                    <span class="toggle-text">NO</span>
                </div>
                <div class="consent-text">
                    <strong>Marketing Communications</strong><br>
                    I authorize the processing by the Company of my Contact details for marketing and advertising purposes (<a href="#">Privacy Policy</a>)
                </div>
            </div>
            
            <div class="optional-note">
                Consent is optional, for more information or to withdraw the consent see our <a href="#">Privacy Policy</a>. Any withdrawal will not affect the data processing carried out before such withdrawal.
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
        
        <button type="submit" class="signup-button">Sign Up</button>
        
        <div class="login-link">
            <span>Have an account yet?</span> <a href="{{ route('user-login') }}">Login</a>
        </div>
    </form>
</div>
@endsection