@extends('frontend.layouts.main')

@section('title', 'Contact Us')
@section('css')
    <style>
        .state-card {
            background: white;
            border-radius: 12px;
            border: 1px solid #ddd;
            transition: all 0.3s ease-in-out;
        }
        .state-card:hover {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.15);
            transform: translateY(-5px);
        }
        .state-title {
            font-weight: bold;
            margin-bottom: 15px;
        }
        .city-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(120px, 1fr));
            gap: 10px;
        }
        .city-item {
            padding: 8px 12px;
            border-radius: 8px;
            background: #f8f9fa;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .city-item:hover {
            background: #007bff;
            color: white;
        }

    </style>
@endsection
@section('content')
<div class="container mt-4">
    <div class="row">
        @foreach ($states as $state)
            @php
                $stateCities = $cities[$state->id] ?? collect();
                $selectedCities = $stateCities->take(30);
            @endphp

            @if ($selectedCities->count() > 0)
                <div class="col-12 mb-4">
                    <div class="state-card p-4 shadow-sm">
                        <h4 class="state-title text-primary">{{ $state->name }}</h4>
                        <div class="city-grid">
                            @foreach ($selectedCities as $city)
                                <div class="city-item">{{ $city->name }}</div>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
</div>




@endsection