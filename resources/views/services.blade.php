@extends('frontend.layouts.main')

@section('title', 'Services')
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
                        <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-capitalize">{{'Services'}}</a></li>
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
            @forelse ($postAds as $postAd)
            <div class="card mb-3 listing-card">
                <div class="row g-0">
                    <div class="col-4 col-md-3 col-lg-2">
                        <div class="position-relative h-100">
                            <a href="{{ route('escort-details', ['id' => $postAd->id]) }}">
                                <img src="{{ asset(json_decode($postAd->images)[0]) }}"
                                    class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="{{ $postAd->name }}">
                                <span class="position-absolute top-0 start-0 bg-danger text-white px-1 small">NEW</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 col-md-9 col-lg-10">
                        <div class="card-body py-2">
                            <h5 class="card-title mb-1">
                                <a href="{{ route('escort-details', ['id' => $postAd->id]) }}" class="text-decoration-none">{{ $postAd->name }}</a>
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
                                {{ $postAd->details }}
                            </p>
                            <p class="card-text small mb-2">
                                {!! Str::limit($postAd->description, 150) !!}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small">
                                    <i class="fa-solid fa-location-dot text-muted me-1"></i> {{ $postAd->locality }} | {{ $postAd->city->name }} | {{ $postAd->state->name }} 
                                    <span class="ms-2"><i class="fa-regular fa-clock text-muted me-1"></i> 10am-9pm</span>
                                </div>
                                <div>
                                    <a href="tel:{{ $postAd->phone }}" class="btn btn-sm btn-success rounded-pill me-1">
                                        <i class="fa-solid fa-phone"></i>
                                    </a>
                                    <a href="https://wa.me/{{ $postAd->whatsapp }}" class="btn btn-sm btn-success rounded-pill">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
                <p>No ads available.</p>
            @endforelse
            <!-- Pagination -->
            {{ $postAds->links() }}
        </div>
    </div>
@endsection
@section('js')
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