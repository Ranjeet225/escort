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
        .ad-image {
            width: 80px;
            height: 80px;
            border-radius: 5px;
        }
        .ad-status {
            color: red;
            font-weight: bold;
        }
        .ad-buttons .btn {
            margin-right: 5px;
        }
</style>
@endsection
@section('content')
<div class="container mt-5">
    <div class="row">
        @include('sidebar')
        <div class="col-md-9">
            <div class="container mt-5">
                <div class="ad-card d-flex flex-column flex-md-row align-items-start p-3">
                    <img src="{{ asset('assets/images/blog/1.jpg') }}" alt="Ad Image" class="ad-image me-3" style="width: 40%; height: 100%; object-fit: cover;">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">This is me contact for...</h5>
                        <p class="text-muted mb-1">Contact for website design</p>
                        <p class="text-muted mb-1">📍 Haryana | Karnal | Delhi</p>
                        <p class="ad-status">Ad is not Active <a href="#" class="text-primary">Activate Ad Now</a></p>
                        <div class="ad-buttons mt-2">
                            <button class="btn btn-success">✏️ Edit</button>
                            <button class="btn btn-danger">🗑️ Delete</button>
                            {{-- <button class="btn btn-primary">📢 Promote</button> --}}
                        </div>
                        <p class="text-muted mt-2">Updated: Mar 05, 2025, 07:23 AM | Total View: 1</p>
                    </div>
                    <span class="badge bg-light text-dark">Free Ad</span>
                </div>
            </div>
        </div>
   
    </div>
</div>
@endsection


