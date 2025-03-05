@extends('frontend.layouts.main')

@section('title', 'Escort Details')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            background-color: #f8f9fa;
        }

        h1, h2, h3, h4, h5 {
            color: #333;
        }

        .btn-primary {
            background-color: #e91e63;
            border-color: #e91e63;
        }

        .btn-primary:hover, .btn-primary:focus {
            background-color: #d81b60;
            border-color: #d81b60;
        }

        .btn-outline-primary {
            color: #e91e63;
            border-color: #e91e63;
        }

        .btn-outline-primary:hover {
            background-color: #e91e63;
            border-color: #e91e63;
        }

        .text-danger {
            color: #e91e63 !important;
        }

        .badge {
            font-weight: 500;
            padding: 8px 12px;
            margin-right: 5px;
            border-radius: 20px;
        }

        .badge.bg-light {
            background-color: #f5f5f5 !important;
            color: #333 !important;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }

        .breadcrumb-item a {
            color: #e91e63;
        }

        .breadcrumb-item.active {
            color: #666;
        }

        .img-fluid {
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .img-fluid:hover {
            transform: scale(1.02);
        }

        .alert-warning {
            background-color: #fff3cd;
            border-color: #ffeeba;
            color: #856404;
        }

        /* Service badges hover effect */
        .badge:hover {
            background-color: #e91e63 !important;
            color: white !important;
            cursor: pointer;
            transition: all 0.3s ease;
        }
    </style>
@endsection
@section('content')
<div class="container mt-3 px-3">
    <!-- Breadcrumb Navigation -->
    <div class="row mb-3">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-danger">← Back to search</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb small">
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Beauty Hub</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Hyderabad</a></li>
                    <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Premium Salons</a></li>
                    <li class="breadcrumb-item active">Glamour Beauty Parlor</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- Parlor Info -->
    <div class="row mb-3">
        <div class="col-6">
            <span class="badge bg-light text-dark me-2"><i class="fas fa-star text-warning me-1"></i> 4.8 (50 ratings)</span>
            <span class="badge bg-light text-dark"><i class="fas fa-map-marker-alt me-1"></i> Hyderabad</span>
        </div>
        <div class="col-6 text-end">
            <a href="tel:09999778843" class="btn btn-primary rounded-pill">
                <i class="fas fa-phone-alt me-2"></i> 09999778843
            </a>
        </div>
    </div>

    <!-- Parlor Title and Rating -->
    <div class="row mb-4">
        <div class="col-12">
            <h1 class="fs-5 fw-bold">Glamour Beauty Parlor - Premium Services No Advance Payment</h1>
            <div class="d-flex align-items-center">
                <div class="me-2">
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star text-warning"></i>
                    <i class="fas fa-star-half-alt text-warning"></i>
                </div>
                <span class="text-success fw-bold">Pay After Service, 100% Satisfaction Guaranteed.</span>
            </div>
            <p class="mb-0">Premium quality services with trained professionals. Real 100% satisfaction guaranteed.</p>
        </div>
    </div>

    <!-- Gallery -->
    <div class="row mb-4">
        <div class="col-4 mb-3">
            <img src="../assets/images/blog/1.jpg" alt="Salon Interior" class="img-fluid rounded">
        </div>
        <div class="col-4 mb-3">
            <img src="../assets/images/blog/1.jpg" alt="Hair Styling" class="img-fluid rounded">
        </div>
        <div class="col-4 mb-3">
            <img src="../assets/images/blog/1.jpg" alt="Facial Treatment" class="img-fluid rounded">
        </div>
        <div class="col-4 mb-3">
            <img src="../assets/images/blog/1.jpg" alt="Manicure Service" class="img-fluid rounded">
        </div>
        <div class="col-4 mb-3">
            <img src="../assets/images/blog/1.jpg" alt="Makeup Service" class="img-fluid rounded">
        </div>
        <div class="col-4 mb-3">
            <img src="../assets/images/blog/1.jpg" alt="Bridal Makeup" class="img-fluid rounded">
        </div>
    </div>

    <!-- Back Button -->
    <div class="row mb-4">
        <div class="col-12">
            <a href="#" class="btn btn-outline-primary btn-sm"><i class="fas fa-arrow-left me-2"></i>Back</a>
        </div>
    </div>

    <!-- About Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 mb-4">
                <div class="card-body p-3">
                    <h2 class="mb-3"><i class="fas fa-info-circle me-2"></i> About us</h2>
                    
                    <p class="mb-2">Glamour Beauty Parlor - Premium Services No Advance Payment <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star text-warning"></i> <i class="fas fa-star-half-alt text-warning"></i></p>
                    <p class="mb-2">Pay After Service, 100% Satisfaction Guaranteed.</p>
                    
                    <p class="mb-2">Premium quality services with a unique combination of expertise, elegance, beauty, and sophistication.</p>
                    
                    <p class="mb-2">Genuine Beauty Service Call and WhatsApp | Any Time | 24/7 Hours Service Available Day and Night</p>
                    
                    <p class="mb-2">Call & Out Call Our Service in All Over Hyderabad 24/7 Anywhere Anytime 3★ 4★5★ Hotel Call Only Real And Decent Person Only.</p>
                    
                    <h5 class="mt-4 mb-2">Rates</h5>
                    <p class="mb-1">1Hr FOR 1HR 2 SESSION</p>
                    <p class="mb-1">3Hr FOR 3HR 5 SESSION</p>
                    <p class="mb-1">FULL NIGHT 6HR 8 SESSION</p>
                    
                    <h5 class="mt-4 mb-2">NOTE :-</h5>
                    <p class="mb-1">1) Don't do bargain please.</p>
                    <p class="mb-1">2) No Timepass and No time waste chats please only service related enquiries</p>
                    <p class="mb-1">3) PLEASE contact only WhatsApp , NO call please if want confirmation, I'll do Video call face verification for Rs 1000/-</p>
                    
                    <p class="mb-2 mt-3">Without any advance payment, send me only hotel details :-</p>
                    
                    <p class="mb-1">Hotel name :-</p>
                    <p class="mb-1">Room number :-</p>
                    <p class="mb-1">Booking name :-</p>
                    <p class="mb-1">Current location :-</p>
                    <p class="mb-1">Hotel visiting card :-</p>
                    
                    <p class="mb-2 mt-3">Agent and time passers stay away strictly.</p>
                    <p class="mb-2">Genuine person who interested in my service only text me.</p>
                    
                    <div class="d-flex justify-content-start mt-4">
                        <span class="badge bg-light text-dark">Indian</span>
                        <span class="badge bg-light text-dark">Natural Beauty</span>
                        <span class="badge bg-light text-dark">Shave Hair</span>
                        <span class="badge bg-light text-dark">Slim</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Services Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 mb-4">
                <div class="card-body p-3">
                    <h2 class="mb-3"><i class="fas fa-concierge-bell me-2"></i> Services</h2>
                    
                    <div class="d-flex flex-wrap justify-content-start">
                        <span class="badge bg-light text-dark p-2 mb-2"><i class="fas fa-cut me-1"></i> Oral</span>
                        <span class="badge bg-light text-dark p-2 mb-2"><i class="fas fa-spa me-1"></i> Anal</span>
                        <span class="badge bg-light text-dark p-2 mb-2"><i class="fas fa-hands me-1"></i> BDSM</span>
                        <span class="badge bg-light text-dark p-2 mb-2"><i class="fas fa-star me-1"></i> Girlfriend experience</span>
                        <span class="badge bg-light text-dark p-2 mb-2"><i class="fas fa-hands me-1"></i> Tantric massage</span>
                        <span class="badge bg-light text-dark p-2 mb-2"><i class="fas fa-kiss me-1"></i> French kiss</span>
                        <span class="badge bg-light text-dark p-2 mb-2"><i class="fas fa-heart me-1"></i> Threesome</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Attention Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 mb-4">
                <div class="card-body p-3">
                    <h2 class="mb-3"><i class="fas fa-exclamation-circle me-2"></i> Attention to</h2>
                    
                    <div class="d-flex flex-wrap">
                        <span class="badge bg-light text-dark p-2 me-2 mb-2">Women</span>
                        <span class="badge bg-light text-dark p-2 me-2 mb-2">Couples</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Place of Service Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 mb-4">
                <div class="card-body p-3">
                    <h2 class="mb-3"><i class="fas fa-map-marker-alt me-2"></i> Place of service</h2>
                    
                    <div class="d-flex flex-wrap">
                        <span class="badge bg-light text-dark p-2 me-2 mb-2">At home</span>
                        <span class="badge bg-light text-dark p-2 me-2 mb-2">Hotel / Motel</span>
                        <span class="badge bg-light text-dark p-2 me-2 mb-2">Clubs</span>
                        <span class="badge bg-light text-dark p-2 me-2 mb-2">Outcall</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Payments Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card border-0 mb-4">
                <div class="card-body p-3">
                    <h2 class="mb-3"><i class="fas fa-credit-card me-2"></i> Payments</h2>
                    
                    <p class="mb-3">Price per hour</p>
                    
                    <div class="d-flex align-items-center mb-3">
                        <div class="form-check me-3">
                            <input class="form-check-input" type="radio" name="price" id="price1" checked>
                            <label class="form-check-label" for="price1">
                                ₹ 2500
                            </label>
                        </div>
                        <span class="badge bg-light text-dark">No Limits</span>
                    </div>
                    
                    <div class="d-flex flex-wrap">
                        <div class="me-3 mb-2">
                            <i class="fas fa-money-bill-wave me-2"></i> Cash
                        </div>
                        <div class="mb-2">
                            <i class="fas fa-credit-card me-2"></i> Credit Card
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact Section -->
    <div class="row mb-4">
        <div class="col-12 text-center">
            <h2 class="mb-4">Contact me</h2>
            <a href="tel:09999778843" class="btn btn-primary rounded-pill px-4 py-2">
                <i class="fas fa-phone-alt me-2"></i> 09999778843
            </a>
        </div>
    </div>

    <!-- Share Section -->
    <div class="row mb-4">
        <div class="col-6">
            <p class="mb-2">Share ad</p>
            <div class="d-flex">
                <a href="#" class="me-3 text-decoration-none">
                    <i class="fab fa-twitter text-primary"></i>
                </a>
                <a href="#" class="text-decoration-none">
                    <i class="fab fa-whatsapp text-success"></i>
                </a>
            </div>
        </div>
        <div class="col-6 text-end">
            <a href="#" class="text-danger text-decoration-none">
                <i class="fas fa-flag me-1"></i> Report scam
            </a>
        </div>
    </div>

    <!-- Footer Links -->
    <div class="row mb-4 text-center">
        <div class="col-12">
            <p class="mb-1">All ads in <a href="#" class="text-decoration-none text-danger">Massages</a></p>
            <p>in <a href="#" class="text-decoration-none text-danger">Hyderabad <i class="fas fa-chevron-right small"></i></a></p>
        </div>
    </div>

    <!-- Report Abuse Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        <i class="fas fa-exclamation-circle text-danger me-2"></i>
                        <p class="mb-0 fw-bold">Report Abuse</p>
                    </div>
                    <p class="small mb-3">Report all instances of abuse (harassment or messages with images or content that violates standards) can be notified to the administrator.</p>
                    <p class="small mb-0">To report cases or content deemed illegal or abusive, you can send an email to: <a href="mailto:grievances@website.in" class="text-decoration-none">grievances@website.in</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Warning Banner -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                <div>
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <span>Beware of impostors posing as Stylists and asking for money. No one from Glam will call asking for payment from you.</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection