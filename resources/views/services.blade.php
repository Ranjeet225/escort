@extends('frontend.layouts.main')

@section('title', $action)
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
@endsection
@section('content')
    <!-- Main Content -->
    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 small">
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-capitalize">{{$action}}</a></li>
                    </ol>
                </nav>
            </div>
        </div>
        @include('frontend.layouts.model')
        <!-- Category Title -->
        <div class="row mt-2">
            <div class="col-12">
                <h5 class="mb-0">Parlor Spa - Massage</h5>
                <h6 class="text-muted mb-3">Exotic Massage India - Relaxed Massage</h6>
            </div>
        </div>

        <!-- Listings -->
        <div class="listings">
            <!-- Listing 1 -->
            <div class="card mb-3 listing-card">
                <div class="row g-0">
                    <div class="col-4 col-md-3 col-lg-2">
                        <div class="position-relative h-100">
                            <a href="{{route('escort-details')}}">
                                <img src="../assets/images/blog/1.jpg"
                                    class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Parlor Image">
                                <span class="position-absolute top-0 start-0 bg-danger text-white px-1 small">NEW</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 col-md-9 col-lg-10">
                        <div class="card-body py-2">
                            <h5 class="card-title mb-1">
                                <a href="#" class="text-decoration-none">Style Point Premium Spa Advance</a>
                                <span class="rating ms-2">
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                    <i class="fa-solid fa-star text-warning"></i>
                                </span>
                                <span class="verified-badge ms-2">
                                    <i class="fa-solid fa-circle-check text-success"></i> Verified
                                </span>
                            </h5>
                            <p class="card-text small mb-1">
                                <span class="text-success fw-bold">100% Cash Payment No Advance</span> •
                                <span class="text-danger fw-bold">100% Satisfaction Verified Reviews</span> •
                                <span class="text-primary">100% Call Talk or anything</span>
                            </p>
                            <p class="card-text small mb-2">
                                Our premium spa offers luxurious massage services with certified therapists. Enjoy Swedish,
                                Deep Tissue, and Hot Stone massages in a soothing, private environment of calm, elegance.
                                Relieve stress and tension with our professional therapists who are experts in their craft.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small">
                                    <i class="fa-solid fa-location-dot text-muted me-1"></i> Indiranagar
                                    <span class="ms-2"><i class="fa-regular fa-clock text-muted me-1"></i> 10am-9pm</span>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-success rounded-pill me-1">
                                        <i class="fa-solid fa-phone"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success rounded-pill">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listing 2 -->
            <div class="card mb-3 listing-card">
                <div class="row g-0">
                    <div class="col-4 col-md-3 col-lg-2">
                        <a href="{{route('escort-details')}}">
                            <img src="../assets/images/blog/1.jpg"
                                class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Parlor Image">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-10">
                        <div class="card-body py-2">
                            <h5 class="card-title mb-1">
                                <a href="#" class="text-decoration-none">FULL BODY MASSAGE AND FULL SPECIAL SERVICE
                                    ROYAL & NORMAL AVAILABLE FROM PARLOR</a>
                            </h5>
                            <p class="card-text small mb-1">
                                <span class="text-success fw-bold">GENUINE SPA SERVICES RATED BY SPA GIRLS ONLY
                                    APPROXIMATELY SPA HAPPY ENDING</span>
                            </p>
                            <p class="card-text small mb-2">
                                ALL SPA MASSAGE AND FULL SPECIAL SERVICE ROYAL & NORMAL AVAILABLE FROM SPA GIRLS ONLY
                                APPROXIMATELY SPA HAPPY ENDING. Our professional therapists provide Swedish, Thai, and Deep
                                Tissue massages. Enjoy a relaxing experience in our luxurious spa rooms with PROPER MASSAGE
                                BODY PAMPER MASSAGE BODY SCRUBS.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small">
                                    <i class="fa-solid fa-location-dot text-muted me-1"></i> Koramangala
                                    <span class="ms-2"><i class="fa-regular fa-clock text-muted me-1"></i> 9am-10pm</span>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-success rounded-pill me-1">
                                        <i class="fa-solid fa-phone"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success rounded-pill">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listing 3 -->
            <div class="card mb-3 listing-card">
                <div class="row g-0">
                    <div class="col-4 col-md-3 col-lg-2">
                        <a href="{{route('escort-details')}}">
                            <img src="../assets/images/blog/1.jpg"
                                class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Parlor Image">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-10">
                        <div class="card-body py-2">
                            <h5 class="card-title mb-1">
                                <a href="#" class="text-decoration-none">FULL BODY MASSAGE AND FULL SPECIAL SERVICE
                                    ROYAL & NORMAL AVAILABLE FROM PARLOR</a>
                            </h5>
                            <p class="card-text small mb-1">
                                <span class="text-success fw-bold">GENUINE SPA SERVICES RATED BY SPA GIRLS ONLY
                                    APPROXIMATELY SPA HAPPY ENDING</span>
                            </p>
                            <p class="card-text small mb-2">
                                ALL SPA MASSAGE AND FULL SPECIAL SERVICE ROYAL & NORMAL AVAILABLE FROM SPA GIRLS ONLY
                                APPROXIMATELY SPA HAPPY ENDING. Our professional therapists provide Swedish, Thai, and Deep
                                Tissue massages. Enjoy a relaxing experience in our luxurious spa rooms with PROPER MASSAGE
                                BODY PAMPER MASSAGE BODY SCRUBS.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small">
                                    <i class="fa-solid fa-location-dot text-muted me-1"></i> HSR Layout
                                    <span class="ms-2"><i class="fa-regular fa-clock text-muted me-1"></i> 10am-8pm</span>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-success rounded-pill me-1">
                                        <i class="fa-solid fa-phone"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success rounded-pill">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listing 4 - Special Pink Background -->
            <div class="card mb-3 listing-card bg-light-pink">
                <div class="row g-0">
                    <div class="col-4 col-md-3 col-lg-2">
                        <a href="{{route('escort-details')}}">
                            <img src="../assets/images/blog/1.jpg"
                                class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Parlor Image">
                        </a>
                    </div>
                    <div class="col-8 col-md-9 col-lg-10">
                        <div class="card-body py-2">
                            <h5 class="card-title mb-1">
                                <a href="#" class="text-decoration-none">Neethu</a>
                            </h5>
                            <p class="card-text small mb-2">
                                Hi I am hi Neethu my dear friends! 💕 I'm 100% real and open 11-9p. Take a good massage and
                                get relaxed. I'm very friendly and sweet. I'm here to give you a good time. Call me now.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small">
                                    <i class="fa-solid fa-location-dot text-muted me-1"></i> Whitefield
                                    <span class="ms-2"><i class="fa-regular fa-clock text-muted me-1"></i>
                                        11am-9pm</span>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-success rounded-pill me-1">
                                        <i class="fa-solid fa-phone"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success rounded-pill">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listing 5 -->
            <div class="card mb-3 listing-card">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="card-body py-2">
                            <h5 class="card-title mb-1">
                                <a href="#" class="text-decoration-none">Handpicked Specialized 24 hours service
                                    available</a>
                                <span class="verified-badge ms-2">
                                    <i class="fa-solid fa-circle-check text-success"></i> Verified
                                </span>
                            </h5>
                            <p class="card-text small mb-1">
                                <span class="text-danger fw-bold">❤️ Now price only need to hand CASH PAYMENT</span>
                            </p>
                            <p class="card-text small mb-2">
                                Hey hi All - ADVANCED FULL - Open time 9-10 o'clock for a little time and experienced enough
                                to get you to relaxation. We provide service for Single and Married both between all city
                                service are available including in-calls massage therapy.
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small">
                                    <i class="fa-solid fa-location-dot text-muted me-1"></i> All Bangalore
                                    <span class="ms-2"><i class="fa-regular fa-clock text-muted me-1"></i> 24
                                        Hours</span>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-success rounded-pill me-1">
                                        <i class="fa-solid fa-phone"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success rounded-pill">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Listing 6 -->
            <div class="card mb-3 listing-card">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="card-body py-2">
                            <h5 class="card-title mb-1">
                                <a href="#" class="text-decoration-none">For only female outcall only</a>
                            </h5>
                            <p class="card-text small mb-2">
                                Genuine Service only female can call us
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small">
                                    <i class="fa-solid fa-location-dot text-muted me-1"></i> Bangalore
                                    <span class="ms-2"><i class="fa-regular fa-clock text-muted me-1"></i>
                                        9am-9pm</span>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-success rounded-pill me-1">
                                        <i class="fa-solid fa-phone"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success rounded-pill">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- More listings would continue here -->

            <!-- Premium Listing -->
            <div class="card mb-3 listing-card">
                <div class="row g-0">
                    <div class="col-4 col-md-3 col-lg-2">
                        <div class="position-relative h-100">
                            <a href="{{route('escort-details')}}">
                                <img src="../assets/images/blog/1.jpg"
                                    class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="Parlor Image">
                                <span
                                    class="position-absolute top-0 start-0 bg-primary text-white px-1 small">PREMIUM</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 col-md-9 col-lg-10">
                        <div class="card-body py-2">
                            <h5 class="card-title mb-1">
                                <a href="#" class="text-decoration-none">ANGEL GO - INDEPENDENT LUXURY MODEL ALL 3 -
                                    4 - 5 - HOTEL DOORSTEP SERVICE</a>
                            </h5>
                            <div class="rating mb-1">
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                                <i class="fa-solid fa-star text-warning"></i>
                            </div>
                            <p class="card-text small mb-1">
                                <span class="text-success fw-bold">FOR GENUINE FULL SATISFACTION TO FULFIL OF YOUR FANTASY
                                    EXPERIENCE, MY ROYAL BRAND LUXURY MASSAGE THERAPY SERVICES AVAILABLE IN BANGALORE CITY.
                                    DOORSTEP SERVICES AVAILABLE. INCLUDES THAI, SWEDISH FOOT REFLEXOLOGY, OIL
                                    MASSAGE.</span>
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small">
                                    <i class="fa-solid fa-location-dot text-muted me-1"></i> Bangalore City
                                    <span class="ms-2"><i class="fa-regular fa-clock text-muted me-1"></i> 24
                                        Hours</span>
                                </div>
                                <div>
                                    <button class="btn btn-sm btn-success rounded-pill me-1">
                                        <i class="fa-solid fa-phone"></i>
                                    </button>
                                    <button class="btn btn-sm btn-success rounded-pill">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pagination -->
            <div class="d-flex justify-content-center my-4">
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
@endsection
