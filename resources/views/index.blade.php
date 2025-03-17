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
                    <div class="service-info p-3">
                        <p class="service-desc">Professional Call Girls for all occasions. Whether it's bridal,
                            party, or everyday Call Girls, our artists </p>
                        <div class="service-location">
                            <a href="#" class="location-link">Call Girls<br>Bangalore</a>
                            <a href="#" class="location-link">Call Girls<br>Mumbai</a>
                            <a href="#" class="location-link">Call Girls<br>Delhi</a>
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
                            <a href="#" class="location-link">Massages<br>Bangalore</a>
                            <a href="#" class="location-link">Massages<br>Mumbai</a>
                            <a href="#" class="location-link">Massages<br>Delhi</a>
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
                            <a href="#" class="location-link">Male Escorts<br>Bangalore</a>
                            <a href="#" class="location-link">Male Escorts<br>Mumbai</a>
                            <a href="#" class="location-link">Male Escorts<br>Delhi</a>
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
                            <a href="{{ url('/call-girls/bangalore') }}" class="btn btn-outline-danger rounded-pill">Bangalore</a>
                            <a href="{{ url('/call-girls/mumbai') }}" class="btn btn-outline-danger rounded-pill">Mumbai</a>
                            <a href="{{ url('/call-girls/delhi') }}" class="btn btn-outline-danger rounded-pill">Delhi</a>
                            <a href="{{ url('/call-girls/hyderabad') }}" class="btn btn-outline-danger rounded-pill">Hyderabad</a>
                            <a href="{{ url('/call-girls/pune') }}" class="btn btn-outline-danger rounded-pill">Pune</a>
                            <a href="{{ url('/call-girls/all-cities') }}" class="btn btn-outline-danger rounded-pill">All Cities</a>
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
                            <a href="{{ url('/massages/bangalore') }}" class="btn btn-outline-success rounded-pill">Bangalore</a>
                            <a href="{{ url('/massages/mumbai') }}" class="btn btn-outline-success rounded-pill">Mumbai</a>
                            <a href="{{ url('/massages/delhi') }}" class="btn btn-outline-success rounded-pill">Delhi</a>
                            <a href="{{ url('/massages/hyderabad') }}" class="btn btn-outline-success rounded-pill">Hyderabad</a>
                            <a href="{{ url('/massages/pune') }}" class="btn btn-outline-success rounded-pill">Pune</a>
                            <a href="{{ url('/massages/all-cities') }}" class="btn btn-outline-success rounded-pill">All Cities</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Male Escorts Filter -->
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <div class="card-body text-center">
                        <h4 class="card-title">
                            <i class="fas fa-hand-sparkles text-warning me-2"></i> Male Escorts
                        </h4>
                        <div class="d-grid gap-2 mt-3">
                            <a href="{{ url('/male-escorts/bangalore') }}" class="btn btn-outline-warning rounded-pill">Bangalore</a>
                            <a href="{{ url('/male-escorts/mumbai') }}" class="btn btn-outline-warning rounded-pill">Mumbai</a>
                            <a href="{{ url('/male-escorts/delhi') }}" class="btn btn-outline-warning rounded-pill">Delhi</a>
                            <a href="{{ url('/male-escorts/hyderabad') }}" class="btn btn-outline-warning rounded-pill">Hyderabad</a>
                            <a href="{{ url('/male-escorts/pune') }}" class="btn btn-outline-warning rounded-pill">Pune</a>
                            <a href="{{ url('/male-escorts/all-cities') }}" class="btn btn-outline-warning rounded-pill">All Cities</a>
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
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($postAds as $postAd)
                <div class="col">
                    <div class="card h-100 shadow-sm rounded-3">
                        <img src="{{ asset(json_decode($postAd->images)[0]) }}" 
                             class="card-img-top img-fluid rounded-top" 
                             alt="Model Image"
                             onerror="this.onerror=null; this.src='{{ asset('assets/images/dummy.jpg') }}'"
                             style="height: 250px; object-fit: cover;">
                        <div class="card-body d-flex flex-column p-3">
                            <h5 class="card-title">{{ $postAd->name }}</h5>
                            <p class="card-text small mb-2">
                                {{ $postAd->details }}
                        </p>
                            <p class="card-text flex-grow-1">{!! Str::limit($postAd->description, 100) !!}</p>
                            <div class="d-flex justify-content-between mt-auto">
                                <a href="{{ url('post.ads.show', $postAd->id) }}" class="btn btn-outline-primary rounded-pill">View</a>
                                <ul class="list-group list-group-flush mb-0">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Age: {{ $postAd->age }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
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
