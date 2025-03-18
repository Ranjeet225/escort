@extends('frontend.layouts.main')

@section('title', 'Home')
@section('content')
 <!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1>Looking for a makeover?</h1>
            <h2>Glamo is for everyone</h2>
            <div class="search-bar mt-4">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search by Service, Category..."
                        data-toggle="modal" data-target="#travelSearchModal" style="border-radius: 50px;">
                    <button class="btn btn-light" data-target="#travelSearchModal" data-toggle="modal" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>
   <!-- New Modal -->
<div class="modal fade mt-4 pt-4" id="newModal" tabindex="-1" aria-labelledby="newModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content p-4 text-center">
            <div class="modal-header mModalHeader">
                <div class="modal-header border-0 justify-content-center">
                    <h5 class="modal-title fw-bold" id="loginSignupModalLabel">
                        <i class="fas fa-users"></i> Get into Viom!
                    </h5>
                </div>
                <button type="button" class="close badge badge-danger bg-danger" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class="fw-bold">Publish and <span class="text-dark">Manage</span> your ads</h6>
                <p class="text-muted">Have an account yet?</p>
                
                <a href="{{ route('login') }}" class="btn btn-login w-75 mb-4">
                    <i class="fas fa-sign-in-alt me-2"></i> LOGIN
                </a>

                <p class="mb-3">Don't have an account yet?</p>

                <a href="{{ route('signup') }}" class="btn btn-signup w-75">
                    <i class="fas fa-user-plus me-2"></i> SIGN UP
                </a>
            </div>
        </div>
    </div>
