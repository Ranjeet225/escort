@extends('frontend.layouts.main')

@section('title', 'Post Ad')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/postad.css') }}">
@endsection
@section('content')
<div class="container">
    <div class="ad-form-container card">
        <div class="form-hero text-center">
            <h2>Post your ad</h2>
            <p>It's free and fast</p>
        </div>  

        <!-- Progress Steps -->
        <div class="progress-container">
            <div class="progress-step active">
                <div class="step-circle">A</div>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step">
                <div class="step-circle">B</div>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step">
                <div class="step-circle">C</div>
            </div>
            <div class="progress-line"></div>
            <div class="progress-step">
                <div class="step-circle">D</div>
            </div>
        </div>

        <!-- Form Steps -->
        <form id="adForm">
            <!-- Step 1: About You -->
            <div class="form-step" id="step1">
                <div class="section-header">
                    <h5>ABOUT YOU</h5>
                    <span class="required-note">*REQUIRED FIELDS</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">* Select category</label>
                    <select class="form-select pink-select">
                        <option selected>Beauty Parlor</option>
                        <option>Hair Salon</option>
                        <option>Spa & Wellness</option>
                        <option>Nail Salon</option>
                        <option>Massage Therapy</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">* Select town</label>
                    <select class="form-select pink-select">
                        <option selected>Anytown</option>
                        <option>Springfield</option>
                        <option>Riverside</option>
                        <option>Oakville</option>
                        <option>Maplewood</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="123 Main Street">
                </div>

                <div class="mb-3">
                    <label class="form-label">Area/Location/Neighborhood</label>
                    <input type="text" class="form-control" placeholder="Downtown">
                </div>

                <div class="section-header mt-4">
                    <h5>YOUR AD</h5>
                    <span class="required-note">*REQUIRED FIELDS</span>
                </div>

                <div class="mb-3">
                    <label class="form-label">* Age</label>
                    <input type="text" class="form-control" placeholder="Established in 2010">
                </div>

                <div class="mb-3">
                    <label class="form-label">* Ad Title <span class="char-count">Minimum 5 characters</span></label>
                    <input type="text" class="form-control" placeholder="Luxury Spa & Beauty Services">
                    <div class="valid-feedback d-block">
                        <i class="fas fa-check-circle"></i>
                    </div>
                </div>

           
    </div>
</div>
@endsection
@section('js')

@endsection