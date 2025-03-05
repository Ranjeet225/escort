@extends('frontend.layouts.main')

@section('title', 'Dashboard Page')
@section('content')
 <!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="hero-content text-white">
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
                <button class="btn btn-primary w-100 py-2 mb-3">
                    <i class="fas fa-sign-in-alt"></i> LOGIN
                </button>
                <p class="text-muted">Don't have an account yet?</p>
                <button class="btn btn-outline-primary w-100 py-2">
                    <i class="fas fa-pencil-alt"></i> SIGN UP
                </button>
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
                <form id="mEscortSearchForm">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <select class="form-control" id="topRegion" name="topRegion">
                                <option value="Call Girls">Call Girls
                                </option><option value="Massages">Massages
                                </option><option value="Male Escorts">Male Escorts
                                </option><option value="Transsexual">Transsexual
                                </option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="mSearchInput">
                                <input type="text" placeholder="Search destinations..." class="form-control"
                                    id="destination" name="destination">
                                {{-- <i class="fas fa-search"></i> --}}
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select class="form-control" id="region" name="region">
                                <option value="">All Regions</option>
                                <option value="Andhra Pradesh">Andhra Pradesh</option>
                                <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                <option value="Assam">Assam</option>
                                <option value="Bihar">Bihar</option>
                                <option value="Chhattisgarh">Chhattisgarh</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Goa">Goa</option>
                                <option value="Gujarat">Gujarat</option>
                                <option value="Haryana">Haryana</option>
                                <option value="Himachal Pradesh">Himachal Pradesh</option>
                                <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                <option value="Jharkhand">Jharkhand</option>
                                <option value="Karnataka">Karnataka</option>
                                <option value="Kerala">Kerala</option>
                                <option value="Madhya Pradesh">Madhya Pradesh</option>
                                <option value="Maharashtra">Maharashtra</option>
                                <option value="Manipur">Manipur</option>
                                <option value="Meghalaya">Meghalaya</option>
                                <option value="Mizoram">Mizoram</option>
                                <option value="Nagaland">Nagaland</option>
                                <option value="Odisha">Odisha</option>
                                <option value="Punjab">Punjab</option>
                                <option value="Rajasthan">Rajasthan</option>
                                <option value="Sikkim">Sikkim</option>
                                <option value="Tamil Nadu">Tamil Nadu</option>
                                <option value="Telangana">Telangana</option>
                                <option value="Tripura">Tripura</option>
                                <option value="Uttar Pradesh">Uttar Pradesh</option>
                                <option value="Uttarakhand">Uttarakhand</option>
                                <option value="West Bengal">West Bengal</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <select class="form-control" id="city" name="city">
                                <option value="">All Cities</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Noida">Noida</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Pune">Pune</option>
                                <option value="Surat">Surat</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Lucknow">Lucknow</option>
                                <option value="Kanpur">Kanpur</option>
                                <option value="Nagpur">Nagpur</option>
                                <option value="Indore">Indore</option>
                                <option value="Bhopal">Bhopal</option>
                                <option value="Patna">Patna</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Coimbatore">Coimbatore</option>
                                <option value="Vadodara">Vadodara</option>
                                <option value="Visakhapatnam">Visakhapatnam</option>
                                <option value="Mysore">Mysore</option>
                                <option value="Bhubaneswar">Bhubaneswar</option>
                                <option value="Thiruvananthapuram">Thiruvananthapuram</option>
                                <option value="Ranchi">Ranchi</option>
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
<section class="services-section py-5 w-lg-50 mx-auto">
    <div class="container">
        <p class="text-center section-title mb-3">Premium Services in your city</p>
        <p class="text-center text-muted mb-5">Find your favorite beauty expert in Glamo</p>

        <div class="row d-flex justify-content-center g-4">
            <!--  Call Girls Card -->
            <div class="col-md-4">
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
                        <p class="service-desc">Get the perfect haircut, color, and style with our expert stylists.
                            From trendy to classic looks, we've got</p>
                        <div class="service-location card">
                            <a href="#" class="location-link"> Call Girls<br>Bangalore</a>
                        </div>
                        <div class="service-location card">
                            <a href="#" class="location-link"> Call Girls<br>Mumbai</a>
                        </div>
                        <div class="service-location card">
                            <a href="#" class="location-link"> Call Girls<br>Delhi</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Massages Card -->
            <div class="col-md-4">
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
                        <p class="service-desc">Enjoy our luxurious facials and skincare treatments. Our therapists
                            use premium products to cleanse, </p>
                        <div class="service-location card">
                            <a href="#" class="location-link"> Massages<br>Bangalore</a>
                        </div>
                        <div class="service-location card">
                            <a href="#" class="location-link"> Massages<br>Mumbai</a>
                        </div>
                        <div class="service-location card">
                            <a href="#" class="location-link"> Massages<br>Delhi</a>
                        </div>
                    </div>
                </div>
            </div>

            <!--  Male Escorts Card -->
            <div class="col-md-4">
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
                        <p class="service-desc"> Choose from a wide range of colors and designs. Pamper your hands
                            and feet with our.</p>
                        <div class="service-location card">
                            <a href="#" class="location-link"> Male Escorts<br>Bangalore</a>
                        </div>
                        <div class="service-location card">
                            <a href="#" class="location-link"> Male Escorts<br>Mumbai</a>
                        </div>
                        <div class="service-location card">
                            <a href="#" class="location-link"> Male Escorts<br>Delhi</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Transsexuals Card -->
            <div class="col-md-4">
                <div class="service-card ">
                    <div class="service-img">
                        <a href="{{url('/')}}/{{'transsexuals'}}">
                            <img src="{{ asset('assets/images/banner/trans.jpg') }}" alt="Transsexuals" class="img-fluid">
                        </a>
                        <div class="service-badge">
                            <i class="fas fa-magic me-2"></i> Transsexuals
                        </div>
                    </div>
                    <div class="service-info p-3">
                        <p class="service-desc">Professional Transsexuals for all occasions. Whether it's bridal,
                            party, or everyday Transsexuals, our artists </p>
                        <div class="service-location card">
                            <a href="#" class="location-link">Transsexuals<br>Bangalore</a>
                        </div>
                        <div class="service-location card">
                            <a href="#" class="location-link">Transsexuals<br>Mumbai</a>
                        </div>
                        <div class="service-location card">
                            <a href="#" class="location-link">Transsexuals<br>Delhi</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Transsexuals Card -->
            <div class="col-md-4">
                <div class="service-card ">
                    <div class="service-img">
                        <a href="{{url('/')}}/{{'transsexuals'}}">
                            <img src="{{ asset('assets/images/blog/1.jpg') }}" alt="Transsexuals" class="img-fluid">
                        </a>
                        <div class="service-badge">
                            <i class="fas fa-magic me-2"></i> Transsexuals
                        </div>
                    </div>
                    <div class="service-info p-3">
                        <p class="service-desc">Professional Transsexuals for all occasions. Whether it's bridal,
                            party, or everyday Transsexuals, our artists </p>
                        <div class="service-location card">
                            <a href="#" class="location-link">Transsexuals<br>Bangalore</a>
                        </div>
                        <div class="service-location card">
                            <a href="#" class="location-link">Transsexuals<br>Mumbai</a>
                        </div>
                        <div class="service-location card">
                            <a href="#" class="location-link">Transsexuals<br>Delhi</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Body Treatments Card -->
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
<section class="filter-section py-4">
    <div class="container">
        <!--  Call Girls Filter -->
        <div class="filter-category mb-2 card py-3 text-center">
            <h3 class="filter-title">
                <i class="fas fa-cut text-primary me-2"></i> Call Girls
            </h3>
            <div class="filter-buttons mt-3">
                <a href="{{url('/')}}/{{'call-girls'}}/{{'bangalore'}}" class="btn btn-outline-primary rounded-pill m-1">Bangalore</a>
                <a href="{{url('/')}}/{{'call-girls'}}/{{'mumbai'}}" class="btn btn-outline-primary rounded-pill m-1">Mumbai</a>
                <a href="{{url('/')}}/{{'call-girls'}}/{{'delhi'}}" class="btn btn-outline-primary rounded-pill m-1">Delhi</a>
                <a href="{{url('/')}}/{{'call-girls'}}/{{'hyderabad'}}" class="btn btn-outline-primary rounded-pill m-1">Hyderabad</a>
                <a href="{{url('/')}}/{{'call-girls'}}/{{'pune'}}" class="btn btn-outline-primary rounded-pill m-1">Pune</a>
                <a href="{{url('/')}}/{{'call-girls'}}/{{'all-cities'}}" class="btn btn-outline-primary rounded-pill m-1">All Cities</a>
            </div>
        </div>

        <!--  Massages Filter -->
        <div class="filter-category mb-2 card py-3 text-center">
            <h3 class="filter-title">
                <i class="fas fa-spa text-primary me-2"></i> Massages
            </h3>
            <div class="filter-buttons mt-3">
                <a href="{{ url('/') }}/{{ 'massages' }}/{{ 'bangalore' }}" class="btn btn-outline-primary rounded-pill m-1">Bangalore</a>
                <a href="{{ url('/') }}/{{ 'massages' }}/{{ 'mumbai' }}" class="btn btn-outline-primary rounded-pill m-1">Mumbai</a>
                <a href="{{ url('/') }}/{{ 'massages' }}/{{ 'delhi' }}" class="btn btn-outline-primary rounded-pill m-1">Delhi</a>
                <a href="{{ url('/') }}/{{ 'massages' }}/{{ 'hyderabad' }}" class="btn btn-outline-primary rounded-pill m-1">Hyderabad</a>
                <a href="{{ url('/') }}/{{ 'massages' }}/{{ 'pune' }}" class="btn btn-outline-primary rounded-pill m-1">Pune</a>
                <a href="{{ url('/') }}/{{ 'massages' }}/{{ 'all-cities' }}" class="btn btn-outline-primary rounded-pill m-1">All Cities</a>
            </div>
        </div>

        <!--  Male Escorts Filter -->
        <div class="filter-category mb-2 card py-3 text-center">
            <h3 class="filter-title">
                <i class="fas fa-hand-sparkles text-primary me-2"></i> Male Escorts
            </h3>
            <div class="filter-buttons mt-3">
                <a href="{{url('/')}}/{{'male-escorts'}}/{{'bangalore'}}" class="btn btn-outline-primary rounded-pill m-1">Bangalore</a>
                <a href="{{url('/')}}/{{'male-escorts'}}/{{'mumbai'}}" class="btn btn-outline-primary rounded-pill m-1">Mumbai</a>
                <a href="{{url('/')}}/{{'male-escorts'}}/{{'delhi'}}" class="btn btn-outline-primary rounded-pill m-1">Delhi</a>
                <a href="{{url('/')}}/{{'male-escorts'}}/{{'hyderabad'}}" class="btn btn-outline-primary rounded-pill m-1">Hyderabad</a>
                <a href="{{url('/')}}/{{'male-escorts'}}/{{'pune'}}" class="btn btn-outline-primary rounded-pill m-1">Pune</a>
            </div>
        </div>

        <!-- Transsexuals Filter -->
        <div class="filter-category mb-2 card py-3 text-center">
            <h3 class="filter-title">
                <i class="fas fa-magic text-primary me-2"></i> Transsexuals
            </h3>
            <div class="filter-buttons mt-3">
                <a href="{{url('/')}}/{{'transsexual'}}/{{'bangalore'}}" class="btn btn-outline-primary rounded-pill m-1">Bangalore</a>
                <a href="{{url('/')}}/{{'transsexual'}}/{{'mumbai'}}" class="btn btn-outline-primary rounded-pill m-1">Mumbai</a>
                <a href="{{url('/')}}/{{'transsexual'}}/{{'delhi'}}" class="btn btn-outline-primary rounded-pill m-1">Delhi</a>
                <a href="{{url('/')}}/{{'transsexual'}}/{{'hyderabad'}}" class="btn btn-outline-primary rounded-pill m-1">Hyderabad</a>
                <a href="{{url('/')}}/{{'transsexual'}}/{{'pune'}}" class="btn btn-outline-primary rounded-pill m-1">Pune</a>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-4">Recent Searches</h2>
        <div class="row">
            @for ($i = 1; $i <= 8; $i++)
                <div class="col-md-6 col-lg-3 mb-4">
                    <div class="card h-100 shadow">
                        <img src="{{ asset('assets/images/blog/' . $i . '.jpg') }}" 
                             class="card-img-top img-fluid" 
                             alt="Model Image"
                             onerror="this.onerror=null; this.src='{{ asset('assets/images/dummy.jpg') }}'"
                             style="height: 200px; object-fit: cover;">
                        <div class="card-body d-flex flex-column">
                            <h5 class="card-title">{{ 'Model ' . $i }}</h5>
                            <p class="card-text flex-grow-1">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, quidem.</p>
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item">Age: {{ rand(18, 35) }}</li>
                                <li class="list-group-item">Height: {{ rand(150, 190) }}cm</li>
                                <li class="list-group-item">Weight: {{ rand(40, 80) }}kg</li>
                                <li class="list-group-item">Hair Color: {{ ['Black', 'Brown', 'Blonde', 'Red'][rand(0, 3)] }}</li>
                                <li class="list-group-item">Eye Color: {{ ['Black', 'Brown', 'Blue', 'Green'][rand(0, 3)] }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
</section>

@endsection

@section('js')
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
@endsection
