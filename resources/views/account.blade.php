@extends('frontend.layouts.main')

@section('title', 'My Ads')
@section('css')
   <style>
        body {
            background-color: #f8f9fa;
        }
        .sidebar {
            background: white;
            padding: 15px;
            border-radius: 10px;
        }
        .sidebar .nav-link {
            color: #333;
            font-weight: 500;
        }
        .sidebar .nav-link.active {
            color: #a50000;
        }
        .info-card {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .ad-card {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
   
</style>
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
       @include('sidebar')
           <!-- Main Content -->
        <div class="col-md-9">
            <div class="info-card">
                <h4><strong>Info</strong></h4>
                <h5>Change Email ID</h5>
                <p>To change your email ID, you need to mail us directly. Click below to send an email to us.</p>
                <p>Your current email ID is <a href="mailto:new@gmail.com" class="text-danger">new@gmail.com</a></p>
                <a href="mailto:support@example.com" class="btn btn-outline-danger">Change Email 🔗</a>
            </div>
        </div>
    </div>
</div>
@endsection

