@extends('frontend.layouts.main')

@section('title', 'Issue')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/issue.css') }}">
@endsection
@section('content')
    <!-- Hero Section -->
    <section class="container mt-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold mb-4">Stop all scams!</h1>
                <p class="lead mb-4">Have you been looking for quality beauty services at affordable prices?</p>
                <p class="mb-4">Look no further! Our parlor offers premium beauty treatments with certified
                    professionals. We provide personalized services to meet your unique beauty needs.</p>
                <p>Once you've scheduled your appointment, we will collaborate with you to ensure you receive the best
                    possible experience during your visit.</p>
            </div>
            <div class="col-lg-6 position-relative">
                <img src="../assets/images/blog/1.jpg" alt="Beauty Parlor Services"
                    class="img-fluid secure-img rounded-circle">
                <div class="floating-icons">
                    <div class="icon-item icon-1"><i class="fas fa-spa"></i></div>
                    <div class="icon-item icon-2"><i class="fas fa-cut"></i></div>
                    <div class="icon-item icon-3"><i class="fas fa-paint-brush"></i></div>
                    <div class="icon-item icon-4"><i class="fas fa-gem"></i></div>
                    <div class="icon-item icon-5"><i class="fas fa-heart"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- User Type Section -->
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6">
                <div class="card text-center p-4 h-100">
                    <div class="icon-wrapper mx-auto mb-3">
                        <i class="fas fa-user-tie text-primary"></i>
                    </div>
                    <h3>Are you a beauty professional?</h3>
                    <div class="mt-3">
                        <button class="btn btn-primary">Join our team now</button>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card text-center p-4 h-100">
                    <div class="icon-wrapper mx-auto mb-3">
                        <i class="fas fa-user text-secondary"></i>
                    </div>
                    <h3>Are you a customer?</h3>
                    <div class="mt-3">
                        <button class="btn btn-secondary">Book appointment now</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Guide Section -->
    <section class="container mt-5">
        <h2 class="text-center mb-4">Have you been a victim of a scam?<br>
            Follow our advice to report it!
        </h2>

        <div class="steps-container mt-5">
            <!-- Step 1 -->
            <div class="step-item">
                <h3 class="step-number">1 – What type of service are you looking for?</h3>
                <div class="row mt-4">
                    <div class="col-md-4 mb-4">
                        <div class="service-card">
                            <img src="../assets/images/blog/1.jpg" alt="Hair Services" class="img-fluid rounded mb-3">
                            <h4>A - Hair services</h4>
                            <p>Cuts, coloring, styling and more</p>
                            <button class="btn btn-outline-primary btn-sm">Book hair service</button>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="service-card">
                            <img src="../assets/images/blog/1.jpg" alt="Facial Treatments" class="img-fluid rounded mb-3">
                            <h4>B - Facial treatments</h4>
                            <p>Facials, masks, and skin care</p>
                            <button class="btn btn-outline-primary btn-sm">Book facial treatment</button>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="service-card">
                            <img src="../assets/images/blog/1.jpg" alt="Nail Services" class="img-fluid rounded mb-3">
                            <h4>C - Nail services</h4>
                            <p>Manicures, pedicures, and nail art</p>
                            <button class="btn btn-outline-primary btn-sm">Book nail service</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="step-item mt-5">
                <h3 class="step-number">2 – If the service you need isn't listed above</h3>
                <div class="mt-3">
                    <a href="#" class="text-primary">Fill out this form and tell us about your requirements</a>
                </div>
            </div>

            <!-- Step 3 -->
            <div class="step-item mt-5">
                <h3 class="step-number">3 – Schedule your appointment</h3>
                <p class="mt-3 note">
                    <strong>NOTE:</strong> We will make available all information related to your appointment and
                    provide it to the beautician upon request.
                </p>
            </div>
        </div>
    </section>

    <!-- Top Services for Professionals -->
    <section class="container mt-5 pt-5">
        <h6 class="text-muted text-uppercase">Advertiser</h6>
        <h2 class="mb-4">Top scams for advertisers</h2>

        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <img src="../assets/images/blog/1.jpg" alt="Professional Training" class="card-img-top rounded">
                    <div class="card-body px-0">
                        <h4>False support representatives</h4>
                        <p>Our experts provide training sessions on latest beauty techniques and trends to help you
                            enhance your skills.</p>
                        <a href="#" class="text-primary">Learn more now!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <img src="../assets/images/blog/1.jpg" alt="Fake promotional offers" class="card-img-top rounded">
                    <div class="card-body px-0">
                        <h4>Fake promotional offers</h4>
                        <p>This type of benefit provides our partner professionals with special discounts on premium
                            beauty products.</p>
                        <a href="#" class="text-primary">Join our partner program now!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <img src="../assets/images/blog/1.jpg" alt="Fake Skokka sales people" class="card-img-top rounded">
                    <div class="card-body px-0">
                        <h4>Fake Skokka sales people</h4>
                        <p>The platform connects the beautician with potential clients looking for your specific
                            expertise.</p>
                        <a href="#" class="text-primary">Sign up for referrals now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services for Customers -->
    <section class="container mt-5 pt-5">
        <h6 class="text-muted text-uppercase">customers</h6>
        <h2 class="mb-4">Main services and treatments for customers</h2>

        <div class="row mt-4">
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <img src="../assets/images/blog/1.jpg" alt="Hair Styling" class="card-img-top rounded">
                    <div class="card-body px-0">
                        <h4>Scam</h4>
                        <p>A complete range of professional hair services including cuts, coloring, and styling.</p>
                        <a href="#" class="text-secondary">Make your report now!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <img src="../assets/images/blog/1.jpg" alt="Skin Treatments" class="card-img-top rounded">
                    <div class="card-body px-0">
                        <h4>Blackmail</h4>
                        <p>Premium facial treatments that rejuvenate and enhance your natural beauty.</p>
                        <a href="#" class="text-secondary">Make your report now!</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100 border-0">
                    <img src="../assets/images/blog/1.jpg" alt="Hitman" class="card-img-top rounded">
                    <div class="card-body px-0">
                        <h4>Hitman</h4>
                        <p>Expert nail services including manicures, pedicures, and artistic nail designs.</p>
                        <a href="#" class="text-secondary">Make your report now!</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="container mt-5 pt-5 text-center">
        <h2 class="mb-4">I want to be contacted</h2>
        <p class="mb-4">
            Beauty & Parlor will always be ready to help you, providing you with all the necessary assistance
        </p>
        <button class="btn btn-primary">I want to be contacted</button>
        <p class="small text-muted mt-3">or call us at +1 800 BEAUTY</p>
    </section>
@endsection
