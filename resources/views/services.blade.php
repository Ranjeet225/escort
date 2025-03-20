@extends('frontend.layouts.main')

@section('title', 'Services')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/services.css') }}">
@endsection
@section('content')
    <!-- Main Content -->
    <div class="container py-3">
        @include('frontend.layouts.model')
        <div class="row mb-2">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 small">
                        <li class="breadcrumb-item"><a href="{{ url('/') }}" class="text-decoration-none">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ url($action ?? '#') }}" class="text-decoration-none text-capitalize">{{ $action ?? __('Services') }}</a></li>
                        @if (isset($places))
                            <li class="breadcrumb-item"><a href="#" class="text-decoration-none text-capitalize">
                            {{ $action }} in  {{ $places ?? __('All Services') }}</a></li>
                        @endif 
                    </ol>
                </nav>
            </div>
        </div>
        <div class="list-info mt-3 mb-3 card shadow border-0 collapse show txt_seo_2">
            <h3 class="mb-0 p-4 text-center">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et lacus vitae nulla eleifend ultrices
            </h3>
        </div>
        <!-- Listings -->
        <div class="listings">
            <!-- Listing 1 -->
            @forelse ($postAds as $postAd)
            <div class="card mb-3 listing-card">
                <div class="row g-0">
                    <div class="col-4 col-md-3 col-lg-2">
                        <div class="position-relative h-100">
                            <a href="{{ route('ads', ['slug' => $postAd->slug]) }}">
                                <img src="{{ asset(json_decode($postAd->images)[0]) }}"
                                    class="img-fluid rounded-start h-100 w-100 object-fit-cover" alt="{{ $postAd->details }}">
                                <span class="position-absolute top-0 start-0 bg-danger text-white px-1 small">NEW</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-8 col-md-9 col-lg-10">
                        <div class="card-body py-2">
                            <h5 class="card-title mb-1">
                                <a href="{{ route('ads', ['slug' => $postAd->slug]) }}" class="text-decoration-none">{{ $postAd->details }}</a>
                                <span class="verified-badge ms-2">
                                    <i class="fa-solid fa-circle-check text-success"></i> Verified
                                </span>
                            </h5>
                            <p class="card-text small mb-1">
                                <span class="text-success fw-bold">Only Cash Payment No Advance</span> •
                                {{-- <span class="text-danger fw-bold">100% Satisfaction Verified Reviews</span> • --}}
                                {{-- <span class="text-primary">100% Call Talk or anything</span> --}}
                            </p>
                            <p class="card-text small mb-2">
                                {!! Str::limit($postAd->description, 150) !!}
                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="small">
                                    <i class="fa-solid fa-location-dot text-muted me-1"></i> {{ $postAd->locality }} | {{ $postAd->city->name }} | {{ $postAd->state->name }} 
                                </div>
                                <div class="d-flex mt-2"> 
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
        <div class="accordion mt-3 mb-3" id="accordionExample">
            <div class="accordion-item text-center">
                <h2 class="accordion-header text-center" id="headingOne">
                    <button class="accordion-button {{ isset($action) && $action == 'call-girls' ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="{{ isset($action) && $action == 'call-girls' ? 'true' : 'false' }}" aria-controls="collapseOne">
                        Call Girls
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="mb-0 p-4 text-center">
                            @foreach (['mumbai', 'delhi', 'bengaluru', 'chennai', 'kolkata', 'hyderabad', 'ahmedabad', 'pune', 'jaipur', 'surat'] as $city)
                                <a href="{{ url('call-girls/'.$city) }}" title="{{ ucfirst($city) }} Call Girls" class="badge rounded-pill bg-light text-dark me-2 p-2">{{ ucfirst($city) }}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        
            <div class="accordion-item">
                <h2 class="accordion-header text-center" id="headingTwo">
                    <button class="accordion-button {{ isset($action) && $action == 'male-escort' ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="{{ isset($action) && $action == 'male-escort' ? 'true' : 'false' }}" aria-controls="collapseTwo">
                        Male Escort
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse {{ isset($action) && $action == 'male-escort' ? 'show' : '' }}" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="mb-0 p-4 text-center">
                            @foreach (['mumbai', 'delhi', 'bengaluru', 'chennai', 'kolkata', 'hyderabad', 'ahmedabad', 'pune', 'jaipur', 'surat'] as $state)
                                <a href="{{ url('male-escort/'.$state) }}" title="{{ ucfirst(str_replace('-', ' ', $state)) }} Male Escort" class="badge rounded-pill bg-light text-dark me-2">{{ ucfirst(str_replace('-', ' ', $state)) }}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        
            <div class="accordion-item">
                <h2 class="accordion-header text-center" id="headingThree">
                    <button class="accordion-button {{ isset($action) && $action == 'massages' ? '' : 'collapsed' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="{{ isset($action) && $action == 'massages' ? 'true' : 'false' }}" aria-controls="collapseThree">
                        Massages
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse {{  isset($action) && $action == 'massages' ? 'show' : '' }}" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p class="mb-0 p-4 text-center">
                            @foreach (['mumbai', 'delhi', 'bengaluru', 'chennai', 'kolkata', 'hyderabad', 'ahmedabad', 'pune', 'jaipur', 'surat'] as $state)
                                <a href="{{ url('massages/'.$state) }}" title="{{ ucfirst(str_replace('-', ' ', $state)) }} Massages" class="badge rounded-pill bg-light text-dark me-2">{{ ucfirst(str_replace('-', ' ', $state)) }}</a>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 mb-4">
                    <div class="card-body p-4">
                        <h2 class="mb-3">Exploring the World of Services</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam et magna nec arcu blandit fringilla. Phasellus dictum, magna a facilisis ullamcorper, ligula ipsum fermentum elit, in bibendum nisl justo ac odio. Proin luctus, dui nec aliquet convallis, odio orci scelerisque purus, vitae facilisis ex felis nec felis. Nunc vehicula, mi a gravida vehicula, ligula lorem vehicula purus, ut facilisis urna nisl at nulla. Integer euismod, tortor sed posuere varius, justo mauris scelerisque mi, non efficitur arcu ligula at libero. Aliquam erat volutpat. Suspendisse potenti. In hac habitasse platea dictumst. Donec venenatis ex ut orci dapibus, non tincidunt libero facilisis. Curabitur vestibulum dolor vel auctor commodo.</p>

                        <p>Vivamus non lacus et turpis fermentum feugiat. Aenean suscipit, magna sed auctor ullamcorper, nulla est rutrum nunc, sit amet euismod nunc est id tellus. Vestibulum tempus suscipit arcu, at vulputate lacus vulputate in. Quisque et justo at enim ultricies dapibus. Sed tincidunt diam sed felis facilisis, vitae interdum orci pellentesque. Nam at lorem vel dolor fringilla fermentum. Integer sagittis, nisi id interdum sagittis, nulla turpis tincidunt metus, nec varius mi libero nec velit. Duis malesuada, arcu ac ultricies dapibus, erat odio pulvinar nulla, et tempus metus sapien in libero.</p>

                        <p>Morbi ac velit nec urna porttitor rutrum. Suspendisse nec magna eget lacus bibendum gravida. Curabitur sit amet nulla sed nisl lacinia viverra. Integer dapibus, quam ac scelerisque ultricies, libero arcu aliquam ipsum, et auctor libero odio eu augue. Phasellus eget venenatis tellus. Etiam a urna nec nisi vehicula aliquet vitae ac nunc. Pellentesque et eros at tortor suscipit porttitor ac euismod nunc. Fusce facilisis lacus vel blandit vehicula. Etiam non dignissim arcu. Fusce tincidunt dui nec metus pharetra, et posuere arcu consectetur.</p>

                        <p>Nulla facilisi. Praesent dapibus, mauris ac fermentum volutpat, tortor purus hendrerit risus, a convallis nisl odio vel libero. In hac habitasse platea dictumst. Vivamus posuere urna id turpis facilisis, sit amet pharetra sem tempor. Suspendisse potenti. Mauris bibendum arcu non justo varius, non pulvinar ante lobortis. Donec bibendum urna vel nulla tempor fringilla. Morbi sed nulla nisi. Ut at nisl vitae nisl bibendum dapibus eget nec magna. Nunc sodales, erat quis vehicula congue, tellus lectus dictum libero, a placerat mi dolor nec libero.</p>

                        <p>Cras in justo ac ante consectetur malesuada. Donec a leo nec odio tincidunt interdum. Pellentesque vehicula ligula nec finibus pulvinar. Phasellus elementum ligula a metus fringilla, nec vulputate eros varius. Curabitur mollis malesuada lectus, sit amet efficitur sapien aliquam nec. Sed euismod lacus nec magna sagittis, nec pretium dolor tristique. Nam at orci sit amet nisi varius pharetra. Sed ac sodales purus, et scelerisque risus. Nulla facilisi. Quisque in arcu id odio convallis malesuada. Donec semper, dui vitae ornare rutrum, ligula libero efficitur purus, vel suscipit nunc nunc ut velit.</p>
                    </div>
                </div>
            </div>
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