</div>
<!-- -----Modal search------------- -->
<div class="modal fade mt-4 pt-4" id="travelSearchModal" tabindex="-1" aria-labelledby="travelSearchModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content mModalContent mx-auto">
            <div class="modal-header mModalHeader">
                <h5 class="modal-title mModalTitle" id="travelSearchModalLabel">Escort Search</h5>
                <button type="button" class="close badge badge-danger bg-danger" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body mModalBody">
                <form action="{{ route('search') }}" method="GET">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <select class="form-control" id="category" name="category">
                                <option value="call-girls">Call Girls
                                </option><option value="massages">Massages
                                </option><option value="male-escorts">Male Escorts
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="mSearchInput">
                                <input type="text" placeholder="Search .." name="search" class="form-control"
                                    id="destination" name="destination">
                                {{-- <i class="fas fa-search"></i> --}}
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select class="form-control" id="state" name="state">
                                <option value="">All Regions</option>
                                @foreach ($states as $state)
                                    <option value="{{ $state->id }}">{{ $state->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select class="form-control" id="city" name="city">
                                <option value="">All Cities</option>
                            </select>
                        </div>
                    </div>
                    <div class="mActionButtons d-flex float-end">
                        <button type="submit" class="btn btn-primary float-end" id="mSearchButton">Search</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
 <!-- Services Section -->
<section class="services-section py-5">
    <div class="container">
        <p class="text-center section-title mb-3">Premium Services in your city</p>
        <p class="text-center text-muted mb-5">Find your favorite beauty expert in Glamo</p>

        <div class="row row-cols-1 row-cols-md-3 g-4">
            <!--  Call Girls Card -->
            <div>
                <div class="service-card">
                    <div class="service-img">
                        <a href="{{url('/')}}/{{'call-girls'}}">
                            <img src="{{ asset('assets/images/blog/1.jpg') }}" alt=" Call Girls" class="img-fluid">
                        </a>
                        <div class="service-badge">
                            <i class="fas fa-cut me-2"></i> Call Girls
                        </div>
                    </div>
                    <div class="service-info p-3 border-bottom">
                        <p class="service-desc">Professional Call Girls for all occasions. Whether it's bridal,
                            party, or everyday Call Girls, our artists </p>
                        <div class="service-location">
                            <a href="{{url('/')}}/{{'call-girls'}}/{{'Bengaluru'}}" class="location-link text-primary  ">Call Girls Bangalore</a>
                            <a href="{{url('/')}}/{{'call-girls'}}/{{'mumbai'}}" class="location-link text-primary">Call Girls Mumbai</a>
                            <a href="{{url('/')}}/{{'call-girls'}}/{{'delhi'}}" class="location-link text-primary">Call Girls Delhi</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Massages Card -->
            <div>
                <div class="service-card">
                    <div class="service-img">
                        <a href="{{url('/')}}/{{'massages'}}">
                            <img src="{{ asset('assets/images/banner/massages.jpeg') }}"  alt=" Massages" class="img-fluid">
                        </a>
                        <div class="service-badge">
                            <i class="fas fa-spa me-2"></i> Massages
                        </div>
                    </div>
                    <div class="service-info p-3">
                        <p class="service-desc">Professional Massages for all occasions. Whether it's bridal,
                            party, or everyday Massages, our artists </p>
                        <div class="service-location">
                            <a href="{{url('/')}}/{{'massages'}}/{{'Bengaluru'}}" class="location-link" style="color: blue">Massages Bangalore</a>
                            <a href="{{url('/')}}/{{'massages'}}/{{'mumbai'}}" class="location-link" style="color: blue">Massages Mumbai</a>
                            <a href="{{url('/')}}/{{'massages'}}/{{'delhi'}}" class="location-link" style="color: blue">Massages Delhi</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Male Escorts Card -->
            <div>
                <div class="service-card">
                    <div class="service-img">
                        <a href="{{url('/')}}/{{'male-escorts'}}">
                            <img src="{{ asset('assets/images/banner/male.jpg') }}" alt=" Male Escorts" class="img-fluid">
                        </a>
                        <div class="service-badge">
                            <i class="fas fa-hand-sparkles me-2"></i> Male Escorts
                        </div>
                    </div>
                    <div class="service-info p-3">
                        <p class="service-desc">Professional Male Escorts for all occasions. Whether it's bridal,
                            party, or everyday Male Escorts, our artists </p>
                        <div class="service-location">
                            <a href="{{url('/')}}/{{'male-escorts'}}/{{'Bengaluru'}}" class="location-link">Male Escorts Bangalore</a>
                            <a href="{{url('/')}}/{{'male-escorts'}}/{{'mumbai'}}" class="location-link">Male Escorts Mumbai</a>
                            <a href="{{url('/')}}/{{'male-escorts'}}/{{'delhi'}}" class="location-link">Male Escorts Delhi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Welcome Section -->
<section class="welcome-section py-4 bg-light">
    <div class="container">
        <p class="text-center mb-0">
            Welcome to Glamo, a leading beauty platform for premium salon services. Browse through thousands of
            verified beauty professionals around the country. Available in 25+ cities.
        </p>
    </div>
</section>

<!-- Filter Sections -->
<section class="filter-section py-5 bg-light">
    <div class="container">
        <div class="row">
            <!-- Call Girls Filter -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            <i class="fas fa-cut text-danger me-2"></i> Call Girls
                        </h4>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/call-girls/Bengaluru') }}" class="btn btn-outline-primary rounded-pill">Bangalore</a>
                            <a href="{{ url('/call-girls/mumbai') }}" class="btn btn-outline-primary rounded-pill">Mumbai</a>
                            <a href="{{ url('/call-girls/delhi') }}" class="btn btn-outline-primary rounded-pill">Delhi</a>
                            <a href="{{ url('/call-girls/hyderabad') }}" class="btn btn-outline-primary rounded-pill">Hyderabad</a>
                            <a href="{{ url('/call-girls/pune') }}" class="btn btn-outline-primary rounded-pill">Pune</a>
                            <a href="{{ url('/call-girls/all-cities') }}" class="btn btn-outline-primary rounded-pill">All Cities</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Massages Filter -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            <i class="fas fa-spa text-success me-2"></i> Massages
                        </h4>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/massages/Bengaluru') }}" class="btn btn-outline-primary rounded-pill">Bangalore</a>
                            <a href="{{ url('/massages/mumbai') }}" class="btn btn-outline-primary rounded-pill">Mumbai</a>
                            <a href="{{ url('/massages/delhi') }}" class="btn btn-outline-primary rounded-pill">Delhi</a>
                            <a href="{{ url('/massages/hyderabad') }}" class="btn btn-outline-primary rounded-pill">Hyderabad</a>
                            <a href="{{ url('/massages/pune') }}" class="btn btn-outline-primary rounded-pill">Pune</a>
                            <a href="{{ url('/massages/all-cities') }}" class="btn btn-outline-primary rounded-pill">All Cities</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Male Escorts Filter -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            <i class="fas fa-hand-sparkles text-primary me-2"></i> Male Escorts
                        </h4>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/male-escorts/Bengaluru') }}" class="btn btn-outline-primary rounded-pill">Bangalore</a>
                            <a href="{{ url('/male-escorts/mumbai') }}" class="btn btn-outline-primary rounded-pill">Mumbai</a>
                            <a href="{{ url('/male-escorts/delhi') }}" class="btn btn-outline-primary rounded-pill">Delhi</a>
                            <a href="{{ url('/male-escorts/hyderabad') }}" class="btn btn-outline-primary rounded-pill">Hyderabad</a>
                            <a href="{{ url('/male-escorts/pune') }}" class="btn btn-outline-primary rounded-pill">Pune</a>
                            <a href="{{ url('/male-escorts/all-cities') }}" class="btn btn-outline-primary rounded-pill">All Cities</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Recent Searches</h2>
        <div class="row row-cols-1 g-3">
            @foreach ($postAds as $postAd)
                <div class="col">
                    <div class="card shadow-sm rounded-3 overflow-hidden" style="max-width: 100%;">
                        <div class="row g-0">
                            <div class="col-4 col-md-4">
                                <a href="{{ url('escort-details/'.$postAd->id) }}">
                                <img src="{{ asset(json_decode($postAd->images)[0]) }}" 
                                     class="img-fluid w-100 h-100 object-fit-cover rounded-start" 
                                     alt="Model Image"
                                     onerror="this.onerror=null; this.src='{{ asset('assets/images/dummy.jpg') }}'"
                                     style="max-height: 250px; max-width: 100%;">
                                </a>
                            </div>
                            <div class="col-8 col-md-8 d-flex flex-column justify-content-center">
                                <div class="card-body d-flex flex-column h-100 p-3 bg-light">
                                    <h6 class="card-title mb-2 text-primary">
                                    @php
                                        $userAgent = request()->header('User-Agent');
                                        $isMobile = preg_match('/(android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini)/i', $userAgent);
                                    @endphp
                                        @if ($isMobile)
                                            {!! Str::limit($postAd->details, 50) !!}
                                        @else
                                            {{ $postAd->details }}
                                        @endif
                                    </h6>
                                    <p class="card-text flex-grow-1 text-muted small">
                                        @if ($isMobile)
                                            {!! Str::limit($postAd->description, 80) !!} <br>
                                        @else
                                            {!! Str::limit($postAd->description, 200) !!} <br>
                                        @endif
                                        <span class="badge bg-light text-dark">
                                            <i class="fas fa-map-marker-alt me-2"></i>{{ $postAd->city->name }}
                                        </span>
                                        <span class="badge bg-light text-dark">
                                            <i class="fas fa-calendar-alt me-1"></i>{{ $postAd->age }} years old
                                        </span>
                                    </p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <a href="tel:{{ $postAd->phone }}" class="btn btn-sm btn-success px-5">
                                            Call
                                        </a>
                                        <a href="https://wa.me/{{ $postAd->whatsapp }}" target="_blank" rel="noopener noreferrer" class="btn btn-sm btn-success px-3">
                                            WhatsApp
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('assets/images/dummy/dummy1.jpg') }}" style="min-width: 76.3px;min-height: 76.3px;max-width: 84px; max-height: 84px;" class="img-fluid" alt="100% Real Photos">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center text-primary">100% Real Photos</h5>
                        <p class="card-text text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('assets/images/dummy/dummy2.jpg') }}" style="min-width: 76.3px;min-height: 76.3px;max-width: 84px; max-height: 84px;" class="img-fluid" alt="100% Satisfaction Guarantee">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center text-primary">100% Satisfaction Guarantee</h5>
                        <p class="card-text text-muted">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body d-flex justify-content-center">
                        <img src="{{ asset('assets/images/dummy/dummy3.jpg') }}" style="min-width: 76.3px;min-height: 76.3px;max-width: 84px; max-height: 84px;" class="img-fluid" alt="Call Girls Friendly">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title text-center text-primary">Call Girls Friendly</h5>
                        <p class="card-text text-muted">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-center text-primary">Explore Escort Services in India</h2>
                <p class="text-center text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida.</p>
                <h3 class="text-center text-secondary">Why Choose Us?</h3>
                <p class="text-center text-muted">We offer a wide range of services that cater to your needs. Our professional escorts are available 24/7 to ensure your satisfaction.</p>
                <h3 class="text-center text-secondary">Our Promise</h3>
                <p class="text-center text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Our services ensure confidentiality and professionalism.</p>
                <h3 class="text-center text-secondary">Contact Us</h3>
                <p class="text-center text-muted">For more information, contact us at any time. We are here to assist you with all your inquiries and needs.</p>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
    {{-- <script src="{{ asset('assets/js/dashboard.js') }}"></script> --}}
    <script>
        $('#state').change(function(){
            var stateId = $(this).val();
            $('#city').find('option').not(':first').remove();
            $.ajax({
                url: "{{ route('get.cities') }}",
                method: "GET",
                data: {stateId: stateId},
                success: function(data){
                    $.each(data, function(key, value){
                        $('#city').append('<option value="' + value.id + '">' + value.name + '</option>');
                    });
                }
            });
        });
    </script>
@endsection
